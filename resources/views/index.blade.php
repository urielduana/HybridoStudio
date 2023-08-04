@extends('components.template')

@section('content')
    <div class="container">
        {{-- Title --}}
        <div>
            <h1>Index Products</h1>
        </div>
        {{-- Add Product Button --}}
        <div>

            <button><i class="fa fa-plus-circle"></i>Add Products</button>
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
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>${{ $product->stock }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td><button><i class="fa fa-eye"></i></button></td>
                        <td><button><i class="fa fa-trash"></i></button></td>
                    </tr>
                @endforeach
            </table>
        </div>

        {{-- Pagination links --}}
        <div>
            {!! $products->links() !!}
        </div>

    </div>
    </div>
@endsection
