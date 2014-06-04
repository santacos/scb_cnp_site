@extends('user.layouts.default')

@section('title')
SCB Recruiter-Home
@stop

@section('body-class')
"fixed-header hidden-top"
@stop


@section('header-class')
"header header-two"
@stop



@section('content')
	@include('user.includes.home.slider')
@stop

