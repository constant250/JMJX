@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Application for Release Letter</h1>
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
                  <h3>Student’s Personal Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Full Name:</label>
                      <input type="text" class="form-control" id="" value="" name="stud_fullname">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Student DOB/ETI Student ID:</label>
                      <input type="text" class="form-control" id="" value="" name="stud_dob_id">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Email:</label>
                      <input type="text" class="form-control" id="" value="" name="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Contact No:</label>
                      <input type="text" class="form-control" id="" value="" name="lmobile">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                   <div class="form-group">
                    <label for="">Address:</label>
                    <input type="text" class="form-control" id="" value="" name="stud_fulladdress">
                   </div>
                  </div>
                  <div class="clearfix"></div>
                	</div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Course Details</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="" class="not-required">Course code and Name:</label>
                      <select class="form-control" name="course_code_name">
                        <option></option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                        <option>(CPC30211) Certificate III in Carpentry</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="" class="not-required">Course start date:</label>
                      <div class='input-group date generic-datepicker'>
                        <input type='text' class="form-control"/>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="" class="not-required">Release effective from:</label>
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
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Student Declaration</h3>
                </div>
                <div class="form-padding-left-right form-template">
                	<div class="row">
                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-1" name="stud_declaration_1">
                        <label class="checkbox-input" for="declaration-1"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that this application does not guarantee the issue of a release letter</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-2" name="stud_declaration_2">
                        <label class="checkbox-input" for="declaration-2"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that I have to provide the necessary documents requested by Elite Training Institute ETI (such as offer letter from another provider).</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-3" name="stud_declaration_3">
                        <label class="checkbox-input" for="declaration-3"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that I have to maintain my enrolment at Elite Training Institute (ETI) while the application is being processed.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-4" name="stud_declaration_4">
                        <label class="checkbox-input" for="declaration-4"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I declare that all the information provided in this form is accurate and correct and no false/fake document has been attached.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-5" name="stud_declaration_5">
                        <label class="checkbox-input" for="declaration-5"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I acknowledge that I have read and understood all the requirements for this request.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-6" name="stud_declaration_6">
                        <label class="checkbox-input" for="declaration-6"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I acknowledge that I understand all the relevant policies and procedures in regard to this change, including ETI’s Fee Charges and Refund Policy and procedure.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-7" name="stud_declaration_7">
                        <label class="checkbox-input" for="declaration-7"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I acknowledge that I have been advised to contact DEPARTMENT OF HOME AFFAIRS regarding any visa changes to the student visa.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-8" name="stud_declaration_8">
                        <label class="checkbox-input" for="declaration-8"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that I must pay my all dues as one of the requirements for getting a release letter.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-9" name="stud_declaration_9">
                        <label class="checkbox-input" for="declaration-9"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I am aware of my appeal rights.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-10" name="stud_declaration_10">
                        <label class="checkbox-input" for="declaration-10"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that I must discuss the issue with the student support officer before applying for the release letter.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <div class="crm-form-checkbox position-relative center-block">
                        <input type="checkbox" class="" id="declaration-11" name="stud_declaration_11">
                        <label class="checkbox-input" for="declaration-11"></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-11">
                    <div class="form-group">
                      <p class="px-12-font">I understand that processing time for the application for the release letter is 10 working days.</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Signature:</label>
                      <input type="text" class="form-control" id="" value="" name="ct_signature">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="not-required">Date:</label>
                      <div class='input-group date generic-datepicker'>
                        <input type='text' class="form-control" class="ct_declaration_date" />
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
   <!-- End Pages/Dashboard Content Goes Here -->

@endsection

@section('custom-page-scripts')

<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="text" class="form-control" name="ct_unit_code' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="ct_unit_name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="ct_student_evidence' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="ct_provided' + counter + '"/></td>';
        cols += '<td><button class="btnDel btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.add-row-table").append(newRow);
        counter++;
    });
    $("table.add-row-table").on("click", ".btnDel", function (event) {
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
@endsection