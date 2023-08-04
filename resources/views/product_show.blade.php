@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Show Products</h1>
        </div>

        <hr class="my-3">

        {{-- Show Data its only to show data --}}
        <div>
            <div>
                <label for="name">Name</label>
                <p>{{ $product->name }}</p>
            </div>
            <div>
                <label for="price">Price</label>
                <p>{{ $product->price }}</p>
            </div>
            <div>
                <label for="barcode">Barcode</label>
                <p>{{ $product->barcode }}</p>
            </div>
            <div>
                <label for="stock">Stock</label>
                <p>{{ $product->stock }}</p>
            </div>
            <div>
                <label for="category_id">Category</label>
                <p>{{ $product->category->name }}</p>
            </div>
        </div>
    </div>
@endsection
