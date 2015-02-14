@extends(((Request::ajax()) ? 'layouts.boxes.modal' : 'layouts.boxes.'. $theme))









@section('title')
  {{ $page['title'] }}
@stop


@section('content')
  {{ $page['cont'] }}
@stop









@section('sidebar1')


   @include('layouts.colcoll.collection1', array('shopOrdersWidgetsSidebox' => array('collapsed' => true)))


@stop


