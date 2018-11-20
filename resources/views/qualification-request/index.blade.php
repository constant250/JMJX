@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

  <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Qualification Request Form</h1>
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
                          <label for="">Student ID:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">USI:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Phone Number:</label>
                          <input type="number" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Email Address:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
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
                  <h3>Please tick the type of document being requested:</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <div class="clearfix"></div>
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="tod-checkbox-1">
                              <label class="checkbox-input" for="tod-checkbox-1"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="tod-checkbox-1">Full Qualification </label>
                            
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="tod-checkbox-2">
                              <label class="checkbox-input" for="tod-checkbox-2"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="tod-checkbox-2">Statement of Result </label>
                            
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="tod-checkbox-3">
                              <label class="checkbox-input" for="tod-checkbox-3"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="tod-checkbox-3">Provisional Result</label>
                            
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="tod-checkbox-4">
                              <label class="checkbox-input" for="tod-checkbox-4"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="tod-checkbox-4"> Statement of Attainment</label>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="horizontal-line-wrapper">
                  <h3>Please tick the course for which the request being made.</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Course name and Code</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-1">
                            <label class="checkbox-input" for="course-checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-1">CHC30113 Certificate III in Early Childhood Education and Care</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-2">
                            <label class="checkbox-input" for="course-checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-2">CHC50113 Diploma of Early Childhood Education and Care</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-3">
                            <label class="checkbox-input" for="course-checkbox-3"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-3">SIT30816 Certificate III in Commercial Cookery</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-4">
                            <label class="checkbox-input" for="course-checkbox-4"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-4"> SIT40516 Certificate IV in Commercial Cookery</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-5">
                            <label class="checkbox-input" for="course-checkbox-5"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-5"> SIT50416 Diploma of Hospitality Management</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-6">
                            <label class="checkbox-input" for="course-checkbox-6"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-6">SIT60316 Advanced Diploma of Hospitality Management</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-7">
                            <label class="checkbox-input" for="course-checkbox-7"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-7"> CPP30411 Certificate III in Security Operations</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-8">
                            <label class="checkbox-input" for="course-checkbox-8"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-8"> CPC30211 Certificate III in Carpentry</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="course-checkbox-9">
                            <label class="checkbox-input" for="course-checkbox-9"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="course-checkbox-9"> CPC50210 Diploma of Building and Construction (BUILDING)</label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student Signature:</label>
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
                      <div class="col-md-12">
                        <p class="px-12-font bright-grey-font-color"><b>Note:</b> Please be advised that the qualification will be issued within 30 calendar days of the student’s final assessment being completed or their exiting their course, providing all fees have been paid.</p>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student acknowledgement on receipt of qualification:</label>
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
                <div class="clearfix"></div>
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
@endsection