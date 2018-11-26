@extends('layouts.master')

@section('page-content')

<!-- Alerts -->
<div class="clearfix" style="height: 20px;"></div>
@if ( session('message') )
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> {{ session('message') }}
  </div>
@endif
@if( $errors->has('status') && $errors->first('status') == 'error' )

<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Error!</strong> {{ $errors->first('message') }}
</div>

@endif
<div class="student-portal-dashboard content-wrapper">
  <ul class="portal-menu large-block-grid-4 medium-block-grid-2 small-block-grid-1">
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center done"><span class="center-position width-100-percent">Menu Label</span></a></li>
    <li><a href="#" class="text-center"><span class="center-position width-100-percent">Menu Label</span></a></li>
  </ul>
</div>
@endsection
