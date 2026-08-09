@extends('admin.layouts.app')
@section('page-title', 'Artikel Editor')

@section('extra-css')
    @include('admin.pages.artikel-editor-update.css')
@endsection

@section('body')
    @include('admin.pages.artikel-editor-update.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.artikel-editor-update.javascript')
@endsection
