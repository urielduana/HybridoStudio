@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Create Products</h1>
        </div>

        <hr class="my-3">

        {{-- Form --}}
        <div>
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price">
                </div>
                <div>
                    <label for="barcode">Barcode</label>
                    <input type="number" name="barcode" id="barcode">
                </div>
                <div>
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" id="stock">
                </div>
                <div>
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div>
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>

    </div>
@endsection
