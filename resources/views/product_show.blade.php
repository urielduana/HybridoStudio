@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div class="my-3">
            <h1>Show Products</h1>
        </div>
        {{-- Add Product Button --}}
        <div class="d-flex justify-content-end">
            <a href="{{ route('products.edit', $product->id) }}">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit me-2"></i>Edit Product</button>
            </a>
        </div>

        <hr class="my-3">

        {{-- Show Data --}}

        <div class="mb-5">
            <dl class="row">
                <dt class="col-sm-3">ID: </dt>
                <dd class="col-sm-9">{{ $product->id }}</dd>

                <dt class="col-sm-3">Name:</dt>
                <dd class="col-sm-9">{{ $product->name }}</dd>

                <dt class="col-sm-3">BarCode:</dt>
                <dd class="col-sm-9">{{ $product->barcode }}</dd>

                <dt class="col-sm-3 text-truncate">Price:</dt>
                <dd class="col-sm-9">{{ $product->price }}</dd>

                <dt class="col-sm-3">Stock:</dt>
                <dd class="col-sm-9">{{ $product->stock }}</dd>

                <dt class="col-sm-3">Created At:</dt>
                <dd class="col-sm-9">{{ $product->created_at }}</dd>

                <dt class="col-sm-3">Updated At:</dt>
                <dd class="col-sm-9">{{ $product->updated_at }}</dd>

                <dt class="col-sm-3">Category</dt>
                <dd class="col-sm-9">{{ $product->category->name }}</dd>
            </dl>
        </div>
    </div>
@endsection
