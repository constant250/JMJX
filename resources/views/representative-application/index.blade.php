@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

<!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Representative Application Form</h1>
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
            <a href="#contact-details" aria-controls="contact-details" role="tab" data-toggle="tab">Contact Details</a>
          </li>
          <li role="presentation">
            <a href="#referee" aria-controls="referee" role="tab" data-toggle="tab">Referee</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">
     
        <div role="tabpanel" class="tab-pane active" id="contact-details">
                    <!-- Form -->
        <div class="crm-form-container no-padding">
          <form action="" class="form-template no-padding">
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                      <p class="px-12-font bright-grey-font-color">Thank you for interest for becoming an authorized agent of Elite Training Institute, Please fill out this form print it and send it for processing with signature and valid referees on it. Please note don’t leave blank to the application. Put N/A if not applicable to the application.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Contact Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Company Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Position:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Australian Business Number (ABN) if applicable:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Migration Agent Registration Authority Number (MARN) if applicable:</label>
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
                          <label for="">Phone:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Mobile:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Fax:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Business Background</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">How long has been your business operating?</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Number of international students recruited for study in Australia each year:</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">List of other institutions you are currently representing in Australia:</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">List the courses you promote enrol students into:</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">List of countries you operate from:</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                       <div class="form-group">
                          <label for=""> Services provided to students (Please check in appropriate circle)</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-1">
                            <label class="checkbox-input" for="checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-1">Student Counselling </label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-2">
                            <label class="checkbox-input" for="checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-2">Visa Application</label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-3">
                            <label class="checkbox-input" for="checkbox-3"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-3">Pre-departure </label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-4">
                            <label class="checkbox-input" for="checkbox-4"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-4">Briefing Follow up with parents</label>

                        </div>
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Other services (Please Specify):</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for=""> Do you charge students additional fees for the above services?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="yes-checkbox">
                            <label class="checkbox-input" for="yes-checkbox"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="yes-checkbox">Yes</label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="no-checkbox">
                            <label class="checkbox-input" for="no-checkbox"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="no-checkbox">No</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">How do you promote international education and how will you promote ELITE TRAINING INSTITUTE?</label>
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
          <div role="tabpanel" class="tab-pane" id="referee">
                      <!-- Form -->
        <div class="crm-form-container no-padding">
          <form action="" class="form-template no-padding">
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="horizontal-line-wrapper">
                  <h3>REFEREES: Please indicate two referees from Australian educational institutions that you represent:</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <p class="px-14-font bright-grey-font-color"><b>Reference 1</b></p>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Organization Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Contact Person:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Position:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Telephone:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Fax:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Address:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="clearfix" style="height: 20px;"></div>
                      <div class="col-md-12">
                        <p class="px-14-font bright-grey-font-color"><b>Reference 2</b></p>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Organization Name:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Contact Person:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Position:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Telephone:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Fax:</label>
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
                  <h3>Checklist: Your application will be assessed on the quality of the supporting documentation you provide, so please be as thorough as possible.</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-1">
                            <label class="checkbox-input" for="checklist-checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-1">Have you completed all relevant sections of the application form?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-2">
                            <label class="checkbox-input" for="checklist-checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-2">Have you included in your application, a copy of your company profile?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-3">
                            <label class="checkbox-input" for="checklist-checkbox-3"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-3">Have you provided a copy of your ABN, and Business Registration Documentation?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-4">
                            <label class="checkbox-input" for="checklist-checkbox-4"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-4">Have you included copy of the Certificate of Appointment from 3 other providers as references?</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-5">
                            <label class="checkbox-input" for="checklist-checkbox-5"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-5">Have you provided a copy of your professional or industry membership documentation?</label>
                          <div class="clearfix"></div>
                           <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checklist-checkbox-6">
                            <label class="checkbox-input" for="checklist-checkbox-6"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checklist-checkbox-6">And other supporting document</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>AGENT DECLARATION</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                      <p class="px-12-font bright-grey-font-color">I agree to the personal information being:</p>
                      <ul class="px-12-font bright-grey-font-color">
                        <li>Recorded in PRISMS. This may include my name, business email address, phone number and address;</li>
                        <li>Accessed by the Australian Government Department of Education and Training, Department of Home Affairs and other Commonwealth agencies that access PRISMS;</li>
                        <li>Used to administer or monitor compliance with the Commonwealth legislation e.g. Education Services for Overseas Students Act 2000, Migration Act 1958; and</li>
                        <li>Disclosed by the Australian Government Department of Education and Training to other Australian Government entities(including, but not limited to ASQA), education institutions and publically. The Australian Government Department of Education and Training will share individual agents’ performance publically as aggregated data (but will not identify agent
                        <br>
                        – provider relationships). Agent-provider relationships will only be identified when data is shared with education providers and other Australian Government entities.
                        </li>
                      </ul>
                      <p class="px-12-font bright-grey-font-color">I also agree to personal information that Australian Government Department of Education and Training currently hold in PRISMS regarding myself and any other personal information that the department may collect in future being disclosed as described above.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Name of Applicant:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Signatures:</label>
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