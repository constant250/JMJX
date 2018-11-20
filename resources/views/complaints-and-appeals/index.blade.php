@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')
 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular  px-20-font no-margin width-100-percent">Complaints and Appeals Form</h1>
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
            <a href="#personal-details" aria-controls="personal-details" role="tab" data-toggle="tab">Personal Details</a>
          </li>
          <li role="presentation">
            <a href="#complaints-and-appeals-form" aria-controls="complaints-and-appeals-form" role="tab" data-toggle="tab">Compliants and Appeals Form</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">

          <!-- Personal Details -->       
          <div role="tabpanel" class="tab-pane active" id="personal-details">
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
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Full Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Position of Complainant/Appellant:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Phone No:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Address:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      </div>  
                    </div>
                  <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>If the complainant is student, please provide the following details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student ID:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""> Course Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Complaint/Appeal Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-6">
                      <p class="bright-grey-font-color"><b>Complaint Details</b></p>
                       <div class="form-group">
                          <label for="">Date the cause of complaint occurred:</label>
                          <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for=""> Reason for the complaint:</label>
                          <select class="form-control">
                            <option></option>
                            <option>General Operations</option>
                            <option>Assessment</option>
                            <option>ESOS related complaint</option>
                          </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label for="">Have you complained about the issue before?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-1">
                            <label class="checkbox-input" for="checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-1">Yes</label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-2">
                            <label class="checkbox-input" for="checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-2">No</label>
                        </div>
                        <div class="form-group">
                          <label for="">If yes, please give the date, the complaint was lodged:</label>
                          <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <p class="bright-grey-font-color"><b>Appeal Details</b></p>
                      <div class="form-group">
                          <label for="">Date to which this appeal refers to:</label>
                          <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="">Reason for the complaint:</label>
                          <select class="form-control">
                            <option></option>
                            <option>Assessment outcome</option>
                            <option>Any outcome of any application for request</option>
                            <option>Any disciplinary action taken against you.</option>
                            <option>other (please specify below)</option>
                          </select>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Compliant/Appeal Summary</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Compliant/Appeal Summary (Please give detailed explanation of compliant/appeal and attach any supporting evidence)</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>DECLARATION</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="declaration-checkbox-1">
                            <label class="checkbox-input" for="declaration-checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-1">All the information provided in this form is correct and accurate to the best of my knowledge.</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="declaration-checkbox-2">
                            <label class="checkbox-input" for="declaration-checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-2">I am happy to attend any meeting with relevant persons required to resolve the issue.</label>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Signature:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
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
           <!-- Compliants and Appeals Form -->       
          <div role="tabpanel" class="tab-pane" id="complaints-and-appeals-form">
                    <!-- Form -->
        <div class="crm-form-container no-padding">
          <form action="" class="form-template no-padding">
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>
                <div class="horizontal-line-wrapper">
                  <h3>Office use only</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Receiving staff member:</label>
                              <input type="text" class="form-control" id="" value="">
                            </div>
                          </div>
                          <div class="col-md-6">
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
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Method of lodgement:</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="mol-checkbox-1">
                                <label class="checkbox-input" for="mol-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="mol-checkbox-1">Email</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="mol-checkbox-2">
                                <label class="checkbox-input" for="mol-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="mol-checkbox-2">in person</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="mol-checkbox-3">
                                <label class="checkbox-input" for="mol-checkbox-3"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="mol-checkbox-3">mail</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="mol-checkbox-4">
                                <label class="checkbox-input" for="mol-checkbox-4"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="mol-checkbox-4">Phone</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Actions proposed by panel:</label>
                              <input type="text" class="form-control" id="" value="">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="" style="line-height: 1.5;">Name of members in panel for resolving the issue</label>
                              <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">

                            <div class="form-group">
                              <label for="">Implementation of Proposed action by:</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-1">
                                <label class="checkbox-input" for="iopa-by-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-1">Continuous improvement Request.</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-2">
                                <label class="checkbox-input" for="iopa-by-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-2">Counselling by the relevant persons.</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-3">
                                <label class="checkbox-input" for="iopa-by-checkbox-3"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-3">Change of any service or member.</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-4">
                                <label class="checkbox-input" for="iopa-by-checkbox-4"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-4">External Counselling agency</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-5">
                                <label class="checkbox-input" for="iopa-by-checkbox-5"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-5">Referred to:</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="iopa-by-checkbox-6">
                                <label class="checkbox-input" for="iopa-by-checkbox-6"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="iopa-by-checkbox-6">Other (Please specify)</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Outcome:</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="outcome-checkbox-1">
                                <label class="checkbox-input" for="outcome-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="outcome-checkbox-1">Successful</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="outcome-checkbox-2">
                                <label class="checkbox-input" for="outcome-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="outcome-checkbox-2">Unsuccessful</label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                              <label for="">Method to communicate the outcome with the complainant/appellant</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="moc-checkbox-1">
                                <label class="checkbox-input" for="moc-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="moc-checkbox-1">Email</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="moc-checkbox-2">
                                <label class="checkbox-input" for="moc-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="moc-checkbox-2">in person</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="moc-checkbox-3">
                                <label class="checkbox-input" for="moc-checkbox-3"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="moc-checkbox-3">mail</label>

                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="moc-checkbox-4">
                                <label class="checkbox-input" for="moc-checkbox-4"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="moc-checkbox-4">Phone</label>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Response of complainant/appellant:</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="roc-checkbox-1">
                                <label class="checkbox-input" for="roc-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="roc-checkbox-1">Agrees and accepts the decision done by panel (The student signs the acceptance and the record is placed in student’s admin file)</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="roc-checkbox-2">
                                <label class="checkbox-input" for="roc-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="roc-checkbox-2">Disagrees and unhappy (ETI will contact student to help student to access services of External Bodies or referred to an independent mediator</label>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Declaration by complainant/Appellant (Please tick before you sign it):</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="dbc-checkbox-1">
                                <label class="checkbox-input" for="dbc-checkbox-1"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="dbc-checkbox-1">I acknowledge that I have been communicated the outcome of the complaint/appeal lodged by me.</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="dbc-checkbox-2">
                                <label class="checkbox-input" for="dbc-checkbox-2"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="dbc-checkbox-2">I agree to the decision made by the panel and happy to accept it.</label>
                              <div class="clearfix"></div>
                              <div class="crm-form-checkbox position-relative display-inlineblock">
                                <input type="checkbox" class="" id="dbc-checkbox-3">
                                <label class="checkbox-input" for="dbc-checkbox-3"></label>
                              </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="dbc-checkbox-3">I disagree to the decision made by the panel and would like to escalate it to an external body and I have been advised of all the required information in this regard.</label>
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
                              <label for="">Date:</label>
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
                              <label for="">Print Name:</label>
                              <input type="text" class="form-control" id="" value="">
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Signature of ETI’s representative:</label>
                              <input type="text" class="form-control" id="" value="">
                            </div>
                          </div>
                          <div class="col-md-6">
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
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Print Name:</label>
                              <input type="text" class="form-control" id="" value="">
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
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
   </div>
   <!-- End Pages/Dashboard Content Goes Here -->
<div class="clearfix"></div>

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