@extends('admin.layouts.app')
@section('page-title', 'Artikel Editor')

@section('extra-css')
    @include('admin.pages.artikel-editor.css')
@endsection

@section('body')
    @include('admin.pages.artikel-editor.html')
@endsection

@section('extra-javascript')
    @include('admin.pages.artikel-editor.javascript')
@endsection
