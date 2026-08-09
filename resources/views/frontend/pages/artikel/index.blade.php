@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Artikel')

@section('extra-css')
    @include('frontend.pages.artikel.css')
@endsection

@section('body')
    @include('frontend.pages.artikel.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.artikel.javascript')
@endsection
