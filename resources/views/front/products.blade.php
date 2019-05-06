@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Products</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                        @foreach ($products as $product)
                            <li><a href="product/{{ $product->slug }}">
                                    <img src="{{ asset('storage/images/products/' . $product->variations[0]->image)}}" width="50" height="50">
                                </a>
                                <a href="product/{{ $product->slug }}">{{ $product->name }}</a>
                            </li>
                        @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection