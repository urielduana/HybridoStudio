@extends('components.template')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Index Products</h1>
        </div>
        {{-- Add Product Button --}}
        <div class="d-flex justify-content-end">
            <a href="{{ route('products.create') }}">
                <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle me-2"></i>Add Product</button>
            </a>
        </div>
        <hr class="my-3">
        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Category</th>
                    <th scope="col">View</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}">
                                <button type="button" class="btn btn-info"><i class="fa fa-eye"></i></button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- Pagination links --}}
        <div>
            {!! $products->links() !!}
        </div>

    </div>
@endsection
