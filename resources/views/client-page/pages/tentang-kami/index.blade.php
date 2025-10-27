@extends('client-page.layouts.app-1')
@section('page-title', 'Tentang Kami')

@section('body')
    @include('client-page.pages.tentang-kami.html')
@endsection

@section('extra-javascript')
    @include('client-page.pages.tentang-kami.javascript')
@endsection