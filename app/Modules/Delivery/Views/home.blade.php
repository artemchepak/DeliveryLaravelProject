@extends('layouts.app')

@section('form-title')Add new address @endsection

@section('form')
    @include('inc.form')
@endsection

@section('content-title')My addresses @endsection

@section('main_content')
    @include('inc.all-addresses')
@endsection
