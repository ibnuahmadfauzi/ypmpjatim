@extends('client-page.layouts.app-1')
@section('page-title', 'Beranda')

@section('body')
    @include('client-page.pages.home.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.home.javascript')
@endsection