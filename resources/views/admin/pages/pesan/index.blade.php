@extends('admin.layouts.app')
@section('page-title', 'Data Pesan')

@section('extra-css')
    @include('admin.pages.pesan.css')
@endsection

@section('body')
    @include('admin.pages.pesan.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.pesan.javascript')
@endsection
