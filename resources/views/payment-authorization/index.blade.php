@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Payment Authorization Form</h1>
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
          <form action="{{ route('payment-auth.store') }}" id="payment_auth" method="post" class="form-template no-padding">
            {{ csrf_field() }}
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Name of the person being nominated for refund:</label>
                        <input type="text" class="form-control" id="" value="" name="name_of_person_nominated">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" id="" value="" name="nominated_address">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Phone Number:</label>
                        <input type="text" class="form-control" id="" value="" name="nominated_phone_number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Bank Name:</label>
                        <input type="text" class="form-control" id="" value="" name="nominated_bank_name">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Account Number:</label>
                        <input type="text" class="form-control" id="" value="" name="nominated_account_number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Bsb/Branch Number/Swiftcode:</label>
                        <input type="text" class="form-control" id="" value="" name="nominated_bsb_branch_number_swiftcode">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Declaration by the Student</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="display-inlineblock not-required">I, </label>
                        <input type="text" class="form-control width-auto display-inlineblock" id="" value="{{ $student->party->name }}" name="fullname">
                        <label  class="display-inlineblock not-required">authorize Elite Training Institute to transfer the refund amount in the account of the above mentioned nominated person.</label>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Name of the Student:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->name }}" name="stud_fullname">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Signature of the Student:</label>
                        <input type="text" class="form-control" id="" value="" name="student_signature">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Date:</label>
                        <div class='input-group date generic-datepicker'>
                         <input type='text' class="form-control" name="date_received" value="" />
                         <span class="input-group-addon">
                             <i class="fa fa-calendar" aria-hidden="true"></i>
                         </span>
                       </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <p class="px-12-font"><b>Note:</b> Please be advised that student must attach the following documents with this form:</p>
                      <ul class="px-12-font">
                        <li>Certified copy of the Passport of the nominated person.</li>
                        <li>Certified copy of the Passport of the student.</li>
                      </ul>
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
   $(document).ready(function () {
    $('#btn-save').on('click', function(e) {
      e.preventDefault();
      $('#payment_auth').submit();
    })
  })
</script>
@endsection