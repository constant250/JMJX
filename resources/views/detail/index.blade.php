@extends('layouts.master')

@section('custom-links')

@endsection

@section('page-content')

HELLO BLINKSSS!! :)

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