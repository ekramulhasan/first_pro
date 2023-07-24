@extends('master')

@section('content')

{{-- <h1>this is service page</h1> --}}

@for ($i=0; $i <count($services);$i++)

    {{$services[$i]}} <br>

@endfor

@endsection
