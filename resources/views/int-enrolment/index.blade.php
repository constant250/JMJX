@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">International Student Enrolment Form</h1>
      <p class="px-12-font m-0">Applicants must complete all sections and answer all questions (use BLOCK letters).</p>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">
      <div class="clearfix" style="height: 30px;"></div>
      <div class="inner-content-header">
      	@include ( 'layouts.form.toolbarv2' )
      </div>
      <div class="clearfix" style="height: 10px;"></div>
      <!-- Tabs -->
      <div class="tabs">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs crm-nav-tabs dark-tabs px-12-font" role="tablist">
          <li role="presentation" class="active">
            <a href="#enrolment-part-a" aria-controls="enrolment-part-a" role="tab" data-toggle="tab">Part A</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-b" aria-controls="enrolment-part-b" role="tab" data-toggle="tab">Part B</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-c" aria-controls="enrolment-part-c" role="tab" data-toggle="tab">Part C</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-d" aria-controls="enrolment-part-d" role="tab" data-toggle="tab">Part D</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-e" aria-controls="enrolment-part-e" role="tab" data-toggle="tab">Part E</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-f" aria-controls="enrolment-part-f" role="tab" data-toggle="tab">Part F</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-g" aria-controls="enrolment-part-g" role="tab" data-toggle="tab">Part G</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-h" aria-controls="enrolment-part-h" role="tab" data-toggle="tab">Part H</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-i" aria-controls="enrolment-part-i" role="tab" data-toggle="tab">Part I</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-j" aria-controls="enrolment-part-j" role="tab" data-toggle="tab">Part J</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-k" aria-controls="enrolment-part-k" role="tab" data-toggle="tab">Part K</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-l" aria-controls="enrolment-part-l" role="tab" data-toggle="tab">Part L</a>
          </li>
          <li role="presentation">
            <a href="#enrolment-part-m" aria-controls="enrolment-part-m" role="tab" data-toggle="tab">Part M</a>
          </li>
        </ul>

        {!! Form::model($int_enrol, ['route' => ['int-enrolment.update', $student->id], 'method' => 'put', 'class' => 'add-int-enrol-form form-template no-padding'] ) !!}

        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">

          @include ( 'int-enrolment.tabs.part-a' )

          @include ( 'int-enrolment.tabs.part-b' )

          @include ( 'int-enrolment.tabs.part-c' )

          @include ( 'int-enrolment.tabs.part-d' )

          @include ( 'int-enrolment.tabs.part-e' )

          @include ( 'int-enrolment.tabs.part-f' )

          @include ( 'int-enrolment.tabs.part-g' )

          @include ( 'int-enrolment.tabs.part-h' )

          @include ( 'int-enrolment.tabs.part-i' )

          @include ( 'int-enrolment.tabs.part-j' )

          @include ( 'int-enrolment.tabs.part-k' )

          @include ( 'int-enrolment.tabs.part-l' )

          @include ( 'int-enrolment.tabs.part-m' )

        </div>
      </div>
      </div>
    </div>
  </div>
   <!-- End Pages/Dashboard Content Goes Here -->

@endsection

@section('custom-page-scripts')

<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;
    $("#addEducation").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols += '<td><input type="text" class="form-control" name="institution_name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="institution_location' + counter + '"/></td>';
        cols += '<td><input type="number" class="form-control" name="yrs_attended' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="award_received"' + counter + '"/></td>';
        cols += '<td><button class="btnDelEducation btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.previous-education").append(newRow);
        counter++;
    });
    $("table.previous-education").on("click", ".btnDelEducation", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});

$(document).ready(function () {
    var counter = 0;
    $("#addJobExperience").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        var rowCounter = counter + 2;
        cols += '<td>'+ rowCounter +'</td>';
        cols += '<td><input type="text" class="form-control" name="employer' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="location' + counter + '"/></td>';
        cols += '<td><input type="number" class="form-control" name="yrs_employed' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="position"' + counter + '"/></td>';
        cols += '<td><button class="btnDelExperience btn btn-link outline-none" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></td>';
        newRow.append(cols);
        $("table.job-experience").append(newRow);
        counter++;
    });
    $("table.job-experience").on("click", ".btnDelExperience", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});
</script>

<script type="text/javascript">
  $(function () {
      $('.generic-datepicker').datetimepicker({
            format: 'DD/MM/YYYY'
        });
   });
</script>
@endsection