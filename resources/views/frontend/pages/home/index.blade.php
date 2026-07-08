@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Home')

@section('extra-css')
    @include('frontend.pages.home.css')
@endsection

@section('body')
    @include('frontend.pages.home.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.home.javascript')
@endsection
