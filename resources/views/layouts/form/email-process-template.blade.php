@if ( isset($dealData) )

    <div class="other-actions-wrapper toolbar-actions display-inlineblock">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle white-smoke-grey-bg-color iris-blue-font-color no-border box-shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:10px;">Email Process  <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
            <ul class="dropdown-menu dropdown-light-blue">

                @foreach ( $filer as $type )
                    @if($type->sent == 1)
                    <li> <a class="form-btn"  id="{{ $type->process_code }}" style="cursor: no-drop;background-color: rgba(204, 204, 204, 0.58)!important;    color: #fff!important;"> <i class="fa fa-check-square px-16-font" aria-hidden="true"></i>&nbsp;&nbsp;{{ $type->process_name }}  </a></li>
                    @else
                    {{-- <li> <a class="form-btn"  id="{{ $type->process_code }}" style="cursor: no-drop;background-color: rgba(204, 204, 204, 0.58)!important;    color: #fff!important;"> <i class="fa fa-check" aria-hidden="true"></i> {{ $type->process_name }}</a></li> --}}
                     <li> <a class="form-btn" href="{{ route('deals.sendMail',[request()->route()->parameter('deal'),$type->process_code,$dealData['email_personal']]) }}" id="{{ $type->process_code }}" ><i class="fa fa-pencil-square px-16-font" aria-hidden="true"></i>&nbsp;&nbsp;{{ $type->process_name }}</a></li>    
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

@endif
