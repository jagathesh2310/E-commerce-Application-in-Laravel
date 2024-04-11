@extends('layouts.admin-panel.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Product List</div>
        </div>
        <div class="card-body">
            <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create Product</a> <!-- Create button at the top -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">
                                        <i class="fas fa-eye text-info"></i>
                                    </a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">
                                        <i class="fas fa-edit text-primary"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>

    </div>
@endsection
