@extends('admin.layouts.app')
@section('page-title', 'Pengajuan Penerbitan')

@section('extra-css')
    @include('admin.pages.penerbitan-buku.css')
@endsection

@section('body')
    @include('admin.pages.penerbitan-buku.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.penerbitan-buku.javascript')
@endsection
