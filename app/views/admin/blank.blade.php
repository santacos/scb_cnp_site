@extends('admin.layouts.default')

@section('title')
thisIsTitle
@stop

@section('libs')
      <link rel="stylesheet" href="<?php echo asset('assets/css/AdminLTE.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/bootstrap-lightbox.css')?>">
@stop

@section('content')
Hi

@stop

@section('script')
    <script src="<?php echo asset('js/bootstrap-lightbox.js')?>"></script>
@stop