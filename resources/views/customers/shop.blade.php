@extends('layouts.customer')

@section('title', 'Shop')

{{-- content --}}
@section('content')
  @include('components.products')
  @include('components.banner')
@endsection
