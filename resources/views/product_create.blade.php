@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div class="my-3">
            <h1>Create Products</h1>
        </div>

        <hr class="my-3">

        {{-- Form --}}
        <div>
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" step="0.01" class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('price') }}
                    </div>
                </div>
                <div>
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="number" name="barcode" id="barcode" class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('barcode') }}
                    </div>
                </div>
                <div>
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control w-25">
                    <div class="form-text text-danger">
                        {{ $errors->first('stock') }}
                    </div>
                </div>
                <div>
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select w-25">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    <div class="form-text text-danger">
                        {{ $errors->first('category_id') }}
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary my-4"><i
                            class="fa fa-plus-circle me-2"></i>Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
