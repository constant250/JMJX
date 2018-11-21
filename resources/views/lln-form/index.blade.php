@extends('layouts.master')

@section('custom-links')
<style>
.text-center{text-align: center!important;}
#self-reflection-table thead tr th, #task2-table thead tr th{padding: 15px 10px!important;}
#self-reflection-table tbody tr td{padding: 15px 10px!important;}
#self-reflection-table tbody tr td:first-child, #task2-table tbody tr td:first-child{text-align: left;}
#self-reflection-table tbody tr td textarea{height: 60px!important;}
#task2-table tbody tr td{padding: 5px 10px!important;}
</style>
@endsection

@section('page-content')

 <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Language, Literacy and Numeracy (LLN) Test</h1>
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
            <a href="#lln-guide-mapping" aria-controls="lln-guide-mapping" role="tab" data-toggle="tab">Guide and Mapping</a>
          </li>
         <li role="presentation">
            <a href="#lln-getting-started" aria-controls="lln-getting-started" role="tab" data-toggle="tab">Getting Started</a>
          </li>
         <li role="presentation">
            <a href="#personal-details" aria-controls="personal-details" role="tab" data-toggle="tab">Personal Details</a>
          </li>
          <li role="presentation">
            <a href="#lln-partA" aria-controls="lln-partA" role="tab" data-toggle="tab">Part A</a>
          </li>
          <li role="presentation">
            <a href="#lln-partB" aria-controls="lln-partB" role="tab" data-toggle="tab">Part B</a>
          </li> 
          <li role="presentation">
            <a href="#outcome" aria-controls="outcome" role="tab" data-toggle="tab">Outcome</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content crm-tabs-content">    

          @include ( 'lln-form.tabs.guide-and-mapping' )

          @include ( 'lln-form.tabs.getting-started' )

          @include ( 'lln-form.tabs.personal-details' )

          @include ( 'lln-form.tabs.part-a' )

          @include ( 'lln-form.tabs.part-b' )

          @include ( 'lln-form.tabs.outcome' )

        </div>
      </div>
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