@extends('frontend.layouts.frontend-layouts')
@section('page-title', 'Bidang Kerja - Pengerjaan PMM Guru')

@section('extra-css')
    @include('frontend.pages.bidang-kerja-pengerjaan-pmm.css')
@endsection

@section('body')
    @include('frontend.pages.bidang-kerja-pengerjaan-pmm.html')
@endsection

@section('extra-javascript')
    @include('frontend.pages.bidang-kerja-pengerjaan-pmm.javascript')
@endsection
