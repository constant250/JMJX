<div role="tabpanel" class="tab-pane" id="personal-details">
    <div class="crm-form-container no-padding">
      <!-- <form action="" class="form-template no-padding"> -->
        <div class="crm-form-wrapper">
          <section>
          <div class="clearfix" style="height: 20px;"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <p class="px-14-font iris-blue-font-color no-margin bright-grey-font-color"><b>Purpose of the documents:</b></p>
                  <p class="px-12-font bright-grey-font-color">The purpose of this test is to ensure you have the language, literacy and numeracy skills needed to undertake your course of training. It will also show how we can assist you in any areas where you may need help to ensure your success to gain the qualification.</p>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>  
            <div class="horizontal-line-wrapper">
              <h3>Personal Details</h3>
            </div>
            <div class="form-padding-left-right form-template">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <p class="px-14-font iris-blue-font-color no-margin">Please provide the information required in the form below.</p>
                    <p class="px-12-font bright-grey-font-color">ETI respects your privacy and will not pass on your personal details to other organisations except as required by law.</p>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('fullname', 'Candidate name:', ['class' => 'required']) }}
                      {{ Form::text('fullname', old('fullname'), ['class' => 'form-control', 'placeholder' => '']) }}

                      @if ( $errors->has('fullname') )

                      <small class="text-danger">{{ $errors->first('fullname') }}</small>

                      @endif
                      <!-- <label for="">Candidate name: </label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Signature:</label>
                      <input type="text" class="form-control" id="" value="">
                    </div>
                  </div> -->
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('course_name', 'Course name:', ['class' => 'required']) }}
                      {{ Form::text('course_name', old('course_name'), ['class' => 'form-control', 'placeholder' => '']) }}

                      @if ( $errors->has('course_name') )

                      <small class="text-danger">{{ $errors->first('course_name') }}</small>

                      @endif
                      <!-- <label for="">Course name:</label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('address', 'Candidate name:', ['class' => 'required']) }}
                      {{ Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '']) }}

                      @if ( $errors->has('address') )

                      <small class="text-danger">{{ $errors->first('address') }}</small>

                      @endif
                      <!-- <label for="">Address:</label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('phone', 'Phones:', ['class' => 'required']) }}
                      {{ Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) }}

                      @if ( $errors->has('phone') )

                      <small class="text-danger">{{ $errors->first('phone') }}</small>

                      @endif
                      <!-- <label for="">Phones:</label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('student_id', 'Student ID:', ['class' => 'required']) }}
                      {{ Form::text('student_id', old('student_id'), ['class' => 'form-control', 'placeholder' => '']) }}

                      @if ( $errors->has('student_id') )

                      <small class="text-danger">{{ $errors->first('student_id') }}</small>

                      @endif
                      <!-- <label for="">Student ID:</label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('dob', 'Date of Birth:', ['class' => 'required']) }}
                      <!-- <label for="">Date of Birth:</label> -->
                      <div class='input-group date generic-datepicker'>
                        {{ Form::text('dob', old('dob'), ['class' => 'form-control', 'placeholder' => '']) }}
                        <!-- <input type='text' class="form-control"/> -->
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                      @if ( $errors->has('dob') )

                      <small class="text-danger">{{ $errors->first('dob') }}</small>

                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('country_of_birth', 'Country of Birth:', ['class' => 'required']) }}
                      {{ Form::text('country_of_birth', old('country_of_birth'), ['class' => 'form-control', 'placeholder' => '']) }}
                      <!-- <label for="">Country of Birth:</label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('years_in_au', 'How many years have you lived in Australia?', ['class' => 'required']) }}
                      {{ Form::number('years_in_au', old('years_in_au'), ['class' => 'form-control', 'placeholder' => '']) }}
                      <!-- <label for="">How many years have you lived in Australia? </label>
                      <input type="text" class="form-control" id="" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('gender', 'Gender:', ['class' => 'required']) }}
                      {{ Form::select('gender', ['Male'=>'Male', 'Female'=>'Female'], null, ['class'=>'form-control', 'placeholder' => 'Select Gender']) }}
                      <!-- <label for="">Gender:</label>
                      <select class="form-control">
                        <option></option>
                        <option>Female</option>
                        <option>Male</option>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      {{ Form::label('language_you_speak', 'Languages you speak:', ['class' => 'not-required']) }}
                      {{ Form::textarea('language_you_speak', old('language_you_speak'), ['class' => 'form-control', 'cols'=> 30, 'rows'=>10, 'placeholder' => '']) }}
                      <!-- <label for="">Languages you speak:</label>
                      <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </section>
          <div class="clearfix" style="height: 20px;"></div>
        </div>
      <!-- </form> -->
    </div>
</div>