<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Auth;

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

    /**sds
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        // return view('dashboard', compact('active_schedule', 'activity', 'announcements','deal_count','average','dealrate'));

        

        $students =  Student::with(['parrallel_enrolment_verification_form','declaration','payment_autorization','qualificatin_request','student_qualification_request','party'])->whereHas('party', function($q){$q->where('party_id', Auth::user()->party_id);})->first();

        // dd(Auth::user()->party->name);

        return view('dashboard', compact('students'));
    }

    public function TestPage(){

       $students =  Student::with(['parrallel_enrolment_verification_form','declaration','payment_autorization','qualificatin_request','student_qualification_request'])->get();
       dd($students);

    }
}
