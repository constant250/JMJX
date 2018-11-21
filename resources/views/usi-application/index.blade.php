@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container"  style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">USI Application Form</h1>
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
                <div class="form-padding-left-right form-template">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                        <p class="px-12-font bright-grey-font-color">From 1 January 2015 if you are undertaking nationally recognised training you will need to have a Unique Student Identifier (USI). This includes all students who are continuing a course they started prior to 2015, and all new students.</p>
                        <p class="px-12-font bright-grey-font-color">Before completing this form, you should review the Fact Sheet: Student Information for the Unique Student Identifier (attached and available at the USI website <a href="www.usi.gov.au/students">www.usi.gov.au/students</a>.)</p>
                        <p  class="px-12-font bright-grey-font-color">Please tick one</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="usi-option-checkbox-1">
                            <label class="checkbox-input" for="usi-option-checkbox-1"></label>
                          </div> <label class="bright-grey-font-color display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-option-checkbox-1">I have my own USI:</label>
                          <div class="clearfix"></div>
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">First Name: </label>
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Last Name:</label>
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
                                  <label for="">Date of Birth:</label>
                                  <div class='input-group date generic-datepicker'>
                                    <input type='text' class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="">MY USI No. is:</label>
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p class="px-12-font bright-grey-font-color">In providing my USI, I confirm Elite Training Institute is authorised to collect, use and disclose my student identifier for the purposes required under the Student Identifiers Act 2014</p>
                          <div class="clearfix" style="height: 20px;"></div>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="usi-option-checkbox-2">
                            <label class="checkbox-input" for="usi-option-checkbox-2"></label>
                          </div> <label class="bright-grey-font-color display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-option-checkbox-2">I have USI, but I can’t remember</label>
                          <p class="px-12-font bright-grey-font-color">I authorise Elite Training Institute to look-up and verify my USI and personal records in the USI registry.</p>
                          <div class="clearfix" style="height: 20px;"></div>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="usi-option-checkbox-3">
                            <label class="checkbox-input" for="usi-option-checkbox-3"></label>
                          </div> <label class="bright-grey-font-color display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-option-checkbox-3">I do not have a USI yet:</label>
                          <br>
                          <label style="margin-left: 23px;" class="bright-grey-font-color display-inlineblock px-10-font checkbox-label label-right not-required" for="usi-option-checkbox-3">Elite Training Institute can create your USI for you</label>
                          <p class="px-12-font bright-grey-font-color">While you may create your own USI, Elite Training Institute is also able to create a USI for you. The application form below should be completed and returned to Elite Training Institute as soon as possible for your USI to be created.</p>
                        </div>
                      </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Personal Details</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">First Name (s):</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                        <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Middle Name:</label>
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Family Name:</label>
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Student ID:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Place of Birth:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for=""> Gender:</label>
                            <div class="clearfix"></div>
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="gender-checkbox-1">
                              <label class="checkbox-input" for="gender-checkbox-1"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="gender-checkbox-1">Male</label>

                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="gender-checkbox-2">
                              <label class="checkbox-input" for="gender-checkbox-2"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="gender-checkbox-2">Female</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for=""> Preferred Contact Method:</label>
                            <div class="clearfix"></div>
                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="contact-method-checkbox-1">
                              <label class="checkbox-input" for="contact-method-checkbox-1"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="contact-method-checkbox-1">Phone</label>

                            <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="contact-method-checkbox-2">
                              <label class="checkbox-input" for="contact-method-checkbox-2"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="contact-method-checkbox-2">Email</label>
                            
                             <div class="crm-form-checkbox position-relative display-inlineblock">
                              <input type="checkbox" class="" id="contact-method-checkbox-3">
                              <label class="checkbox-input" for="contact-method-checkbox-3"></label>
                            </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="contact-method-checkbox-3">Mail</label>
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
                            <label for="">Mobile:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Passport Number:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Country of Issue:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Driving License:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                            <label for="">State issued:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>UNIQUE STUDENT IDENTIFIER APPLICATION FORM</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Number:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Address in Australia (with postcode):</label>
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