@extends('layouts.master')
@section('content')
	{!! Form::select('city',$cities,null,['id'=>'city']) !!}
	{!! Form::select('company',['placeholder'=>'Select'],null,['id'=>'company']) !!}
@stop
