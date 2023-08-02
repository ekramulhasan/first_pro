@extends('master')

@section('content')

<div class="row">

    <div class="col-8 m-auto">

        <div class="card mt-4">

            <div class="card-body">

                <h4 class="card-title">Fileupload</h4>

                <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="fileName" class="form-label">File Name</label>
                        <input type="text" class="form-control" id="fileName" aria-describedby="emailHelp" name="name">

                    </div>

                    <div class="mb-3">

                        <label for="fileName" class="form-label">Category Name</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected disabled>select category name</option>

                        @foreach ($categories as $cat_data)

                         <option value="{{ $cat_data->id }}">{{ $cat_data->name }}</option>

                        @endforeach

                    </select>

                    </div>

                    <div class="mb-3">

                        <label for="fileName" class="form-label">Subcategory Name</label>
                    <select class="form-select" aria-label="Default select example" name="subcategory_id">
                        <option selected disabled>select subcategory name</option>

                        @foreach ($subcategories as $subcat_data )

                        <option value="{{ $subcat_data->id }}">{{ $subcat_data->name }}</option>

                        @endforeach

                    </select>

                    </div>

                    <div class="mb-3">

                        <label for="productName" class="form-label">Product price</label>
                        <input type="number" class="form-control" id="product_price" aria-describedby="emailHelp" name="product_price" min="0">

                    </div>

                    <div class="mb-3">

                        <label for="description" class="form-label">Product Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" name="description"></textarea>

                    </div>


                    <div class="mb-3">

                        <label for="description" class="form-label">Product image</label>
                        <input class="form-control" type="file" id="productImage" name="productImage">

                    </div>

                    <div class="mb-3">

                        <button type="submit" class="btn btn-success">add new product</button>

                    </div>



                </form>


            </div>

        </div>

    </div>

</div>

@endsection
