@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Products
                        {!! Form::open(['route' => 'admin.product.create', 'method' => 'get']) !!}
                            {!! Form::submit('Add new!'); !!}
                        {!! Form::close() !!}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table>
                                <thead>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <th width="4%"><input type="checkbox"></th>
                                    <th width="6%">Image</th>
                                    <th width="25%">Name</th>
                                    <th width="8%">Type</th>
                                    <th width="10%">SKU</th>
                                    <th width="12%">Quantity</th>
                                    <th width="20%">Price</th>
                                    <th width="10%">Disabled</th>
                                    <th width="5%">Delete</th>
                                </tr>
                                </thead>

                                @foreach ($products as $product)
                                    <tr style="border-bottom: 1px solid #eee;">
                                        <td><input type="checkbox"></td>
                                        <td><img src="{{ $product->gallery }}" width="50" height="50"></td>
                                        <td>{!! link_to_route('admin.product.edit', $product->name, ['id' => $product->id]) !!}</td>
                                        <td>{{ $product->product_type }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{!! Form::checkbox('disabled', $product->disabled) !!}</td>
                                        <td>
                                        {!! Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                        {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                <tbody>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection