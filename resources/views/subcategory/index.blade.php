@extends('master')

@section('content')

<div class="row">

    <div class="col-8 m-auto">


        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">subcategory-name</th>
                <th scope="col">category-ID</th>
                <th scope="col">create</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($subcate_data as $subcate_info)

                <tr>

                <th scope="row">{{ $subcate_info->id }}</th>
                <td>{{ $subcate_info->name }}</td>
                <td>{{ $subcate_info->categorie_id }}</td>
                <td>{{ $subcate_info->created_at->diffForHumans() }}</td>
                <td><a href="{{ route('subcategory.edit', ['subcategory' => $subcate_info->id ]) }}" class="btn btn-success">edit</a></td>


                <form action="{{ route('subcategory.destroy', ['subcategory' => $subcate_info->id]) }}" method="post">
                    @method('DELETE')
                    @csrf

                    <td><button type="submit" class="btn btn-info">del</button></td>

                </form>

                </tr>

                @endforeach



          </table>


    </div>

</div>

@endsection
