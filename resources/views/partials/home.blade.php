@extends('layouts.app')
@section('body')
    <div class="container mt-4">
        <div class="row mt-4">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <button
                                type="button"
                                class="btn btn-primary more-details"
                                data-id="{{$product->id}}"
                            >Comprar</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
