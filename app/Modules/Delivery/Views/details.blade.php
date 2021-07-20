@extends('layouts.app')

@section('form')
    @include('inc.one-address')
@endsection

@section('content-title')Map @endsection

@section('main_content')
    @include('inc.map')
@endsection
