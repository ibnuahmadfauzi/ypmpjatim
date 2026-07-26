@extends('admin.layouts.app')
@section('page-title', 'Data Buku')

@section('extra-css')
    @include('admin.pages.buku.css')
@endsection

@section('body')
    @include('admin.pages.buku.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.buku.javascript')
@endsection
