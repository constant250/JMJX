<link rel="stylesheet" type="text/css" href="{{ asset('/css/import-csv-file.min.css')}}">
<div class="toobar-wrapper">
  <div class="toolbar-left-aside">
    <a href="{{ $indexRoute }}" class="btn iris-blue-bg-color white-font-color display-inlineblock" style="padding: 8px 10px;"><i class="fa fa-chevron-left" aria-hidden="true"></i> &nbsp;Go Back</a>

     @if ( str_contains( $routeName, 'units' ))
        <div class="dropdown display-inlineblock">
          <button class="btn dropdown-toggle iris-blue-bg-color white-font-color display-inlineblock" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding: 8px 10px;">
            <i class="fa fa-upload"></i> Import Data
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a onclick="alertify.importData($('#import_csv_file_form')[0])">Import Units CSV file</a></li>
            <li><a href="{{ asset('/files/csv/UNIT CSV IMPORT.csv') }}">Download csv data format</a></li>
          </ul>
        </div>
        <!-- Alertify Import Data Form-->
          <div class="hidden">
                <form id="import_csv_file_form" method="POST" action="{{ route('csv_org.store') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <label for="csv_file" class="px-18-font">
                  @if(str_contains( $routeName, 'units' ))
                  Import Units CSV file
                  @endif
                  </label>
                  <input name="csv_file" type="file" id="csv_file" class="import_csv_file">
                  <center><input type="submit" value="Upload Csv" class="uploadbtn"></center>
                </form>
        </div>
      @endif

     @if ( str_contains( $routeName, 'course' ))
        <div class="dropdown display-inlineblock">
          <button class="btn dropdown-toggle iris-blue-bg-color white-font-color display-inlineblock" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding: 8px 10px;">
            <i class="fa fa-upload"></i> Import Data
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a onclick="alertify.importData($('#import_csv_file_form')[0])">Import Course CSV file</a></li>
            <li><a href="{{ asset('/files/csv/COURSE CSV IMPORT.csv') }}">Download csv data format</a></li>
          </ul>
        </div>
          <!-- Alertify Import Data Form-->
          <div class="hidden">
                <form id="import_csv_file_form" method="POST" action="{{ route('csv_org.store') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <label for="csv_file" class="px-18-font">
                  @if(str_contains( $routeName, 'course' ))
                  Import Course CSV file
                  @endif
                  </label>
                  <input name="csv_file" type="file" id="csv_file" class="import_csv_file">
                  <center><input type="submit" value="Upload Csv" class="uploadbtn"></center>
                </form>
        </div>
      @endif

     @if ( str_contains( $routeName, 'csv_org') )
          <a class="btn iris-blue-bg-color white-font-color display-inlineblock" style="padding: 8px 10px;" onclick="alertify.importData($('#import_csv_file_form')[0])"><i class="fa fa-upload"></i> Import Data</a>
          <!-- Alertify Import Data Form-->
          <div class="hidden">
                <form id="import_csv_file_form" method="POST" action="{{ route('csv_org.store') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <label for="csv_file" class="px-18-font">
                  @if(str_contains( $routeName, 'course' ))
                  Import Course CSV file
                  @elseif(str_contains( $routeName, 'units' ))
                  Import Units CSV file
                  @else
                  Import Organization CSV file
                  @endif
                  </label>
                  <input name="csv_file" type="file" id="csv_file" class="import_csv_file">
                  <center><input type="submit" value="Upload Csv" class="uploadbtn"></center>
                </form>
        </div>
      @endif

  </div>
  <div class="toolbar-right-aside">
    <div class="main-option-wrapper inverted-btns toolbar-actions">
      <ul class="list-inline iris-blue-font-color proximanova-regular">
        {{-- <li><a href="#" id="save-item"><i class="fa fa-save" aria-hidden="true"></i> Save</a></li> --}}
        {{-- <li><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</a></li> --}}

        {{-- course unit add button
        @if ( str_contains($routeName, 'courses.edit'))
          @include ('layouts.form.add-unit-toolbar')
        @endif --}}

        {{-- enable save button on create and edit only --}}
        @if ( str_contains( $routeName, 'edit' ) || str_contains( $routeName, 'create' ) || str_contains( $routeName, 'assessment' ) || str_contains( $routeName, 'attendance' ) )

        <li>

        <li><a href="#" id="save-item"><i class="fa fa-save" aria-hidden="true"></i> Save</a></li>

        </li>

        @endif

        {{-- enable delete button on edit only --}}
        @if ( str_contains( $routeName, 'edit' ) )

        <li>

          {!! Form::open($deleteFormRoute) !!}

            {{ Form::button('<i class="fa fa-trash" aria-hidden="true"></i> Delete', ['id'=>'delete-item', 'type'=>'submit']) }}

          {!! Form::close() !!}

        </li>

        @endif
      </ul>
    </div>

    {{-- enable send offer letter button on edit only --}}
    @if ( str_contains( $routeName, 'offer_letter.edit' ) )

        <div class="other-actions-wrapper toolbar-actions display-inlineblock">
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle white-smoke-grey-bg-color iris-blue-font-color no-border box-shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:10px;">Offer Letter <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
            <ul class="dropdown-menu dropdown-light-blue dropdown-menu-right">
              <li><a href="#" class="form-btn" id="send-offer-letter">Send to Email</a></li>
              <li><a href="#" class="form-btn" id="preview-offer-letter">Download / View</a></li>
            </ul>
          </div>
        </div>

    @endif

    {{-- enable Customer dropdown button on edit only --}}
    @if ( str_contains( $routeName, 'customers' ) )

        <div class="other-actions-wrapper toolbar-actions display-inlineblock">
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle white-smoke-grey-bg-color iris-blue-font-color no-border box-shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:10px;">Actions <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
            <ul class="dropdown-menu dropdown-light-blue dropdown-menu-right">
              <li><a href="{{route('customer.studentInfo',request()->route()->parameters['customer'])}}" class="form-btn" id="">Export to pdf </a></li>
              <li><a href="#" class="form-btn" id="">Email to Student</a></li>
            </ul>
          </div>
        </div>

    @endif

    {{-- for deals convert button --}}
    @if ( str_contains( $routeName, 'deals.edit' ) || str_contains($routeName, 'deals.int-edit') )
        @include ('layouts.form.email-process-template')
        @include ('layouts.form.convert-toolbar')
        {{-- @include ('layouts.form.deal-payment-toolbar') --}}
    @endif
    {{-- <div class="toolbar-actions display-inlineblock">
      <ul class="list-inline dark">
        <li><button type="buton" class="btn btn-default white-smoke-grey-bg-color dark-grey-font-color no-border outline-none box-shadow-none" style="padding: 10px 20px;"><i class="fa fa-caret-left" aria-hidden="true"></i></button></li>
         <li><button type="buton" class="btn btn-default white-smoke-grey-bg-color dark-grey-font-color no-border outline-none box-shadow-none" style="padding: 10px 20px;"><i class="fa fa-caret-right" aria-hidden="true"></i></button></li>
      </ul>
    </div> --}}
  </div>
  <div class="clearfix"></div>
</div>
<!-- Alertify Import Data-->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
<script type="text/javascript">
  alertify.importData || alertify.dialog('importData',function(){
    return {
        main:function(content){
            this.setContent(content);
        },
        setup:function(){
            return {
                focus:{
                    element:function(){
                        return this.elements.body.querySelector(this.get('selector'));
                    },
                    select:true
                },
                options:{
                    basic:true,
                    maximizable:false,
                    resizable:false,
                    padding:false
                }
            };
        },
        settings:{
            selector:undefined
        }
    };
});
</script>
