<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/home-dashboard" class="nav-link {{ $title === 'home' ? 'active' : '' }} ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/super-admin" class="nav-link {{ $title === 'superadmin' ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Super admin (Produk)
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin" class="nav-link {{ $title === 'admin' ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Admin (Voucher)
                </p>
            </a>
        </li>
    </ul>
</nav>
