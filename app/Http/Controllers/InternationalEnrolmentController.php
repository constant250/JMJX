<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use \Carbon\Carbon;

use App\Models\InternationalStudentEnrolmentForm AS IntEnrol;
use App\Models\Student;
use App\Models\Party;
use App\Models\Persons;
use App\Models\Course;

use Illuminate\Http\Request;

class InternationalEnrolmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('int-enrolment.index');
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
        $intEnrol = IntEnrol::where('student_id', $id)->first();
        $student = Student::with('party.person')->where('id', $id)->first();
        
        // $course = Course::with('locations')->get();
        // $course = Course::with('course_state_id.state_identifier')->get();
        $course = Course::with('course_state_id.state')->get();

        // dump($intEnrol);
        dd($course);

        $int_enrol = [


        ];

        //
        return view('int-enrolment.index', compact('student', 'int_enrol'));
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
