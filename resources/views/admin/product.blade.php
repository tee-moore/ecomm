@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {!! !empty($product) ? $product->name : 'Add New Product' !!}
                        {!! link_to_route('admin.product.index', 'Products') !!}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!empty($product))
                            {!! Form::open(['route' => ['admin.product.update', !empty($product) ? $product->id : '']]) !!}
                        @else
                            {!! Form::open(['route' => ['admin.product.store']]) !!}
                        @endif
                                                    {!! Form::label('product[name]', 'Product name') !!}
                            {!! Form::text('product[name]', !empty($product) ? $product->name : '') !!}
                            @if (!empty($product))
                                {!! Form::label('product[slug]', 'Product slug') !!}
                                {!! Form::text('product[slug]', $product->slug) !!}
                            @endif
                            {!! Form::label('product[main_sku]', 'Main sku') !!}
                            {!! Form::text('product[main_sku]', !empty($product) ? $product->main_sku : '') !!}
                            {!! Form::label('product[product_type]', 'Product type') !!}
                            {!! Form::select('product[product_type]', ['0' => 'Simple', '1' => 'Variant'], !empty($product) ? $product->product_type : '') !!}
                            {!! Form::label('product[disabled', 'Disabled product') !!}
                            {!! Form::checkbox('product[disabled]', !empty($product) ? $product->disabled : '') !!}
                            @if (!empty($product))
                                {!! Form::label('created_at', 'Created - ' . $product->created_at ) !!}
                                {!! Form::label('updated_at', 'Updated - ' . $product->updated_at ) !!}
                            @endif
                            {!! Form::label('product[description]', 'Product description') !!}
                            {!! Form::textarea('product[description]', !empty($product) ? $product->description : '') !!}
                            {!! Form::label('product[gallery]', 'Product gallery') !!}
                            {!! Form::textarea('product[gallery]', !empty($product) ? $product->gallery : '') !!}

                            <br>
                            {!! Form::label("", 'Variations') !!}
                            <br>
                            @if (!empty($product))
                                @foreach ($product->variations as $variation)
                                    <div class="tab">
                                        {!! Form::hidden("variation[$variation->id][id]", $variation->id) !!}
                                        {!! Form::label("variation[$variation->id][sku]", 'variation sku') !!}
                                        {!! Form::text("variation[$variation->id][sku]", $variation->sku) !!}
                                        {!! Form::label("variation[$variation->id][image]", 'variation image') !!}
                                        {!! Form::text("variation[$variation->id][image]", $variation->image) !!}
                                        {!! Form::label("variation[$variation->id][price]", 'variation price') !!}
                                        {!! Form::text("variation[$variation->id][price]", $variation->price) !!}
                                        {!! Form::label("variation[$variation->id][discount_price]", 'variation discount price') !!}
                                        {!! Form::text("variation[$variation->id][discount_price]", $variation->discount_price) !!}
                                        {!! Form::label("variation[$variation->id][quantity]", 'variation quantity') !!}
                                        {!! Form::text("variation[$variation->id][quantity]", $variation->quantity) !!}
                                        {!! Form::label("variation[$variation->id][disabled]", 'variation disabled') !!}
                                        {!! Form::checkbox("variation[$variation->id][disabled]", $variation->disabled) !!}

                                        <br>
                                        {!! Form::label("", 'Specification') !!}
                                        <br>
                                        @foreach ($variation->specifications as $specification)
                                            {!! Form::label('', $specification->attribute->name) !!}
                                            {!! Form::select("variation[$variation->id][specifications][".$specification->attribute->id."]", $specifications[$specification->attribute->name], $specification->value_id) !!}
                                        @endforeach

                                    </div>
                                    <br><br>
                                @endforeach
                            @else
                                <div class="tab">
                                    {!! Form::hidden("variation[0][id]", '') !!}
                                    {!! Form::label("variation[0][sku]", 'variation sku') !!}
                                    {!! Form::text("variation[0][sku]", '') !!}
                                    {!! Form::label("variation[0][image]", 'variation image') !!}
                                    {!! Form::text("variation[0][image]", '') !!}
                                    {!! Form::label("variation[0][price]", 'variation price') !!}
                                    {!! Form::text("variation[0][price]", '') !!}
                                    {!! Form::label("variation[0][discount_price]", 'variation discount price') !!}
                                    {!! Form::text("variation[0][discount_price]", '') !!}
                                    {!! Form::label("variation[0][quantity]", 'variation quantity') !!}
                                    {!! Form::text("variation[0][quantity]", '') !!}
                                    {!! Form::label("variation[0][disabled]", 'variation disabled') !!}
                                    {!! Form::checkbox("variation[0][disabled]", '') !!}
                                    <br>
                                    {!! Form::label("", 'Specification') !!}
                                    <br>
                                    @foreach ($specifications as $key =>$attribute)
                                        @foreach ($attribute as $name => $values)
                                        {!! Form::label('', $name) !!}
                                        {!! Form::select("variation[0][specifications][".$key."]", $values) !!}
                                        @endforeach
                                    @endforeach
                            @endif

                            <br>
                            {!! Form::hidden('product[brand_id]', !empty($product) ? $product->brand_id : $brand_id) !!}
                            {!! Form::hidden('product[user_id]', !empty($product) ? $product->user_id : $user_id) !!}
                            {!! Form::submit('Save Me!'); !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection