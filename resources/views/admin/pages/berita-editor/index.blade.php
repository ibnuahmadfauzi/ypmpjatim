@extends('admin.layouts.app')
@section('page-title', 'Berita Editor')

@section('extra-css')
    @include('admin.pages.berita-editor.css')
@endsection

@section('body')
    @include('admin.pages.berita-editor.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.berita-editor.javascript')
@endsection
