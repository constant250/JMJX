<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PreTrainingReview;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class PreTrainingReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $student = User::with(['party.person','party.student.details.course','party.releaseletter'])->where('id',Auth::user()->id)->first();
         $courses = Course::all();

        return view('pre-training-review.index',compact('student','courses'));
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
            $pretraining = new PreTrainingReview;
            // dd(Carbon::parse($request->date_received)->format('Y-m-d H:i:s') );
            $pretraining->fill([
                'training_program'                                              =>($request->training_program != '') ? $request->training_program : '' ,
                'date_of_review'                                                =>($request->date_of_review != '') ? Carbon::parse($request->date_of_review)->format('Y-m-d') : '',
                'aspiration_interest'                                           =>$request->aspiration_interest,
                'course_code'                                                   =>$request->course_code,
                'learning_strategies_materials'                                 =>isset($request->learning_strategies_materials) ? $request->learning_strategies_materials : 0 ,
                'issues_challenge_barriers'                                     =>isset($request->issues_challenge_barriers) ? $request->issues_challenge_barriers : 0 ,
                'barrier_if_yes_specify'                                        =>isset($request->barrier_if_yes_specify) ? $request->barrier_if_yes_specify : 0 ,
                'familiar_acsf'                                                 =>isset($request->familiar_acsf) ? $request->familiar_acsf : 0 ,
                'score_required_acsf'                                           =>isset($request->score_required_acsf) ? $request->score_required_acsf : 0 ,
                'study_reason_options_value'                                    =>$request->study_reason_options_value,
                'eti_support_service'                                           =>$request->eti_support_service,
                'prevent_processing_training'                                   =>isset($request->prevent_processing_training) ? $request->prevent_processing_training : 0,
                'prevent_pt_if_yes_specify'                                     =>$request->prevent_pt_if_yes_specify,
                'aware_outcome_course'                                          =>isset($request->aware_outcome_course) ? $request->aware_outcome_course : 0,
                'skill_required_to_work'                                        =>isset($request->skill_required_to_work) ? $request->skill_required_to_work : 0,
                'credit_transfer_recognition_prior_learning'                    =>isset($request->credit_transfer_recognition_prior_learning) ? $request->credit_transfer_recognition_prior_learning : 0,
                'education_attainment'                                          =>isset($request->education_attainment) ? $request->education_attainment : 0,
                'if_yes_education_attainment'                                   =>$request->if_yes_education_attainment,
                'current_working_industry_training'                             =>isset($request->current_working_industry_training) ? $request->current_working_industry_training : 0 ,
                'position_title'                                                =>$request->position_title,
                'learning_styles'                                               =>$request->learning_styles,
                'additional_support_to_complete'                                =>$request->additional_support_to_complete,
                'eligible_for_goverment_funding'                                =>isset($request->eligible_for_goverment_funding) ? $request->eligible_for_goverment_funding : 0,
                'required_to_participate_in_ncver_or_funding_department_survey' =>isset($request->required_to_participate_in_ncver_or_funding_department_survey) ? $request->required_to_participate_in_ncver_or_funding_department_survey : 0,
                'aware_of_any_fee_including_refun_policy'                       =>isset($request->aware_of_any_fee_including_refun_policy) ? $request->aware_of_any_fee_including_refun_policy : 0,
                'aware_complaints_appeals_policy'                               =>isset($request->aware_complaints_appeals_policy) ? $request->aware_complaints_appeals_policy : 0,
                'aware_course_attendance_requirements'                          =>isset($request->aware_course_attendance_requirements) ? $request->aware_course_attendance_requirements : 0,
                'not_eligible_for_funding'                                      =>isset($request->not_eligible_for_funding) ? $request->not_eligible_for_funding : 0,
                'student_signature'                                             =>$request->signature,
                'date_received'                                                 =>Carbon::parse($request->date_received)->format('Y-m-d'),
                'assesment_req_career_objective_and_aspiration'                 =>'',
                'assesment_req_attendance_req_training_assesment_training_req'  =>'',
                'assesment_req_rights_obligation_funding_training_place'        =>'',
                'assesment_req_identified_support_identified_during_process'    =>'',
                'assesment_req_student_learning_style'                          =>'',
                'assesment_req_carrer_history_experience_future_goals_objective'=>'',
                'assesment_req_rpl_ct_arrangement_application_process'          =>'',
                'authorized_person_subject_lln_funding_eligibility_criteria'    =>'',
                'authorized_person_declaration_comments'                        =>'',
                'authorized_person_name'                                        =>'',
                'authorized_person_signature'                                   =>'',
                'authorized_person_position'                                    =>'',
                'authorized_person_date_received'                               =>'',
            ]);

            $pretraining->student()->associate(Auth::user()->party->student->id);
            $pretraining->save();

            DB::commit();
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
