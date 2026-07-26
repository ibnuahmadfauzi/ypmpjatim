@extends('admin.layouts.app')
@section('page-title', 'Pengaturan')

@section('extra-css')
    @include('admin.pages.pengaturan.css')
@endsection

@section('body')
    @include('admin.pages.pengaturan.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.pengaturan.javascript')
@endsection
