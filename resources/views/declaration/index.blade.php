@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Declaration by the Student</h1>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">
       <div class="clearfix" style="height: 30px;"></div>
      <div class="inner-content-header">
        @include ( 'layouts.form.toolbarv2' )
      </div>

       <div class="clearfix" style="height: 10px;"></div>
        @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have updated successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="clearfix"></div>
          @endif
        <!-- Form -->
        <div class="crm-form-container no-padding">
          <form id="declaration" action="{{ route('declaration.store') }}" method="post" class="form-template no-padding">
            {{ csrf_field() }}
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="horizontal-line-wrapper">
                  <h3>Purpose of the document:</h3>
                </div>

                <div class="form-padding-left-right form-template">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <p class="px-12-font bright-grey-font-color">This document is to be signed when the student or the person responsible for paying the tuition fees, may choose to pay more than 50 per cent of their tuition fees before they start their course.</p>
                        </div>
                      </div>  
                    </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Student’s Personal Details</h3>
                </div>

                <div class="form-padding-left-right form-template">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">First Name:</label>
                            <input type="text" class="form-control" id="" value="{{ $student->party->person->firstname }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Given Name:</label>
                            <input type="text" class="form-control" id="" value="{{ $student->party->person->lastname }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Email Address:</label>
                            <input type="text" class="form-control" id="" value="{{ $student->party->person->email }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Phone Number:</label>
                            <input type="number" class="form-control" id="" value="{{ $student->party->person->mobile }}">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="">Residential Address:</label>
                            <input type="text" class="form-control" id="" value="{{ $student->party->person->address }}">
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>
                 <div class="horizontal-line-wrapper">
                  <h3>Declaration</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-12">
                        <p class="px-12-font bright-grey-font-color"><b>Declaration:</b> I, <input type="text" style="width: 300px;" class="form-control position-relative display-inlineblock" id="" value="{{ $student->party->name }}"> , hereby, declare that I have been informed that under the ESOS legislation, providers cannot require students to pay more than 50 per cent of their tuition fees before they start the course. However, I have chosen to pay more than 50% of my tuition fees upfront.</p>
                        <br>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student name:</label>
                          <input type="text" class="form-control" id="" name="" value="{{ $student->party->name }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Student Signature:</label>
                          <input type="text" class="form-control" id="" name="student_signature"  value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Date:</label>
                          <div class='input-group date generic-datepicker'>
                            <input type='text' class="form-control" name="student_date" />
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
      $('#declaration').submit();
    })
  })
</script>
@endsection