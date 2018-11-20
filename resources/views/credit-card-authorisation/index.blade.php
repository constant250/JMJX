@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

<!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Credit Card Payment Authorisation Form</h1>
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
                  <h3>Credit Card Payment Authorisation Form</h3>
                </div>
                <div class="form-padding-left-right form-template">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Name of the Credit Card:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Type of card:</label>
                            <select class="form-control">
                              <option></option>
                              <option>Visa</option>
                              <option>Master Card</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Expiry Date:</label>
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
                            <label for="">Credit Card Number:</label>
                            <input type="number" class="form-control" id="" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Amount Authorised:</label>
                            <input type="text" class="form-control" id="" value="">
                          </div>
                        </div>
                          <div class="col-md-12 no-padding">
                            <div class="clearfix"></div>
                              <div class="clearfix" style="height: 30px;"></div>
                              <div class="col-md-6">
                              <p class="bright-grey-font-color"><b>Declaration:</b></p>
                              <br>
                              <p class="bright-grey-font-color px-12-font">I authorize Elite Training Institute for the said payment.</p>
                              <br>
                              <div class="form-group">
                                <label for="">Signature of card holder for authorization:</label>
                                <input type="text" class="form-control" id="" value="">
                                <p class="px-10-font text-center bright-grey-font-color"><i>(Signature over printed Name)</i></p>
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