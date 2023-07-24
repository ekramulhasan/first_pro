@extends('master')


@section('title','contact-page')


@section('content')


{{-- <h1>{{ $page_name }}</h1>
<p>{{ $page_no }}</p> --}}

{{--
@if ($product_count <= 10)

    <p>minium product countity is 10 . please increase your product</p>

    @else

    <p>product counting is: {{ $product_count }}</p>

@endif --}}

@forelse ($products as $key => $product )

    @include('include.partial.partial_value')

  @empty
    <p>product not found</p>

@endforelse

@endsection
