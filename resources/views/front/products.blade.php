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

                            <li>
                                @if (count($product->gallery) === 1)
                                    <img src="{{ asset( $path . $product->gallery[0]->url)}}" width="50" height="50">
                                @else
                                    @if(count($product->variations[0]->attachments) === 1)
                                        <img src="{{ asset( $path . $product->variations[0]->attachments[0]->url)}}" width="50" height="50">
                                    @else
                                        <img src="{{ asset( $path . config('settings.product.image.default'))}}" width="50" height="50">
                                    @endif
                                @endif

                                <a href="{{ route('product.show', ['product' => $product->slug]) }}">{{ $product->name }}</a>
                            </li>
                        @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection