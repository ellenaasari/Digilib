<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Daftar</li>

        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="sidebar-item has-sub {{ Request::is('book') ? 'active' : '' }}{{ Request::is('category') ? 'active' : '' }}{{ Request::is('add-book') ? 'active' : '' }}{{ Request::is('add-category') ? 'active' : '' }}">
            <a href="" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Manajemen</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item">
                    <a href="{{ route('book') }}">Stok Buku</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('category') }}">Kategori Buku</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item {{ Request::is('cart') ? 'active' : '' }}">
            <a href="{{ route('borrow') }}" class='sidebar-link'>
                <i class="bi bi-cart-fill"></i>
                <span>Pinjam</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('report') ? 'active' : '' }}">
            <a href="{{ route('report') }}" class='sidebar-link'>
                <i class="bi bi-clipboard-check-fill"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('user') ? 'active' : '' }}{{ Request::is('add-user') ? 'active' : '' }}">
            <a href="{{ route('user') }}" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>User</span>
            </a>
        </li>

        <li class="sidebar-title">Tentang Akun</li>

        <li class="sidebar-item {{ Request::is('profile') ? 'active' : '' }}">
            <a href="{{ route('profile') }}" class='sidebar-link'>
                <i class="bi bi-person-fill"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
            this.closest('form').submit();"
                    class='sidebar-link'>
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </form>
        </li>

    </ul>
</div>