@extends('layouts.default')

@section('content')
  @include('layouts.partials.nav')
  <div class="container-fluid">
  @include('layouts.partials.header')<!--features goes here-->
  @include('layouts.partials.pricing')<!--pricing goes here-->
  @include('layouts.partials.features')
  </div>
  @include('layouts.partials.footer')
@endsection
