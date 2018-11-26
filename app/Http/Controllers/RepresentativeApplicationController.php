<?php

namespace App\Http\Controllers;

use App\Models\ReferenceRepresentativeApplication;
use App\Models\RepresentativeApplication;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class RepresentativeApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('representative-application.index');
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

        try {
            DB::beginTransaction();
            $ra =  new RepresentativeApplication;
            


            /*$ra->fill(
                    [
                        'contact_name'                      =>'',
                        'company_name'                      =>'',
                        'position'                          =>'',
                        'abn_number'                        =>'',
                        'marn_number'                       =>'',
                        'address'                           =>'',
                        'phone'                             =>'',
                        'mobile'                            =>'',
                        'fax'                               =>'',
                        'email'                             =>'',
                        'how_long_business_operating'       =>'',
                        'number_of_int_students_ea_yr'      =>'',
                        'list_of_institution'               =>'',
                        'list_of_courses'                   =>'',
                        'list_of_countries'                 =>'',
                        'services'                          =>'',
                        'others'                            =>'',
                        'charge_student_additional_fee'     =>'',
                        'promote_eti'                       =>'',
                    ]);*/

            $ra_data = $request->except(['reference','_token']);
            $ra_data['type_services_provided'] = json_encode($ra_data['type_services_provided']);
            $ra_data['signature_date'] =  ( $ra_data['signature_date']  == '' ) ? Carbon::now() : Carbon::parse($ra_data['signature_date'] )->format('Y-m-d');
            // dd($ra_data);
            $ra->fill($ra_data);
            $ra->save();
            
            if($request->reference['two']['contact_person'] != ''){
                foreach ($request->reference as $key => $reference) {
                    $ref = new ReferenceRepresentativeApplication;
                    $ref->fill($reference);
                    $ref->representative_application()->associate($ra);
                    $ref->save();
                }
            }else{
                $ref = new ReferenceRepresentativeApplication;
                $ref->fill($request->reference['one']);
                $ref->representative_application()->associate($ra);
                $ref->save();

            }
            DB::commit();
            
            return redirect()->route('representative-application.index')->with('message','Created Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            // dd($e->getMessage());
            return back()->withInput()->withErrors([$e->getMessage()]);
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
