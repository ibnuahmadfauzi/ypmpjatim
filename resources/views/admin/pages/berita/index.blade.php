@extends('admin.layouts.app')
@section('page-title', 'Data Berita')

@section('extra-css')
    @include('admin.pages.berita.css')
@endsection

@section('body')
    @include('admin.pages.berita.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.berita.javascript')
@endsection
