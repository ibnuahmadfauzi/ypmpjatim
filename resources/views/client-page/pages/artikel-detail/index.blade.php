@extends('client-page.layouts.app-1')
@section('page-title', $page_title)

@section('body')
    @include('client-page.pages.artikel-detail.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.artikel-detail.javascript')
@endsection