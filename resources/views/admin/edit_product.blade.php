@extends('layouts.admin')
@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (session('status'))
                <div class="block-header">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <div class="row clearfix">
                @if (!empty($product))
                    {!! Form::open(['route' => ['admin.product.update', !empty($product) ? $product->id : ''], 'files' => true]) !!}
                @else
                    {!! Form::open(['route' => ['admin.product.store'], 'files' => true]) !!}
                @endif
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    @if (!empty($product))
                                        {!! Form::text('product[name]', $product->name, ['class' => 'form-control', 'id' => 'product_name']) !!}
                                    @else
                                        {!! Form::text('product[name]', '', ['class' => 'form-control', 'id' => 'product_name', 'placeholder' => 'Name Product']) !!}
                                    @endif
                                </div>
                            </div>

                            @if (!empty($product))
                                <div class="form-horizontal">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <div class="form-group">
                                            {!! Form::label('product[slug]', 'Product slug', ['class' => 'form-label']) !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                {!! Form::text('product[slug]', $product->slug, ['class' => 'form-control', 'id' => 'product_slug']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-horizontal">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <div class="form-group">
                                    {!! Form::label('product[main_sku]', 'Product SKU', ['class' => 'form-label']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('product[main_sku]', !empty($product) ? $product->main_sku : '', ['class' => 'form-control', 'id' => 'product_sku']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <div class="form-group">
                                    {!! Form::label('product[product_type]', 'Product type', ['class' => 'form-label']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::select('product[product_type]', ['0' => 'Simple', '1' => 'Variant'], !empty($product) ? $product->product_type : '', ['class' => 'form-control show-tick']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="false">
                                        <i class="material-icons">home</i> DESCRIPTION
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="true">
                                        <i class="material-icons">face</i> DIMENSION
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#messages_with_icon_title" data-toggle="tab" aria-expanded="false">
                                        <i class="material-icons">email</i> ATTRIBUTES
                                    </a>
                                </li>
                                @if (!empty($product))
                                <li role="presentation" class="">
                                    <a href="#settings_with_icon_title" data-toggle="tab" aria-expanded="false">
                                        <i class="material-icons">settings</i> VARIATIONS
                                    </a>
                                </li>
                                @endif
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">
                                    <div class="form-group form-float">
                                        {!! Form::textarea('product[description]', !empty($product) ? $product->description : '', ['id' => 'tinymce']) !!}
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <p>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <p>
                                        @foreach ($specifications as $key => $specification)
                                            {!! Form::label('', key($specification)) !!}
                                            {!! Form::select("attribute{$key}", array_shift($specification), ['class'=> ' ', 'placeholder' => 'Select']) !!}
                                        @endforeach
                                    </p>
                                </div>
                                @if (!empty($product))
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <div class="panel-group full-body" id="accordion" role="tablist" aria-multiselectable="true">
                                        @if (!empty($product))
                                            @foreach ($product->variations as $variation)
                                                <div class="panel">
                                                    <div class="panel-heading" role="tab" id="headingOne_19">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" href="#collapseOne_{{ $loop->index }}" aria-expanded="false" aria-controls="collapseOne_{{ $loop->index }}" class="collapsed">
                                                                <i class="material-icons">poll</i> Variation #{{ $loop->index }}
                                                                @foreach ($variation->specifications as $specification)
                                                                    {!! Form::label('', $specification->attribute->name) !!}
                                                                    {!! Form::select("variation[".$loop->parent->index."][specifications][".$specification->attribute->id."]", $specifications[$specification->attribute->id][$specification->attribute->name], $specification->value->id) !!}
                                                                @endforeach
                                                            </a>
                                                            <div class="float-right">
                                                                {!! Form::checkbox("variation[$loop->index][disabled]", $variation->disabled, false, ['class' => 'filled-in', 'id' => 'variation_disabled']) !!}
                                                                {!! Form::label("variation_disabled", 'Disable') !!}
                                                            </div>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne_{{ $loop->index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_{{ $loop->index }}" aria-expanded="false" style="height: 0px;">
                                                        <div class="panel-body">
                                                            {!! Form::hidden("variation[$loop->index][id]", $variation->id) !!}

                                                            <div class="form-group">
                                                                @if (!empty($variation->image))
                                                                    <img src="{{ asset('storage/images/products/'.$variation->image) }}" width="50" height="50">
                                                                    {!! Form::file("variation[$loop->index][image]") !!}
                                                                @else
                                                                    {!! Form::file("variation[$loop->index][image]") !!}
                                                                @endif
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">SKU</span>
                                                                        <div class="form-line">
                                                                            {!! Form::text("variation[$loop->index][sku]", $variation->sku, ['class' => 'form-control', 'id' => 'variation_sku']) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Price</span>
                                                                        <div class="form-line">
                                                                            {!! Form::text("variation[$loop->index][price]", $variation->price, ['class' => 'form-control', 'id' => 'variation_price']) !!}
                                                                        </div>
                                                                        <span class="input-group-addon">$</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Discount Price</span>
                                                                        <div class="form-line">
                                                                            {!! Form::text("variation[$loop->index][discount_price]", $variation->discount_price, ['class' => 'form-control', 'id' => 'discount_price']) !!}
                                                                        </div>
                                                                        <span class="input-group-addon">$</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="input-group spinner" data-trigger="spinner">
                                                                        <span class="input-group-addon">Quantity</span>
                                                                        <div class="form-line focused">
                                                                            {!! Form::text("variation[$loop->index][quantity]", $variation->quantity, ['class' => 'form-control  text-center', 'id' => 'discount_quantity', 'value'=>'1', 'data-rule' => 'quantity']) !!}
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
                                            @endforeach
                                        @else
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
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>Settings</h2>
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
                                Status: Published
                            @if (!empty($product))
                                <div class="form-group form-float">
                                    {!! Form::label('updated_at', 'Updated: ' ) !!} <span>{{ $product->updated_at }}</span>
                                </div>
                            @endif

                            <div class="form-group form-float">
                                {!! Form::checkbox('product[disabled]', !empty($product) ? $product->disabled : '', false, ['class' => 'filled-in', 'id' => 'disable-product']) !!}
                                {!! Form::label('disable-product', 'Disable product') !!}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Gallery</h2>
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

                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection