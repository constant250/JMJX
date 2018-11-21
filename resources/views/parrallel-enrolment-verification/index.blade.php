@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Parallel Enrolment Verification Form</h1>
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
            <a href="#parallel-enrolment-part-a" aria-controls="parallel-enrolment-part-a" role="tab" data-toggle="tab">Part A</a>
          </li>
          <li role="presentation">
            <a href="#parallel-enrolment-part-b" aria-controls="parallel-enrolment-part-b" role="tab" data-toggle="tab">Part B</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">

          <div role="tabpanel" class="tab-pane active" id="parallel-enrolment-part-a">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Student Details</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Given Name(s):</label>
				                      <input type="text" class="form-control" id="" value="" name="givenname">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Family Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="familyname">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">DOB:</label>
				                      <input type="text" class="form-control" id="" value="" name="dob">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Contact No:</label>
				                      <input type="text" class="form-control" id="" value="" name="lmobile">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                	</div>
				                </div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Details with other Training Provider</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Name of Training Provider:</label>
				                      <input type="text" class="form-control" id="" value="" name="training_provider">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Student ID:</label>
				                      <input type="text" class="form-control" id="" value="" name="stud_id">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Course of Enrolment:</label>
				                      <input type="text" class="form-control" id="" value="" name="course_enrolment">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Course Start Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                        <input type='text' class="form-control" class="course_start_date" />
				                        <span class="input-group-addon">
				                            <i class="fa fa-calendar" aria-hidden="true"></i>
				                        </span>
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Course End Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                        <input type='text' class="form-control" class="course_end_date" />
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
				                  <h3>Timetable Details</h3>
				                </div>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-4">
				                    <div class="form-group">
				                      <label for="">Days:</label>
				                      <input type="number" class="form-control" id="" value="" name="days">
				                    </div>
				                  </div>
				                  <div class="col-md-4">
				                    <div class="form-group">
				                      <label for="" class="not-required">Start Time:</label>
				                      <div class='input-group date generic-timepicker'>
				                        <input type='text' class="form-control" class="start_time" />
				                        <span class="input-group-addon">
				                            <i class="fa fa-clock" aria-hidden="true"></i>
				                        </span>
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-4">
				                    <div class="form-group">
				                      <label for="" class="not-required">Finish Time:</label>
				                      <div class='input-group date generic-timepicker'>
				                        <input type='text' class="form-control" class="finish_time" />
				                        <span class="input-group-addon">
				                            <i class="fa fa-clock" aria-hidden="true"></i>
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

          <div role="tabpanel" class="tab-pane" id="parallel-enrolment-part-b">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                <form action="" class="form-template no-padding">
                  <div class="crm-form-wrapper">
                    <section>
                    <div class="clearfix" style="height: 20px;"></div>

				                <div class="horizontal-line-wrapper">
				                  <h3>Contact Person at other Training Provider/Education Agent</h3>
				                </div>
				                <p class="px-10-font" style="padding: 0 10px;">(to be completed by the Representative of other Training Provider if in person or representative of Elite Training Institute (ETI) over the phone)</p>
				                <div class="form-padding-left-right form-template">
				                	<div class="row">
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Name:</label>
				                      <input type="text" class="form-control" id="" value="" name="contact_person_name">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Position:</label>
				                      <input type="text" class="form-control" id="" value="" name="contact_person_position">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Documents attached</label>
				                      <div class="clearfix"></div>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                        <input type="checkbox" class="" id="confirm-1" name="confirm_correct">
				                        <label class="checkbox-input" for="confirm-1"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-1">Course of Enrolment</label>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                        <input type="checkbox" class="" id="confirm-2" name="confirm_correct">
				                        <label class="checkbox-input" for="confirm-2"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-2">Course Start & End Dates</label>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                        <input type="checkbox" class="" id="confirm-3" name="confirm_correct">
				                        <label class="checkbox-input" for="confirm-3"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-3">Timetable Details</label>

				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Signed:</label>
				                      <input type="text" class="form-control" id="" value="" name="signature">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                        <input type='text' class="form-control" class="date" />
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