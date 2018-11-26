<div role="tabpanel" class="tab-pane " id="lln-partA">
    <div class="crm-form-container no-padding">
      <!-- <form action="" class="form-template no-padding"> -->
        <div class="crm-form-wrapper">
          <section>
          <div class="clearfix" style="height: 20px;"></div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <p class="px-14-font iris-blue-font-color bright-grey-font-color"><b>Assessor Instructions:</b></p>
                      <ul class="px-12-font bright-grey-font-color"> 
                        <li>This task covers ACSF Learning and Oral communication at Levels 1, 2 or 3</li>
                        <li>This part (Part A) has to be completed by Assessor</li>
                        <li>This task requires the candidate to:
                            <ul>
                              <li>listen and respond to oral questions</li>
                              <li>reflect on his/her learning</li>
                            </ul>
                        </li>
                        <li>Put the candidate at ease and explain that the purpose of the LLN test interview is to gather information about the candidate’s LLN skill level to help determine if they have the skills for a particular course of training, or if support is required. It includes a series of questions followed by a self-reflection task.</li>
                        <li>Ask the questions orally and note the candidate’s answers in the space provided.</li>
                        <li>Encourage the candidate to feel comfortable and ask questions at any time.</li>
                      </ul>
                <p class="px-14-font bright-grey-font-color no-margin"><b>3.0 LLN TEST</b></p>
                <p class="px-14-font bright-grey-font-color no-margin"><b>Meeting Clause 1.7 of the Standards for RTOs 2015</b></p>
                <p class="px-12-font bright-grey-font-color">The Standards for Registered Training Organisations (SRTOs) 2015 requires all RTOs to determine the support services necessary for individuals to meet the requirements of their desired training product, as outline in clause 1.7 (see clause below). As part of meeting this standard, we require that all prospective learners complete the LLN Test.</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            <div class="horizontal-line-wrapper">
              <h3>Training Goals</h3>
            </div>
            <div class="form-padding-left-right form-template">
            <div class="container-fluid">
              <div class="row">
               <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">Can you tell me about something that you learned recently?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">How did you learn it? People learn new skills every day, such as how to use the internet, how to record TV shows or how to drive a car. (NOTE: This question is to gather information about HOW the learning occurred, rather than WHAT the learning was about.)</span>
                  </label>
                  {{ Form::textarea('tg_q1', old('tg_q1'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What do you like about learning? Can you talk about how you think you like to learn?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">What helps you to learn? People learn in different ways. Some learn best by listening and writing, some from visual aids such as the whiteboard or the TV, some learn by watching and doing. Others like to learn in a group, while some people prefer to learn one-on-one with a support person.</span>
                  </label>
                  {{ Form::textarea('tg_q2', old('tg_q2'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What are you good at?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">This may include reading (newspapers, emails, websites, notice boards, manuals); writing (letters, emails, forms, lists, messages, reports); numeracy (calculations, times tables, 24-hour clock, measurement, money and finance); speaking and listening (talking on the phone, asking for information, giving instructions or presentations).</span>
                  </label>
                  {{ Form::textarea('tg_q3', old('tg_q3'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What would you like to learn?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">This might include specific vocational tasks, or it may be more general, such as reading novels or TV guides, writing letters, reading maps, using a calculator or reading a bus timetable.</span>
                  </label>
                  {{ Form::textarea('tg_q4', old('tg_q4'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What helps you to learn?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">You could ask if there are barriers, for example the need for glasses; medication or family issues; unsuccessful previous schooling; English is second language. <br> Some may be able to identify a preference for small groups, extra time, one-on-one support, a mentor, tape recorder, computer, dictionary, calculator, etc.</span>
                  </label>
                  {{ Form::textarea('tg_q5', old('tg_q5'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">Educational background</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">When did you leave school? For example, 1992 <br> Have you been enrolled in training (vocational training or tertiary studies) since you left school? If yes, which courses?</span>
                  </label>
                  {{ Form::textarea('tg_q6', old('tg_q6'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}                <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">Employment</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">In what sort of jobs have you worked?</span>
                  </label>
                  {{ Form::textarea('tg_q7', old('tg_q7'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="bright-grey-font-color px-10-font no-margin">Did you receive on-the-job training?</span>
                  </label>
                  {{ Form::textarea('tg_q8', old('tg_q8'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="bright-grey-font-color px-10-font no-margin">Did you do any writing at work? If so, what sort? What types of tasks involved writing? For example, taking telephone messages or filling in forms.</span>
                  </label>
                  {{ Form::textarea('tg_q9', old('tg_q9'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="bright-grey-font-color px-10-font no-margin">Which skills would you require to be able to work in Early Childhood Education and Care industry?</span>
                  </label>
                  {{ Form::textarea('tg_q10', old('tg_q10'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What sorts of maths did you use at work?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">Did you use a calculator, count stock and materials, or measure? Did you use calculations? Give directions? Read maps?</span>
                  </label>
                  {{ Form::textarea('tg_q11', old('tg_q11'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="iris-blue-font-color px-12-font no-margin">What work skills do you already have?</span>
                    <br>
                    <span class="bright-grey-font-color px-10-font no-margin">Team work, using technology, communication, self-management, problem solving, learning, initiative, planning.</span>
                  </label>
                  {{ Form::textarea('tg_q12', old('tg_q12'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="" style="line-height: 1;">
                    <span class="bright-grey-font-color px-10-font no-margin">What skills would you like to develop from this course?</span>
                  </label>
                  {{ Form::textarea('tg_q13', old('tg_q13'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                  <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                </div>
              </div>
              </div>
            </div>
              <div class="clearfix"></div>
            </div>
            <div class="horizontal-line-wrapper">
                <h3>Self-reflection</h3>
              </div>
              <div class="form-padding-left-right form-template">
              <div class="col-md-12">
                    <p class="px-12-font bright-grey-font-color">Tell us about your reading, writing and numeracy skills.</p>
                    <div class="datatable-wrapper box-shadow">
                        <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="35%" class="line-height-1">SUPPORT </th>
                                    <th width="20%" class="line-height-1">CONTEXT</th>
                                    <th width="20%" class="line-height-1">TEXT COMPLEXITY</th>
                                    <th width="20%" class="line-height-1"> TASK COMPLEXITY </th>
                                </tr>    
                            </thead>
                            <tbody>
                              <tr> 
                                <td>understand signs</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q1_context', old('sr_q1_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10 ,'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q1_text_com', old('sr_q1_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q1_task_com', old('sr_q1_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>fill in a time sheet</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q2_context', old('sr_q2_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q2_text_com', old('sr_q2_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q2_task_com', old('sr_q2_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>count and check change when shopping</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q3_context', old('sr_q3_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q3_text_com', old('sr_q3_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q3_task_com', old('sr_q3_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>Send a text message</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q4_context', old('sr_q4_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q4_text_com', old('sr_q4_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q4_task_com', old('sr_q4_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>use the internet to get information like telephone numbers</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q5_context', old('sr_q5_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q5_text_com', old('sr_q5_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q5_task_com', old('sr_q5_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>fill in a leave form</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q6_context', old('sr_q6_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q6_text_com', old('sr_q6_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q6_task_com', old('sr_q6_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>read a staff memo</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q7_context', old('sr_q7_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q7_text_com', old('sr_q7_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q7_task_com', old('sr_q7_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>use a computer to email</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q8_context', old('sr_q8_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q8_text_com', old('sr_q8_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q8_task_com', old('sr_q8_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>use a calculator for + – x ÷</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q9_context', old('sr_q9_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q9_text_com', old('sr_q9_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q9_task_com', old('sr_q9_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>read a work roster</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q10_context', old('sr_q10_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q10_text_com', old('sr_q10_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q10_task_com', old('sr_q10_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>follow instructions for mixing a solution or to follow a recipe</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q11_context', old('sr_q11_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q11_text_com', old('sr_q11_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q11_task_com', old('sr_q11_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>read a Google map or street directory</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q12_context', old('sr_q12_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q12_text_com', old('sr_q12_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q12_task_com', old('sr_q12_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>read and understand an MSDS</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q13_context', old('sr_q13_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q13_text_com', old('sr_q13_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q13_task_com', old('sr_q13_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                              <tr> 
                                <td>use an equipment manual</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q14_context', old('sr_q14_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q14_text_com', old('sr_q14_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q14_task_com', old('sr_q14_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                               <tr> 
                                <td>complete a log book</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q15_context', old('sr_q15_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q15_text_com', old('sr_q15_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q15_task_com', old('sr_q15_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                               <tr> 
                                <td>write an incident report</td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q16_context', old('sr_q16_context'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q16_text_com', old('sr_q16_text_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group no-margin">
                                    {{ Form::textarea('sr_q16_task_com', old('sr_q16_task_com'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                                    <!-- <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
              </div>

              <!-- <div class="horizontal-line-wrapper">
                <h3>Assessor notes</h3>
              </div>
              <div class="form-padding-left-right form-template">
                 <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="" id="" class="form-control" cols="30" rows="10" style="height: 300px;"></textarea>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div> -->
          </section>
          <div class="clearfix" style="height: 20px;"></div>
        </div>
      <!-- </form> -->
    </div>
</div>