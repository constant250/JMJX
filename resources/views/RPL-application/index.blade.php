@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">RPL Application Form</h1>
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
          
          @if (session('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Created Successfully!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
          <form  id="rpl-application" action="{{ route('rpl-application.store')}}" method="post" class="form-template no-padding">
            {{ csrf_field() }}
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="5%">Select Course</th>
                                <th width="10%">Course Code</th>
                                <th width="85%">Course Name</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-1" name="select_course">
                                    <label class="checkbox-input" for="course-1"></label>
                                  </div> 
                                </td>
                                <td>CHC30113 </td>
                                <td class="text-left">Certificate III in Early Childhood Education and Care</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-2" name="select_course">
                                    <label class="checkbox-input" for="course-2"></label>
                                  </div>
                                </td>
                                <td>CHC50113</td>
                                <td class="text-left">Diploma of Early Childhood Education and Care</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-3" name="select_course">
                                    <label class="checkbox-input" for="course-3"></label>
                                  </div>
                                </td>
                                <td>SIT30816</td>
                                <td class="text-left">Certificate III in Commercial Cookery</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-4" name="select_course">
                                    <label class="checkbox-input" for="course-4"></label>
                                  </div>
                                </td>
                                <td>SIT40516</td>
                                <td class="text-left">Certificate IV in Commercial Cookery</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-5" name="select_course">
                                    <label class="checkbox-input" for="course-5"></label>
                                  </div>
                                </td>
                                <td>SIT50416</td>
                                <td class="text-left">Diploma of Hospitality Management</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-6" name="select_course">
                                    <label class="checkbox-input" for="course-6"></label>
                                  </div>
                                </td>
                                <td>SIT60316 </td>
                                <td class="text-left">Advanced Diploma of Hospitality Management</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-7" name="select_course">
                                    <label class="checkbox-input" for="course-7"></label>
                                  </div>
                                </td>
                                <td>CPC30211</td>
                                <td class="text-left">Certificate III in Carpentry</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-8" name="select_course">
                                    <label class="checkbox-input" for="course-8"></label>
                                  </div>
                                </td>
                                <td>CPC50210</td>
                                <td class="text-left">Diploma of Building and Construction (Building)</td>
                              </tr>

                              <tr>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="course-9" name="select_course">
                                    <label class="checkbox-input" for="course-9"></label>
                                  </div>
                                </td>
                                <td>CPP30411</td>
                                <td class="text-left">Certificate III in Security Operations</td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Student Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Title:</label>
                        {{-- <select class="form-control" name="title">
                          <option></option>
                          <option>Mr.</option>
                          <option>Ms.</option>
                          <option>Mrs.</option>
                        </select> --}}
                        <input class="form-control" type="text" value="{{ $student->party->person->prefix }}" name="title"></input>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">First Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->firstname }}" name="fname">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Middle Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->middlename }}" name="mname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Last Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->lastname }}" name="lname">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Date of Birth:</label>
                       <div class='input-group date generic-datepicker'>
                         <input type='text' class="form-control" name="dob" value="{{ Carbon\Carbon::parse( $student->party->person->dob )->format('d-M-Y') }}" />
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
                          @foreach($countries as $country)
                            <option value="{{ $country->identifier }}">{{ $country->full_name }}</option>
                          @endforeach
                          {{-- <option></option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option>
                          <option>Australia</option> --}}
                        </select>
                       </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-6">
                       <div class="form-group">
                        <label for="">Gender:</label>
                        <input class="form-control" type="text" name="gender" value="{{ ($student->party->person->prefix == 'Mr') ? 'Male' : 'Female'  }}" ></input>
                       {{--  <select class="form-control" name="gender">
                          <option></option>
                          <option>Male</option>
                          <option>Female</option>
                        </select> --}}
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
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Passport Number:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->person->passport_num }}" name="passport_num">
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                         <label for="">Expiry Date:</label>
                         <div class='input-group date generic-datepicker'>
                           <input type='text' class="form-control" value="{{ $student->party->person->passport_expiry }}"  name="passport_expiry" />
                           <span class="input-group-addon">
                               <i class="fa fa-calendar" aria-hidden="true"></i>
                           </span>
                         </div>
                       </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-12">
                        <div class="form-group">
                         <label for="">Do you hold permanent residency or a current Australian visa?</label>
                         <br>
                          <div class="crm-form-radio position-relative display-inlineblock">
                            <input type="radio" class="" id="residency-yes" value="yes" name="australian_residency">
                            <label class="radio-input" for="residency-yes"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="residency-yes">Yes</label>

                          <div class="crm-form-radio position-relative display-inlineblock">
                            <input type="radio" class="" id="residency-no" value="no" name="australian_residency">
                            <label class="radio-input" for="residency-no"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="residency-no">No</label>

                          <p class="display-inlineblock px-10-font"> If Yes, please provide a copy along with the following details</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Visa Type:</label>
                          <input type="text" class="form-control" id="" value="{{ $student->party->person->visa_type }}" name="visa_type">
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                         <label for="">Visa Expiry Date:</label>
                         <div class='input-group date generic-datepicker'>
                           <input type='text' class="form-control"  value="{{ $student->party->person->visa_expiry }}" name="visa_expiry" />
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
                  <h3>Contact Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Phone Number:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->phone }}" name="phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Mobile Number:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->mobile }}" name="mobile">
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Work Phone Number: (Optional)</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->wphone }}" name="wphone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Work Mobile Number: (Optional)</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->wmobile }}" name="wmobile">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">Email Address</label>
                        <input type="email" class="form-control" id="" value="{{ $student->party->person->email }}" name="email">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Current Address Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">State:</label>
                        <select class="form-control" name="current_state">
                          @foreach( $states as $state )
                            <option value="{{ $state->value }}" > {{ $state->state_name }} </option>
                          @endforeach
                          {{-- <option></option>
                          <option>NSW - New South Wales</option>
                          <option>QLD - Queensland</option>
                          <option>VIC - Victoria</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Suburb:</label>
                        <select class="form-control" name="current_suburb">
                          @foreach( $suburbs as $suburb )
                            <option value="{{ $suburb->city }}"> {{ $suburb->city }} </option>
                          @endforeach
                          {{-- <option></option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Locality:</label>
                        <select class="form-control" name="current_locality">
                          @foreach( $localities as $locality )
                            <option value="{{ $locality->id }}"> {{ $locality->loc_name }} </option>
                          @endforeach
                          {{-- <option></option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Postcode:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_postcode }}" name="current_postcode">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Building Property Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_bldg_name }}" name="current_bldg_name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Flat Unit:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_flat_unit }}" name="current_flat_unit">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Street Number:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_st_num }}" name="current_st_num">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Street Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_st_name }}" name="current_st_name">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">Postal Delivery Box:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->current_postal_box }}" name="current_postal_box">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Home Address Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">State:</label>
                        <select class="form-control" name="home_state">
                          @foreach( $states as $state )
                            <option value="{{ $state->value }}" > {{ $state->state_name }} </option>
                          @endforeach
                          {{-- <option></option>
                          <option>NSW - New South Wales</option>
                          <option>QLD - Queensland</option>
                          <option>VIC - Victoria</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Suburb:</label>
                        <select class="form-control" name="home_suburb">
                          @foreach( $suburbs as $suburb )
                            <option value="{{ $suburb->city }}"> {{ $suburb->city }} </option>
                          @endforeach
                         {{--  <option></option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option>
                          <option>1001 - SYDNEY</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Locality:</label>
                        <select class="form-control" name="home_locality">
                          @foreach( $localities as $locality )
                            <option value="{{ $locality->id }}"> {{ $locality->loc_name }} </option>
                          @endforeach
                          {{-- <option></option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option>
                          <option>Aberdeen, NSW</option> --}}
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Postcode:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_postcode }}" name="home_postcode">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Building Property Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_bldg_name }}" name="home_bldg_name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Flat Unit:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_flat_unit }}" name="home_flat_unit">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Street Number:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_st_num }}" name="home_st_num">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Street Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_st_name }}" name="home_st_name">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">Postal Delivery Box:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->home_postal_box }}" name="home_postal_box">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Person to Contact in Case of Emergency: </h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->emergency_name }}" name="emergency_name">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Relationship:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->emergency_relationship }}" name="emergency_relationship">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="" value="{{ $student->party->person->emergency_email }}" name="emergency_email">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->emergency_address }}" name="emergency_address">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->emergency_mobile }}" name="emergency_mobile">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Telephone:</label>
                        <input type="text" class="form-control" id="" value="{{ $student->party->person->emergency_telephone }}" name="emergency_telephone">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Current Employment</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="">1. Are you currently employed:</label>
                       <br>
                       <div class="clearfix" style="height: 10px;"></div>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="employed-yes" value="1" name="current_employment">
                          <label class="radio-input" for="employed-yes"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="employed-yes">Yes</label>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="employed-no" value="0" name="current_employment">
                          <label class="radio-input" for="employed-no"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="employed-no">No</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="">If yes, is your main occupation related to the qualification in which you are seeking RPL?</label>
                       <br>
                       <div class="clearfix" style="height: 10px;"></div>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="rpl-yes" value="1" name="if_yes">
                          <label class="radio-input" for="rpl-yes"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="rpl-yes">Yes</label>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="rpl-no" value="0" name="if_yes">
                          <label class="radio-input" for="rpl-no"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="rpl-no">No</label>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                       <label for="">What is the name of your employer?</label>
                       <input type="text" class="form-control" id="" value="" name="employers_name">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="" style="line-height: 1.5;">2. If no to question 1 above, do you have a workplace where you will be able to be assessed on the job for the qualification in which you are seeking RPL?</label>
                       <br>
                       <div class="clearfix" style="height: 10px;"></div>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="workplace-yes" name="if_no_question_one">
                          <label class="radio-input" for="workplace-yes"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="workplace-yes">Yes</label>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="workplace-no" value="1" name="if_no_question_one">
                          <label class="radio-input" for="workplace-no"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="workplace-no">No</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="">Please provide details of the workplace</label>
                       <div class="clearfix" style="height: 15px;"></div>
                       <input type="text" class="form-control" id="" value="" name="details_of_workplace">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Further Training</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <label for="">Have you undertaken any full qualifications related to the occupation of which you are seeking recognition? </label>
                       <br>
                       <div class="clearfix" style="height: 10px;"></div>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="recognition-yes" value="1" name="undertaken_any_qualification">
                          <label class="radio-input" for="recognition-yes"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="recognition-yes">Yes</label>
                        <div class="crm-form-radio position-relative display-inlineblock">
                          <input type="radio" class="" id="recognition-no" value="0" name="undertaken_any_qualification">
                          <label class="radio-input" for="recognition-no"></label>
                        </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="recognition-no">No</label>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="">If yes, training completion date (month, year):</label>
                       <input type="text" class="form-control" id="" value="" name="if_yes_training_completion">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label for="">Country:</label>
                       <select name="country" id="" class="form-control">
                         @foreach($countries as $country)
                         <option value="{{ $country->identifier }}"> {{ $country->full_name }} </option>
                         @endforeach
                         {{-- <option value=""></option>
                         <option value="">Australia</option>
                         <option value="">Australia</option>
                         <option value="">Australia</option>
                         <option value="">Australia</option>
                         <option value="">Australia</option> --}}
                       </select>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div>
                  <div class="row">
                    <div class="col-lg-12 no-padding">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap add-row-table professional-referees" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="95%" colspan="2" class="text-left">Professional Referees (who have acted in senior capacity to you and can verify your skills)</th>
                                <th width="5%" class="no-padding"><button class="add-col-btn" id="addReferee" type="button" style="height: 40px;"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td width="1%">1</td>
                                <td class="text-left">
                                  <div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="" class="">Name:</label>
                                        <div class="clearfix" style="height: 5px;"></div>
                                        <input type="text" class="form-control" name="prof_ref[1][name]">
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Position:</label>
                                        <div class="clearfix" style="height: 5px;"></div>
                                        <input type="text" class="form-control" name="prof_ref[1][position]">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Organisation:</label>
                                        <div class="clearfix" style="height: 5px;"></div>
                                        <input type="text" class="form-control" name="prof_ref[1][organisation]">
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Relationship to you:</label>
                                        <div class="clearfix" style="height: 5px;" name="prof_ref[1][relationship]"></div>
                                        <input type="text" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Email Address:</label>
                                        <div class="clearfix" style="height: 5px;"></div>
                                        <input type="email" class="form-control" name="prof_ref[1][email]">
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Phone Number:</label>
                                        <div class="clearfix" style="height: 5px;"></div>
                                        <input type="text" class="form-control" name="prof_ref[1][phone_number]">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="" class="">Mobile Number:</label>
                                        <div class="clearfix" style="height: 5px;" ></div>
                                        <input type="text" class="form-control" name="prof_ref[1][mobile_number]">
                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                  </div>
                                </td>
                                <td><button class="btnDelReferee btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Previous Employment History (attach additional sheet if required, or attach CV with these details included)</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap add-row-table previous-employment-history" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th rowspan="2" colspan="2" width="30%">Name, address and phone numbers of employers</th>
                                <th colspan="2">Period of Employment (DD/MM/YYYY)</th>
                                <th rowspan="2">Position held </th>
                                <th rowspan="2" width="5%">FT/PT/Cas</th>
                                <th rowspan="2">Description of Major Duties</th>
                                <th width="5%" class="no-padding" rowspan="2"><button class="add-col-btn" id="addEmploymentHistory" type="button" style="height: 40px;"><i class="fa fa-plus" aria-hidden="true"></i></button>
                              </tr>
                              <tr>
                                <th class="dark-gray-table-color" width="15%">From</th>
                                <th class="dark-gray-table-color" width="15%">To</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><input type='text' class="form-control" name="prev_emp[1][employers_details]" /></td>
                                <td>
                                  <div class='input-group date generic-datepicker'>
                                    <input type='text' class="form-control" name="prev_emp[1][period_to]" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                  </div>
                                </td>
                                <td>
                                  <div class='input-group date generic-datepicker'>
                                    <input type='text' class="form-control" name="prev_emp[1][period_from]" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                  </div>
                                </td>
                                <td><input type='text' class="form-control" name="prev_emp[1][position_held]" /></td>
                                <td><input type='text' class="form-control" name="prev_emp[1][ft_pt_cas]" /></td>
                                <td><input type='text' class="form-control" name="prev_emp[1][desc_mjr_duties]" /> </td>
                                <td><button class="btnDelHistory btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Evidence for RPL Application (you are required to include evidence to support your RPL application)</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="90%">Document description</th>
                                <th width="10%">Included?</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr>
                                <td class="text-left">Your current and detailed CV</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-1" value="1" name="current_detailed_cv">
                                    <label class="checkbox-input" for="docu-desc-1"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Copies of Certificates of any formal and informal training you have participated in.</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-2" value="1" name="copies_of_cert">
                                    <label class="checkbox-input" for="docu-desc-2"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Current and previous (within the last 5 years) position descriptions and performance reviews (if available).</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-3" value="1" name="current_and_prev_position">
                                    <label class="checkbox-input" for="docu-desc-3"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Copies of qualifications you have completed.</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-4" value="1" name="copies_of_qualification">
                                    <label class="checkbox-input" for="docu-desc-4"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Any letters of support from employers or industry contacts (if available).</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-5" value="1" name="letter_of_support">
                                    <label class="checkbox-input" for="docu-desc-5"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Contact details of at least 2 professional referees who have acted in a senior capacity to you in the workplace and who can verify your competency (as above).</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-6" value="1" name="contact_details">
                                    <label class="checkbox-input" for="docu-desc-6"></label>
                                  </div> 
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">Qualification Summary</td>
                                <td>
                                  <div class="crm-form-checkbox position-relative center-block">
                                    <input type="checkbox" class="" id="docu-desc-7" value="1" name="qualification_summary">
                                    <label class="checkbox-input" for="docu-desc-7"></label>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="text-left">
                                  <div class="form-group">
                                    <label for="" class="not-required" style="line-height: 1.2;">Self-Assessment Checklists</label>
                                    <div class="clearfix" style="height: 13px;"></div>
                                    <input type="text" class="form-control" id="" name="self_assesment_checklist">
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group">
                                    <label for="" class="not-required" style="line-height: 1.2;">For how many units?</label>
                                    <input type="number" class="form-control" id="" name="how_many_units">
                                  </div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Declaration</h3>
                </div>

                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="datatable-wrapper box-shadow">
                        <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap" cellspacing="0" width="100%">
                          <tr>
                            <td width="100%" class="iris-blue-bg-color white-font-color" colspan="4">I declare that the information contained in this application is true and correct and that all documents are genuine</td>
                          </tr>
                          <tr>
                            <td width="20%" class="iris-blue-bg-color white-font-color">Candidate signature: </td>
                            <td><input type='text' class="form-control" name="candidate_signature" /></td>
                            <td width="20%" class="iris-blue-bg-color white-font-color">Date: </td>
                            <td>
                              <div class='input-group date generic-datepicker'>
                                <input type='text' class="form-control" name="date_received" />
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="20%" class="iris-blue-bg-color white-font-color">Printed name:</td>
                            <td colspan="3"><input type='text' class="form-control" name="printed_name" /></td>
                          </tr>
                        </table>
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
   <!-- End Pages/Dashboard Content Goes Here -->

@endsection

@section('custom-page-scripts')

<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;
    $("#addReferee").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols +='<td>'+
                      '<div>' +
                        '<div class="col-md-12">'+
                          '<div class="form-group">' +
                            '<label for="" class="">Name:</label>'+
                              '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][name]">'+
                              '</div>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Position:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][position]" >'+
                              '</div>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Organisation:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][organisation]" >'+
                              '</div>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Relationship to you:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][relationship]" >'+
                              '</div>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Email Address:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="email" class="form-control" name="prof_ref['+ rowCounter +'][email]" >'+
                              '</div>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Phone Number:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][phone_number]">'+
                              '</div>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                              '<div class="form-group">'+
                                '<label for="" class="">Mobile Number:</label>'+
                                '<div class="clearfix" style="height: 5px;"></div>'+
                                '<input type="text" class="form-control" name="prof_ref['+ rowCounter +'][mobile_number]" >'+
                              '</div>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                          '</div>'+
                        '</td>';
        cols += '<td><button class="btnDelReferee btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.professional-referees").append(newRow);
        counter++;
    });
    $("table.professional-referees").on("click", ".btnDelReferee", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});

$(document).ready(function () {
    var counter = 0;
    $("#addEmploymentHistory").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols += '<td><input type="text" class="form-control" name="prev_emp['+ rowCounter +'][employers_details]"/></td>';
        cols += '<td>'+
                      '<div class="input-group date generic-datepicker">'+
                        '<input type="text" class="form-control" name="prev_emp['+ rowCounter +'][period_to]" />'+
                        '<span class="input-group-addon">'+
                          '<i class="fa fa-calendar" aria-hidden="true"></i>'+
                        '</span>'+
                      '</div>'+
                    '</td>';
        cols += '<td>'+
                      '<div class="input-group date generic-datepicker">'+
                        '<input type="text" class="form-control" name="prev_emp['+ rowCounter +'][period_from]" />'+
                        '<span class="input-group-addon">'+
                          '<i class="fa fa-calendar" aria-hidden="true"></i>'+
                        '</span>'+
                      '</div>'+
                    '</td>';
        cols += '<td><input type="text" class="form-control" name="prev_emp['+ rowCounter +'][position_held]"/></td>';
        cols += '<td><input type="text" class="form-control" name="prev_emp['+ rowCounter +'][ft_pt_cas]"/></td>';
        cols += '<td><input type="text" class="form-control" name="prev_emp['+ rowCounter +'][desc_mjr_duties]"/></td>';
        cols += '<td><button class="btnDelHistory btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.previous-employment-history").append(newRow);
        counter++;
    });
    $("table.previous-employment-history").on("click", ".btnDelHistory", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});
</script>

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
      $('#rpl-application').submit();
    })
  })
</script>
@endsection