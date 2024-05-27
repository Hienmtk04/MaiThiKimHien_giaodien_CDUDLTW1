<div class="col-lg-7 col-md-7 padding-0 mt-4">
    <div class="wrap_main hidden-xs hidden-sm">
        <div class="bg-header-nav hidden-xs hidden-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($list as $item)
                    <li class="nav-item active" id="menu-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route($item->link) }}">{{ $item->name }}</a>
                    </li>
                    @endforeach
                    {{-- <li class="nav-item active" id="menu-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('site.home') }}">TRANG CHỦ</a>
                    </li> --}}
                    {{-- <li class="nav-item ms-3" id="menu-item">
                        <a class="nav-link active" aria-current="page" href="#">GIỚI
                            THIỆU</a>

                    </li>
                    <li class="nav-item dropdown ms-3" id="dropdownMenu">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('site.product') }}" id="navbarDropdownMenuLink">SẢN
                            PHẨM</a>
                        <ul class="dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item mt-2" href="#">Sản phẩm nổi
                                    bật</a></li>
                            <li><a class="dropdown-item mt-2" href="#">Son môi</a></li>
                            <li><a class="dropdown-item mt-2" href="#">Kem dưỡng da</a>
                            </li>
                            <li><a class="dropdown-item mt-2 " href="#">Chăm sóc tóc</a>
                            </li>
                            <li><a class="dropdown-item mt-2" href="#">Chăm sóc mặt</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3" id="menu-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('site.news') }}">TIN TỨC</a>

                    </li>
                    <li class="nav-item ms-3" id="menu-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('site.contact') }}">LIÊN HỆ</a>

                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>