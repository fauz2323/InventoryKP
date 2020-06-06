<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-light text-center">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            
            @if (auth()->user()->role == 'admin')
            <li class="active"><a href="{{ route('users.index') }}"><i class="fas fa-user"></i> <span>User</span></a></li>
            @endif

            <li class="active"><a href="{{ route('categories.index') }}"><i class="fas fa-tags"></i> <span>Category</span></a></li>
            
            <li class="active"><a href="{{ route('products.index') }}"><i class="fas fa-shopping-bag"></i> <span>Product</span></a></li>
            
            <li class="active"><a href="{{ route('customers.index') }}"><i class="fas fa-users"></i> <span>Customer</span></a></li>
            
            <li class="active"><a href="{{ route('sales.index') }}"><i class="fas fa-id-card"></i> <span>Sales</span></a></li>
            
            <li class="active"><a href="{{ route('suppliers.index') }}"><i class="fas fa-shipping-fast"></i> <span>Supplier</span></a></li>
            
            <li class="active"><a href="{{ route('productsOut.index') }}"><i class="fas fa-upload"></i> <span>Product Out</span></a></li>
            
            <li class="active"><a href="{{ route('productsIn.index') }}"><i class="fas fa-download"></i> <span>Product In</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
