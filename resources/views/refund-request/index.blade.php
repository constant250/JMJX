@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Refund Request Form</h1>
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
          <form id="refund-request" action="{{ route('refund-request.store') }}" method="post" class="form-template no-padding">
            {{ csrf_field() }}
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
                          <input type="text" class="form-control" id="" value="{{ $student->party->name }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""> Date of Birth:</label>
                          <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control"/ value="{{ \Carbon\Carbon::parse($student->party->person->dob)->format('d-M-Y') }}" >
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Course Name:</label>
                          <input type="text" class="form-control" id="" name="course" value="{{implode(',',array_column($student->party->student->details->toarray(),'course_code')) }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""> Course Start Date:</label>
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
                          <label for="">Phone Number:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->person->mobile }}">
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for=""> Email:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->person->email }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Address:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->person->address }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Refund Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Reason for Refund (Add extra sheet if you find space is not enough to write reason)</label>
                          <textarea name="reason_for_refund" id="" class="form-control" cols="30" rows="10"></textarea>
                          <p class="px-12-font bright-grey-font-color"><i><b>Note:</b> Please provide the relevant documents as evidence to support your request for refund.</i></p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <p class="px-12-font bright-grey-font-color"><b>Bank Transfer (Please enter your bank account details in which you would like to receive your refund)</b></p>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Bank Name:</label>
                          <input type="text" class="form-control" id="" value="" name="bank_name">
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Bank Branch:</label>
                          <input type="text" class="form-control" id="" value="" name="bank_branch">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Account Name:</label>
                          <input type="text" class="form-control" id="" value="" name="account_name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">BSB:</label>
                          <input type="text" class="form-control" id="" value="" name="bsb">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Account Number:</label>
                          <input type="text" class="form-control" id="" value="" name="account_number">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Swift Code::</label>
                          <input type="text" class="form-control" id="" value="" name="swiftcode">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Country:</label>
                          <input type="text" class="form-control" id="" value="" name="country">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                 <div class="horizontal-line-wrapper">
                  <h3>Acknowledgement</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-1" name="understand_refund_policy" value="1">
                            <label class="checkbox-input" for="checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-1">I understand that my request for a refund will be processed in accordance with ETI’s Refund Policy.</label>
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="checkbox-2" name="understand_days_to_access_refund_policy" value="1">
                            <label class="checkbox-input" for="checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="checkbox-2">I also understand that I shall have 20 days to access the Complaints and Appeals process, should I not agree with the outcome or decision.</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student Name:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->name }}">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student Signature:</label>
                          <input type="text" class="form-control" id="" value="" name="student_signature">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Date:</label>
                           <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control" name="date_received" />
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
      $('#refund-request').submit();
    })
  })
</script>
@endsection