@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')
  <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin ">Critical Incident Report Form</h1>
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
                  <h3>Type of Incident</h3>
                </div>

                <div class="form-padding-left-right form-template">
                   <div class="container-fluid">
                     <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <!-- <label for="">Type of Incident:</label> -->
                          <div class="clearfix"></div>
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-1">
                            <label class="checkbox-input" for="toi-checkbox-1"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-1">Injury to Staff </label>
                          
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-2">
                            <label class="checkbox-input" for="toi-checkbox-2"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-2">Vehicle Accident </label>
                          
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-3">
                            <label class="checkbox-input" for="toi-checkbox-3"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-3">Fire</label>
                          
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-4">
                            <label class="checkbox-input" for="toi-checkbox-4"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-4">Property Damage</label>
                          
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-5">
                            <label class="checkbox-input" for="toi-checkbox-5"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-5">Theft/loss </label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-6">
                            <label class="checkbox-input" for="toi-checkbox-6"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-6">Assault</label>
                          
                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-7">
                            <label class="checkbox-input" for="toi-checkbox-7"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-7">Injury to Student </label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-8">
                            <label class="checkbox-input" for="toi-checkbox-8"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-8">Environmental Damage </label>

                          <div class="crm-form-checkbox position-relative display-inlineblock">
                            <input type="checkbox" class="" id="toi-checkbox-9">
                            <label class="checkbox-input" for="toi-checkbox-9"></label>
                          </div> <label class="display-inlineblock px-10-font checkbox-label label-right not-required" for="toi-checkbox-9">Damage</label>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">If other, please specify:</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                     </div>
                   </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Details of Incident</h3>
                </div>
                <div class="form-padding-left-right form-template">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for=""> Date:</label>
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
                          <label for="">Time:</label>
                          <div class='input-group date time-datepicker'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Detailed informationof what activity was undergoing when it happened</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Description of Injury</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Description of Incident</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Description of Damage</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">Were any other services involved / attended? (If yes, please attach a copy of the report)</label>
                          <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Location:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Report Received by:</label>
                          <input type="text" class="form-control" id="" value="">
                        </div>
                      </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Person/s Involved (Include everyone who is somehow related to the incident)</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <table width="100%">
                          <tr class="no-border">
                            <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Name</b></td>
                            <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Contact Number</b></td>
                            <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Address</b></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="Jon Snow">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="number" class="form-control" id="" value="12345">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="North">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="number" class="form-control" id="" value="">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="number" class="form-control" id="" value="">
                              </div>
                            </td>
                            <td>
                              <div class="">
                                <input type="text" class="form-control" id="" value="">
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="horizontal-line-wrapper">
                  <h3>Recommended Actions from ETI higher Management</h3>
                </div>
                <div class="form-padding-left-right form-template">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <table width="100%">
                            <tr>
                              <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Name</b></td>
                              <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Contact Number</b></td>
                              <td width="30%" class="px-12-font bright-grey-font-color text-center line-height-1point5"><b>Address</b></td>
                            </tr>
                            <tr>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="Jon Snow">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="number" class="form-control" id="" value="12345">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="North">
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="number" class="form-control" id="" value="">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="number" class="form-control" id="" value="">
                                </div>
                              </td>
                              <td>
                                <div class="">
                                  <input type="text" class="form-control" id="" value="">
                                </div>
                              </td>
                            </tr>
                          </table>
                          <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix" style="height: 30px;"></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Signature:</label>
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