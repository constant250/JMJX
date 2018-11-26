<?php

namespace App\Http\Controllers;

use App\Models\CityIdentifier;
use App\Models\CountryIdentifier;
use App\Models\Persons;
use App\Models\PostcodesLocality;
use App\Models\PreviousEmploymentHistory;
use App\Models\ProfessionalReference;
use App\Models\RplApplication;
use App\Models\StateIdentifier;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class RplApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        return $this->middleware('auth');
    }

    public function index()
    {
        //
        $student = User::with(['party.person','party.student.details.course'])->where('id',Auth::user()->id)->first();
        $countries = CountryIdentifier::all();
        $states = StateIdentifier::all();
        $suburbs = CityIdentifier::all();
        $localities = PostcodesLocality::all();
        return view('RPL-application.index', compact('student','countries','states','suburbs','localities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $person = Persons::with(['party.student'])->where('id',Auth::user()->party->person->id)->first();
        // dd($request->all());
        try {
            DB::beginTransaction();
            $person->setMeta([
                'country_birth' => $request->country_birth,
                'country_citizenship' => $request->country_citizenship,
                'passport_num'         => $request->passport_num,
                'passport_expiry'       => $request->passport_expiry,
                'australian_residency'  => $request->australian_residency,
                'visa_type'             => $request->visa_type,
                'visa_expiry'           => $request->visa_expiry,
                'phone'                 => $request->phone,
                'mobile'                => $request->mobile,
                'wphone'                => $request->wphone,
                'wmobile'               => $request->wmobile,
                'email'                 => $request->email,
                'current_state'         => $request->current_state,
                'current_suburb'        => $request->current_suburb,
                'current_locality'      => $request->current_locality,
                'current_postcode'      => $request->current_postcode,
                'current_bldg_name'     => $request->current_bldg_name,
                'current_flat_unit'     => $request->current_flat_unit,
                'current_st_num'        => $request->current_st_num,
                'current_st_name'       => $request->current_st_name,
                'current_postal_box'    => $request->current_postal_box,
                'home_state'            => $request->home_state,
                'home_suburb'           => $request->home_suburb,
                'home_locality'         => $request->home_locality,
                'home_postcode'         => $request->home_postcode,
                'home_bldg_name'        => $request->home_bldg_name,
                'home_flat_unit'        => $request->home_flat_unit,
                'home_st_num'           => $request->home_st_num,
                'home_st_name'          => $request->home_st_name,
                'home_postal_box'       => $request->home_postal_box,
                'emergency_name'        => $request->emergency_name,
                'emergency_relationship'=> $request->emergency_relationship,
                'emergency_email'       => $request->emergency_email,
                'emergency_address'     => $request->emergency_address,
                'emergency_mobile'      => $request->emergency_mobile,
                'emergency_telephone'   => $request->emergency_telephone,
            ]);

            $person->save();

            $rpl_data = $request->only(['current_employment','if_yes','employers_name','if_no_question_one','details_of_workplace','undertaken_any_qualification','if_yes_training_completion','country','current_detailed_cv','copies_of_cert','current_and_prev_position','copies_of_qualification','copies_of_qualification','letter_of_support','contact_details','qualification_summary','self_assesment_checklist','how_many_units','candidate_signature','date_received','printed_name']);
            $rpl_data['student_id'] = $person->party->student->id; 
            $rpl_data['date_received'] = ( $rpl_data['date_received'] != '' ) ? Carbon::parse($rpl_data['date_received'])->format('Y-m-d'): ''; 
            $rpl = RplApplication::updateOrCreate([
                    'student_id'    => $rpl_data['student_id']
                ],
                $rpl_data
            );
            foreach($request->prof_ref as $ref){
                   $pro_ref = new ProfessionalReference;
                   $pro_ref->fill($ref);
                   $pro_ref->rpl_applications()->associate($rpl);
                   $pro_ref->save();
                // $ref['rpl_applications_id'] = $rpl->id;
                // $ref['created_at'] = Carbon::now();
                // $pro_ref = ProfessionalReference::updateOrCreate([
                //     'rpl_applications_id' => $ref['rpl_applications_id']
                //     ],
                //     $ref
                // );
            }

            foreach($request->prev_emp as $ref){
               $prev_emp = new PreviousEmploymentHistory;
               $prev_emp->fill($ref);
               $prev_emp->rpl_application()->associate($rpl);
               $prev_emp->save();
            }

            
            DB::commit();
            return redirect()->route('rpl-application.index')->with('message','Create Success');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
