@extends('admin.layouts.app')
@section('page-title', 'Bidang Kerja')

@section('extra-css')
    @include('admin.pages.bidang-kerja.css')
@endsection

@section('body')
    @include('admin.pages.bidang-kerja.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.bidang-kerja.javascript')
@endsection
