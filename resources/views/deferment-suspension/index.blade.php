@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Application for Deferment Suspension Cancellation Withdrawal</h1>
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
          <form action="" class="form-template no-padding">
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="horizontal-line-wrapper">
                  <h3>Student’s Personal Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Student Name:</label>
                      <input type="text" class="form-control" id="" value="" name="stud_fullname">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Date of Birth:</label>
                      <div class='input-group date generic-datepicker'>
                        <input type='text' class="form-control" name="dob" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="not-required">Course code and Name:</label>
                      <select class="form-control" name="course_code_name">
                        <option></option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                      </select>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                   <div class="form-group">
                    <label for="">Address:</label>
                    <input type="text" class="form-control" id="" value="" name="stud_fulladdress">
                   </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Phone No:</label>
                      <input type="text" class="form-control" id="" value="" name="phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Mobile:</label>
                      <input type="text" class="form-control" id="" value="" name="lmobile">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                   <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" id="" value="" name="email">
                   </div>
                  </div>
                  <div class="clearfix"></div>
                	</div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Please tick the reason for request:</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-md-12">
                    <div class="form-group">

                      <div class="crm-form-radio position-relative display-inlineblock">
                        <input type="radio" class="" id="reason-1" name="reason-for-request">
                        <label class="radio-input" for="reason-1"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="reason-1">Medical Grounds</label>

                      <div class="crm-form-radio position-relative display-inlineblock">
                        <input type="radio" class="" id="reason-2" name="reason-for-request">
                        <label class="radio-input" for="reason-2"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="reason-2">Exceptional Reasons</label>

                      <div class="crm-form-radio position-relative display-inlineblock">
                        <input type="radio" class="" id="reason-3" name="reason-for-request">
                        <label class="radio-input" for="reason-3"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="reason-3">Change of mind</label>

                      <div class="crm-form-radio position-relative display-inlineblock">
                        <input type="radio" class="" id="reason-4" name="reason-for-request">
                        <label class="radio-input" for="reason-4"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="reason-4">Other</label>

                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" style="line-height: 1.5;">Please mention the reason in detail</label>
                      <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                      <small class="px-10-font no-margin">Note: International students must state the reason and provide documentation for deferring their studies as ETI needs to notify this information to the Department of Home Affairs via PRISMS.</small>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Documents attached</label>
                      <div class="clearfix"></div>

                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="document-1" name="documents-attached">
                        <label class="checkbox-input" for="document-1"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="document-1">Medical Certificate</label>

                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="document-2" name="documents-attached">
                        <label class="checkbox-input" for="document-2"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="document-2">Travel Documents</label>

                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="document-3" name="documents-attached">
                        <label class="checkbox-input" for="document-3"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="document-3">Mails</label>

                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="document-4" name="documents-attached">
                        <label class="checkbox-input" for="document-4"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="document-4">Supporting certificates</label>

                    </div>
                  </div>
                  <div class="clearfix"></div>
                	</div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Please tick what is being requested?</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="deferment" name="being-requested">
                        <label class="checkbox-input" for="deferment"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="deferment">Deferment</label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label for="" class="display-inlineblock">Date from:</label>
                      <div class="display-inlineblock">
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" name="deferment_date_from" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label for="" class="display-inlineblock">To Date:</label>
                      <div class="display-inlineblock">
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" name="deferment_to_date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="suspension" name="being-requested">
                        <label class="checkbox-input" for="suspension"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="suspension">Suspension</label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label for="" class="display-inlineblock">Date from:</label>
                      <div class="display-inlineblock">
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" name="suspension_date_from" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label for="" class="display-inlineblock">To Date:</label>
                      <div class="display-inlineblock">
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control" name="suspension_to_date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative display-inlineblock">
                        <input type="checkbox" class="" id="cancellation" name="being-requested">
                        <label class="checkbox-input" for="cancellation"></label>
                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="cancellation">Cancellation/withdrawal Date effective from</label>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <div class="display-inlineblock">
                        <div class='input-group date generic-datepicker'>
                          <input type='text' class="form-control"/>
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <div class="col-lg-12">
                    <ul class="crm-form-list px-12-font">
                      <li>Please note that in case of International Students, the institute will grant a deferral of your commencement or temporary suspension of your studies only if there are compelling and compassionate circumstances and the evidence has been attached and students are advised to contact the Department of Home Affairs as it may affect your visa status.</li>
                      <li>I have been advised of all the relevant consequences of the outcome of my request.</li>
                      <li>I have been advised of all the relevant information in relation to the request made on this form.</li>
                      <li>I am aware of my appeal rights</li>
                      <li>I have been advised that the time for processing of the application is 10 working days.</li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Signature:</label>
                      <input type="text" class="form-control" id="" value="" name="signature">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Date:</label>
                      <div class='input-group date generic-datepicker'>
                        <input type='text' class="form-control" class="declaration_date" />
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
  $(function () {
      $('.generic-timepicker').datetimepicker({
            format: 'LT'
        });
   });
</script>
@endsection