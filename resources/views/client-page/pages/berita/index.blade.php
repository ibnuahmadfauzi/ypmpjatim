@extends('client-page.layouts.app-1')
@section('page-title', 'Berita')

@section('body')
    @include('client-page.pages.berita.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.berita.javascript')
@endsection