<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PaymentAuthorization;    
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class PaymentAuthorisationController extends Controller
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

        $student = User::with(['party.person'])->where('id',Auth::user()->id)->first();
        return view('payment-authorization.index',compact('student'));
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
        // dd($request->all());

        try {
            DB::beginTransaction();
            $data = [
                "name_of_person_nominated" =>$request->name_of_person_nominated,
                "nominated_address" =>$request->nominated_address,
                "nominated_phone_number" =>$request->nominated_phone_number,
                "nominated_bank_name" =>$request->nominated_bank_name,
                "nominated_account_number" =>$request->nominated_account_number,
                "nominated_bsb_branch_number_swiftcode" =>$request->nominated_bsb_branch_number_swiftcode,
                "student_signature" =>$request->student_signature,
                "student_id"        =>Auth::user()->party->student->id,
                "date_received" => $request->date_received != '' ? Carbon::parse($request->date_received)->format('Y-m-d') : '',
            ];
            $paymentauth = PaymentAuthorization::updateOrCreate(
                [
                    'student_id' => Auth::user()->party->student->id,
                ],
                $data
            );

            DB::commit();
            return redirect()->route('payment-auth.index')->with('message','Update Success');
        } catch (\Exception $e) {
            DB::rollback();
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
