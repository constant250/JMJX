<?php

namespace App\Http\Controllers;

use App\Models\ReleaseLetter;
use App\Models\User;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReleaseLetterController extends Controller
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
        $student = User::with(['party.person','party.student.details.course','party.releaseletter'])->where('id',Auth::user()->id)->first();
        if($student->party->releaseletter != null) {
            $declaration = json_decode($student->party->releaseletter->student_declaration, true);
            $student->party->releaseletter->student_declaration = $declaration;
        }
        // dd($student->party->releaseletter);
        // return $student->party->person;
        return view('release-letter.index',compact('student'));
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
            $declaration = json_encode($request->declaration);
            // dump($declaration);
            // dd($request->all());
            $releaseletter = ReleaseLetter::updateOrCreate(
                [
                    'party_id' => Auth::user()->party->id
                ],
                [
                    'student_declaration' => $declaration,
                    'signature'           => $request->signature,
                    'signature_date'      => ( $request->signature_date == '' ) ? Carbon::now() : Carbon::parse($request->signature_date)->format('Y-m-d'),
                    'created_at'          => Carbon::now(),
                ]
            );

            // dump($releaseletter);
            DB::commit();
            return redirect()->route('release-letter.index')->with('message','Update Success');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput();
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
