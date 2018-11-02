@if ( isset($dealData) && $dealData['deal_type_id'] < 3 )

    <div class="other-actions-wrapper toolbar-actions display-inlineblock">
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle white-smoke-grey-bg-color iris-blue-font-color no-border box-shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:10px;">Convert  <i class="fa fa-chevron-down" aria-hidden="true"></i></button>
            <ul class="dropdown-menu dropdown-light-blue">
                
                @foreach ( $deal_types as $deal_type )
                    
                    @if ( $deal_type->id == $dealData['deal_type_id'] ||
                        ( $deal_type->id < $dealData['deal_type_id'] && $deal_type->id != $dealData['deal_type_id'] ) ||
                        ( $deal_type->id > $dealData['deal_type_id'] && $deal_type->id != ($dealData['deal_type_id']+1) ) )
                    
                        <li disabled><a style="cursor:no-drop;background-color:rgba(204, 204, 204, 0.58)!important;color:#fff!important;" class="form-btn">{{ $deal_type->name }}</a></li>
                    
                    @else

                        <li>
                            {{ Form::open(['route' => ['deals.update-type', request()->route()->parameter('deal'), $deal_type->id], 'method'=>'put']) }}
                            {{ Form::submit( $deal_type->name, ['class'=>'form-btn'] ) }}
                            {{ Form::close() }}
                        </li>

                    @endif

                @endforeach

            </ul>
        </div>
    </div>

@endif
