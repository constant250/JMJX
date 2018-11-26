<?php

namespace App\Http\Controllers;

use App\Models\ParallelEnrlmentVerificationForm;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ParallelEnrolmentVerificationController extends Controller
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

        $student = User::with(['party.person','party.student.details.course','party.student.parrallel_enrolment_verification_form','party.releaseletter'])->where('id',Auth::user()->id)->first();
        return view('parrallel-enrolment-verification.index', compact('student'));
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
        // dump( Auth::user()->party->student->id);
        try {
            DB::beginTransaction();
            $penrol = ParallelEnrlmentVerificationForm::updateOrCreate([
                'student_id' => Auth::user()->party->student->id
                ],
                [
                    'student_id'                         => Auth::user()->party->student->id,
                    'studentid'                          => $request->studentid,
                    'name_of_training_prov'              => $request->name_of_training_prov,
                    'course_code'                        =>$request->course_code,
                    'course_start_date'                  => ( $request->course_start_date ) ? Carbon::parse($request->course_start_date)->format('Y-m-d H:i:s') : '',
                    'course_end_date'                    => ( $request->course_end_date  ) ? Carbon::parse($request->course_end_date)->format('Y-m-d H:i:s') : '',
                    'timetable_days'                     => $request->timetable_days,
                    'timetable_start_time'               => $request->timetable_start_time,
                    'timetable_finish_time'              => $request->timetable_finish_time,
                    'contact_name'                       => $request->contact_name,
                    'contact_position'                   => $request->contact_position,
                    'confirm_course_of_enrolment'        => $request->confirm_course_of_enrolment,
                    'confirm_course_start_and_end_dates' => $request->confirm_course_start_and_end_dates,
                    'confirm_timetable_details'          => $request->confirm_timetable_details,
                    'signed'                             => $request->signed,
                    'date_received'                      => ( $request->date_received  ) ? Carbon::parse($request->date_received)->format('Y-m-d') : '',
                    'created_at'                         => Carbon::now(),
                ]
            );


            DB::commit();
            return redirect()->route('parrallel-enrolment-verification.index')->with('message','Update Success');
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
