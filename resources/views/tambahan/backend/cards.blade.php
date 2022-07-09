<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('buku') ? 'active' : '' }}"
                                        href="{{ route('mahasiswa.index') }}">
                                        <i class="ni ni-books text-green"></i>
                                        <span class="nav-link-text">Buku</span>
                                    </a>
                                </li>
                                <div class="col-auto">
                                    <div class="#">
                                        <i class="#"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}"
                                        href="{{ route('mahasiswa.index') }}">
                                        <i class="ni ni-single-02 text-orange"></i>
                                        <span class="nav-link-text">Mahasiswa</span>
                                    </a>
                                </li>
                                <div class="col-auto">
                                    <div class="#">
                                        <i class="#"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}"
                                        href="{{ route('peminjaman.index') }}">
                                        <i class="ni ni-ruler-pencil text-red"></i>
                                        <span class="nav-link-text">Peminjaman</span>
                                    </a>
                                </li>
                                <div class="#">
                                    <div class="#">
                                        <i class="#"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
