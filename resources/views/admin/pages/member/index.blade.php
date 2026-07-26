@extends('admin.layouts.app')
@section('page-title', 'Daftar Anggota')

@section('extra-css')
    @include('admin.pages.member.css')
@endsection

@section('body')
    @include('admin.pages.member.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.member.javascript')
@endsection
