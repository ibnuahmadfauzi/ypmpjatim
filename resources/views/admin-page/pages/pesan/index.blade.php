@extends('admin-page.layouts.app-1')
@section('page-title', 'Pesan')

@section('body')
    @include('admin-page.pages.pesan.html')
@endsection

@section('extra-javascript')
    @include('admin-page.pages.pesan.javascript')
@endsection