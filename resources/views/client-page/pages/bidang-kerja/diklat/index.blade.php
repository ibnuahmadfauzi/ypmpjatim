@extends('client-page.layouts.app-1')
@section('page-title', 'Bidang Kerja - Diklat, Workshop, dan Seminar')

@section('body')
    @include('client-page.pages.bidang-kerja.diklat.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.bidang-kerja.diklat.javascript')
@endsection