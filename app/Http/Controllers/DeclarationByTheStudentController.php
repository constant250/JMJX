<?php

namespace App\Http\Controllers;
use App\Models\DeclarationByTheStudent;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class DeclarationByTheStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('hi');
        $student = User::with(['party.person','party.student.details.course','party.releaseletter'])->where('id',Auth::user()->id)->first();
        return view('declaration.index',compact('student'));
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
        // dd(Auth::user()->party->id);
        try {
            DB::beginTransaction();
            $declartion = new DeclarationByTheStudent;
            $declartion->fill([
                'student_signature' => $request->student_signature,
                'student_date'      => $request->student_date != '' ? Carbon::parse($request->student_date)->format('Y-m-d') : ''
            ]);
            $declartion->party()->associate(Auth::user()->party->id);
            $declartion->save();
            DB::commit();
             return redirect()->route('declaration.index')->with('message','Update Success');
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
