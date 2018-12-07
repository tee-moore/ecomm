@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            <li><a href='admin/products'>Products</a></li>
                            <li><a href='admin/users'>Users</a></li>
                            <li><a href='admin/roles'>Roles</a></li>
                            <li><a href='admin/brands'>Brands</a></li>
                            <li><a href='admin/categories'>categories</a></li>
                            <li><a href='admin/tags'>Tags</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection