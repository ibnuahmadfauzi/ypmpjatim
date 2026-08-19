@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Tentang Kami')

@section('extra-css')
    @include('frontend.pages.tentang.css')
@endsection

@section('body')
    @include('frontend.pages.tentang.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.tentang.javascript')
@endsection
