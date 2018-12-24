<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if(Route::current()->getName() == 'admin.index')
                <li class="active">
            @else
                <li>
            @endif
                <a href='{{ route('admin.index') }}'>
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if(Route::current()->getName() == 'admin.product.index')
                <li class="active">
            @else
                <li>
            @endif
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">shopping_cart</i>
                    <span>Products</span>
                </a>
                <ul class="ml-menu">
                    @if(Route::current()->getName() == 'admin.product.index')
                        <li class="active">
                    @else
                        <li>
                    @endif
                        <a href='{{ route('admin.product.index') }}'>
                            Products
                        </a>
                    </li>
                    @if(Route::current()->getName() == 'admin.product.create')
                        <li class="active">
                    @else
                        <li>
                    @endif
                        <a href='{{ route('admin.product.create') }}'>
                            Add Product
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; <a href="javascript:void(0);">Ecomm 2019</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->