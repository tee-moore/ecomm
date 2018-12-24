@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PRODUCTS
                                {!! Form::open(['route' => 'admin.product.create', 'method' => 'get', 'class' => 'add-product']) !!}
                                {!! Form::submit('Add New', ['class' => 'btn btn-primary', 'type' => 'submit']); !!}
                                {!! Form::close() !!}
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th width="4%"><input type="checkbox" class="filled-in" id="all-top" name="product"><label for="all-top"></label></th>
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
                                    <tfoot>
                                    <tr>
                                        <th width="4%"><input type="checkbox" class="filled-in" id="all-bottom" name="product"><label for="all-bottom"></label></th>
                                        <th width="6%">Image</th>
                                        <th width="25%">Name</th>
                                        <th width="8%">Type</th>
                                        <th width="10%">SKU</th>
                                        <th width="12%">Quantity</th>
                                        <th width="20%">Price</th>
                                        <th width="10%">Disabled</th>
                                        <th width="5%">Delete</th>
                                    </tr>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr style="border-bottom: 1px solid #eee;">
                                            <td><input type="checkbox" class="filled-in" id="product-{{ $product->id }}" name="product"><label for="product-{{ $product->id }}"></label></td>
                                            <td><img src="{{ asset($product->gallery) }}" width="50" height="50"></td>
                                            <td>{!! link_to_route('admin.product.edit', $product->name, ['id' => $product->id]) !!}</td>
                                            <td>{{ $product->product_type }}</td>
                                            <td>{{ $product->sku }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                {!! Form::checkbox('disabled', '', false, ['class' => 'filled-in', 'id' => "disabled-{{ $product->id }}"]) !!}
                                                {!! Form::label("disabled-{{ $product->id }}", ' ') !!}</td>
                                            <td>
                                                {!! Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'delete']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
 @endsection