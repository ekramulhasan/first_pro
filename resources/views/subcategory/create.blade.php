@extends('master')

@section('content')

<div class="row">

    <div class="col-8 m-auto my-5">

       <div class="card p-4">

        <form action="{{ route('subcategory.store') }}" method="POST">
            @csrf

            <div class="mb-3">

                @if (session('status'))

                    <div class="bg-success text-white p-4 my-3">
                        {{ session('status') }}
                    </div>

                @endif

                <select class="form-select @error('category_id')
                    is-invalid
                @enderror" name="category_id">
                    <option selected>Open this category</option>


                    @foreach ($categories as $key => $cate_data )

                    <option value="{{ $cate_data['id'] }}">{{ $cate_data['name'] }}</option>

                    @endforeach

                </select>

                @error('category_id')

                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                @enderror

            </div>

            <div class="mb-3">

                <label for="subcategory-name" class="form-label"  name="category_id">subcategory name</label>
                <input type="text" name="subcategory_name" id="" class="form-control @error('subcategory_name')
                is-invalid
            @enderror">

                @error('subcategory_name')

                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>

                @enderror

            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_active" id="is-active">
                <label class="form-check-label" for="is-active">
                  Active/Inactive
                </label>
              </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success"> Submit</button>
            </div>



        </form>

       </div>


    </div>

</div>

@endsection
