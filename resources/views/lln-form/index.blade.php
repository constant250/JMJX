@extends('layouts.master')

@section('custom-links')
<style>
.text-center{text-align: center!important;}
#self-reflection-table thead tr th, #task2-table thead tr th{padding: 15px 10px!important;}
#self-reflection-table tbody tr td{padding: 15px 10px!important;}
#self-reflection-table tbody tr td:first-child, #task2-table tbody tr td:first-child{text-align: left;}
#self-reflection-table tbody tr td textarea{height: 60px!important;}
#task2-table tbody tr td{padding: 5px 10px!important;}
</style>
@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Language, Literacy and Numeracy (LLN) Test</h1>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">
      <div class="clearfix" style="height: 30px;"></div>
      <div class="inner-content-header">
      	@include ( 'layouts.form.toolbarv2' )
      </div>
      <div class="clearfix" style="height: 10px;"></div>
      <!-- Tabs -->
      <div class="tabs">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs crm-nav-tabs dark-tabs px-12-font" role="tablist">
          <li role="presentation" class="active">
            <a href="#lln-guide-mapping" aria-controls="lln-guide-mapping" role="tab" data-toggle="tab">Guide and Mapping</a>
          </li>
         <li role="presentation">
            <a href="#lln-getting-started" aria-controls="lln-getting-started" role="tab" data-toggle="tab">Getting Started</a>
          </li>
         <li role="presentation">
            <a href="#personal-details" aria-controls="personal-details" role="tab" data-toggle="tab">Personal Details</a>
          </li>
          <li role="presentation">
            <a href="#lln-partA" aria-controls="lln-partA" role="tab" data-toggle="tab">Part A</a>
          </li>
          <li role="presentation">
            <a href="#lln-partB" aria-controls="lln-partB" role="tab" data-toggle="tab">Part B</a>
          </li> 
          <li role="presentation">
            <a href="#outcome" aria-controls="outcome" role="tab" data-toggle="tab">Outcome</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">    
          <div role="tabpanel" class="tab-pane active" id="lln-guide-mapping">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>
                    <div class="horizontal-line-wrapper">
                      <h3>Introduction</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <div>
                          <p class="px-12-font">This test includes a range of tasks designed to be used to identify an individual’s level in the core language, literacy and numeracy (LLN) skills of Learning, Reading, Writing, Oral Communication and Numeracy. The tasks in this test are adapted from tasks bank developed by Precision Group in collaboration with Commonwealth of Australia.</p>
                          <p class="px-12-font no-margin">The assessment tasks align with the Australian Core Skills Framework (ACSF). The ACSF is a national framework that provides:</p>
                          <ul class="crm-form-list px-12-font">
                            <li>a consistent national approach to the identification of the core LLN skills requirements in diverse work, training, personal and community contexts</li>
                            <li>a common reference point for describing and discussing performance in the five core LLN skill areas.</li>
                          </ul>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="horizontal-line-wrapper">
                      <h3>Why assess core LLN skill levels?</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <div>
                          <p class="px-12-font">Assessment of core LLN skill levels identifies an individual’s skill levels. This individual assessment can then be compared with the LLN levels required of a training program (or unit or qualification), or workplace tasks. The person may be a new entrant to the training sector, or may be following a training pathway to a new course or qualification.</p>
                          <p class="px-12-font no-margin">The purpose of the assessment should be to determine whether the person:</p>
                          <ul class="crm-form-list px-12-font">
                            <li>should complete an LLN bridging program before commencing the training, or</li>
                            <li>requires LLN support throughout the training program (or unit or qualification) or workplace tasks.</li>
                          </ul>

                          <p class="px-12-font">Identified gaps can be addressed in various ways, for example bridging courses, specialist LLN practitioner support, or activities provided by a vocational trainer with knowledge of developing LLN skills.</p>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="horizontal-line-wrapper">
                      <h3>The assessment tasks</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <div>
                          <p class="px-12-font">This test includes tasks that focus on ACSF Level 3. The following table notes information about each assessment task</p>

                          <div class="table-responsive">
                            <div class="datatable-wrapper box-shadow">
                              <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th width="30%">Assessment task</th>
                                    <th width="35%">ACSF skill and level coverage</th>
                                    <th width="35%">Description</th>
                                  </tr>
                                  <tr>
                                    <th colspan="3">Part A</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="text-left">Interview</td>
                                    <td class="text-left">Learning 1-3, Oral communication 1-3</td>
                                    <td class="text-left">Reflective question and answer Particularly useful for new workers</td>
                                  </tr>
                                </tbody>

                                <thead>
                                  <tr>
                                    <th colspan="3">Part B</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="text-left">Task 1: Reading and Writing</td>
                                    <td class="text-left">Reading 3, Writing 2-3 Writing 3-4</td>
                                    <td class="text-left">Read and interpret a poster Write or deliver an opinion piece</td>
                                  </tr>
                                  <tr>
                                    <td class="text-left">Task 2: Numeracy</td>
                                    <td class="text-left">Numeracy 2-3</td>
                                    <td class="text-left">Complete various numeracy tasks</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <br>
                          <p class="px-12-font"><b>Note:</b> Levels of tasks can be influenced by the amount of support provided to the candidate throughout the test.</p>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="horizontal-line-wrapper">
                      <h3>Coverage of tasks</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <div>
                          <p class="px-12-font">The following table maps the assessment tasks to ACSF skills and levels. Note that most tasks cover more than one skill, and more than one level – often depending on the response from the candidate. The tasks noted in black were developed in 2010 and revised in 2013, and the tasks noted in red were added in 2013.</p>

                          <div class="table-responsive">
                            <div class="datatable-wrapper box-shadow">
                              <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th width="16.67%">ACSF Level</th>
                                    <th width="16.67%">Learning</th>
                                    <th width="16.67%">Reading</th>
                                    <th width="16.67%">Writing</th>
                                    <th width="16.67%">Oral communication</th>
                                    <th width="16.67%">Numeracy</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>4</td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left">Part B - Task 1: Q.3</td>
                                    <td class="text-left">Part B - Task 1: Q.3</td>
                                    <td class="text-left"></td>
                                  </tr>

                                  <tr>
                                    <td>3</td>
                                    <td class="text-left">Part A</td>
                                    <td class="text-left">Part B - Task 1: Q.1, Q.2</td>
                                    <td class="text-left">Part B - Task 1: Q.1, Q.2, Q.3</td>
                                    <td class="text-left">Part A Part B - Task 1: Q.3</td>
                                    <td class="text-left">Part B – Task 2</td>
                                  </tr>

                                  <tr>
                                    <td>2</td>
                                    <td class="text-left">Part A</td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left">Part A</td>
                                    <td class="text-left">Part B – Task 2</td>
                                  </tr>

                                  <tr>
                                    <td>2</td>
                                    <td class="text-left">Part A</td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left">Part A</td>
                                    <td class="text-left"></td>
                                  </tr>

                                  <tr>
                                    <td>Pre-level 1</td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                    <td class="text-left"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <br>
                          <p class="px-12-font"><b>Note:</b> Levels of tasks can be influenced by the amount of support provided to the candidate throughout the test.</p>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="horizontal-line-wrapper">
                      <h3>Mapping of levels and indicators</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <div>
                          <p class="px-12-font">Each of the tasks included is mapped as given above. Each task is mapped to one or more skill level indicators, and the aspects of communication have also been identified.</p>
                          <p class="px-12-font">ACSF levels refer to exit levels; that is, the person is able to demonstrate what is required at that level. Users should always remember the factors that may influence a person’s performance at each level (in each core skill). These are: </p>
                          <ul class="crm-form-list px-12-font">
                            <li>the degree and nature of support available</li>
                            <li>he familiarity with the context </li>
                            <li>the complexity of text </li>
                            <li>the complexity of the task.</li>
                          </ul>

                          <p class="px-12-font">The level of skill demonstrated by a candidate can be changed by the factors, for example, if significant support is given to a candidate completing a level 3 task, the outcome of the assessment could be that the candidate is at exit level 2. </p>
                          <p class="px-12-font">The table on the following page is from page 7 of the ACSF document, and shows how the levels of support, context, text and task complexity vary across the five levels of performance of the ACSF. It is critical that an assessor take in account this table when undertaking test and interpreting assessment results.</p>
                      </div>
                      <div class="clearfix"></div>
                     </div>

                      <div class="horizontal-line-wrapper">
                        <h3>Support, context, text complexity, task complexity</h3>
                      </div>

                      <div class="form-padding-left-right form-template">
                        <div>
                            <p class="px-12-font">The following table maps the assessment tasks to ACSF skills and levels. Note that most tasks cover more than one skill, and more than one level – often depending on the response from the candidate. The tasks noted in black were developed in 2010 and revised in 2013, and the tasks noted in red were added in 2013.</p>

                            <div class="table-responsive">
                              <div class="datatable-wrapper box-shadow">
                                <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th width="10%" colspan="2" rowspan="2" class="transparent-table-color"></th>
                                      <th colspan="4">ACSF Performance</th>
                                    </tr>
                                    <tr>
                                      <th width="22.5%">SUPPORT</th>
                                      <th width="22.5%">CONTEXT</th>
                                      <th width="22.5%">TEXT COMPLEXITY</th>
                                      <th width="22.5%">TASK COMPLEXITY</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td rowspan="5" class="position-relative"><img src="{{ asset('images/lln-form/ACSF-performance-table-text.png') }}" alt="" class="img-responsive" style="width: 10px;"></td>
                                      <td class="text-center">1</td>
                                      <td class="text-left">Works alongside an expert/ mentor where prompting and advice can be provided</td>
                                      <td class="text-left">Highly familiar contexts Concrete and immediate Very restricted range of contexts</td>
                                      <td class="text-left">Short and simple Highly explicit purpose Limited, highly familiar vocabulary</td>
                                      <td class="text-left">Concrete tasks of 1 or 2 steps Processes include locating, recognising</td>
                                    </tr>

                                    <tr>
                                      <td class="text-center">2</td>
                                      <td class="text-left">May work with an expert/ mentor where support is available if requested</td>
                                      <td class="text-left">Familiar and predictable contexts Limited range of contexts</td>
                                      <td class="text-left">Simple familiar texts with clear purpose Familiar vocabulary</td>
                                      <td class="text-left">Explicit tasks involving a limited number of familiar steps Processes include identifying, simple interpreting, simple sequencing</td>
                                    </tr>

                                    <tr>
                                      <td class="text-center">3</td>
                                      <td class="text-left">Works independently and uses own familiar support resources</td>
                                      <td class="text-left">Range of familiar contexts Some less familiar contexts Some specialisation in familiar/known contexts </td>
                                      <td class="text-left">Routine texts May include some unfamiliar elements, embedded information and abstraction Includes some specialised vocabulary</td>
                                      <td class="text-left">Tasks involving a number of steps Processes include sequencing, integrating, interpreting, simple extrapolating, simple inferencing, simple abstracting</td>
                                    </tr>

                                    <tr>
                                      <td class="text-center">4</td>
                                      <td class="text-left">Works independently and initiates and uses support from a range of established resources</td>
                                      <td class="text-left">Range of contexts, including some that are unfamiliar and/or unpredictable Some specialisation in less familiar/known contexts</td>
                                      <td class="text-left">Complex texts Embedded information Includes specialised vocabulary Includes abstraction and symbolism</td>
                                      <td class="text-left">Complex task organisation and analysis involving application of a number of steps Processes include extracting, extrapolating, inferencing, reflecting, abstracting</td>
                                    </tr>

                                    <tr>
                                      <td class="text-center">5</td>
                                      <td class="text-left">Autonomous learner who accesses and evaluates support from a broad range of sources</td>
                                      <td class="text-left">Broad range of contexts Adaptability within and across contexts Specialisation in one or more contexts </td>
                                      <td class="text-left">Highly complex texts Highly embedded information Includes highly specialised language and symbolism</td>
                                      <td class="text-left">Sophisticated task conceptualisation, organisation and analysis Processes include synthesising, critically reflecting, evalua</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                      <div class="horizontal-line-wrapper">
                        <h3>Steps in the assessment process</h3>
                      </div>

                      <div class="form-padding-left-right form-template">
                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 1: The assessment interview</b></h4>

                            <p class="px-12-font">The assessment process should begin with an interview with the candidate. Use the PART A of test to guide the interview.</p>
                            <p class="px-12-font">The assessor should put the candidate at ease and explain that the purpose of the LLN test interview is to gather information about their educational background and LLN skill level to help determine future training support needs. They should also explain that the assessment will include a one-to-one chat and then some time will be given for the candidate to complete tasks of PART B. Assessors should encourage candidates to feel comfortable and ask questions at any time.</p>
                            <p class="px-12-font">The interview is an opportunity for the assessor to gather information about the candidate’s oral communication and learning skills. Assessors can also start thinking about which tasks may be appropriate, depending on the candidate’s background, interest areas and future training goals.</p>

                            <p class="px-12-font">PART A should be completed by the assessor in conversation with the candidate. Not all questions will be relevant. The form includes prompts for the assessor to flesh out questions where appropriate, but they could also use their own prompts.</p>
                            <p class="px-12-font">The self-reflection (included in PART A) is also designed to be completed through interview. It is a task to encourage candidates to talk about the skills they have and the skills they would like to develop. </p>
                            <p class="px-12-font no-margin">Because they are conducted orally, the assessment interview and the self-assessment are ways of specifically collecting information about the candidate’s oral communication skills.</p>
                            <p class="px-12-font">Ideally, an assessment interview would be conducted in a quiet place on a one-to-one basis</p>
                        </div>

                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 2: PART B Assessment tasks</b></h4>
                            
                            <p class="px-12-font">There are two assessment tasks in PART B. These are useful to get an idea of the candidate’s skill level. The tasks can provide valuable information about the candidate’s ability to cope with specific skills and language relevant to particular training.</p>
                            <p class="px-12-font">Remember to consider the support, context, text and task complexity factors when selecting the tasks. For example, a level 3 task given with a high level of support will deem the task level 2 in many cases.</p>
                        </div>

                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 3: Test by candidate</b></h4>
                            
                            <p class="px-12-font">There are two assessment tasks in PART B. These are useful to get an idea of the candidate’s skill level. The tasks can provide valuable information about the candidate’s ability to cope with specific skills and language relevant to particular training.</p>
                            <p class="px-12-font">Remember to consider the support, context, text and task complexity factors when selecting the tasks. For example, a level 3 task given with a high level of support will deem the task level 2 in many cases.</p>
                        </div>

                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 4: Make the assessment judgement</b></h4>

                            <p class="px-12-font no-margin">Based on your knowledge of the ACSF skill levels, make a judgement about the candidate’s skill level.</p>
                            <p class="px-12-font">When making the judgement, remember to consider the support provided, the context, the task and the task complexity. For example, the candidate may have completed an ACSF level 3 task, but was only able to do it with support. The assessor will need to make a decision about whether this candidate is perhaps only performing at ACSF level 2 or lower. If the candidate’s performance indicates that they are not operating at the required ACSF level to complete the training successfully it might be necessary to recommend LLN support prior to, or during the training.</p>
                        </div>

                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 5: Communicate the assessment decision to the candidate</b></h4>

                            <p class="px-12-font">It is good practice to ensure that candidates understand more about their LLN skill levels, having undertaken the assessment. Explain the results of the assessment to the candidate, what the levels mean, and how they may impact on and training that the candidate may undertake. Answer any questions that candidates may have.</p>
                        </div>

                        <div>
                            <h4 class="iris-blue-font-color px-12-font"><b>Step 6: Complete the report</b></h4>

                            <p class="px-12-font">ill out the ACSF assessment record with details of the assessment.</p>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                    </section>
                    <div class="clearfix" style="height: 20px;"></div>
                  </div>
                </form>
              </div>
        <!-- End Form -->
          </div>

          <div role="tabpanel" class="tab-pane active" id="lln-getting-started">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

                    <div class="horizontal-line-wrapper">
                      <h3>Getting Started</h3>
                    </div>

                    <div class="form-padding-left-right form-template">
                      <p class="px-12-font">Please read this information carefully before commencing the LLN Test</p>
                      <div>

                          <h4 class="iris-blue-font-color px-12-font"><b>1.0 WELCOME</b></h4>

                          <p class="px-12-font no-margin">Welcome to the Elite Training Institute (ETI).</p>
                          <p class="px-12-font">Before you are able to commence your course, you must successfully complete the LLN Test. Please note that if you are enrolled in more than one course with ETI, you will only need to complete the LLN Test once.</p>

                      </div>

                      <div>
                          <h4 class="iris-blue-font-color px-12-font"><b>2.0 ENTRY REQUIREMENTS</b></h4>
                          
                          <p class="px-12-font no-margin">All students are required to undertake a Language Literacy and Numeracy (LLN) test prior to commencement of training.</p>
                          <p class="px-12-font no-margin">Remember to consider the support, context, text and task complexity factors when selecting the tasks. For example, a level 3 task given with a high level of support will deem the task level 2 in many cases.</p>
                          <p class="px-12-font">ETI requires ACSF level 3 in all areas for enrolment into:</p>
                          <ul class="crm-form-list px-12-font">
                            <li class="no-margin">CHC30113 - Certificate III Early Childhood Education and Care</li>
                            <li class="no-margin">CHC50113 - Diploma of Early Childhood Education and Care</li>
                          </ul>
                      </div>

                      <div>
                          <h4 class="iris-blue-font-color px-12-font"><b>3.0 LLN TEST</b></h4>

                          <h5 class="iris-blue-font-color px-12-font">Meeting Clause 1.7 of the Standards for RTOs 2015</h5>
                          <p class="px-12-font">The Standards for Registered Training Organisations (SRTOs) 2015 requires all RTOs to determine the support services necessary for individuals to meet the requirements of their desired training product, as outline in clause 1.7 (see clause below). As part of meeting this standard, we require that all prospective learners complete the LLN Test.</p>

                          <h5 class="iris-blue-font-color px-12-font text-center">Clause 1.7 from the Standards for Registered Training Organisations 2015:</h5>
                          <p class="px-12-font text-center">The RTO determines the support needs of individual learners and provides access to the educational and support services <br> necessary for the individual learner to meet the requirements of the training product as specified in training packages or VET <br> accredited courses.</p>

                          <h5 class="iris-blue-font-color px-12-font">Format of LLN Test</h5>
                          <p class="px-12-font">The LLN Test covers the five foundation skills (i.e. numeracy, learning, writing, reading and oral component). Please ensure you allocate time to complete the LLN Test in full.</p>
                      </div>

                      <div>
                          <h4 class="iris-blue-font-color px-12-font"><b>4.0 STARTING THE LLN TEST</b></h4>

                          <p class="px-12-font">Be honest and complete this test without any external help although you can ask your trainer/assessor/staff for any questions about the requirements of this test and follow the instructions</p>
                      </div>

                      <div>
                          <h4 class="iris-blue-font-color px-12-font"><b>5.0 COMMENCEMENT OF TRAINING</b></h4>

                          <p class="px-12-font">Once you have successfully completed the LLN Test, the outcome will be communicated to you and training will be commenced accordingly.</p>
                      </div>

                      <div>
                          <h4 class="iris-blue-font-color px-12-font"><b>6.0 SUPPORT SERVICES</b></h4>

                          <p class="px-12-font">ETI recognises the importance of adequate skills in English. LLN improving literacy skills will assist in ensuring education is available to all. LLN test has been designed to describe variations in arrangements for our clients who have specific language, literacy and numeracy needs and the support services available to these persons. Students with special needs in the areas of Language, Literacy and Numeracy will have access to assistance and support to fulfil their training needs.</p>
                          <p class="px-12-font">ETI recognises the importance of adequate skills in English. LLN improving literacy skills will assist in ensuring education is available to all. LLN test has been designed to describe variations in arrangements for our clients who have specific language, literacy and numeracy needs and the support services available to these persons. Students with special needs in the areas of Language, Literacy and Numeracy will have access to assistance and support to fulfil their training needs.</p>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    </section>
                    <div class="clearfix" style="height: 20px;"></div>
                  </div>
                </form>
              </div>
        <!-- End Form -->
          </div>

          <div role="tabpanel" class="tab-pane" id="personal-details">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <p class="px-14-font iris-blue-font-color no-margin bright-grey-font-color"><b>Purpose of the documents:</b></p>
                            <p class="px-12-font bright-grey-font-color">The purpose of this test is to ensure you have the language, literacy and numeracy skills needed to undertake your course of training. It will also show how we can assist you in any areas where you may need help to ensure your success to gain the qualification.</p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>  
                      <div class="horizontal-line-wrapper">
                        <h3>Personal Details</h3>
                      </div>
                      <div class="form-padding-left-right form-template">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="px-14-font iris-blue-font-color no-margin">Please provide the information required in the form below.</p>
                              <p class="px-12-font bright-grey-font-color">ETI respects your privacy and will not pass on your personal details to other organisations except as required by law.</p>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Candidate name: </label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Signature:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Course name:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Address:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Phones:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Student ID:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Date of Birth:</label>
                                <div class='input-group date generic-datepicker'>
                                  <input type='text' class="form-control"/>
                                  <span class="input-group-addon">
                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Country of Birth:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">How many years have you lived in Australia? </label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Gender:</label>
                                <select class="form-control">
                                  <option></option>
                                  <option>Female</option>
                                  <option>Male</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Languages you speak:</label>
                                <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </section>
                    <div class="clearfix" style="height: 20px;"></div>
                  </div>
                </form>
              </div>
        <!-- End Form -->
          </div>
          <div role="tabpanel" class="tab-pane " id="lln-partA">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
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
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What do you like about learning? Can you talk about how you think you like to learn?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">What helps you to learn? People learn in different ways. Some learn best by listening and writing, some from visual aids such as the whiteboard or the TV, some learn by watching and doing. Others like to learn in a group, while some people prefer to learn one-on-one with a support person.</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What are you good at?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">This may include reading (newspapers, emails, websites, notice boards, manuals); writing (letters, emails, forms, lists, messages, reports); numeracy (calculations, times tables, 24-hour clock, measurement, money and finance); speaking and listening (talking on the phone, asking for information, giving instructions or presentations).</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What would you like to learn?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">This might include specific vocational tasks, or it may be more general, such as reading novels or TV guides, writing letters, reading maps, using a calculator or reading a bus timetable.</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What helps you to learn?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">You could ask if there are barriers, for example the need for glasses; medication or family issues; unsuccessful previous schooling; English is second language. <br> Some may be able to identify a preference for small groups, extra time, one-on-one support, a mentor, tape recorder, computer, dictionary, calculator, etc.</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">Educational background</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">When did you leave school? For example, 1992 <br> Have you been enrolled in training (vocational training or tertiary studies) since you left school? If yes, which courses?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">Employment</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">In what sort of jobs have you worked?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="bright-grey-font-color px-10-font no-margin">Did you receive on-the-job training?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="bright-grey-font-color px-10-font no-margin">Did you do any writing at work? If so, what sort? What types of tasks involved writing? For example, taking telephone messages or filling in forms.</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="bright-grey-font-color px-10-font no-margin">Which skills would you require to be able to work in Early Childhood Education and Care industry?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What sorts of maths did you use at work?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">Did you use a calculator, count stock and materials, or measure? Did you use calculations? Give directions? Read maps?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="iris-blue-font-color px-12-font no-margin">What work skills do you already have?</span>
                              <br>
                              <span class="bright-grey-font-color px-10-font no-margin">Team work, using technology, communication, self-management, problem solving, learning, initiative, planning.</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="" style="line-height: 1;">
                              <span class="bright-grey-font-color px-10-font no-margin">What skills would you like to develop from this course?</span>
                            </label>
                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
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
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>fill in a time sheet</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>count and check change when shopping</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>Send a text message</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>use the internet to get information like telephone numbers</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>fill in a leave form</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>read a staff memo</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>use a computer to email</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>use a calculator for + – x ÷</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>read a work roster</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>follow instructions for mixing a solution or to follow a recipe</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>read a Google map or street directory</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>read and understand an MSDS</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td>use an equipment manual</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                         <tr> 
                                          <td>complete a log book</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                         <tr> 
                                          <td>write an incident report</td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-group no-margin">
                                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="horizontal-line-wrapper">
                          <h3>Assessor notes</h3>
                        </div>
                        <div class="form-padding-left-right form-template">
                           <div class="col-md-12">
                            <div class="form-group">
                              <textarea name="" id="" class="form-control" cols="30" rows="10" style="height: 300px;"></textarea>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                    </section>
                    <div class="clearfix" style="height: 20px;"></div>
                  </div>
                </form>
              </div>
        <!-- End Form -->
          </div>
            <div role="tabpanel" class="tab-pane" id="lln-partB">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <p class="px-14-font iris-blue-font-color bright-grey-font-color"><b>Assessor Instructions:</b></p>
                          <ul class="px-12-font bright-grey-font-color">
                            <li>This part (Part B) has to be completed by prospective student (Tasks 1 – 2)</li>
                            <li>Provide answers to the following questions</li>
                            <li>Print Clearly</li>
                            <li>Answer all questions</li>
                            <li>Use a pen or type the answers in a word document. Answers written in pencil will not be accepted</li>
                            <li>Do not cheat.</li>
                            <li>Your text may be in full sentences and may also include dot points. Use paragraphs and correct spelling and grammar. Check with your assessor if you need clarification. You may use the computer if you need to. Remember to plan your work before you start and to check your work before you finish.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                      <div class="horizontal-line-wrapper">
                        <h3>Task 1: Reading and Writing</h3>
                      </div>
                      <div class="form-padding-left-right form-template">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="px-14-font bright-grey-font-color"><b>This task covers:</b></p>
                              <ul class="px-12-font bright-grey-font-color">
                                <li>ACSF Reading Level 3</li>
                                <li>ACSF Writing Levels 2 and 3 (Q.1 and Q.2)</li>
                                <li>ACSF Writing Levels 3 or 4, depending on response (Q.3)</li>
                              </ul>
                            </div>
                            <div class="col-md-12">
                              <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.1</span> Given below is a poster by WorkSafe at www.worksafe.vic.gov.au/forklift. In your own words explain what you think is meant by the following words that appear on poster – Forklifts and people don’t mix.</p>
                              <div class="container-fluid">
                              	<div class="row">
                              		<div class="col-md-3">
		                                <img src="{{ asset('images/lln-form/q1-worksafe-img.jpg') }}" class="img-responsive">
		                              </div>
		                              <div class="col-md-9">
		                                <div class="form-group">
		                                  <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
		                                </div>
		                              </div>
                              	</div>
                              </div>
                            </div>
                            <div class="clearfix"></div>

                            
                            <div class="col-md-12 ">
                            	<div class="clearfix"></div>
                            	<div class="clearfix" style="height: 20px;"></div>
                              <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.2</span> sing the poster given below write a text that includes:</p>
                              <ul class="px-12-font bright-grey-font-color">
                                <li>an introduction</li>
                                <li>what is similar in this poster and poster in Q.1.</li>
                                <li>a description about what is different about the two posters</li>
                                <li>an opinion with supporting reasons about which poster is more effective in communicating its message.</li>
                              </ul>
                              <div class="container-fluid">
                              	<div class="row">
                              		<div class="col-md-3">
	                                <img src="{{ asset('images/lln-form/q1-worksafe-img.jpg') }}" class="img-responsive">
	                              </div>
	                              <div class="col-md-9">
	                                <div class="form-group">
	                                  <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
	                                </div>
	                              </div>
                              	</div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                            	<div class="clearfix"></div>
                            	<div class="clearfix" style="height: 20px;"></div>
                              <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.3</span> Choose one of the following topics and write as much as you can. Add extra sheet if you need.:</p>
                              <ul class="px-12-font bright-grey-font-color">
                                <li>Smoking should be banned outside workplaces as well as inside</li>
                                <li>CEOs are overpaid</li>
                                <li>Two weeks paternity leave should be a right for all male workers</li>
                                <li>Women make better managers</li>
                              </ul>
                              <p class="px-12-font bright-grey-font-color">Use paragraphs and correct spelling and grammar. Check with your assessor if you need clarification. You may use the computer if you need to, but cannot copy. Remember to plan your work before you start and to check your work before you finish.</p>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="horizontal-line-wrapper">
                        <h3>Task 2: Numeracy</h3>
                      </div>
                      <div class="form-padding-left-right form-template">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="px-12-font bright-grey-font-color">This task covers ACSF Numeracy Levels 2 and 3</p>
                              <div class="form-group">
                                <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.1</span> A box holds 15 lettuces. At the end of the day the farm crew had filled 86 boxes. How many lettuces is that in total? Show how you worked this out.</p>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.2</span> Diesel costs $1.86 per litre. The tractor’s fuel tank is empty. When full it holds 1200 litres. How much money would it cost to fill up the tractor with fuel? Show how you worked this out.</p>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.3</span> The table below shows the average price of petrol per litre for the period July 2009 to June 2010. Read the information and then answer the questions that follow.</p>
                              <div class="container-fluid">
                          		<div class="row">
                              <div class="col-md-6">
                                  <div class="datatable-wrapper box-shadow">
                                    <table id="task2-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th width="50%">Month </th>
                                          <th width="50%">Average price/litre</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>July 2009 </td>
                                          <td>$1.14</td>
                                        </tr>
                                        <tr>
                                          <td>August 2009 </td>
                                          <td>$1.15</td>
                                        </tr>
                                        <tr>
                                          <td>September 2009 </td>
                                          <td>$1.13</td>
                                        </tr>
                                        <tr>
                                          <td>October 2009 </td>
                                          <td>$1.18</td>
                                        </tr>
                                        <tr>
                                          <td>November 2009 </td>
                                          <td>$1.20</td>
                                        </tr>
                                        <tr>
                                          <td>December 2009 </td>
                                          <td>$1.22</td>
                                        </tr>
                                        <tr>
                                          <td>January 2010 </td>
                                          <td>$1.26</td>
                                        </tr>
                                        <tr>
                                          <td>February 2010 </td>
                                          <td>$1.23</td>
                                        </tr>
                                        <tr>
                                          <td>March 2010 </td>
                                          <td>$1.24</td>
                                        </tr>
                                        <tr>
                                          <td>April 2010 </td>
                                          <td>$1.23</td>
                                        </tr>
                                        <tr>
                                          <td>May 2010 </td>
                                          <td>$1.27</td>
                                        </tr>
                                        <tr>
                                          <td>June 2010 </td>
                                          <td>$1.30</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                              </div>
                              <div class="col-md-6">
                              <ol type="a" class="px-12-font bright-grey-font-color">
                                <li>In which month was the petrol price the lowest?
                                    <p class="px-12-font bright-grey-font-color"><input type="text" style="width: 150px;" class="form-control position-relative display-inlineblock" id="" value=""> September 2009 <input type="text" style="width: 150px;" class="form-control position-relative display-inlineblock" id="" value=""></p>
                                </li>
                                <li>In which two months was the price of petrol the same?
                                  <p class="px-12-font bright-grey-font-color"><input type="text" style="width: 85px;" class="form-control position-relative display-inlineblock" id="" value=""> April 2010 <input type="text" style="width: 85px;" class="form-control position-relative display-inlineblock" id="" value="">  February 2010 <input type="text" style="width: 85px;" class="form-control position-relative display-inlineblock" id="" value=""></p>
                                </li>
                                <li>In which month was the price of petrol the highest?
                                  <p class="px-12-font bright-grey-font-color"><input type="text" style="width: 150px;" class="form-control position-relative display-inlineblock" id="" value=""> June 2010 <input type="text" style="width: 150px;" class="form-control position-relative display-inlineblock" id="" value=""></p>
                                </li>
                                <li>In which month did the price of petrol increase the most?
                                  <p class="px-12-font bright-grey-font-color"> Sept to Oct 2009 <input type="text" style="width: 150px;" class="form-control position-relative display-inlineblock" id="" value=""></p>
                                </li>
                                <li>What was the general trend in the price of petrol over this 12 month period?
                                <br>
                                  Price of the petrol increases the second half of the calendar year (2009) and then the price dropped during the first half of the calendar year 2010 before showing an upward trend again as it approaches mid-year.</li>
                              </ol> 
                              </div>
                              </div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                            <div class="clearfix" style="height: 20px;"></div>
                            <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.4</span> HandyStores is having a sale. All items have been reduced by 30%. Complete the table to show the sale price of the items. Show how you worked out your answers.</p>
                            <div class="datatable-wrapper box-shadow">
                                    <table id="task2-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th width="35%">Item</th>
                                          <th width="35%">Normal Price</th>
                                          <th width="35%">Sale price – 30% off</th>
                                        </tr>
                                          
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Men’s woollen socks</td>
                                          <td>2 pair pack for $20.00</td>
                                          <td><input type="text" class="form-control" id="" value=" 28"></td>
                                        </tr>
                                        <tr>
                                          <td>Children’s pyjamas </td>
                                          <td>$18.00 </td>
                                          <td><input type="text" class="form-control" id="" value="12.6"></td>
                                        </tr>
                                        <tr>
                                          <td>Women’s jumpers </td>
                                          <td>$35.00 </td>
                                          <td><input type="text" class="form-control" id="" value="24.5"></td>
                                        </tr>
                                        <tr>
                                          <td>Sports shoes </td>
                                          <td>$50.00 </td>
                                          <td><input type="text" class="form-control" id="" value="35"></td>
                                        </tr>
                                        <tr>
                                          <td>Football scarves </td>
                                          <td>$22.00 </td>
                                          <td><input type="text" class="form-control" id="" value="15.4"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                            <div class="clearfix" style="height: 20px;"></div>
                              <div class="col-md-6">
                                <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.5</span> A phone survey asked 300 people the following question:
                                <br>
                                Should Australia export live cattle? Answer: Yes or No.
                                <br>
                                The results of the survey were: Yes 45% No 55%
                                </p>
                                <ol type="a" class="px-12-font bright-grey-font-color">
                                  <li> How many people voted yes? Show how you worked this out.
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="" value="">
                                      </div>
                                  </li>
                                  <li> How many people voted no? Show how you worked this out.
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="" value="">
                                      </div>
                                  </li>
                                  <li> Plot a bar graph on the grid below to illustrate the poll results.
                                       <img src="{{ asset('images/lln-form/task2-q5-c.jpg') }}" class="img-responsive" style="    width: 40%;margin: 0 auto;">
                                  </li>
                                </ol>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div class="col-md-12">
                              <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.6</span> Use the information from the signs below to answer the questions that follow. Show how you worked out all your answers. </p>
                              <div class="container-fluid">
                              	<div class="row">
                              		<div class="col-md-6">
	                                <img src="{{ asset('images/lln-form/task2-q6.jpg') }}" class="img-responsive" style="padding-top: 10%;">
	                              </div>
	                              <div class="col-md-6">
	                                <ol type="a" class="px-12-font bright-grey-font-color">
	                                    <li> What are the total hours that Café Relaxo is open in one full week?
	                                      <div class="form-group">
	                                        <input type="text" class="form-control" id="" value="">
	                                      </div>
	                                    </li>
	                                    <li> What are the total hours that Café Cino is open in one full week?
	                                        <div class="form-group">
	                                        <input type="text" class="form-control" id="" value="">
	                                      </div>
	                                    </li>
	                                    <li>Tony works in Café Relaxo on the following days – Monday, Wednesday, Thursday, Friday. Ramos works in Café Cino on Wednesday, Saturday, Sunday. Who works more hours in a week, Tony or Ramos? Show how you worked this out. (Ignore break times)
	                                      <div class="form-group">
	                                        <input type="text" class="form-control" id="" value="">
	                                      </div>
	                                    </li>
	                                    <li> Ramos is paid $18.00/hour. What is his total pay for one week (before tax)? Show how you worked this out.
	                                      <div class="form-group">
	                                        <input type="text" class="form-control" id="" value="">
	                                      </div>
	                                    </li>
	                                    <li>Tony is paid 25%/hour more than Ramos. What is his total pay for one week (before tax)? Show how you worked this out.
	                                      <div class="form-group">
	                                        <input type="text" class="form-control" id="" value="">
	                                      </div>
	                                    </li>
	                                  </ol>
	                              </div>
                              	</div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div class="col-md-12">
                               <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.7</span> The perimeter of a rectangle is 64m. What are three possible measurements for the length and width? What is the area of these rectangles?</p>
                              <div class="datatable-wrapper box-shadow">
                                    <table id="task2-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th width="25%">Answer Number </th>
                                          <th width="25%"> Length </th>
                                          <th width="25%">Width </th>
                                          <th width="25%">Area</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-center">a) </td>
                                          <td><input type="text" class="form-control" id="" value="16"> </td>
                                          <td><input type="text" class="form-control" id="" value="16"> </td>
                                          <td><input type="text" class="form-control" id="" value="256"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">b) </td>
                                          <td><input type="text" class="form-control" id="" value="10"> </td>
                                          <td><input type="text" class="form-control" id="" value="22"></td>
                                          <td><input type="text" class="form-control" id="" value="220"></td>
                                        </tr>
                                         <tr>
                                          <td class="text-center">c) </td>
                                          <td><input type="text" class="form-control" id="" value="8"> </td>
                                          <td><input type="text" class="form-control" id="" value="24"></td>
                                          <td><input type="text" class="form-control" id="" value="192"></td>
                                        </tr>
                                      </tbody>
                                      </table>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div class="col-md-12">
                               <p class="px-12-font bright-grey-font-color"><span class="iris-blue-font-color">Q.8</span> Fill in the gaps in the following table. Simplify the fraction in column one. The first one has been done for you.</p>
                              <div class="datatable-wrapper box-shadow">
                                    <table id="task2-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th width="30%">Fraction </th>
                                          <th width="30%">Decimal </th>
                                          <th width="30%">Percentage</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-center">1/10 </td>
                                          <td><input type="text" class="form-control" id="" value="0.1"> </td>
                                          <td><input type="text" class="form-control" id="" value="10%"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">1/5 </td>
                                          <td><input type="text" class="form-control" id="" value="0.2"> </td>
                                          <td><input type="text" class="form-control" id="" value="20%"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">7/10 </td>
                                          <td><input type="text" class="form-control" id="" value="0.7"> </td>
                                          <td><input type="text" class="form-control" id="" value="70%"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">6.5/10 </td>
                                          <td><input type="text" class="form-control" id="" value=".65 "></td>
                                          <td><input type="text" class="form-control" id="" value="65%"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">6/25 </td>
                                          <td> <input type="text" class="form-control" id="" value=".64"></td>
                                          <td><input type="text" class="form-control" id="" value="64%"></td>
                                        </tr>
                                      </tbody>
                                      </table>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </section>
                    <div class="clearfix" style="height: 20px;"></div>
                  </div>
                </form>
              </div>
        <!-- End Form -->
          </div>
          <div role="tabpanel" class="tab-pane " id="outcome">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <p class="px-14-font iris-blue-font-color bright-grey-font-color"><b>Note to Assessor:</b></p>
                            <p class="px-12-font bright-grey-font-color"><i>Use the following form to record information about the LLN assessment and your judgement of the candidate’s skills levels. Include any notes that may be useful.</i></p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="horizontal-line-wrapper">
                        <h3>Core LLN skill assessment summary</h3>
                      </div>
                      <div class="form-padding-left-right form-template">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Candidate’s name:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Date assessed:</label>
                                <div class='input-group date generic-datepicker'>
                                  <input type='text' class="form-control"/>
                                  <span class="input-group-addon">
                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Assessed by:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <p class="px-12-font bright-grey-font-color"><b>Summary of core LLN skills (refer to the ACSF for details of what defines the levels of performance within each skill).</b></p>
                               <div class="datatable-wrapper box-shadow">
                                    <table id="task2-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th width="10%">Skill</th>
                                          <th width="30%"> Support <br> <span class="px-8-font">*Note the level of support given, if any, during assessment</span></th>
                                          <th width="30%">Notes</th>
                                          <th width="30%">ACSF level of performance</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Learning</td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td>Reading</td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td>Writing</td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td>Oral communication</td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td>Numeracy</td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                          <td><textarea name="" id="" class="form-control" cols="30" rows="10"></textarea></td>
                                        </tr>
                                      </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="clearfix" style="height: 20px;"></div>
                              <p class="px-12-font bright-grey-font-color"><i>The use of this test does not remove the need to consult with a Language, Literacy and Numeracy (LLN) specialist or external networks and agencies if and when required. Fill out the table below based on your observations and the conversations held.</i></p>
                              <p class="px-12-font bright-grey-font-color">I have assessed the student’s performance of the test and based on the results obtained, the student:</p>
                              <div class="form-group">
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="checkbox-1">
                                <label class="checkbox-input" for="checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-1" style="width: 90%;position: relative;line-height: 130%;"><span class="iris-blue-font-color"  >Has demonstrated they have the required level of ACSF</span> to enable them to complete the course successfully with no support in this area required.</label>
                              <div class="clearfix" style="height: 10px;"></div>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="checkbox-2">
                                <label class="checkbox-input" for="checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-2" style="width: 90%;top: 15px;position: relative;line-height: 130%;"><span class=" iris-blue-font-color"  >Does not have a required level of ACSF</span> and may require extensive additional support to complete this course successfully. I am referring this student for support that can be offered with possible referral to external agencies if and when required.</label>
                              <div class="clearfix" style="height: 10px;"></div>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="checkbox-3">
                                <label class="checkbox-input" for="checkbox-3"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-3" style="width: 90%;top: 15px;position: relative;line-height: 130%;"><span class="iris-blue-font-color">Has demonstrated they may require additional support for required ACSF level</span> and I am able to provide this. The student and I will develop an action plan to ensure they are given the opportunity to develop their language, literacy and/or numeracy skills to enable them to complete the course successfully.</label>
                            </div>
                            <div class="clearfix" style="height: 20px;"></div>
                            <div class="form-group">
                              <label for="" style="line-height: 1.5;">Please outline the arrangements made for supporting the student through the course.</label>
                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Assessor Name:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Assessor Signature:</label>
                                <input type="number" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Date:</label>
                                <div class='input-group date generic-datepicker'>
                                  <input type='text' class="form-control"/>
                                  <span class="input-group-addon">
                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
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
@endsection