@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div class="my-3">
            <h1>Edit Product: "{{ $product->name }}"</h1>
        </div>

        <hr class="my-3">

        {{-- Form --}}
        <div>
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" value="{{ $product->price }}"
                        class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('price') }}
                    </div>
                </div>
                <div>
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="number" name="barcode" id="barcode" value="{{ $product->barcode }}"
                        class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('barcode') }}
                    </div>
                </div>
                <div>
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ $product->stock }}"
                        class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('stock') }}
                    </div>
                </div>
                {{-- Select Categories --}}
                <div>
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select w-25">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="form-text text-danger">
                        {{ $errors->first('category_id') }}
                    </div>
                </div>
                {{-- Submit Button --}}
                <div>
                    <button type="submit" class="btn btn-warning my-4"><i class="fa fa-edit me-2"></i>Update</button>
                </div>
            </form>

        </div>

    </div>
@endsection
