<?php

namespace App\Http\Controllers;
use App\Models\RefundRequest;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class RefundRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $student = User::with(['party.person','party.student.details.course'])->where('id',Auth::user()->id)->first();
        return view('refund-request.index',compact('student'));
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
            
            $course = explode(',', $request->course);

            foreach ($course as $key => $c) {
                $refund = new RefundRequest;
                $refund->fill([
                'course_start_date'                         =>'',
                'reason_for_refund'                         =>$request->reason_for_refund,
                'bank_name'                                 =>$request->bank_name,
                'bank_branch'                               =>$request->bank_branch,
                'account_name'                              =>$request->account_name,
                'bsb'                                       =>$request->bsb,
                'account_number'                            =>$request->account_number,
                'swiftcode'                                 =>$request->swiftcode,
                'country'                                   =>$request->country,
                'understand_refund_policy'                  =>isset($request->understand_refund_policy) ?  $request->understand_refund_policy : 0,
                'understand_days_to_access_refund_policy'   =>isset($request->understand_days_to_access_refund_policy) ? $request->understand_days_to_access_refund_policy: 0 ,
                'student_signature'                         =>$request->student_signature,
                'date_received'                             => ($request->date_received != '') ? Carbon::parse($request->date_received)->format('Y-m-d'):'',
                'office_signature'                          =>'',
                'office_signature_date'                     =>'',
                'office_refund_applicable'                  =>'',
                'office_comments'                           =>'',
                'office_date_letter_was_sent'               =>'',
                'office_refund_process_signature'           =>'',
                'office_refund_process_signature_date'      =>'',
            ]);
                $refund->students()->associate(Auth::user()->party->student->id);
                $refund->course()->associate($c);
                $refund->save();

            }

            
            DB::commit();
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
