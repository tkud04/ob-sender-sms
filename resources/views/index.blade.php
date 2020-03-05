@extends('layout')

@section('title',"Dashboard")

@section('content')
@include("index-content",['secure' => $secure])
@stop