@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Pre-Training Review</h1>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">
      <div class="clearfix" style="height: 30px;"></div>
      <div class="inner-content-header">
      	@include ( 'layouts.form.toolbarv2' )
      </div>
      <div class="clearfix" style="height: 10px;"></div>
        <!-- Form -->
        <div class="crm-form-container no-padding">
          <form action=" {{ route('pre-training-review.store') }} " method="post"  id="pretraining" class="form-template no-padding">
            {{ csrf_field() }}

            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Student Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->name }}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Training Program:</label>
                        <select class="form-control" name="training_program">
                          <option></option>
                          <option>Program1</option>
                          <option>Program2</option>
                          <option>Program3</option>
                          <option>Program4</option>
                          <option>Program5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Date of Review:</label>
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" value="{{\Carbon\Carbon::now()->format('d-M-Y')}}" name="date_of_review" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Pre-Training Review (PTR)</label>
                        <p class="px-10-font">Elite Training Institute (ETI) is required to conduct a Pre-Training Review (PTR) of all students who would like to undertake training with Elite Training Institute.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Purpose of PTR</label>
                        <p class="px-10-font">Main objectives of the PTR are to:</p>
                        <ul class="crm-form-list px-10-font">
                          <li>Ascertain the individual’s aspirations and interests with due consideration of the likely job outcomes from the development of new competencies and skills;</li>
                          <li>Consideration of Literacy and Numeracy skills through an LLN test.</li>
                          <li>Identify any competencies previously acquired (RPL) or credit transfer);</li>
                          <li>Ascertain a suitable, and the most suitable qualification or that student to enrol in, based on the individual’s existing educational attainment, capabilities, aspirations and interests and with due consideration of the likely job outcomes from the development of new competencies and skills;</li>
                          <li>Ascertain that the proposed learning strategies and materials are appropriate for that individual;</li>
                          <li>Where the proposed learning includes portions delivered online, identify the individual learner’s digital capabilities, including access to necessary technology, and where necessary identify steps to overcome any barriers in this regard</li>
                        </ul>
                        <p class="px-10-font">All students are required to complete this PTR in order to gain entry into the desired course and service.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Instructions for all students</label>
                        <p class="px-10-font">Prior to completing the PTR, make sure you have sufficient information about the course. In particular, you must have access to the following: </p>
                        <ul class="crm-form-list px-10-font">
                          <li>Training and Assessment arrangements i.e. duration of the course, training & assessment modes, days of training, assessments to be completed and any practical placement arrangements, attendance requirements;</li>
                          <li>Employment prospects – you should conduct your own research and have strong evidence of employability options on course completion;</li>
                          <li>Recognition of prior learning and credit transfer application process;</li>
                          <li>Fees and charges applicable for the training;</li>
                          <li>Our obligation under the funded program i.e. participation in surveys, interviews, questionnaires, etc.</li>
                          <li>Government funding (for the state) eligibility criteria and how it will affect your future funding eligibility options.</li>
                          <li>Your rights and obligations as a student at Elite Training Institute;</li>
                          <li>Entry requirements into the course.</li>
                        </ul>
                        <p class="px-10-font">All students are required to complete this PTR in order to gain entry into the desired course and service.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Pre-Training Review (PTR)</label>
                        <p class="px-10-font">Please ensure each question is answered as accurately as possible. If you require more space to write your response to a question, please attach a second sheet and number the responses.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </section>
              <div class="clearfix" style="height: 20px;"></div>
            </div>
          {{-- </form> --}}
        </div>

        <div class="crm-form-container no-padding">
          {{-- <form action="" class="form-template no-padding"> --}}
            <div class="crm-form-wrapper">
              <section>
                <div class="form-padding-left-right form-template">
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">What are your aspirations and interests?</label>
                        <textarea  id="" class="form-control" cols="30" rows="10" name="aspiration_interest"></textarea>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">As applicable, consider and document:</label>
                        <ul class="crm-form-list px-10-font">
                          <li>Career aspirations</li>
                          <li>Interests</li>
                          <li>Strengths</li>
                          <li>Weaknesses</li>
                          <li>Reasons for enrolling in the course, including expectations and objectives</li>
                          <li>The likely job or further study prospects resulting from the training</li>
                        </ul>
                      </div>

                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Rationale:</label>
                        <p class="px-10-font no-margin">The student should not be enrolled in a training program they are not interested in.</p>
                        <p class="px-10-font">The chosen training program links to likely job, participation and/or further study opportunities and/or access to training for disadvantaged learners.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required">What course are you interested in? Please tick the right course.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        @foreach($courses as $course)

                          <div class="crm-form-radio position-relative display-inlineblock">
                            <input type="radio" class="" id="course-{{ $loop->index }}" value="{{ $course->code }} " name="course_code">
                            <label class="radio-input" for="course-{{ $loop->index }}"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-{{ $loop->index }}">{{ $course->code }} – {{ $course->name }}</label>

                        @endforeach

                       {{--  <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="course-1" value="CHC30113 " name="course_code">
                          <label class="radio-input" for="course-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-1">CHC30113 – Certificate III in Early Childhood Education and Care</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="course-2" value="CHC50113 " name="course_code">
                          <label class="radio-input" for="course-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-2">CHC50113 Diploma of Early Childhood Education and Care</label> --}}

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required">Are you familiar with the proposed learning strategies and materials to be used in the chosen course?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-familiar-1" value="1" name="learning_strategies_materials">
                          <label class="radio-input" for="yes-familiar-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-familiar-1">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-familiar-1" value="0" name="learning_strategies_materials">
                          <label class="radio-input" for="no-familiar-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-familiar-1">No</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required">Do you think that proposed learning strategies and materials may pose potential issues/challenges/barriers for you?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-potential" value="1" name="issues_challenge_barriers">
                          <label class="radio-input" for="yes-potential"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-potential">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-potential" value="0" name="issues_challenge_barriers">
                          <label class="radio-input" for="no-potential"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-potential">No</label>

                      </div>

                      <div class="form-group">

                        <label for="" class="not-required">If yes, please specify:</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="10" name="barrier_if_yes_specify"></textarea>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">As applicable, consider and document:</label>
                        <ul class="crm-form-list px-10-font">
                          <li>Special needs</li>
                          <li>Disability</li>
                          <li>The student’s personal circumstances</li>
                          <li>Preferred learning style</li>
                          <li>Previously used methods of learning</li>
                          <li>Adequacy/appropriateness of learning materials</li>
                          <li>Any additional support or adjustments the student may require, to also be documented in the Training Plan</li>
                        </ul>
                      </div>

                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Rationale:</label>
                        <p class="px-10-font">Proper consideration is given to whether the proposed learning strategies and materials in the TAS are appropriate for the student; and whether adjustments need to be made to suit the student’s individual needs..</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required">Are you familiar with ACSF level required to be demonstrated in LLN test to gain entry into the qualification?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-familiar-2" value="1" name="familiar_acsf">
                          <label class="radio-input" for="yes-familiar-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-familiar-2">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-familiar-2" value="0" name="familiar_acsf">
                          <label class="radio-input" for="no-familiar-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-familiar-2">No</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required">Have you scored required ACSF level in LLN test?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-scored" value="1" name="score_required_acsf">
                          <label class="radio-input" for="yes-scored"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-scored">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-scored" value="0" name="score_required_acsf">
                          <label class="radio-input" for="no-scored"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-scored">No</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">As applicable, consider and document:</label>
                        <ul class="crm-form-list px-10-font">
                          <li>As applicable, consider and document:</li>
                          <li>Results of LLN testing – as determined using the training provider’s business process for literacy and numeracy testing</li>
                          <li>The AQF level of the proposed qualification</li>
                          <li>Secondary school results</li>
                          <li>Issues that may prevent the student from successfully completing the training</li>
                          <li>Any additional LLN support the student may require, to also be documented in the Training Plan</li>
                        </ul>
                      </div>

                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Rationale:</label>
                        <p class="px-10-font">The results of LLN testing indicate that the student has the ability to successfully complete the training program, or can be provided with reasonable and accessible support to assist them to complete the training.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <label for="" class="not-required">Briefly explain why you have chosen this course?</label>
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <tbody>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="to-get-job" id="get-job" value="to-get-job" name="study_reason_options_value">
                                    <label class="radio-input" for="get-job"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To get a job </label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="extra-skills" value="extra-skills" name="study_reason_options_value">
                                    <label class="radio-input" for="extra-skills"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;"> I want extra skills for my job</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="develop-start-business" id="develop-start-business" value="develop-start-business" name="study_reason_options_value">
                                    <label class="radio-input" for="develop-start-business"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To develop or start my own business</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="improve-gen-ed" id="improve-gen-ed" value="improve-gen-ed" name="study_reason_options_value">
                                    <label class="radio-input" for="improve-gen-ed"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To improve my general educational skills</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="different-career" id="different-career" value="different-career" name="study_reason_options_value">
                                    <label class="radio-input" for="different-career"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To try for a different career</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="community-work" value="community-work" name="study_reason_options_value">
                                    <label class="radio-input" for="community-work"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To get skills for community/voluntary work</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="get-better-job" value="get-better-job" name="study_reason_options_value">
                                    <label class="radio-input" for="get-better-job"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To get a better job or promotion</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="increase-self-esteem" value="increase-self-esteem" name="study_reason_options_value">
                                    <label class="radio-input" for="increase-self-esteem"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">To increase my self-esteem</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="job-requirement" value="job-requirement" name="study_reason_options_value">
                                    <label class="radio-input" for="job-requirement"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">It is a requirement of my job</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="other-reasons" value=other-reasons"" name="study_reason_options_value">
                                    <label class="radio-input" for="other-reasons"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Other reason (please specify)</label>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <label for="" class="not-required">What ETI Support Service are you most likely to use during your study?</label>
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <tbody>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="lln_support" value="1" name="eti_support_service">
                                    <label class="radio-input" for="lln_support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">LLN Support</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="employment-help" value="0" name="eti_support_service">
                                    <label class="radio-input" for="employment-help"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Employment Help</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="academic-support" name="eti_support_service">
                                    <label class="radio-input" for="academic-support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Academic Support</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="other-support" name="eti_support_service">
                                    <label class="radio-input" for="other-support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Other support service (Please specify below</label>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">As you know, you will be required to complete the work placement hours for your chosen course, is there anything that might prevent you from progressing through the training and assessment program? For example, physical injuries or language barrier etc.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-disability" value="1" name="prevent_processing_training">
                          <label class="radio-input" for="yes-disability"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-disability">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-disability" value="0" name="prevent_processing_training">
                          <label class="radio-input" for="no-disability"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-disability">No</label>

                      </div>

                      <div class="form-group">

                        <label for="" class="not-required">If yes, please specify:</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="10" name="prevent_pt_if_yes_specify  "></textarea>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware of learning outcomes of this course?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-aware-1" value="1" name="aware_outcome_course">
                          <label class="radio-input" for="yes-aware-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-aware-1">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-aware-1" value="0" name="aware_outcome_course">
                          <label class="radio-input" for="no-aware-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-aware-1">No</label>

                      </div>

                      <div class="form-group">
                       <p class="px-10-font"><b>Note:</b> (Students will be explained the learning outcomes of the course by the ETI delegate and also you will be handed over the student Handbook during the orientation and induction session)</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware of skills required to work in the industry you have chosen?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-aware-2" value="1" name="skill_required_to_work">
                          <label class="radio-input" for="yes-aware-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-aware-2">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-aware-2" value="0" name="skill_required_to_work">
                          <label class="radio-input" for="no-aware-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-aware-2">No</label>

                      </div>

                      <div class="form-group">
                       <p class="px-10-font"><b>Note:</b> Students will be explained the skills required to work in the industry during the orientation and induction session.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Do you know about Credit transfer (CT) and Recognition of Prior Learning (RPL) process of ETI?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-know" value="1" name="credit_transfer_recognition_prior_learning">
                          <label class="radio-input" for="yes-know"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-know">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-know" value="0" name="credit_transfer_recognition_prior_learning">
                          <label class="radio-input" for="no-know"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-know">No</label>

                      </div>

                      <div class="form-group">
                       <p class="px-10-font"><b>Note:</b> Students will be explained the RPL and CT process of ETI during the orientation and induction session.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Have you got any educational attainments and capabilities does the student currently have?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-attainment" value="1" name="education_attainment">
                          <label class="radio-input" for="yes-attainment"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-attainment">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-attainment" value="0" name="education_attainment">
                          <label class="radio-input" for="no-attainment"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-attainment">No</label>

                      </div>

                      <div class="form-group">

                        <label for="" class="not-required">If yes, please specify below</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="10" name="if_yes_education_attainment"></textarea>

                      </div>

                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">As applicable, consider and document:</label>
                        <p class="px-10-font">The student’s existing educational attainment and capabilities including</p>
                        <ul class="crm-form-list px-10-font">
                          <li>Prior learning</li>
                          <li>Whether the course entry requirements and pre-requisites are met</li>
                          <li>Employment experience</li>
                          <li>Volunteering</li>
                        </ul>
                      </div>

                      <div class="form-group">
                        <label for="" class="not-required iris-blue-font-color">Rationale:</label>
                        <p class="px-10-font">The student is enrolled in a training program that is at the appropriate level for them.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you currently working in the industry in which you are seeking training?</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-seeking" value="1" name="current_working_industry_training">
                          <label class="radio-input" for="yes-seeking"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-seeking">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-seeking" value="0" name="current_working_industry_training">
                          <label class="radio-input" for="no-seeking"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-seeking">No</label>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">

                        <label for="" class="not-required">Position/title:</label>
                        <input type="text" class="form-control" id="" value="" name="position_title">

                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <p class="px-10-font">If you would like to apply for RPL, please provide the proven employment experience and we will assess your application and get back to you as soon as possible.</p>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <label for="" class="not-required">The following information will help us to determine your learning styles and if we are able to deliver courses that meet your learning styles. (Tick the most relevant)</label>
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <tbody>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="textbooks" value="textbooks" name="learning_styles">
                                    <label class="radio-input" for="textbooks"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Textbooks that I can read and refer to in my own time;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="listening_lectures" value="listening_lectures" name="learning_styles">
                                    <label class="radio-input" for="listening_lectures"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Listening to the lectures/ trainers;</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="power-points" value="power-points" name="learning_styles">
                                    <label class="radio-input" for="power-points"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Power Points explained to me during classes;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="watching-videos" value="watching-videos" name="learning_styles">
                                    <label class="radio-input" for="watching-videos"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Practical application of skills and knowledge in a workplace or similar or watching videos;</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="pictures-diagrams" value="pictures-diagrams" name="learning_styles">
                                    <label class="radio-input" for="pictures-diagrams"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Pictures and diagrams;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="real-examples" value="real-examples" name="learning_styles">
                                    <label class="radio-input" for="real-examples"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Working through real examples such as a case study or scenario;</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="group-discussion" value="group-discussion" name="learning_styles">
                                    <label class="radio-input" for="group-discussion"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Group discussions with others;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="other" value="other" name="learning_styles">
                                    <label class="radio-input" for="other"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Other (please explain below);</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="conducting-research" value="conducting-research" name="learning_styles">
                                    <label class="radio-input" for="conducting-research"></label>
                                  </div>
                                </td>
                                <td width="99%" class="text-left" colspan="3">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Conducting my own research;</label>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix" style="height: 15px;"></div>
                    <div class="col-md-12">
                      <label for="" class="not-required">What additional support do you think you will need in order to complete this course successfully?</label>
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <tbody>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="eng-lang-support" value="eng-lang-support" name="additional_support_to_complete">
                                    <label class="radio-input" for="eng-lang-support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">English language support;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="one-on-one-guidance" value="one-on-one-guidance" name="additional_support_to_complete">
                                    <label class="radio-input" for="one-on-one-guidance"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">One-on-one guidance;</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="reading-support" value="reading-support" name="additional_support_to_complete">
                                    <label class="radio-input" for="reading-support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Reading support;</label>
                                </td>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="additional-resources" value="additional-resources" name="additional_support_to_complete">
                                    <label class="radio-input" for="additional-resources"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Additional resources:</label>
                                </td>
                              </tr>

                              <tr>
                                <td width="1%" class="text-left">
                                  <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
                                    <input type="radio" class="" id="writing-support" value="writing-support" name="additional_support_to_complete">
                                    <label class="radio-input" for="writing-support"></label>
                                  </div>
                                </td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Writing support;</label>
                                </td>
                                <td width="1%" class="text-left"></td>
                                <td width="24%" class="text-left">
                                  <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">Other:</label>
                                  <input type="text" class="form-control"  name="additional_support_to_complete_other">
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                  <div class="horizontal-line-wrapper">
                    <h3>The following information will ensure that you are aware of your rights and obligations under the funding contract and being a student at ETI.</h3>
                  </div>

                  <div class="form-padding-left-right form-template">
                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">If you are eligible for Government funding, do you understand how enrolment in this course/s will affect your future eligibility for government-subsidised training? Ask ETI staff if you are unsure.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-1" value="1"  name="eligible_for_goverment_funding">
                          <label class="radio-input" for="yes-funding-contract-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-1">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-1" value="0"  name="eligible_for_goverment_funding">
                          <label class="radio-input" for="no-funding-contract-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-1">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-1" value="2"  name="eligible_for_goverment_funding">
                          <label class="radio-input" for="na-funding-contract-1"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-1">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware that you may be required to participate in NCVER or funding department surveys or interviews? Ask ETI staff if you are unsure.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-2" value="1"  name="required_to_participate_in_ncver_or_funding_department_survey">
                          <label class="radio-input" for="yes-funding-contract-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-2">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-2" value="0"  name="required_to_participate_in_ncver_or_funding_department_survey">
                          <label class="radio-input" for="no-funding-contract-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-2">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-2" value="2"  name="required_to_participate_in_ncver_or_funding_department_survey">
                          <label class="radio-input" for="na-funding-contract-2"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-2">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware of any fees and charges applicable to your enrolment, including any refund policy? Ask ETI staff if you are unsure.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-3" value="1" name="aware_of_any_fee_including_refun_policy">
                          <label class="radio-input" for="yes-funding-contract-3"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-3">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-3" value="0"  name="aware_of_any_fee_including_refun_policy">
                          <label class="radio-input" for="no-funding-contract-3"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-3">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-3" value="2"  name="aware_of_any_fee_including_refun_policy">
                          <label class="radio-input" for="na-funding-contract-3"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-3">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware of complaints and appeals policy of ETI? Ask ETI staff if you are unsure.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-4" value="1"  name="aware_complaints_appeals_policy">
                          <label class="radio-input" for="yes-funding-contract-4"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-4">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-4" value="0"  name="aware_complaints_appeals_policy">
                          <label class="radio-input" for="no-funding-contract-4"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-4">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-4" value="2"  name="aware_complaints_appeals_policy">
                          <label class="radio-input" for="na-funding-contract-4"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-4">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">Are you aware of course attendance requirements, and training and assessment arrangements? Ask ETI staff if you are unsure</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-5" value="1" name="aware_course_attendance_requirements">
                          <label class="radio-input" for="yes-funding-contract-5"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-5">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-5" value="0"  name="aware_course_attendance_requirements">
                          <label class="radio-input" for="no-funding-contract-5"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-5">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-5" value="2"  name="aware_course_attendance_requirements">
                          <label class="radio-input" for="na-funding-contract-5"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-5">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12">
                      <div class="form-group">

                        <label for="" class="not-required" style="line-height: 1.5;">If you are not eligible for funding, are you aware of the fees and charges applicable to the course? Ask ETI staff if you are unsure.</label>
                        <br>
                        <div class="clearfix" style="height: 10px;"></div>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="yes-funding-contract-6" value="1"  name="eligible_fees_charges">
                          <label class="radio-input" for="yes-funding-contract-6"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-funding-contract-6">Yes</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="no-funding-contract-6" value="0"  name="eligible_fees_charges">
                          <label class="radio-input" for="no-funding-contract-6"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-funding-contract-6">No</label>

                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="na-funding-contract-6" value="2"  name="eligible_fees_charges">
                          <label class="radio-input" for="na-funding-contract-6"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="na-funding-contract-6">N/A</label>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Student Name:</label>
                        <input type="text" class="form-control" id="" value="" name="stud_fullname">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Signature:</label>
                        <input type="text" class="form-control" id="" value="" name="signature">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="" class="not-required">Date:</label>
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" name="date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>To be completed by an authorised delegate of ETI</h3>
                </div>

                <div class="form-padding-left-right form-template">
                    <div class="form-group">
                      <label for="" class="not-required iris-blue-font-color text-decoration-underline">Instructions:</label>
                      <div class="clearfix" style="height: 10px;"></div>
                      <p class="px-10-font">Please review the information that student has provided on this form and if the information provided is not clear enough, interview the student and ask to elaborate. The information provided through the PTR is important to determine eligibility for the Skills First funded training in addition to evaluating information provided on the Skills First funded training eligibility declaration.</p>
                      <p class="px-10-font">Please note LLN test is conducted separately and students are required to meet minimum LLN level requirements. Please refer to LLN test for details. </p>
                    </div>

                    <div class="form-group">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="90%">Assessment requirements</th>
                                <th width="5%">Yes</th>
                                <th width="5%">No</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td class="text-left">Is the course chosen aligned to the student’s employment history/ career objectives and aspirations?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-1" name="assmt_req_1">
                                    <label class="radio-input" for="radio-yes-1"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-1" name="assmt_req_1">
                                    <label class="radio-input" for="radio-no-1"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left" style="line-height: 1.5;">The student is fully aware of the course training and assessment arrangements i.e. attendance requirements, training and assessment methods, and any practical training requirements?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-2" name="assmt_req_2">
                                    <label class="radio-input" for="radio-yes-2"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-2" name="assmt_req_2">
                                    <label class="radio-input" for="radio-no-2"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left">The student is fully aware of their rights and obligations under the funded training place?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-3" name="assmt_req_3">
                                    <label class="radio-input" for="radio-yes-3"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-3" name="assmt_req_3">
                                    <label class="radio-input" for="radio-no-3"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left">Have you identified any support identified during the process?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-4" name="assmt_req_4">
                                    <label class="radio-input" for="radio-yes-4"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-4" name="assmt_req_4">
                                    <label class="radio-input" for="radio-no-4"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left">Training and assessment strategy is suitable and based on the student’s learning needs and learning styles?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-5" name="assmt_req_5">
                                    <label class="radio-input" for="radio-yes-5"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-5" name="assmt_req_5">
                                    <label class="radio-input" for="radio-no-5"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left" style="line-height: 1.5;">Is the training suitable and appropriate based on the student’s achievements, career history, experience, future goals, objectives, capabilities and career aspirations?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-6" name="assmt_req_6">
                                    <label class="radio-input" for="radio-yes-6"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-6" name="assmt_req_6">
                                    <label class="radio-input" for="radio-no-6"></label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left">The student is aware of RPL and CT arrangements and application process?</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-yes-7" name="assmt_req_7">
                                    <label class="radio-input" for="radio-yes-7"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="radio-no-7" name="assmt_req_7">
                                    <label class="radio-input" for="radio-no-7"></label>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                            <thead>
                              <tr>
                                <th class="text-left" width="90%">Authorised Person’s declaration</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-left">Based on the information provided on this form, the student meets the requirements for this course, subject to LLN and funding eligibility criteria.</td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="yes-provide" name="rq_info_provided">
                                    <label class="radio-input" for="yes-provide"></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="crm-form-radio position-relative center-block">
                                    <input type="radio" class="" id="no-provide" name="rq_info_provided">
                                    <label class="radio-input" for="no-provide"></label>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">Comments:</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="10" name="ptr_comment"></textarea> 
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Authorised Person’s Name:</label>
                        <input type="text" class="form-control" name="auth_person_name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Authorised Person’s Signature:</label>
                        <input type="text" class="form-control" name="auth_person_signature">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Authorised Person’s Position:</label>
                        <input type="text" class="form-control" name="auth_person_pos">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Date:</label>
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" value="{{\Carbon\Carbon::now()->format('d-M-Y')}}" name="current_date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

              </section>
              <div class="clearfix" style="height: 20px;"></div>
            </div>
          </form>
        </div>
        <!-- End Form -->
      </div>
    </div>
  </div>
   <!-- End Pages/Dashboard Content Goes Here -->

@endsection

@section('custom-page-scripts')

<script type="text/javascript">
  $(function () {
      $('.generic-datepicker').datetimepicker({
            format: 'DD-MMMM-YYYY'
        });
   });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#btn-save').on('click', function(e) {
      e.preventDefault();
      $('#pretraining').submit();
    })
  })
</script>
@endsection