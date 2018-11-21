@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Credit Transfer Application</h1>
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
                        <label for="" class="not-required">Student Name:</label>
                        <input type="text" class="form-control" id="" value="" name="stud_fullname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="not-required">Date of Birth:</label>
                        <input type="text" class="form-control" id="" value="" name="dob">
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
                <div class="clearfix" style="height: 15px;"></div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <div class="datatable-wrapper box-shadow">
                          <table id="self-reflection-table" class="display non-custom-datatable responsive nowrap add-row-table" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th width="20%">Code of the Unit</th>
                                <th width="35%">Name of the Unit</th>
                                <th width="20%">Evidence provided by student (e.g. Statement of attainment – RTO Name)</th>
                                <th width="20%">Credit Transfer Provided (Y/N) and Initials</th>
                                <th width="5%" class="no-padding"><button class="add-col-btn" id="addrow" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <input type='text' class="form-control" name="ct_unit_code" />
                                </td>
                                <td>
                                  <input type='text' class="form-control" name="ct_unit_name" />
                                </td>
                                <td>
                                  <input type='text' class="form-control" name="ct_student_evidence" />
                                </td>
                                <td>
                                  <input type='text' class="form-control" name="ct_provided" />
                                </td>
                                <td><button class="btnDel btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>
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
                  <h3>Information related to Course credit:</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <ol class="crm-form-list px-12-font">
                        <li>For application to be processed further, the students need to provide the statement of attainment or statement of results as an evidence of your completion of the unit, issued by a registered provider in Australia.</li>
                        <li>Course credit application must be lodged within 14 days of commencement of the studies..</li>
                        <li>If the application gets approved, the length of the course will be shortened accordingly.</li>
                        <li>The student will be communicated the outcome of the application within 14 working days.</li>
                      </ol>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Privacy Statement (For international Students)</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="px-12-font">Information is collected on this form and during your enrolment in order to meet the Institute’s obligations to maintain compliance with VET Regulators and other government bodies..</p>
                      <p class="px-12-font">Information collected on this form or during your enrolment can be disclosed without your consent where authorized or required by law.</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="horizontal-line-wrapper">
                  <h3>Student Declaration:</h3>
                </div>
                <div class="form-padding-left-right form-template">
                  <div class="row">
                    <div class="col-md-12">
                      <ol class="crm-form-list px-12-font">
                        <li>I declare that I wish to apply for course credit as outlined in this form.</li>
                        <li>I have been communicated all the information in regard to course credit and its effect on my enrolment and amount of training.</li>
                        <li>The attachment with this form is the photocopy of my original academic document. All the information provided in the form is correct and complete.</li>
                        <li>All the consequences of the Credit Transfer approval on my study duration have been communicated to me and I understand all the information provided.</li>
                      </ol>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="not-required">Student Name:</label>
                        <input type="text" class="form-control" id="" value="" name="stud_fullname">
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