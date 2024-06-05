<div class="container product col-md-10 mb-5">
    <div class="menu mt-5">
        <b>
            <h2>Tất cả sản phẩm</h2>
        </b>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <label for="select"><b>Ưu tiên xem: </b></label>
            <a href="" style="text-decoration: none; color: black" class="item1 mx-3"> <input class="nav-item "
                    type="checkbox" name="new" id="newPro"> Hàng mới về</a>
            <a href="" style="text-decoration: none; color: black" class="item1 mx-3"><input class="nav-item"
                    type="checkbox" name="new" id="oldPro"> Hàng cũ nhất</a>
            <a href="" style="text-decoration: none; color: black" class="item1 mx-3"> <input class="nav-item"
                    type="checkbox" name="new" id="increPrice"> Giá tăng dần</a>
            <a href="" style="text-decoration: none; color: black" class="item1 mx-3"> <input class="nav-item"
                    type="checkbox" name="new" id="decrePrice"> Giá giảm dần</a>
        </nav>
    </div>

    <hr>


    <div class="product" style="text-align: center">
        @foreach ($list as $item)
            <div class="col-md-3" style="float: left; margin: 30px">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="{{ route('site.product.detail', ['slug' => $item->slug]) }}" style="text-decoration: none;">
                            <img src="{{ asset($item->image) }}" alt={{ $item->name }} title={{ $item->name }}>
                            <div class="infoPro">
                                <h6 class="text-dark" title={{ $item->name }}>{{ $item->name }} </h6>
                                <div class="price">
                                    @if ($item->pricesale)
                                        <span class="text-danger">{{ $item->pricesale }}đ</span>
                                        <span class="text-secondary mx-2"><del>{{ $item->price }}đ</del></span>
                                    @else
                                        <span class="text-danger">{{ $item->price }}đ</span>
                                    @endif
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="row">
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/maybellineor011u2409d20160928t.webp') }}"
                                alt="son_moi" title="Son Ba Màu Maybelline Bitten 3.9g">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Son Ba Màu Maybelline Bitten 3.9g">Son Ba Màu
                                    Maybelline Bitten 3.9g</h6>
                                <div class="price">
                                    <span class="text-danger">140.000đ</span>
                                    <span class="text-secondary mx-2"><del>150.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/anhchupmanhinh20170829luc44344.webp') }}"
                                alt="son_moi" title="Son thỏi lì 3ce Lip color Matte - #907">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Son thỏi lì 3ce Lip color Matte - #907">Son
                                    thỏi lì
                                    3ce
                                    Lip color Matte - #907</h6>
                                <div class="price">
                                    <span class="text-danger">270.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/2016102708060633fcb32e55e5c72d.webp') }}"
                                alt="son_moi" title="Son Thỏi Apieu True Fitting Lipstick">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Son Thỏi Apieu True Fitting Lipstick">Son
                                    Thỏi
                                    Apieu
                                    True Fitting Lipstick</h6>
                                <div class="price">
                                    <span class="text-danger">145.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/sonchristianlouboutindiva.webp') }}" alt="son_moi"
                                title="Son Christian Louboutin Diva">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Son Christian Louboutin Diva">Son Christian
                                    Louboutin
                                    Diva</h6>
                                <div class="price">
                                    <span class="text-danger">2.850.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- product2------------------------------------------------------------------------ -->

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/s1325885mainzoom.webp') }}" alt="phan_mat"
                                title="Phấn mắt Moonshadow Baked">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Phấn mắt Moonshadow Baked">Phấn mắt
                                    Moonshadow
                                    Baked
                                </h6>
                                <div class="price">
                                    <span class="text-danger">679.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/s1293463mainzoom.webp') }}" alt="son_moi"
                                title="Son Yves Saint Laurent">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Son Yves Saint Laurent">Son Yves Saint
                                    Laurent
                                </h6>
                                <div class="price">
                                    <span class="text-danger">729.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="{{ route('site.product.detail', ['slug' => '1']) }}"
                            style="text-decoration: none;">
                            <img src="{{ asset('images/product3.webp') }}" alt="nuoc_hoa"
                                title="Nước hoa Yves Saint Laurent Black">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Yves Saint Laurent Black">Nước hoa
                                    Yves
                                    Saint
                                    Laurent Black</h6>
                                <div class="price">
                                    <span class="text-danger">1.350.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/product7.webp') }}" alt="nuoc_hoa"
                                title="Nước hoa Chloé Eau de Parfum">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Chloé Eau de Parfum">Nước hoa Chloé
                                    Eau de
                                    Parfum</h6>
                                <div class="price">
                                    <span class="text-danger">1.500.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT3------------------------------------------------------------------------------>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/baremineralsoriginalfoundation.webp') }}"
                                alt="phan_nen" title="Phấn nền bareMinerals Original">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Phấn nền bareMinerals Original">Phấn nền
                                    bareMinerals
                                    Original</h6>
                                <div class="price">
                                    <span class="text-danger">560.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container  p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/8a6dcb8e287174a7f949119dc28ca2.webp') }}"
                                alt="sua_tam" title="Sữa tắm dạng kem Victoria’s Secret">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Sữa tắm dạng kem Victoria’s Secret">Sữa tắm
                                    dạng
                                    kem
                                    Victoria’s Secret</h6>
                                <div class="price">
                                    <span class="text-danger">860.000đ</span>
                                    <span class="text-secondary mx-2"><del>930.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/5c53bf862463a4743897afb22a6196.webp') }}"
                                alt="sua_tam" title="Sữa tắm Sparkling Citrus làm mượt da">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Sữa tắm Sparkling Citrus làm mượt da">Sữa tắm
                                    Sparkling
                                    Citrus mượt da</h6>
                                <div class="price">
                                    <span class="text-danger">1.200.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item border">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/10f387959a5a5a43fea8e5e43c4c69.webp') }}"
                                alt="nuoc_hoa" title="Nước hoa Versace Bright Crystal">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Versace Bright Crystal">Nước hoa
                                    Versace
                                    Bright Crystal</h6>
                                <div class="price">
                                    <span class="text-danger">1.000.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill add_Cart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add" style="text-decoration: none;"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
