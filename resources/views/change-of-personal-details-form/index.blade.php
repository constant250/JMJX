@extends('layouts.master')

@section('custom-links')
<style type="text/css">
</style>
@endsection

@section('page-content')
  <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular white-font-color px-20-font no-margin center-position width-100-percent">Change of Personal Details Form</h1>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">

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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Full Name:</label>
                      <input type="text" class="form-control" id="" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Date of Birth:</label>
                      <div class='input-group date generic-datepicker'>
                        <input type='text' class="form-control"/>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="clearfix"></div>
                </div>
                
                <div class="clearfix"></div>

                <div class="horizontal-line-wrapper">
                  <h3>New Contact Details (Only provide the details which are current)</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Mobile Number:</label>
                      <input type="text" class="form-control" id="" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Home Phone:</label>
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
                      <label for="">Residential Address:</label>
                      <input type="text" class="form-control" id="" value="">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="clearfix" style="height: 15px;"></div>
                  <div class="col-md-12">
                    <p class="bright-grey-font-color "><b>Privacy Statement</b></p>
                    <p class="bright-grey-font-color px-12-font">Information is collected on this form and during your enrolment to meet our obligations to maintain compliance with VET regulators and other government bodies.</p>
                    <p class="bright-grey-font-color px-12-font">In instances, information collected on this form or during your enrolment can be disclosed without your consent where authorised or required by law.</p>
                  </div>
                  
                  <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>

                <div class="horizontal-line-wrapper">
                  <h3>Student Declaration</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="col-md-12">
                    <p class="bright-grey-font-color px-12-font">I hereby declare that all the above information is true and correct as at date below and this information shall remain valid until I provide notice in writing of any change.</p>
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

@endsection