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
                            @php
                                if($product->variations[0]->image != null){
                                    $img = "products/".$product->variations[0]->image;
                                } elseif($product->gallery != null) {
                                    $img = "products/".$product->gallery;
                                } else {
                                    $img = "default/product.png";
                                }
                            @endphp
                            <li><a href="product/{{ $product->slug }}"><img src="images/{{ $img  }}" width="50" height="50"></a> <a href="product/{{ $product->slug }}">{{ $product->name }}</a></li>
                        @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection