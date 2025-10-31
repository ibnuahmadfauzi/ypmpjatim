@extends('admin-page.layouts.app-1')
@section('page-title', 'Dashboard')

@section('body')
    @include('admin-page.pages.dashboard.html')
@endsection

@section('extra-javascript')
    @include('admin-page.pages.dashboard.javascript')
@endsection