@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Student Details</h1>
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
                  <h3>Personal Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Title:</label>
                      <select class="form-control" name="title">
                        <option></option>
                        <option>Mr.</option>
                        <option>Ms.</option>
                        <option>Mrs.</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" id="" value="" name="fname">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Middle Name:</label>
                      <input type="text" class="form-control" id="" value="" name="mname">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Last Name:</label>
                      <input type="text" class="form-control" id="" value="" name="lname">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Date of Birth:</label>
                     <div class='input-group date generic-datepicker'>
                       <input type='text' class="form-control" name="dob" />
                       <span class="input-group-addon">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                       </span>
                     </div>
                   </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                      <label for="">Country of Birth:</label>
                      <select class="form-control" name="country_birth">
                        <option></option>
                        <option>Australia</option>
                        <option>Australia</option>
                        <option>Australia</option>
                        <option>Australia</option>
                        <option>Australia</option>
                      </select>
                     </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="">Gender:</label>
                      <select class="form-control" name="gender">
                        <option></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Country of Citizenship:</label>
                        <select class="form-control" name="country_citizenship">
                          <option></option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option>
                        </select>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Contact Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Phone Number:</label>
                      <input type="text" class="form-control" id="" value="" name="phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Mobile Number:</label>
                      <input type="text" class="form-control" id="" value="" name="mobile">
                    </div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Work Phone Number: (Optional)</label>
                      <input type="text" class="form-control" id="" value="" name="wphone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Work Mobile Number: (Optional)</label>
                      <input type="text" class="form-control" id="" value="" name="wmobile">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="not-required">Email Address</label>
                      <input type="email" class="form-control" id="" value="" name="email">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Current Address Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">State:</label>
                      <select class="form-control" name="current_state">
                        <option></option>
                        <option>NSW - New South Wales</option>
                        <option>QLD - Queensland</option>
                        <option>VIC - Victoria</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Suburb:</label>
                      <select class="form-control" name="current_suburb">
                        <option></option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                      </select>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Locality:</label>
                      <select class="form-control" name="current_locality">
                        <option></option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Postcode:</label>
                      <input type="text" class="form-control" id="" value="" name="current_postcode">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Building Property Name:</label>
                      <input type="text" class="form-control" id="" value="" name="current_bldg_name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Flat Unit:</label>
                      <input type="text" class="form-control" id="" value="" name="current_flat_unit">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Street Number:</label>
                      <input type="text" class="form-control" id="" value="" name="current_st_num">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Street Name:</label>
                      <input type="text" class="form-control" id="" value="" name="current_st_name">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="not-required">Postal Delivery Box:</label>
                      <input type="text" class="form-control" id="" value="" name="current_postal_box">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Home Address Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">State:</label>
                      <select class="form-control" name="home_state">
                        <option></option>
                        <option>NSW - New South Wales</option>
                        <option>QLD - Queensland</option>
                        <option>VIC - Victoria</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Suburb:</label>
                      <select class="form-control" name="home_suburb">
                        <option></option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                        <option>1001 - SYDNEY</option>
                      </select>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Locality:</label>
                      <select class="form-control" name="home_locality">
                        <option></option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                        <option>Aberdeen, NSW</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Postcode:</label>
                      <input type="text" class="form-control" id="" value="" name="home_postcode">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Building Property Name:</label>
                      <input type="text" class="form-control" id="" value="" name="home_bldg_name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Flat Unit:</label>
                      <input type="text" class="form-control" id="" value="" name="home_flat_unit">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Street Number:</label>
                      <input type="text" class="form-control" id="" value="" name="home_st_num">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Street Name:</label>
                      <input type="text" class="form-control" id="" value="" name="home_st_name">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="not-required">Postal Delivery Box:</label>
                      <input type="text" class="form-control" id="" value="" name="home_postal_box">
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
@endsection