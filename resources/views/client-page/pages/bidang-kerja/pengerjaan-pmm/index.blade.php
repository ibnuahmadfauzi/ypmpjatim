@extends('client-page.layouts.app-1')
@section('page-title', 'Bidang Kerja - Pengerjaan PMM Guru')

@section('body')
    @include('client-page.pages.bidang-kerja.pengerjaan-pmm.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.bidang-kerja.pengerjaan-pmm.javascript')
@endsection