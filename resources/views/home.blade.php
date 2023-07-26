@extends('master')

@section('content')

{{-- <h1>{{ $cate_name }}</h1>
<p>{{ $text }}</p> --}}

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Join Date</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($user_data as $user_info )

        <tr>
            <th scope="row">{{ $user_info ->id}}</th>
            <td>{{ $user_info ->name}}</td>
            <td>{{ $user_info ->email}}</td>
            <td>{{ $user_info ->phone_number}}</td>
            <td>{{ $user_info ->created_at}}</td>
        </tr>

        @endforeach


    </tbody>
  </table>




@endsection
