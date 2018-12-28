@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                {!! Form::open(['route' => ['admin.product.store'], 'files' => true]) !!}
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {!! Form::text('product[name]', '', ['class' => 'form-control', 'id' => 'product_name', 'placeholder' => 'Name Product']) !!}
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <div class="form-group">
                                    {!! Form::label('product[main_sku]', 'SKU', ['class' => 'form-label']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('product[main_sku]', '', ['class' => 'form-control', 'id' => 'product_sku']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-horizontal clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <div class="form-group">
                                    {!! Form::label('product[product_type]', 'Type', ['class' => 'form-label']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::select('product[product_type]', $product_type, null, ['class' => 'form-control show-tick']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#general" data-toggle="tab" aria-expanded="true">
                                        {{--<i class="material-icons">settings</i> --}}
                                        GENERAL
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#description" data-toggle="tab" aria-expanded="false">
                                        {{--<i class="material-icons">settings</i> --}}
                                        DESCRIPTION
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#attributes" data-toggle="tab" aria-expanded="false">
                                        {{--<i class="material-icons">settings</i> --}}
                                        ATTRIBUTES
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#variations" data-toggle="tab" aria-expanded="false">
                                        {{--<i class="material-icons">settings</i> --}}
                                        VARIATIONS
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#gallery" data-toggle="tab" aria-expanded="false">
                                        {{--<i class="material-icons">settings</i> --}}
                                        GALLERY
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#linked" data-toggle="tab" aria-expanded="false">
                                        {{--<i class="material-icons">settings</i> --}}
                                        LINKED PRODUCTS
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content clearfix">
                                <div role="tabpanel" class="tab-pane fade in active" id="general">
                                    <div class="form-horizontal">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <div class="form-group">
                                                {!! Form::label('product[price]', 'Price', ['class' => 'form-label']) !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    {!! Form::text('product[quantity]', '', ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <div class="form-group">
                                                {!! Form::label('product[sale]', 'Sale price', ['class' => 'form-label']) !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    {!! Form::text('product[main_sku]', '', ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <div class="form-group">
                                                {!! Form::label('product[main_sku]', 'Quantity', ['class' => 'form-label']) !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    {!! Form::text('product[main_sku]', '', ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <div class="form-group">
                                                {!! Form::label('product[weight]', 'Weight(kg)', ['class' => 'form-label']) !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    {!! Form::text('product[weight]', '', ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <div class="form-group">
                                                {!! Form::label('product[dimensions]', 'Dimensions(sm)', ['class' => 'form-label']) !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    {!! Form::text('product[dimensions][length]', '', ['class' => 'form-control', 'placeholder' => 'Length']) !!}
                                                </div>
                                                <div class="form-line">
                                                    {!! Form::text('product[dimensions][width]', '', ['class' => 'form-control', 'placeholder' => 'Width']) !!}
                                                </div>
                                                <div class="form-line">
                                                    {!! Form::text('product[dimensions][height]', '', ['class' => 'form-control', 'placeholder' => 'Height']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="description">
                                    <div class="form-group form-float">
                                        {!! Form::textarea('product[description]', !empty($product) ? $product->description : '', ['id' => 'tinymce']) !!}
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="attributes">
                                    <p>
                                        @foreach ($specifications as $key => $specification)
                                            {!! Form::label('', key($specification)) !!}
                                            {!! Form::select("attribute{$key}", array_shift($specification), ['class'=> ' ', 'placeholder' => 'Select']) !!}
                                        @endforeach
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="gallery">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="variations">
                                    <div class="panel-group full-body" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_0" aria-expanded="false" aria-controls="collapseOne_0" class="collapsed">
                                                        <i class="material-icons">poll</i> Variation #0
                                                        @foreach ($specifications as $key =>$attribute)
                                                            @foreach ($attribute as $name => $values)
                                                                {!! Form::label('', $name) !!}
                                                                {!! Form::select("variation[0][specifications][".$key."]", $values) !!}
                                                            @endforeach
                                                        @endforeach
                                                    </a>
                                                    <div class="float-right">
                                                        {!! Form::checkbox("variation[0][disabled]", '', false, ['class' => 'filled-in', 'id' => 'variation_disabled']) !!}
                                                        {!! Form::label("variation_disabled", 'Disable') !!}
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_0" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    {!! Form::hidden("variation[0][id]", '') !!}

                                                    <div class="form-group">
                                                        {!! Form::file("variation[0][image]") !!}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">SKU</span>
                                                                <div class="form-line">
                                                                    {!! Form::text("variation[0][sku]", '', ['class' => 'form-control', 'id' => 'variation_sku']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Price</span>
                                                                <div class="form-line">
                                                                    {!! Form::text("variation[0][price]", '', ['class' => 'form-control', 'id' => 'variation_price']) !!}
                                                                </div>
                                                                <span class="input-group-addon">$</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">Discount Price</span>
                                                                <div class="form-line">
                                                                    {!! Form::text("variation[0][discount_price]", '', ['class' => 'form-control', 'id' => 'discount_price']) !!}
                                                                </div>
                                                                <span class="input-group-addon">$</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="input-group spinner" data-trigger="spinner">
                                                                <span class="input-group-addon">Quantity</span>
                                                                <div class="form-line focused">
                                                                    {!! Form::text("variation[0][quantity]", '', ['class' => 'form-control  text-center', 'id' => 'discount_quantity', 'value'=>'1', 'data-rule' => 'quantity']) !!}
                                                                </div>
                                                                <span class="input-group-addon">
                                                                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="linked">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>Status</h2>
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
                            <div class="form-group">
                                {!! Form::hidden('product[brand_id]', !empty($product) ? $product->brand_id : $brand_id) !!}
                                {!! Form::hidden('product[user_id]', !empty($product) ? $product->user_id : $user_id) !!}
                                {!! Form::submit('Save', ['class' => 'btn btn-primary font-24 waves-effect add-product']); !!}
                                @if (!empty($product))

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger font-24 waves-effect add-product']); !!}
                                @endif
                            </div>
                            @if (!empty($product))
                                <div class="form-group form-float">
                                    {!! Form::label('created_at', 'Created: ' ) !!} <span>{{ $product->created_at }}</span>
                                </div>
                            @endif

                            @if (!empty($product))
                                <div class="form-group form-float">
                                    {!! Form::label('updated_at', 'Updated: ' ) !!} <span>{{ $product->updated_at }}</span>
                                </div>
                            @endif

                            <div class="form-group form-float">
                                {!! Form::checkbox('product[disabled]', '', false, ['class' => 'filled-in', 'id' => 'disable-product']) !!}
                                {!! Form::label('disable-product', 'Disable product') !!}
                            </div>

                            <div class="form-group form-float">
                                {!! Form::checkbox('product[reviews]', '', false, ['class' => 'filled-in', 'id' => 'disable-product']) !!}
                                {!! Form::label('disable-product', 'Disable reviews') !!}
                            </div>

                            <div class="form-group form-float">
                                {!! Form::label('product[product_status]', 'Status', ['class' => 'form-label']) !!}
                                {!! Form::select('product[product_status]', $product_status, null, ['class' => 'form-control show-tick']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Taxonomy</h2>
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
                            <p>Tags</p>
                            <p>Categories</p>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection