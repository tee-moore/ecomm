@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>

                    <div class="card-body row">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="col-md-5">
                            <img src="{{ asset('storage/images/products/' . $product->variations[0]->image)}}" width="300" height="300">
                        </div>

                        <div class="col-md-7">
                            <ul>
                                @foreach ($product->variations as $variation)
                                    @php
                                        if(count($variation->specifications) > 1 ){
                                        echo "<li>".$variation->specifications[0]->attribute->name.": ".$variation->specifications[0]->value->value.
                                         "; Price: $" . $variation->price.
                                         "; Quantity: " . $variation->quantity.".</li>";
                                        } else {
                                        echo "<li>Price: $" . $variation->price.
                                         "; Quantity: " . $variation->quantity.".</li>";
                                        }
                                    @endphp

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection