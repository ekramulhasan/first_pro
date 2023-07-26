@extends('master')

@section('content')

<div class="row">
    <div class="col-5 m-auto">

        @if (session('status'))

            <div class="bg-success text-white">
                {{ session('status') }}
            </div>

        @endif

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-5">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('category_name')
                    is-invalid

                @enderror" id="category_name" placeholder="enter the category name" name="category_name">

                @error('category_name')

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror

              </div>

            {{-- <div class="mb-3">
                <label for="slug_name" class="form-label">Slug Name</label>
                <input type="text" class="form-control @error('category_slug')
                is-invalid
                @enderror" id="slug_name" placeholder="enter the slug name" name="category_slug">

                @error('category_slug')

                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>

                @enderror

              </div> --}}

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="is_active">
                <label class="form-check-label" for="flexCheckDefault">
                  Active/Inactive
                </label>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

        </form>

    </div>
</div>


@endsection

