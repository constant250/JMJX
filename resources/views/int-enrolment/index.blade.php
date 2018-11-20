@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">International Student Enrolment Form</h1>
      <p class="px-12-font m-0">Applicants must complete all sections and answer all questions (use BLOCK letters).</p>
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
            <a href="#enrolment-part-a" aria-controls="enrolment-part-a" role="tab" data-toggle="tab">Part A</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-b" aria-controls="enrolment-part-b" role="tab" data-toggle="tab">Part B</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-c" aria-controls="enrolment-part-c" role="tab" data-toggle="tab">Part C</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-d" aria-controls="enrolment-part-d" role="tab" data-toggle="tab">Part D</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-e" aria-controls="enrolment-part-e" role="tab" data-toggle="tab">Part E</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-f" aria-controls="enrolment-part-f" role="tab" data-toggle="tab">Part F</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-g" aria-controls="enrolment-part-g" role="tab" data-toggle="tab">Part G</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-h" aria-controls="enrolment-part-h" role="tab" data-toggle="tab">Part H</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-i" aria-controls="enrolment-part-i" role="tab" data-toggle="tab">Part I</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-j" aria-controls="enrolment-part-j" role="tab" data-toggle="tab">Part J</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-k" aria-controls="enrolment-part-k" role="tab" data-toggle="tab">Part K</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-l" aria-controls="enrolment-part-l" role="tab" data-toggle="tab">Part L</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-m" aria-controls="enrolment-part-m" role="tab" data-toggle="tab">Part M</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">

          <div role="tabpanel" class="tab-pane active" id="enrolment-part-a">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>COURSE SELECTION <span class="px-10-font">(Please tick box)</span></h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                  <div class="col-md-12">
				                    <div class="table-responsive">
                        	<div class="datatable-wrapper box-shadow">
                         	<table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                        <thead>
				                          <tr>
				                            <th width="5%">Select Course</th>
				                            <th width="10%">Course Code</th>
				                            <th width="35%">Course Name</th>
				                            <th width="15%">Location</th>
				                            <th width="12.5%">CRICOS Code</th>
				                            <th width="12.5%">Course Duration</th>
				                          </tr>
				                        </thead>
				                        <tbody>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-1" name="select_course">
				                                <label class="checkbox-input" for="course-1"></label>
				                              </div> 
				                            </td>
				                            <td>CHC30113 </td>
				                            <td class="text-left">Certificate III in Early Childhood Education and Care</td>
				                            <td class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="qld-1" name="select_location_1">
				                                <label class="radio-input" for="qld-1"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="qld-1" style="margin-left: 10px; line-height: 1.5;">Queensland</label>
				                              <div class="clearfix" style="height: 5px;"></div>
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="vic-1" name="select_location_1">
				                                <label class="radio-input" for="vic-1"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="vic-1" style="margin-left: 10px; line-height: 1.5;">Victoria</label>
				                            </td>
				                            <td>090063F</td>
				                            <td>58 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-2" name="select_course">
				                                <label class="checkbox-input" for="course-2"></label>
				                              </div>
				                            </td>
				                            <td>CHC50113</td>
				                            <td class="text-left">Diploma of Early Childhood Education and Care</td>
				                            <td class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="qld-2" name="select_location_2">
				                                <label class="radio-input" for="qld-2"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="qld-2" style="margin-left: 10px; line-height: 1.5;">Queensland</label>
				                              <div class="clearfix" style="height: 5px;"></div>
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="vic-2" name="select_location_2">
				                                <label class="radio-input" for="vic-2"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="vic-2" style="margin-left: 10px; line-height: 1.5;">Victoria</label>
				                            </td>
				                            <td>090064E</td>
				                            <td>90 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-3" name="select_course">
				                                <label class="checkbox-input" for="course-3"></label>
				                              </div>
				                            </td>
				                            <td>SIT30816</td>
				                            <td colspan="2" class="text-left">Certificate III in Commercial Cookery (Location: Victoria only)</td>
				                            <td>097109G</td>
				                            <td>55 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-4" name="select_course">
				                                <label class="checkbox-input" for="course-4"></label>
				                              </div>
				                            </td>
				                            <td>SIT40516</td>
				                            <td colspan="2" class="text-left">Certificate IV in Commercial Cookery (Location: Victoria only)</td>
				                            <td>097111B</td>
				                            <td>73 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-5" name="select_course">
				                                <label class="checkbox-input" for="course-5"></label>
				                              </div>
				                            </td>
				                            <td>SIT50416</td>
				                            <td colspan="2" class="text-left">Diploma of Hospitality Management (Location: Victoria only)</td>
				                            <td>097110C</td>
				                            <td>73 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-6" name="select_course">
				                                <label class="checkbox-input" for="course-6"></label>
				                              </div>
				                            </td>
				                            <td>SIT60316 </td>
				                            <td colspan="2" class="text-left">Advanced Diploma of Hospitality Management (Location: Victoria only)</td>
				                            <td>097112A</td>
				                            <td>104 weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-7" name="select_course">
				                                <label class="checkbox-input" for="course-7"></label>
				                              </div>
				                            </td>
				                            <td>CPC30211</td>
				                            <td class="text-left">Certificate III in Carpentry</td>
				                            <td class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="qld-3" name="select_locatio_2n_">
				                                <label class="radio-input" for="qld-3"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="qld-3" style="margin-left: 10px; line-height: 1.5;">Queensland</label>
				                              <div class="clearfix" style="height: 5px;"></div>
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="vic-3" name="select_locatio_2n_">
				                                <label class="radio-input" for="vic-3"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="vic-3" style="margin-left: 10px; line-height: 1.5;">Victoria</label>
				                            </td>
				                            <td>098089J</td>
				                            <td>52 Weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-8" name="select_course">
				                                <label class="checkbox-input" for="course-8"></label>
				                              </div>
				                            </td>
				                            <td>CPC50210</td>
				                            <td class="text-left">Diploma of Building and Construction (Building)</td>
				                            <td class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="qld-4" name="select_location_4"> 
				                                <label class="radio-input" for="qld-4"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="qld-4" style="margin-left: 10px; line-height: 1.5;">Queensland</label>
				                              <div class="clearfix" style="height: 5px;"></div>
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="vic-4" name="select_location_4"> 
				                                <label class="radio-input" for="vic-4"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="vic-4" style="margin-left: 10px; line-height: 1.5;">Victoria</label>
				                            </td>
				                            <td>098090E</td>
				                            <td>52 Weeks</td>
				                          </tr>

				                          <tr>
				                            <td>
				                              <div class="crm-form-checkbox position-relative center-block">
				                                <input type="checkbox" class="" id="course-9" name="select_course">
				                                <label class="checkbox-input" for="course-9"></label>
				                              </div>
				                            </td>
				                            <td>CPP30411</td>
				                            <td colspan="2" class="text-left">Certificate III in Security Operations (Queensland Location Only)</td>
				                            <td>098091D</td>
				                            <td>7 weeks</td>
				                          </tr>

				                        </tbody>
				                      </table>
				                     </div>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <br>
				                  <div class="row">
				                  	<div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">What is your preferred Intake month for the first chosen course?</label>
				                      <select class="form-control" name="preferred_month">
				                        <option></option>
				                        <option>January</option>
				                        <option>February</option>
				                        <option>March</option>
				                        <option>April</option>
				                        <option>May</option>
				                        <option>June</option>
				                        <option>June</option>
				                        <option>August</option>
				                        <option>September</option>
				                        <option>October</option>
				                        <option>November</option>
				                        <option>December</option>
				                      </select>
				                      <p class="px-12-font"><b>Note:</b> Please make sure you refer to the specific entry requirements that apply to the course you are enrolling for.</p>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-b">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>STUDENT INFORMATION</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Title:</label>
				                      <select class="form-control" name="title">
				                        <option></option>
				                        <option>Mr.</option>
				                        <option>Ms.</option>
				                        <option>Mrs.</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">First Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="fname">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Middle Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="mname">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Last Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="lname">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                   <div class="form-group">
				                     <label for="">Date of Birth:</label>
				                     <div class='input-group date generic-datepicker'>
				                       <input type='text' class="form-control" name="dob" />
				                       <span class="input-group-addon">
				                           <i class="fa fa-calendar" aria-hidden="true"></i>
				                       </span>
				                     </div>
				                   </div>
				                  </div>
				                  <div class="col-md-6">
				                     <div class="form-group">
				                      <label for="">Country of Birth:</label>
				                      <select class="form-control" name="country_birth">
				                        <option></option>
				                        <option>Australia</option>
				                        <option>Australia</option>
				                        <option>Australia</option>
				                        <option>Australia</option>
				                        <option>Australia</option>
				                      </select>
				                     </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-6">
				                     <div class="form-group">
				                      <label for="">Gender:</label>
				                      <select class="form-control" name="gender">
				                        <option></option>
				                        <option>Male</option>
				                        <option>Female</option>
				                      </select>
				                     </div>
				                    </div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                        <label for="">Country of Citizenship:</label>
				                        <select class="form-control" name="country_citizenship">
				                          <option></option>
				                          <option>Australia</option>
				                          <option>Australia</option>
				                          <option>Australia</option>
				                          <option>Australia</option>
				                          <option>Australia</option>
				                        </select>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                        <label for="">Passport Number:</label>
				                        <input type="text" class="form-control" id="" value="" name="passport_num">
				                      </div>
				                    </div>
				                    <div class="col-md-6">
				                     <div class="form-group">
				                       <label for="">Expiry Date:</label>
				                       <div class='input-group date generic-datepicker'>
				                         <input type='text' class="form-control" name="passport_expiry" />
				                         <span class="input-group-addon">
				                             <i class="fa fa-calendar" aria-hidden="true"></i>
				                         </span>
				                       </div>
				                     </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">Do you hold permanent residency or a current Australian visa?</label>
				                       <br>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="residency-yes" name="australian_residency">
				                          <label class="radio-input" for="residency-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="residency-yes">Yes</label>

				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="residency-no" name="australian_residency">
				                          <label class="radio-input" for="residency-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="residency-no">No</label>

				                        <p class="display-inlineblock px-10-font"> If Yes, please provide a copy along with the following details</p>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                        <label for="">Visa Type:</label>
				                        <input type="text" class="form-control" id="" value="" name="visa_type">
				                      </div>
				                    </div>
				                    <div class="col-md-6">
				                     <div class="form-group">
				                       <label for="">Visa Expiry Date:</label>
				                       <div class='input-group date generic-datepicker'>
				                         <input type='text' class="form-control" name="visa_expiry" />
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
				                  <h3>Contact Details</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Phone Number:</label>
				                      <input type="text" class="form-control" id="" value="" name="phone">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Mobile Number:</label>
				                      <input type="text" class="form-control" id="" value="" name="mobile">
				                    </div>
				                  </div>

				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Work Phone Number: (Optional)</label>
				                      <input type="text" class="form-control" id="" value="" name="wphone">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Work Mobile Number: (Optional)</label>
				                      <input type="text" class="form-control" id="" value="" name="wmobile">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="" class="not-required">Email Address</label>
				                      <input type="email" class="form-control" id="" value="" name="email">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                	</div>
				                </div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Current Address Details</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">State:</label>
				                      <select class="form-control" name="current_state">
				                        <option></option>
				                        <option>NSW - New South Wales</option>
				                        <option>QLD - Queensland</option>
				                        <option>VIC - Victoria</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Suburb:</label>
				                      <select class="form-control" name="current_suburb">
				                        <option></option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Locality:</label>
				                      <select class="form-control" name="current_locality">
				                        <option></option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Postcode:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_postcode">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Building Property Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_bldg_name">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Flat Unit:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_flat_unit">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Street Number:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_st_num">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Street Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_st_name">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="" class="not-required">Postal Delivery Box:</label>
				                      <input type="text" class="form-control" id="" value="" name="current_postal_box">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                	</div>
				                </div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Home Address Details</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">State:</label>
				                      <select class="form-control" name="home_state">
				                        <option></option>
				                        <option>NSW - New South Wales</option>
				                        <option>QLD - Queensland</option>
				                        <option>VIC - Victoria</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Suburb:</label>
				                      <select class="form-control" name="home_suburb">
				                        <option></option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                        <option>1001 - SYDNEY</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Locality:</label>
				                      <select class="form-control" name="home_locality">
				                        <option></option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                        <option>Aberdeen, NSW</option>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Postcode:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_postcode">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Building Property Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_bldg_name">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Flat Unit:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_flat_unit">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Street Number:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_st_num">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Street Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_st_name">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="" class="not-required">Postal Delivery Box:</label>
				                      <input type="text" class="form-control" id="" value="" name="home_postal_box">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                	</div>
				                </div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Person to Contact in Case of Emergency: </h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="emergency_name">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Relationship:</label>
				                      <input type="text" class="form-control" id="" value="" name="emergency_relationship">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Email:</label>
				                      <input type="email" class="form-control" id="" value="" name="emergency_email">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Address:</label>
				                      <input type="text" class="form-control" id="" value="" name="emergency_address">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Mobile:</label>
				                      <input type="text" class="form-control" id="" value="" name="emergency_mobile">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Telephone:</label>
				                      <input type="text" class="form-control" id="" value="" name="emergency_telephone">
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-c">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>ENGLISH LANGUAGE PROFICIENCY</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                    <div class="col-md-6">
				                      <div class="form-group">
				                       <label for="">Is English your first language?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="language-yes" name="first_language">
				                          <label class="radio-input" for="language-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="language-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="language-no" name="first_language">
				                          <label class="radio-input" for="language-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="language-no">No</label>
				                      </div>
				                    </div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                        <label for=""> What is your first Language?</label>
				                        <input type="text" class="form-control" id="" value="" name="emergency_telephone">
				                      </div>
				                    </div>

				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">Have you studied at secondary level with English as the language Instruction?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="instruction-yes" name="language_instruction">
				                          <label class="radio-input" for="instruction-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="instruction-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="instruction-no" name="language_instruction">
				                          <label class="radio-input" for="instruction-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="instruction-no">No</label>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">Are you of Aboriginal or Torres Strait Islander origin?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="indigenous-no" name="indigenous_locality">
				                          <label class="radio-input" for="indigenous-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="indigenous-no">No</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="indigenous-aboriginal" name="indigenous_locality">
				                          <label class="radio-input" for="indigenous-aboriginal"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="indigenous-aboriginal">Yes, Aboriginal</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="indigenous-islander" name="indigenous_locality">
				                          <label class="radio-input" for="indigenous-islander"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="indigenous-islander">Yes, Torres Strait Islander</label>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">Do you have an English Language Score?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="score-yes" name="english_score">
				                          <label class="radio-input" for="score-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="score-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="score-no" name="english_score">
				                          <label class="radio-input" for="score-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="score-no">No</label>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-4">
				                      <div class="form-group">
				                        <label for="">Language Exam:</label>
				                        <input type="text" class="form-control" id="" value="" name="language_exam">
				                      </div>
				                    </div>
				                    <div class="col-md-4">
				                      <div class="form-group">
				                        <label for="">Band Score:</label>
				                        <input type="number" class="form-control" id="" value="" name="band_score">
				                      </div>
				                    </div>
				                    <div class="col-md-4">
				                      <div class="form-group">
				                        <label for="">Test date:</label>
				                         <div class='input-group date generic-datepicker'>
				                           <input type='text' class="form-control" name="test_date" />
				                           <span class="input-group-addon">
				                               <i class="fa fa-calendar" aria-hidden="true"></i>
				                           </span>
				                         </div>
				                      </div>
				                    </div>
				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">Do you wish to apply for an English Language course? </label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="course-yes" name="english_course">
				                          <label class="radio-input" for="course-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="course-no" name="english_course">
				                          <label class="radio-input" for="course-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-no">No</label>
				                        <div class="clearfix" style="height: 10px;"></div>
				                        <p class="px-12-font"><b>Note:</b> You may be required to take an English Language program if you do not meet the necessary entry requirements. Your English proficiency will determine the course duration for English Course. Elite Training Institute may refer you to complete English course to different provider, which will incur some extra cost. Please refer to the website for entry requirements for Elite Training Institute.</p>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-d">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>PREVIOUS EDUCATION/ ACADEMIC QUALIFICATIONS</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <div class="table-responsive">
                        	<div class="datatable-wrapper box-shadow">
                        	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                        <thead>
				                          <tr>
				                            <th colspan="4" class="text-left">What is your highest COMPLETED school level? (Tick ONE box only):</th>
				                          </tr>
				                        </thead>
				                        <tbody>
				                          <tr>
				                            <td colspan="4">If you are currently enrolled in secondary education, the Highest school level completed refers to the highest school level you have actually completed and not the level you are currently undertaking. For example, if you are currently in Year 10 the Highest school level completed is Year 9.</td>
				                          </tr>
				                          <tr>
				                            <td width="25%">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="yr-12" name="school_level">
				                                <label class="radio-input" for="yr-12"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yr-12" style="margin-left: 10px; line-height: 1.5;"> Year 12 or equivalent</label>
				                            </td>
				                            <td width="25%">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="yr-11" name="school_level">
				                                <label class="radio-input" for="yr-11"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yr-11" style="margin-left: 10px; line-height: 1.5;"> Year 11 or equivalent</label>
				                            </td>
				                            <td width="25%">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="yr-10" name="school_level">
				                                <label class="radio-input" for="yr-10"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yr-10" style="margin-left: 10px; line-height: 1.5;"> Year 10 or equivalent</label>
				                            </td>
				                            <td width="25%">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="yr-9" name="school_level">
				                                <label class="radio-input" for="yr-9"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yr-9" style="margin-left: 10px; line-height: 1.5;"> Year 9 or equivalent</label>
				                            </td>
				                          </tr>
				                        </tbody>
				                      </table>
				                     </div>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="clearfix" style="height: 15px;"></div>
				                  <div class="col-lg-12">
				                    <h3 class="px-14-font"><b>LIST DOWN ALL YOUR PREVIOUS EDUCATION</b></h3>
				                    <div class="table-responsive">
                        	<div class="datatable-wrapper box-shadow">
                        	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap add-row-table previous-education" cellspacing="0" width="100%">
				                        <thead>
				                          <tr>
				                            <th width="25%" colspan="2">Name of Institution</th>
				                            <th width="35%">Location of Institution</th>
				                            <th width="10%">Years Attended</th>
				                            <th width="25%">Award Received</th>
				                            <th width="5%" class="no-padding"><button class="add-col-btn" id="addEducation" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
				                          </tr>
				                        </thead>
				                        <tbody>
				                          <tr>
				                            <td>1</td>
				                            <td>
				                              <input type='text' class="form-control" name="institution_name" />
				                            </td>
				                            <td>
				                              <input type='text' class="form-control" name="institution_location" />
				                            </td>
				                            <td>
				                              <input type='number' class="form-control" name="yrs_attended" />
				                            </td>
				                            <td>
				                              <input type='text' class="form-control" name="award_received" />
				                            </td>
				                            <td><button class="btnDelEducation btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>
				                          </tr>
				                        </tbody>
				                      </table>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-e">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>PREVIOUS EMPLOYMENT/ WORK EXPERIENCE</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                  <div class="col-md-12">
				                    <div class="table-responsive">
                         <div class="datatable-wrapper box-shadow">
                           <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                        <thead>
				                          <tr>
				                            <th colspan="4" class="text-left">Of the following categories, which BEST describes your current employment status? (Tick one box only.)</th>
				                          </tr>
				                        </thead>
				                        <tbody>
				                          <tr>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="full-time" name="employment_status">
				                                <label class="radio-input" for="full-time"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="full-time" style="margin-left: 10px; line-height: 1.5;"> 1. Full-time employee</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="self-employed-1" name="employment_status">
				                                <label class="radio-input" for="self-employed-1"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="self-employed-1" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;"> 3. Self-employed – <br> not employing others</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="family-business" name="employment_status">
				                                <label class="radio-input" for="family-business"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="family-business" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;">5. Employed – unpaid worker <br> in a family business</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="unemployed-2" name="employment_status">
				                                <label class="radio-input" for="unemployed-2"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="unemployed-2" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;"> 7. Unemployed –  <br>seeking part-time work</label>
				                            </td>
				                          </tr>
				                          <tr>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="part-time" name="employment_status">
				                                <label class="radio-input" for="part-time"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="part-time" style="margin-left: 10px; line-height: 1.5;"> 2. Part-time employee</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="self-employed-2" name="employment_status">
				                                <label class="radio-input" for="self-employed-2"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="self-employed-2" style="margin-left: 10px; line-height: 1.5;"> 4. Self-employed – employing others</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="unemployed-1" name="employment_status">
				                                <label class="radio-input" for="unemployed-1"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="unemployed-1" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;"> 6. Unemployed –  <br>seeking full-time work</label>
				                            </td>
				                            <td width="25%" class="text-left">
				                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
				                                <input type="radio" class="" id="not-employed" name="employment_status">
				                                <label class="radio-input" for="not-employed"></label>
				                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="not-employed" style="margin-left: 10px; line-height: 1.5; vertical-align: -7px;"> 8. Not employed –  <br>not seeking employment</label>
				                            </td>
				                          </tr>
				                        </tbody>
				                      </table>
				                     </div>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="clearfix" style="height: 15px;"></div>
				                  <div class="col-lg-12">
				                    <h3 class="px-14-font"><b>LIST DOWN ALL YOUR JOB EXPERIENCES</b></h3>
				                    <div class="table-responsive">
                        	<div class="datatable-wrapper box-shadow">
                        	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap add-row-table job-experience" cellspacing="0" width="100%">
				                        <thead>
				                          <tr>
				                            <th width="25%" colspan="2">Employer</th>
				                            <th width="35%">Location</th>
				                            <th width="10%">Years Employed</th>
				                            <th width="25%">Position</th>
				                            <th width="5%" class="no-padding"><button class="add-col-btn" id="addJobExperience" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
				                          </tr>
				                        </thead>
				                        <tbody>
				                          <tr>
				                            <td>1</td>
				                            <td>
				                              <input type='text' class="form-control" name="employer" />
				                            </td>
				                            <td>
				                              <input type='text' class="form-control" name="employer_llocation" />
				                            </td>
				                            <td>
				                              <input type='number' class="form-control" name="yrs_employed" />
				                            </td>
				                            <td>
				                              <input type='text' class="form-control" name="position" />
				                            </td>
				                            <td><button class="btnDelExperience btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>
				                          </tr>
				                        </tbody>
				                      </table>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-f">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

					                <div class="horizontal-line-wrapper">
					                  <h3>STUDY REASON</h3>
					                </div>

					                <div class="form-padding-left-right form-template">
					                	<div class="row">
					                  <div class="col-md-12">
					                    <div class="table-responsive">
					                      <table class="crm-form-table" width="100%">
					                        <thead>
					                          <tr>
					                            <th colspan="4" class="text-left">Of the following categories, which BEST describes your main reason for undertaking this course/traineeship/ apprenticeship? (Tick one box only.)</th>
					                          </tr>
					                        </thead>
					                        <tbody>
					                          <tr>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="better-job" name="undertaking_reason">
					                                <label class="radio-input" for="better-job"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;"> To get a better job or promotion</label>
					                            </td>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock center-block" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="another-course" name="undertaking_reason">
					                                <label class="radio-input" for="another-course"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">To get into another course of study</label>
					                            </td>
					                          </tr>

					                          <tr>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="job-requirement" name="undertaking_reason">
					                                <label class="radio-input" for="job-requirement"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;"> It was a requirements of my job</label>
					                            </td>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock center-block" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="self-development" name="undertaking_reason">
					                                <label class="radio-input" for="self-development"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">For personal interest or self-development</label>
					                            </td>
					                          </tr>

					                          <tr>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="extra-skills" name="undertaking_reason">
					                                <label class="radio-input" for="extra-skills"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;"> I wanted extra skills for my job</label>
					                            </td>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock center-block" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="develop-business" name="undertaking_reason">
					                                <label class="radio-input" for="develop-business"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">To develop my existing business</label>
					                            </td>
					                          </tr>

					                          <tr>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="get-job" name="undertaking_reason">
					                                <label class="radio-input" for="get-job"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">To get a job </label>
					                            </td>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock center-block" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="start-business" name="undertaking_reason">
					                                <label class="radio-input" for="start-business"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">To start my own business</label>
					                            </td>
					                          </tr>

					                          <tr>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="different-career" name="undertaking_reason">
					                                <label class="radio-input" for="different-career"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">To try for a difference career. </label>
					                            </td>
					                            <td width="1%" class="text-left">
					                              <div class="crm-form-radio position-relative display-inlineblock center-block" style="vertical-align: 5px;">
					                                <input type="radio" class="" id="other-reasons" name="undertaking_reason">
					                                <label class="radio-input" for="other-reasons"></label>
					                              </div>
					                            </td>
					                            <td width="24%" class="text-left">
					                              <label class="display-inlineblock px-10-font checkbox-label label-right not-required" style="margin-left: 10px; line-height: 1.5;">Other reasons</label>
					                            </td>
					                          </tr>
					                        </tbody>
					                      </table>
					                    </div>
					                  </div>
					                  <div class="clearfix"></div>
					                  <div class="clearfix" style="height: 15px;"></div>
					                  <div class="col-md-12">
					                    <div class="form-group">
					                      <label for="">Why do you want to study your proposed course(s) in Australia and not in your home country? Please explain.</label>
					                      <textarea name="" id="" class="form-control" cols="30" rows="10" name="study_reason_q1"></textarea>
					                    </div>
					                  </div>
					                  <div class="clearfix"></div>
					                  <div class="col-md-12">
					                    <div class="form-group">
					                      <label for="">Why would like to study with Elite Training Institute compared with other education providers in Australia? Please explain.</label>
					                      <textarea name="" id="" class="form-control" cols="30" rows="10" name="study_reason_q1"></textarea>
					                    </div>
					                  </div>
					                  <div class="clearfix"></div>
					                  <div class="col-md-12">
					                    <div class="form-group">
					                      <label for="">How do you believe that course you are applying to study with Elite Training Institute will benefit your current or chosen career path? Please Explain.</label>
					                      <textarea name="" id="" class="form-control" cols="30" rows="10" name="study_reason_q1"></textarea>
					                    </div>
					                  </div>
					                  <div class="clearfix"></div>
					                  <div class="col-md-12">
					                    <div class="form-group">
					                      <label for="">What is your career plan after the end of your studies?</label>
					                      <textarea name="" id="" class="form-control" cols="30" rows="10" name="study_reason_q1"></textarea>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-g">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>UNIQUE STUDENT IDENTIFIER (USI)</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                    <div class="col-md-6">
				                      <div class="form-group">
				                       <label for="">Do you have a USI?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="usi-yes" name="have_usi">
				                          <label class="radio-input" for="usi-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="usi-no" name="have_usi">
				                          <label class="radio-input" for="usi-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-no">No</label>
				                      </div>
				                    </div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                        <label for=""> If YES, please provide your USI:</label>
				                        <input type="text" class="form-control" id="" value="" name="usi_number">
				                      </div>
				                    </div>

				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">If NO, Would you like ETI to create your USI on your behalf?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="course-yes" name="english_course">
				                          <label class="radio-input" for="course-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="course-no" name="english_course">
				                          <label class="radio-input" for="course-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-no">No</label>
				                        <div class="clearfix" style="height: 10px;"></div>
				                        <p class="px-12-font">Please note from January 2015 all students undertaking nationally recognised training delivered by a registered training organisation will require a USI. You can create your own USI at <a href="http://usi.gov.au/createyour-USI/Pages/default.aspx" class="iris-blue-font-color">http://usi.gov.au/createyour-USI/Pages/default.aspx</a> or ETI can create one on your behalf. If you wish for ETI to create a USI for you, please complete the USI application form</p>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-h">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>OVERSEAS STUDENT HEALTH COVER (OSHC)</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                    <div class="col-md-6">
				                      <div class="form-group">
				                       <label for="">Do you have OSHC?</label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="oshc-yes" name="have_oshc">
				                          <label class="radio-input" for="oshc-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="oshc-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="oshc-no" name="have_oshc">
				                          <label class="radio-input" for="oshc-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="oshc-no">No</label>
				                      </div>
				                    </div>
				                    <div class="col-md-6">
				                      <div class="form-group">
				                       <label for="">Type of Overseas Student Health Cover </label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="type-single" name="oshc-type">
				                          <label class="radio-input" for="type-single"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="type-single">Single</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="type-couple" name="oshc-type">
				                          <label class="radio-input" for="type-couple"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="type-couple">Couple</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="type-family" name="oshc-type">
				                          <label class="radio-input" for="type-family"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="type-family">Family</label>
				                      </div>
				                    </div>

				                    <div class="clearfix"></div>
				                    <div class="col-md-12">
                       		<div class="datatable-wrapper box-shadow">
                       		  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                        <tr>
				                          <td colspan="6" class="no-border">The Annual Premium for nib OSHC for the calendar year (12 months) is as follows (GST inclusive):</td>
				                        </tr>
				                        <tr>
				                          <td width="10%" class="">Single: </td>
				                          <td>AUD $ 490.00</td>
				                          <td width="10%" class="">Couple: </td>
				                          <td>AUD $3, 900.00</td>
				                          <td width="10%" class="">Family </td>
				                          <td>AUD $6, 300.00</td>
				                        </tr>
				                      </table>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-i">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>RECOGNITION OF PRIOR LEARNING</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                    <div class="col-md-12">
				                      <div class="form-group">
				                       <label for="">IDo you wish to apply for recognition of prior learning? </label>
				                       <br>
				                       <div class="clearfix" style="height: 10px;"></div>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="apply-yes" name="apply_rpl">
				                          <label class="radio-input" for="apply-yes"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="apply-yes">Yes</label>
				                        <div class="crm-form-radio position-relative display-inlineblock">
				                          <input type="radio" class="" id="apply-no" name="apply_rpl">
				                          <label class="radio-input" for="apply-no"></label>
				                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="apply-no">No</label>
				                        <div class="clearfix" style="height: 10px;"></div>
				                        <p class="px-12-font">If yes, please download and complete and Application for Recognition of Prior Learning from available online at <a href="www.eti.edu.au" class="iris-blue-font-color">www.eti.edu.au</a>, attach your academic transcript, course syllabus and course details and submit with your application. Refer to ETI Recognition of Prior Learning Policy</p>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-j">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>PAYMENT FEE METHOD</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
                      	<div class="datatable-wrapper box-shadow">
                      	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                      <tr>
				                        <td width="20%" class="">Application fee (nonrefundable)* </td>
				                        <td>AUD $250.00</td>
				                        <td width="20%" class="">Accommodation booking Assistance</td>
				                        <td>Assistance</td>
				                        <td width="20%" class="">Airport Pick-up</td>
				                        <td>AUD $180.00</td>
				                      </tr>
				                    </table>
				                   </div>
				                    <p class="px-12-font">*This fee is not part of course fee which is non-refundable.</p>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="clearfix" style="height: 10px;"></div>
				                  <div class="col-md-12">
				                    <p class="px-14-font">Direct deposit into Elite Training Institute bank account. Bank details as follows:</p>
                        <div class="datatable-wrapper box-shadow">
                         <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                      <tr>
				                        <td width="20%" class="">Account Name: </td>
				                        <td class="text-left">Elite Training Institute Pty. Ltd</td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Bank Name: </td>
				                        <td class="text-left">Westpac Banking Corporation</td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Branch Address: </td>
				                        <td class="text-left">215 Smith Street, Fitzroy Victoria 3065 Australia</td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">SWIFT Code: </td>
				                        <td class="text-left">WPACAU2S</td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">BSB: </td>
				                        <td class="text-left">033073</td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Account No: </td>
				                        <td class="text-left">445 458</td>
				                      </tr>
				                    </table>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-k">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>DETAILS OF APPROVED EDUCATION AGENT</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Company Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="company_name">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Contact Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="contact_name">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Contact details:</label>
				                      <input type="text" class="form-control" id="" value="" name="contact_details">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Agents comment of this application:</label>
				                      <textarea name="" id="" class="form-control" cols="30" rows="10" name="agents_comments"></textarea>
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Agent’s Signature:</label>
				                      <input type="text" class="form-control" id="" value="" name="agent_signature">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                        <input type='text' class="form-control" name="details_approved_date" />
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-l">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>APPLICANT’S DECLARATION</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <div class="table-responsive">
                        	<div class="datatable-wrapper box-shadow">
                        	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                        <tbody>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-1" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-1"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I declare that all information provided in this application is accurate and complete and that ETI may refuse my application or cancel my enrolment if any information is found to be incorrect or misleading.
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-2" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-2"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I understand that by completing this application, I am giving written consent to ETI to independently verify the information supplied by me in this form and request further documents as required.
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-3" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-3"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I declare that I am a Genuine Temporary Entrant and a Genuine Student. Please refer to the Department of Home Affairs website for details: <a href="https://www.homeaffairs.gov.au/trav/stud/more/genuine-temporary-entrant" class="iris-blue-font-color">https://www.homeaffairs.gov.au/trav/stud/more/genuine-temporary-entrant</a> .
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-4" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-4"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I agree to undertake a testing requirement prior to any course entry, if deemed necessary by ETI, and adhere to any other pre requisite identified above.
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-4" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-4"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I have read and understood ETI’s Enrolment Policy and procedure, fee payment, fee refunds and Defer, Suspend or Cancel policy and all the Pre-enrolment information referred from the website <a href="http://eti.edu.au/files/documents/intl/ETI%20Refund%20Policy%20and%20Procedure%20for%20International%20Students.pdf" class="iris-blue-font-color">http://eti.edu.au/files/documents/intl/ETI%20Refund%20Policy%20and%20Procedure%20for%20International%20Students.pdf</a> or calling ETI to obtain copies of these policies and procedures.
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-4" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-4"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I understand that this agreement and the availability of complaints and appeals process do not remove the rights of the student to take action under Australia's consumer protection laws.
				                            </td>
				                          </tr>

				                          <tr>
				                            <td width="1%">
				                              <div class="crm-form-checkbox position-relative">
				                                <input type="checkbox" class="" id="declaration-4" name="applicant_declaration">
				                                <label class="checkbox-input" for="declaration-4"></label>
				                              </div> 
				                            </td>
				                            <td width="99%" class="text-left" style="line-height: 1.5;">
				                              I confirm that I have received and read a copy of ETI’s International Student Pre-enrolment student Handbook available on <a href="www.eti.edu.au" class="iris-blue-font-color">www.eti.edu.au</a> and fully understand the requirements of the course and relevant policies and procedures.
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
                      	<div class="datatable-wrapper box-shadow">
                      	  <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
				                      <tr>
				                        <td width="20%" class="">Signature of Applicant: </td>
				                        <td colspan="3"><input type='text' class="form-control" name="signature_applicant" /></td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Name of Applicant: </td>
				                        <td><input type='text' class="form-control" name="name_applicant" /></td>
				                        <td width="20%" class="">Date: </td>
				                        <td>
				                          <div class='input-group date generic-datepicker'>
				                            <input type='text' class="form-control" name="date_applicant" />
				                            <span class="input-group-addon">
				                                <i class="fa fa-calendar" aria-hidden="true"></i>
				                            </span>
				                          </div>
				                        </td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Signature of Parent/Guardian: </td>
				                        <td colspan="3"><input type='text' class="form-control" name="signature_guardian" /></td>
				                      </tr>
				                      <tr>
				                        <td width="20%" class="">Name of Parent/Guardian: </td>
				                        <td><input type='text' class="form-control" name="name_guardian" /></td>
				                        <td width="20%" class="">Date: </td>
				                        <td>
				                          <div class='input-group date generic-datepicker'>
				                            <input type='text' class="form-control" name="date_guardian" />
				                            <span class="input-group-addon">
				                                <i class="fa fa-calendar" aria-hidden="true"></i>
				                            </span>
				                          </div>
				                        </td>
				                      </tr>
				                    </table>
				                   </div>
				                    <p class="px-12-font">Direct deposit into Elite Training Institute bank account. Bank details as follows:</p>
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

          <div role="tabpanel" class="tab-pane" id="enrolment-part-m">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>SUBMISSION OF APPLICATION</h3>
				                </div>

				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <p class="px-12-font">If you are a successful applicant, Elite Training Institute Australia will issue you with an Offer letter and Enrolment Acceptance Agreement expressing the course of which you have been acknowledged. The offer letter will express all the course points of interest and in addition the charges for the course. </p>
				                    <p class="no-margin px-12-font">The acknowledgment of Offer Letter is the genuine assertion, which expresses all the information about the course, fees, refund and so on. You should sign this frame to acknowledge the offer from Elite Training Institute of Australia.</p>
				                    <p class="px-12-font">Return the copies of the Offer and Acceptance letter with your signature and the date to ETI and your course will commence as agreed.</p>
				                    <p class="px-12-font">Email it to: info@eti.edu.au or hand over you application at our head office Level 7, 20 Otter Street, Collingwood, VIC 3066 Australia..</p>
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
      </div>
    </div>
  </div>
   <!-- End Pages/Dashboard Content Goes Here -->

@endsection

@section('custom-page-scripts')

<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;
    $("#addEducation").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols += '<td><input type="text" class="form-control" name="institution_name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="institution_location' + counter + '"/></td>';
        cols += '<td><input type="number" class="form-control" name="yrs_attended' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="award_received"' + counter + '"/></td>';
        cols += '<td><button class="btnDelEducation btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.previous-education").append(newRow);
        counter++;
    });
    $("table.previous-education").on("click", ".btnDelEducation", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});

$(document).ready(function () {
    var counter = 0;
    $("#addJobExperience").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols += '<td><input type="text" class="form-control" name="employer' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="location' + counter + '"/></td>';
        cols += '<td><input type="number" class="form-control" name="yrs_employed' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="position"' + counter + '"/></td>';
        cols += '<td><button class="btnDelExperience btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.job-experience").append(newRow);
        counter++;
    });
    $("table.job-experience").on("click", ".btnDelExperience", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});
</script>

<script type="text/javascript">
  $(function () {
      $('.generic-datepicker').datetimepicker({
            format: 'DD-MMMM-YYYY'
        });
   });
</script>
@endsection