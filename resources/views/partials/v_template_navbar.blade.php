<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/home-dashboard" class="nav-link {{ (request()->is('home-dashboard')) ? 'active' : '' }} ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/super-admin" class="nav-link {{ (request()->is('super-admin')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Super admin (Produk)
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Admin (Voucher)
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('data-voucher') }}" class="nav-link {{ (request()->is('voucher/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Data Voucher
                </p>
            </a>
        </li>
    </ul>
</nav>
