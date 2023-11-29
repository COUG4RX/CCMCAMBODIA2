@extends('index')

@section('index')
@include('layout.header')

@yield('content')

@include('layout.offcanvas')
@include('layout.footer')
@endsection