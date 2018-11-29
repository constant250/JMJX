@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

  <!-- Pages/Dashboard Content Goes Here -->
  <div class="inner-content-container" style="padding: 15px 0;">
    <div class="content-header position-relative">
      <h1 class="proximanova-regular px-20-font no-margin width-100-percent">Student Feedback Form</h1>
    </div>
    <div class="content-user-interface no-padding">
      <div class="content-wrapper">
      <div class="clearfix" style="height: 30px;"></div>
      <div class="inner-content-header">
        @include ( 'layouts.form.toolbarv2' )
      </div>
      <div class="clearfix" style="height: 30px;"></div>
        <!-- Form -->
        <div class="crm-form-container no-padding">
          @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You have submitted feedback successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="clearfix"></div>
          @endif
          <form id="feedback" action="{{ route('feedback.store') }}" method="post" class="form-template no-padding">
            {{ csrf_field() }}
            <div class="crm-form-wrapper">
              <section>
              <div class="clearfix" style="height: 20px;"></div>

                <div class="form-padding-left-right form-template">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Course:</label>
                          {{-- <input type="text" class="form-control" id="" value=""> --}}
                          <select class="form-control" name="course_code">
                            @foreach( $courses as $course )
                              <option value="{{ $course->code }}" > {{ $course->code }} - {{ $course->name }} </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Instructor Name:</label>
                          <input type="text" name="instructor_name" class="form-control" id="" value="">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">1. WHAT SUGGESTIONS DO YOU HAVE, TO BE IMPROVED AT ETI TRAINING?</label>
                          <textarea name="suggestion" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="" style="line-height: 1.5;">2. WHAT WOULD YOU LIKE TO CHANGE ABOUT THE COURSE?</label>
                          <textarea name="like_to_change_about_the_course" id="" class="form-control" cols="30" rows="10"></textarea>
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
  $(document).ready(function () {
    $('#btn-save').on('click', function(e) {
      e.preventDefault();
      $('#feedback').submit();
    })
  })
</script>
@endsection