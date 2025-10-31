@extends('admin-page.layouts.app-1')
@section('name', 'page-title')

@section('body')
    @include('admin-page.pages.dashboard.html')
@endsection

@section('extra-javascript')
    @include('admin-page.pages.dashboard.javascript')
@endsection