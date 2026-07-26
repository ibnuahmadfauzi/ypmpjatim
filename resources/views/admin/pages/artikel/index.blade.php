@extends('admin.layouts.app')
@section('page-title', 'Data Artikel')

@section('extra-css')
    @include('admin.pages.artikel.css')
@endsection

@section('body')
    @include('admin.pages.artikel.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.artikel.javascript')
@endsection
