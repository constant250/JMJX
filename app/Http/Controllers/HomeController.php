<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        // return view('home', compact('active_schedule', 'activity', 'announcements','deal_count','average','dealrate'));
        return view('home');
    }

    public function TestPage(){

       $students =  Student::with(['parrallel_enrolment_verification_form','declaration','payment_autorization','qualificatin_request','student_qualification_request'])->get();
       dd($students);

    }
}
