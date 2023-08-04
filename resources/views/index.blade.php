@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Index Products</h1>
        </div>
        {{-- Add Product Button --}}
        <div>
            <a href="{{ route('products.create') }}">
                <button>Add Product</button>
            </a>
        </div>
        <hr class="my-3">
        {{-- Table --}}
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>${{ $product->stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}">
                                <button><i class="fa fa-eye"></i></button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <button><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button><i class="fa fa-edit"></i></button>
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
