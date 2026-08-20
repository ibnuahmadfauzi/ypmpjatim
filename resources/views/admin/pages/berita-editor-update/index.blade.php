@extends('admin.layouts.app')
@section('page-title', 'Berita Editor')

@section('extra-css')
    @include('admin.pages.berita-editor-update.css')
@endsection

@section('body')
    @include('admin.pages.berita-editor-update.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.berita-editor-update.javascript')
@endsection
