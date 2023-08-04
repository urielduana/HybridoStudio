@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Edit Product: "{{ $product->name }}"</h1>
        </div>

        <hr class="my-3">

        {{-- Form --}}
        <div>
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}">
                    <u>
                        {{ $errors->first('name') }}
                    </u>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}">
                    <u>
                        {{ $errors->first('price') }}
                    </u>
                </div>
                <div>
                    <label for="barcode">Barcode</label>
                    <input type="number" name="barcode" id="barcode" value="{{ $product->barcode }}">
                    <u>
                        {{ $errors->first('barcode') }}
                    </u>
                </div>
                <div>
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ $product->stock }}">
                    <u>
                        {{ $errors->first('stock') }}
                    </u>
                </div>
                <div>
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    <u>
                        {{ $errors->first('category_id') }}
                    </u>
                </div>
                <div>
                    <button type="submit">Update</button>
                </div>
            </form>

        </div>

    </div>
@endsection
