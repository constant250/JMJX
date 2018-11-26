<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use \Carbon\Carbon;

use App\Models\LlnForm;
use App\Models\Student;
use App\Models\Party;
use App\Models\Persons;

class LlnFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        dd($student);
        //
        return view('lln-form.index');
        
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

        $lln = Party::with('person.lln_form', 'student.details.course')->where('id', Auth::user()->party_id)->first();
        $tg = !empty($lln->person->lln_form->training_goals) ? (array) json_decode($lln->person->lln_form->training_goals) : [];
        $sr = !empty($lln->person->lln_form->self_reflection) ? (array) json_decode($lln->person->lln_form->self_reflection) : [];

        $task_2_q_3 = !empty($lln->person->lln_form->task_2_q_3) ? (array) json_decode($lln->person->lln_form->task_2_q_3) : [];
        $task_2_q_4 = !empty($lln->person->lln_form->task_2_q_4) ? (array) json_decode($lln->person->lln_form->task_2_q_4) : [];
        $task_2_q_5 = !empty($lln->person->lln_form->task_2_q_5) ? (array) json_decode($lln->person->lln_form->task_2_q_5) : [];
        $task_2_q_6 = !empty($lln->person->lln_form->task_2_q_6) ? (array) json_decode($lln->person->lln_form->task_2_q_6) : [];
        $task_2_q_7 = !empty($lln->person->lln_form->task_2_q_7) ? (array) json_decode($lln->person->lln_form->task_2_q_7) : [];
        $task_2_q_8 = !empty($lln->person->lln_form->task_2_q_8) ? (array) json_decode($lln->person->lln_form->task_2_q_8) : [];
        // dd($lln);

        // dd($task_2_q_7);

        $student = [
            'fullname' => $lln->name,
            'course_name' => $lln->student->details[0]->course->name,
            'address' => isset($lln->person->address) ? $lln->person->address : '',
            'phone' => isset($lln->person->mobile) ? $lln->person->mobile : '',
            'student_id' => isset($lln->student->student_id) ? $lln->student->student_id : '',
            'dob' => isset($lln->person->dob) ? Carbon::createFromFormat('Y-m-d', $lln->person->dob)->format('d/m/Y') : '',
            'country_of_birth' => isset($lln->person->country_of_birth) ? $lln->person->country_of_birth : '',
            'gender' => isset($lln->person->gender) ? $lln->person->gender : '',
            'years_in_au' => $lln->person->lln_form->years_in_au,
            'language_you_speak' => $lln->person->lln_form->language_you_speak,

            // Training Goals
            'tg_q1' => isset($tg['tg_q1']) ? $tg['tg_q1'] : '', 
            'tg_q2' => isset($tg['tg_q2']) ? $tg['tg_q2'] : '',
            'tg_q3' => isset($tg['tg_q3']) ? $tg['tg_q3'] : '',
            'tg_q4' => isset($tg['tg_q4']) ? $tg['tg_q4'] : '',
            'tg_q5' => isset($tg['tg_q5']) ? $tg['tg_q5'] : '',
            'tg_q6' => isset($tg['tg_q6']) ? $tg['tg_q6'] : '',
            'tg_q7' => isset($tg['tg_q7']) ? $tg['tg_q7'] : '',
            'tg_q8' => isset($tg['tg_q8']) ? $tg['tg_q8'] : '',
            'tg_q9' => isset($tg['tg_q9']) ? $tg['tg_q9'] : '',
            'tg_q10' => isset($tg['tg_q10']) ? $tg['tg_q10'] : '',
            'tg_q11' => isset($tg['tg_q11']) ? $tg['tg_q11'] : '',
            'tg_q12' => isset($tg['tg_q12']) ? $tg['tg_q12'] : '',
            'tg_q13' => isset($tg['tg_q13']) ? $tg['tg_q13'] : '',

            // slef-reflection
            'sr_q1_context' => isset($sr['sr_q1']->context) ? $sr['sr_q1']->context : '',
            'sr_q1_text_com' => isset($sr['sr_q1']->text_com) ? $sr['sr_q1']->text_com : '',
            'sr_q1_task_com' => isset($sr['sr_q1']->task_com) ? $sr['sr_q1']->task_com : '',

            'sr_q2_context' => isset($sr['sr_q2']->context) ? $sr['sr_q2']->context : '',
            'sr_q2_text_com' => isset($sr['sr_q2']->text_com) ? $sr['sr_q2']->text_com : '',
            'sr_q2_task_com' => isset($sr['sr_q2']->task_com) ? $sr['sr_q2']->task_com : '',

            'sr_q3_context' => isset($sr['sr_q3']->context) ? $sr['sr_q3']->context : '',
            'sr_q3_text_com' => isset($sr['sr_q3']->text_com) ? $sr['sr_q3']->text_com : '',
            'sr_q3_task_com' => isset($sr['sr_q3']->task_com) ? $sr['sr_q3']->task_com : '',

            'sr_q4_context' => isset($sr['sr_q4']->context) ? $sr['sr_q4']->context : '',
            'sr_q4_text_com' => isset($sr['sr_q4']->text_com) ? $sr['sr_q4']->text_com : '',
            'sr_q4_task_com' => isset($sr['sr_q4']->task_com) ? $sr['sr_q4']->task_com : '',

            'sr_q5_context' => isset($sr['sr_q5']->context) ? $sr['sr_q5']->context : '',
            'sr_q5_text_com' => isset($sr['sr_q5']->text_com) ? $sr['sr_q5']->text_com : '',
            'sr_q5_task_com' => isset($sr['sr_q5']->task_com) ? $sr['sr_q5']->task_com : '',

            'sr_q6_context' => isset($sr['sr_q6']->context) ? $sr['sr_q6']->context : '',
            'sr_q6_text_com' => isset($sr['sr_q6']->text_com) ? $sr['sr_q6']->text_com : '',
            'sr_q6_task_com' => isset($sr['sr_q6']->task_com) ? $sr['sr_q6']->task_com : '',

            'sr_q7_context' => isset($sr['sr_q7']->context) ? $sr['sr_q7']->context : '',
            'sr_q7_text_com' => isset($sr['sr_q7']->text_com) ? $sr['sr_q7']->text_com : '',
            'sr_q7_task_com' => isset($sr['sr_q7']->task_com) ? $sr['sr_q7']->task_com : '',

            'sr_q8_context' => isset($sr['sr_q8']->context) ? $sr['sr_q8']->context : '',
            'sr_q8_text_com' => isset($sr['sr_q8']->text_com) ? $sr['sr_q8']->text_com : '',
            'sr_q8_task_com' => isset($sr['sr_q8']->task_com) ? $sr['sr_q8']->task_com : '',

            'sr_q9_context' => isset($sr['sr_q9']->context) ? $sr['sr_q9']->context : '',
            'sr_q9_text_com' => isset($sr['sr_q9']->text_com) ? $sr['sr_q9']->text_com : '',
            'sr_q9_task_com' => isset($sr['sr_q9']->task_com) ? $sr['sr_q9']->task_com : '',

            'sr_q10_context' => isset($sr['sr_q10']->context) ? $sr['sr_q10']->context : '',
            'sr_q10_text_com' => isset($sr['sr_q10']->text_com) ? $sr['sr_q10']->text_com : '',
            'sr_q10_task_com' => isset($sr['sr_q10']->task_com) ? $sr['sr_q10']->task_com : '',

            'sr_q11_context' => isset($sr['sr_q11']->context) ? $sr['sr_q11']->context : '',
            'sr_q11_text_com' => isset($sr['sr_q11']->text_com) ? $sr['sr_q11']->text_com : '',
            'sr_q11_task_com' => isset($sr['sr_q11']->task_com) ? $sr['sr_q11']->task_com : '',

            'sr_q12_context' => isset($sr['sr_q12']->context) ? $sr['sr_q12']->context : '',
            'sr_q12_text_com' => isset($sr['sr_q12']->text_com) ? $sr['sr_q12']->text_com : '',
            'sr_q12_task_com' => isset($sr['sr_q12']->task_com) ? $sr['sr_q12']->task_com : '',

            'sr_q13_context' => isset($sr['sr_q13']->context) ? $sr['sr_q13']->context : '',
            'sr_q13_text_com' => isset($sr['sr_q13']->text_com) ? $sr['sr_q13']->text_com : '',
            'sr_q13_task_com' => isset($sr['sr_q13']->task_com) ? $sr['sr_q13']->task_com : '',

            'sr_q14_context' => isset($sr['sr_q14']->context) ? $sr['sr_q14']->context : '',
            'sr_q14_text_com' => isset($sr['sr_q14']->text_com) ? $sr['sr_q14']->text_com : '',
            'sr_q14_task_com' => isset($sr['sr_q14']->task_com) ? $sr['sr_q14']->task_com : '',

            'sr_q15_context' => isset($sr['sr_q15']->context) ? $sr['sr_q15']->context : '',
            'sr_q15_text_com' => isset($sr['sr_q15']->text_com) ? $sr['sr_q15']->text_com : '',
            'sr_q15_task_com' => isset($sr['sr_q15']->task_com) ? $sr['sr_q15']->task_com : '',

            'sr_q16_context' => isset($sr['sr_q16']->context) ? $sr['sr_q16']->context : '',
            'sr_q16_text_com' => isset($sr['sr_q16']->text_com) ? $sr['sr_q16']->text_com : '',
            'sr_q16_task_com' => isset($sr['sr_q16']->task_com) ? $sr['sr_q16']->task_com : '',

            // reading and writing
            'rw_task_1_q_1' => $lln->person->lln_form->task_1_q_1,
            'rw_task_1_q_2' => $lln->person->lln_form->task_1_q_2,
            'rw_task_1_q_3' => $lln->person->lln_form->task_1_q_3,

            'rw_task_2_q_1' => $lln->person->lln_form->task_2_q_1,
            'rw_task_2_q_2' => $lln->person->lln_form->task_2_q_2,

            'rw_task_2_q_3_a1' => isset($task_2_q_3['a1']) ? $task_2_q_3['a1'] : '',
            'rw_task_2_q_3_a2' => isset($task_2_q_3['a2']) ? $task_2_q_3['a2'] : '',
            'rw_task_2_q_3_b1' => isset($task_2_q_3['b1']) ? $task_2_q_3['b1'] : '',
            'rw_task_2_q_3_b2' => isset($task_2_q_3['b2']) ? $task_2_q_3['b2'] : '',
            'rw_task_2_q_3_b3' => isset($task_2_q_3['b3']) ? $task_2_q_3['b3'] : '',
            'rw_task_2_q_3_c1' => isset($task_2_q_3['c1']) ? $task_2_q_3['c1'] : '',
            'rw_task_2_q_3_c2' => isset($task_2_q_3['c2']) ? $task_2_q_3['c2'] : '',
            'rw_task_2_q_3_d1' => isset($task_2_q_3['d1']) ? $task_2_q_3['d1'] : '',
            'rw_task_2_q_3_e1' => isset($task_2_q_3['e1']) ? $task_2_q_3['e1'] : '',

            'rw_task_2_q_4_1' => isset($task_2_q_4['1q']) ? $task_2_q_4['1q'] : '',
            'rw_task_2_q_4_2' => isset($task_2_q_4['2q']) ? $task_2_q_4['2q'] : '',
            'rw_task_2_q_4_3' => isset($task_2_q_4['3q']) ? $task_2_q_4['3q'] : '',
            'rw_task_2_q_4_4' => isset($task_2_q_4['4q']) ? $task_2_q_4['4q'] : '',
            'rw_task_2_q_4_5' => isset($task_2_q_4['5q']) ? $task_2_q_4['5q'] : '',

            'rw_task_2_q_5_a' => isset($task_2_q_5['a']) ? $task_2_q_5['a'] : '',
            'rw_task_2_q_5_b' => isset($task_2_q_5['b']) ? $task_2_q_5['b'] : '',
            'rw_task_2_q_5_c' => isset($task_2_q_5['c']) ? $task_2_q_5['c'] : '',


            'rw_task_2_q_6_a' => isset($task_2_q_6['a']) ? $task_2_q_6['a'] : '',
            'rw_task_2_q_6_b' => isset($task_2_q_6['b']) ? $task_2_q_6['b'] : '',
            'rw_task_2_q_6_c' => isset($task_2_q_6['c']) ? $task_2_q_6['c'] : '',
            'rw_task_2_q_6_d' => isset($task_2_q_6['d']) ? $task_2_q_6['d'] : '',
            'rw_task_2_q_6_e' => isset($task_2_q_6['e']) ? $task_2_q_6['e'] : '',

            'rw_task_2_q_7_a_l' => isset($task_2_q_7['a_l']) ? $task_2_q_7['a_l'] : '',
            'rw_task_2_q_7_a_w' => isset($task_2_q_7['a_w']) ? $task_2_q_7['a_w'] : '',
            'rw_task_2_q_7_a_a' => isset($task_2_q_7['a_a']) ? $task_2_q_7['a_a'] : '',
            'rw_task_2_q_7_b_l' => isset($task_2_q_7['b_l']) ? $task_2_q_7['b_l'] : '',
            'rw_task_2_q_7_b_w' => isset($task_2_q_7['b_w']) ? $task_2_q_7['b_w'] : '',
            'rw_task_2_q_7_b_a' => isset($task_2_q_7['b_a']) ? $task_2_q_7['b_a'] : '',
            'rw_task_2_q_7_c_l' => isset($task_2_q_7['c_l']) ? $task_2_q_7['c_l'] : '',
            'rw_task_2_q_7_c_w' => isset($task_2_q_7['c_w']) ? $task_2_q_7['c_w'] : '',
            'rw_task_2_q_7_c_a' => isset($task_2_q_7['c_a']) ? $task_2_q_7['c_a'] : '',

            'rw_task_2_q_8_1_d' => isset($task_2_q_8['1_d']) ? $task_2_q_8['1_d'] : '',
            'rw_task_2_q_8_1_p' => isset($task_2_q_8['1_p']) ? $task_2_q_8['1_p'] : '',
            'rw_task_2_q_8_2_d' => isset($task_2_q_8['2_d']) ? $task_2_q_8['2_d'] : '',
            'rw_task_2_q_8_2_p' => isset($task_2_q_8['2_p']) ? $task_2_q_8['2_p'] : '',
            'rw_task_2_q_8_3_d' => isset($task_2_q_8['3_d']) ? $task_2_q_8['3_d'] : '',
            'rw_task_2_q_8_3_p' => isset($task_2_q_8['3_p']) ? $task_2_q_8['3_p'] : '',
            'rw_task_2_q_8_4_d' => isset($task_2_q_8['4_d']) ? $task_2_q_8['4_d'] : '',
            'rw_task_2_q_8_4_p' => isset($task_2_q_8['4_p']) ? $task_2_q_8['4_p'] : '',
            'rw_task_2_q_8_5_d' => isset($task_2_q_8['5_d']) ? $task_2_q_8['5_d'] : '',
            'rw_task_2_q_8_5_p' => isset($task_2_q_8['5_p']) ? $task_2_q_8['5_p'] : '',



        ];

        // dd($student);


        //
        return view('lln-form.index', compact('lln', 'student'));
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

        $r = $request->toArray();
        // dump($r);

        $validate = [
            'years_in_au' => 'required',
            'language_you_speak' => 'required'
        ];

        foreach ($r as $key => $value) {
            if(strpos($key, 'tg_') !== false || strpos($key, 'sr_') !== false || strpos($key, 'rw_') !== false){
                $validate = array_merge($validate, [$key => 'required']);
            }
        }

        // validation
        $validator = \Validator::make( $request->all(), $validate);

        // check on validation fail
        if ( $validator->fails() ) {
            // dd($validator);
            return back()->withErrors($validator)
                    ->withInput();
        }

        // dd($validate);

        try {
            // start DB transaction
            DB::beginTransaction();
            //
            $check = LlnForm::where('person_id', $id)->first();
            $llnForm = !empty($check) ? $check : new LlnForm;

            $training_goals = [
                'tg_q1' => $r['tg_q1'],
                'tg_q2' => $r['tg_q2'],
                'tg_q3' => $r['tg_q3'],
                'tg_q4' => $r['tg_q4'],
                'tg_q5' => $r['tg_q5'],
                'tg_q6' => $r['tg_q6'],
                'tg_q7' => $r['tg_q7'],
                'tg_q8' => $r['tg_q8'],
                'tg_q9' => $r['tg_q9'],
                'tg_q10' => $r['tg_q10'],
                'tg_q11' => $r['tg_q11'],
                'tg_q12' => $r['tg_q12'],
                'tg_q13' => $r['tg_q13'],
            ];

            $self_reflection = [];

            for ($i=1; $i < 17; $i++) { 
                $self_reflection['sr_q'.$i]= [
                    'context' => $r['sr_q'.$i.'_context'],
                    'text_com' => $r['sr_q'.$i.'_text_com'],
                    'task_com' => $r['sr_q'.$i.'_task_com'],
                ]; 
            }

            $task_2_q_3 = [
                'a1' => $r['rw_task_2_q_3_a1'],
                'a2' => $r['rw_task_2_q_3_a2'],
                'b1' => $r['rw_task_2_q_3_b1'],
                'b2' => $r['rw_task_2_q_3_b2'],
                'b3' => $r['rw_task_2_q_3_b3'],
                'c1' => $r['rw_task_2_q_3_c1'],
                'c2' => $r['rw_task_2_q_3_c2'],
                'd1' => $r['rw_task_2_q_3_d1'],
                'e1' => $r['rw_task_2_q_3_e1'],
            ];

            $task_2_q_4 = [
                '1q' => $r['rw_task_2_q_4_1'],
                '2q' => $r['rw_task_2_q_4_2'],
                '3q' => $r['rw_task_2_q_4_3'],
                '4q' => $r['rw_task_2_q_4_4'],
                '5q' => $r['rw_task_2_q_4_5'],
            ];

            $task_2_q_5 = [
                'a' => $r['rw_task_2_q_5_a'],
                'b' => $r['rw_task_2_q_5_b'],
                'c' => $r['rw_task_2_q_5_c'],
            ];

            $task_2_q_6 = [
                'a' => $r['rw_task_2_q_6_a'],
                'b' => $r['rw_task_2_q_6_b'],
                'c' => $r['rw_task_2_q_6_c'],
                'd' => $r['rw_task_2_q_6_d'],
                'e' => $r['rw_task_2_q_6_e'],
            ];

            $task_2_q_7 = [
                'a_l' => $r['rw_task_2_q_7_a_l'],
                'a_w' => $r['rw_task_2_q_7_a_w'],
                'a_a' => $r['rw_task_2_q_7_a_a'],
                'b_l' => $r['rw_task_2_q_7_b_l'],
                'b_w' => $r['rw_task_2_q_7_b_w'],
                'b_a' => $r['rw_task_2_q_7_b_a'],
                'c_l' => $r['rw_task_2_q_7_c_l'],
                'c_w' => $r['rw_task_2_q_7_c_w'],
                'c_a' => $r['rw_task_2_q_7_c_a'],
            ];

            $task_2_q_8 = [
                '1_d' => $r['rw_task_2_q_8_1_d'],
                '1_p' => $r['rw_task_2_q_8_1_p'],
                '2_d' => $r['rw_task_2_q_8_2_d'],
                '2_p' => $r['rw_task_2_q_8_2_p'],
                '3_d' => $r['rw_task_2_q_8_3_d'],
                '3_p' => $r['rw_task_2_q_8_3_p'],
                '4_d' => $r['rw_task_2_q_8_4_d'],
                '4_p' => $r['rw_task_2_q_8_4_p'],
                '5_d' => $r['rw_task_2_q_8_5_d'],
                '5_p' => $r['rw_task_2_q_8_5_p'],
            ];


            // $llnForm->person_id = $id;
            $llnForm->years_in_au = $r['years_in_au'];
            $llnForm->language_you_speak = $r['language_you_speak'];
            $llnForm->training_goals = json_encode($training_goals);
            $llnForm->self_reflection = json_encode($self_reflection);
            $llnForm->task_1_q_1 = $r['rw_task_1_q_1'];
            $llnForm->task_1_q_2 = $r['rw_task_1_q_2'];
            $llnForm->task_1_q_3 = $r['rw_task_1_q_3'];
            $llnForm->task_2_q_1 = $r['rw_task_2_q_1'];
            $llnForm->task_2_q_2 = $r['rw_task_2_q_2'];
            $llnForm->task_2_q_3 = json_encode($task_2_q_3);
            $llnForm->task_2_q_4 = json_encode($task_2_q_4);
            $llnForm->task_2_q_5 = json_encode($task_2_q_5);
            $llnForm->task_2_q_6 = json_encode($task_2_q_6);
            $llnForm->task_2_q_7 = json_encode($task_2_q_7);
            $llnForm->task_2_q_8 = json_encode($task_2_q_8);

            // $llnForm->save();
            $llnForm->person()->associate(Persons::find($id));

            !empty($check) ? $llnForm->update() : $llnForm->save();

            DB::commit();

            // dd($request);
            return redirect()->route('dashboard')->with('message', 'LLN Form has been filled-out successfully!');

        } catch (\Exception $e) {
            // rollback db transaction
            DB::rollBack();
            dd($e->getMessage());
            // return to previous page with errors
            return back()->withInput()->withErrors(['status'=>'error', 'message' => $e->getMessage()]);
        }
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
