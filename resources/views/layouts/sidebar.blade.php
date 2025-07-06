 <!-- sidebar -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle">
                <span class="brand-text font-weight-light">E-Puskesmas</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SUPER ADMIN</li>
                         <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.user.index') }}" class="nav-link @yield('menuSuperadminUser')">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.kategori.index') }}" class="nav-link @yield('menuSuperadminKategori')">
                                <i class="nav-icon fas fa-th-list"></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a wire:navigate href="{{ route('superadmin.barang.index') }}" class="nav-link @yield('menuSuperadminBarang')">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Stock Obat
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">ADMIN</li>
                         <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Stock Obat
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>