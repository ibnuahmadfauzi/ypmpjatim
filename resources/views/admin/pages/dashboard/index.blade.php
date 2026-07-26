@extends('admin.layouts.app')
@section('page-title', 'Dashboard')

@section('extra-css')
    @include('admin.pages.dashboard.css')
@endsection

@section('body')
    @include('admin.pages.dashboard.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.dashboard.javascript')
@endsection
