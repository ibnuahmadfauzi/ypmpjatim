@extends('client-page.layouts.app-1')
@section('page-title', 'Artikel')

@section('body')
    @include('client-page.pages.artikel.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.artikel.javascript')
@endsection