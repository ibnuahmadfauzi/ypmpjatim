@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Artikel')

@section('extra-css')
    @include('frontend.pages.artikel-detail.css')
@endsection

@section('body')
    @include('frontend.pages.artikel-detail.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.artikel-detail.javascript')
@endsection
