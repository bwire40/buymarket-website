@extends('layouts.customer')
@section('title', 'Welcome')

{{-- section --}}
@section('content')
  {{-- hero section --}}
  @include('components.hero')
  {{-- best seller --}}
  @include('components.best-seller')
  {{-- categories --}}
  @include('components.product-categories')

  @include('components.faqs')
@endsection
