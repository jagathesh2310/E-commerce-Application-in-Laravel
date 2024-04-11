@extends('layouts.admin-panel.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Product Details</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset( $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>Name:</h4>
                    <p>{{ $product->name }}</p>
                    <h4>Description:</h4>
                    <p>{{ $product->description }}</p>
                    <h4>Price:</h4>
                    <p>${{ $product->price }}</p>
                    <h4>Quantity:</h4>
                    <p>{{ $product->quantity }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
@push('header')
    <style>
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #3498db;
            color: white;
            text-align: center;
        }
        .card-footer {
            background-color: #f4f4f4;
        }
        h4 {
            margin-top: 10px;
            color: #3498db;
        }
        p {
            font-size: 18px;
        }
    </style>
@endpush
