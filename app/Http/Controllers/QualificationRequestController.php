<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\QualificationRequest;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class QualificationRequestController extends Controller
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
        $courses = Course::all();

        return view('qualification-request.index',compact('student','courses'));
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
            $qr = new QualificationRequest;
            $qr->fill([
                'document_being_requested'                              =>($request->document_being_requested != '') ? json_encode($request->document_being_requested) : '[]',
                'course'                                                =>($request->course_code != '') ? json_encode($request->course_code) : '[]',
                'student_signature'                                     =>$request->student_signature,
                'date_received'                                         =>($request->date_received != ' ') ? Carbon::parse($request->date_received)->format('Y-m-d H:i:s') : '',
                'student_acknowledgement_receipt_qualification'         =>$request->student_acknowledgement_receipt_qualification,
                'student_acknowledgement_receipt_qualification_date'    =>($request->student_acknowledgement_receipt_qualification_date != ' ') ? Carbon::parse($request->student_acknowledgement_receipt_qualification_date)->format('Y-m-d H:i:s '): '',
                'office_finance_approval'                               =>'',
                'office_finance_approval_date'                          =>'',
                'office_academic_approval'                              =>'',
                'office_academic_approval_date'                         =>'',
                'office_issued_by'                                      =>'',
                'office_issued_by_date'                                 =>'',
            ]);
            $qr->student()->associate(Auth::user()->party->student->id);
            $qr->save();

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
