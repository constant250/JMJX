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
         @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have updated successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        <!-- Tab panes -->
        <form action="{{ route('parrallel-enrolment-verification.store') }}" id="parallel-form" method="post" class="form-template no-padding">
        	{{ csrf_field() }}
        <div class="tab-content crm-tabs-content">

          <div role="tabpanel" class="tab-pane active" id="parallel-enrolment-part-a">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                
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
				                      <input type="text" class="form-control" id="" value="{{ $student->party->person->firstname }}" name="firstname">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Family Name:</label>
				                      <input type="text" class="form-control" id="" value="{{ $student->party->person->lastname }}" name="lastname">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">DOB:</label>
				                      <input type="text" class="form-control" id="" value="{{ $student->party->person->dob }}" name="dob">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Contact No:</label>
				                      <input type="text" class="form-control" id="" value="{{ $student->party->person->mobile }}" name="mobile">
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
				                      <input type="text" class="form-control" id="" value=" {{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->name_of_training_prov : '' }} " name="name_of_training_prov">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Student ID:</label>
				                      <input type="text" class="form-control" id="" value="{{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->studentid : '' }}" name="studentid">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Course of Enrolment:</label>
				                      <input type="text" class="form-control" id="" value="{{ implode(',',array_column($student->party->student->details->toarray(),'course_code')) }}" name="course_code">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="" class="not-required">Course Start Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                      	 <input type='text' class="form-control" value="{{ $student->party->student->parrallel_enrolment_verification_form->course_start_date != '' ? Carbon\Carbon::parse($student->party->student->parrallel_enrolment_verification_form->course_start_date)->format('d-M-Y') : '' }}" name="course_start_date" />
				                      	@else
				                        <input type='text' class="form-control" value="" name="course_start_date" />
				                      	@endif
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
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                      	 <input type='text' class="form-control" value="{{ $student->party->student->parrallel_enrolment_verification_form->course_end_date != '' ? Carbon\Carbon::parse($student->party->student->parrallel_enrolment_verification_form->course_end_date)->format('d-M-Y') : '' }}" name="course_end_date" />
				                      	@else
				                        <input type='text' class="form-control" value="" name="course_end_date" />
				                      	@endif
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
				                      <input type="number" class="form-control" id="" value="{{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->timetable_days : '' }}" name="timetable_days">
				                    </div>
				                  </div>
				                  <div class="col-md-4">
				                    <div class="form-group">
				                      <label for="" class="not-required">Start Time:</label>
				                      <div class='input-group date generic-timepicker'>
				                        <input type='text' class="form-control" value="{{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->timetable_start_time : '' }}"  name="timetable_start_time" />
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
				                        <input type='text' class="form-control"  value="{{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->timetable_finish_time : '' }}" name="timetable_finish_time" />
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
                {{-- </form> --}}
              </div>
        <!-- End Form -->
          </div>

          <div role="tabpanel" class="tab-pane" id="parallel-enrolment-part-b">
            <!-- Form -->
              <div class="crm-form-container no-padding">
                {{-- <form action="" class="form-template no-padding"> --}}
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
				                      <input type="text" class="form-control" id="" value=" {{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->contact_name : '' }} " name="contact_name">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Position:</label>
				                      <input type="text" class="form-control" id="" value="{{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->contact_position : '' }}" name="contact_position">
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-12">
				                    <div class="form-group">
				                      <label for="">Documents attached</label>
				                      <div class="clearfix"></div>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                        <input type="checkbox" class="" {{ $student->party->student->parrallel_enrolment_verification_form->confirm_course_of_enrolment ? 'checked' : '' }} id="confirm-1" value="1" name="confirm_course_of_enrolment">
				                      	@else
				                        <input type="checkbox" class="" id="confirm-1" value="1" name="confirm_course_of_enrolment">
				                        @endif
				                        <label class="checkbox-input" for="confirm-1"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-1">Course of Enrolment</label>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                        <input type="checkbox" class="" {{ $student->party->student->parrallel_enrolment_verification_form->confirm_course_start_and_end_dates ? 'checked' : '' }} id="confirm-2" value="1" name="confirm_course_start_and_end_dates">
				                      	@else
				                        <input type="checkbox" class="" id="confirm-2" value="1" name="confirm_course_start_and_end_dates">
				                        @endif
				                        {{-- <input type="checkbox" class="" id="confirm-2" value="1" name="confirm_course_start_and_end_dates"> --}}
				                        <label class="checkbox-input" for="confirm-2"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-2">Course Start & End Dates</label>

				                      <div class="crm-form-checkbox position-relative display-inlineblock">
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                        <input type="checkbox" class="" {{ $student->party->student->parrallel_enrolment_verification_form->confirm_course_start_and_end_dates ? 'checked' : '' }} id="confirm-3" value="1" name="confirm_timetable_details">
				                      	@else
				                        <input type="checkbox" class="" id="confirm-3" value="1" name="confirm_timetable_details">
				                        @endif
				                        {{-- <input type="checkbox" class="" id="confirm-3" value="1" name="confirm_timetable_details"> --}}
				                        <label class="checkbox-input" for="confirm-3"></label>
				                      </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="confirm-3">Timetable Details</label>

				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Signed:</label>
				                      <input type="text" class="form-control" id="" value=" {{ $student->party->student->parrallel_enrolment_verification_form != null ?  $student->party->student->parrallel_enrolment_verification_form->signed : '' }} " name="signed">
				                    </div>
				                  </div>
				                  <div class="col-md-6">
				                    <div class="form-group">
				                      <label for="">Date:</label>
				                      <div class='input-group date generic-datepicker'>
				                      	@if($student->party->student->parrallel_enrolment_verification_form != null)
				                      	 <input type='text' class="form-control" value="{{ $student->party->student->parrallel_enrolment_verification_form->date_received != '' ? Carbon\Carbon::parse($student->party->student->parrallel_enrolment_verification_form->date_received)->format('d-M-Y') : '' }}" name="date_received" />
				                      	@else
				                        <input type='text' class="form-control" value="" name="date_received" />
				                      	@endif
				                        {{-- <input type='text' class="form-control"  name="date_received" /> --}}
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
                
              </div>
        <!-- End Form -->
          </div>

        </div>
    </form>
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
<script type="text/javascript">
  $(document).ready(function () {
    $('#btn-save').on('click', function(e) {
      e.preventDefault();
      $('#parallel-form').submit();
    })
  })
</script>
@endsection