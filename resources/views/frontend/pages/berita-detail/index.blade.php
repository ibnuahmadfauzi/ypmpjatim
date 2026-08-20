@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Berita')

@section('extra-css')
    @include('frontend.pages.berita-detail.css')
@endsection

@section('body')
    @include('frontend.pages.berita-detail.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.berita-detail.javascript')
@endsection
