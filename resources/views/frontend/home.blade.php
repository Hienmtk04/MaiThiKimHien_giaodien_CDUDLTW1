
@extends('layouts.site')
@section('title', 'Trang chủ')
@section('maincontent')

    <section class="intro mt-5">
        <div class="container section2 ">
            <div class="title_module_bbf mt-5">
                <h2>Giới thiệu</h2>
                <span class="destitle">Giới thiệu về Delta Cosmetic Việt Nam</span>

            </div>

            <div class="descript justify-content-center">
                <p>
                    Công ty Delta Cosmetic Việt Nam trực tiếp sản xuất các dòng mỹ phẩm thiên nhiên- không theo trào lưu
                    mỹ phẩm công nghiệp hiện hành,
                    công ty đi theo hướng phát triển bền vững, lâu dài các dòng mỹ phẩm được làm handmade “BÀN TAY VÀ
                    KHỐI ÓC CON NGƯỜI” làm chủ thể!
                </p>
                <span class="star_reviews text-warning">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i>
                </span>
            </div>
        </div>
    </section>

    <section class="typeProduct ">
        <div class=" section3 container">
            <h5>CÁC DÒNG SẢN PHẨM CỦA DELTA COSMETIC VIỆT NAM</h5>
            <div class="row mt-5 justify-content-center">
                <a href="#" class="col-md-3 sp1" style="text-decoration: none; width:200px">
                    <div class="item1">
                        <h5 class="text-light">Son môi</h5>
                        <p class="text-light">8 sản phẩm</p>
                        <img src="{{ asset('images/image_ab_1.webp')}}" alt="son_moi">
                    </div>
                </a>

                <a href="#" class="col-md-3 sp2 " style="text-decoration: none; width:200px">
                    <div class="item2">
                        <h5 class="text-light">Kem dưỡng da</h5>
                        <p class="text-light">8 sản phẩm</p>
                        <img src="{{ asset('images/image_ab_2.webp')}}" alt="duong_da">
                    </div>
                </a>

                <a href="#" class="col-md-3 sp3" style="text-decoration: none; width:200px">
                    <div class="item3">
                        <h5 class="text-light">Chăm sóc tóc</h5>
                        <p class="text-light">8 sản phẩm</p>
                        <img src="{{ asset('images/image_ab_3.webp')}}" alt="duong_toc">
                    </div>
                </a>

                <a href="#" class="col-md-3 sp4" style="text-decoration: none; width:200px">
                    <div class="item4">
                        <h5 class="text-light">Chăm sóc mặt</h5>
                        <p class="text-light">8 sản phẩm</p>
                        <img src="{{ asset('images/image_ab_4.webp')}}" alt="duong_mat">
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="newProduct">
        <div class="container section4">
            <div class="title_module_bbf a-center section">
                <h2 class="bf_flower">
                    <a href="san-pham-noi-bat" title="Sản phẩm mới" class="text-dark" style="text-decoration: none;">
                        <h3>Sản phẩm mới</h3>
                    </a>
                </h2>
                <span class="destitle">Bộ sưu tập sản phẩm mới nhất từ Delta Cosmetic</span>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/8a6dcb8e287174a7f949119dc28ca2.webp')}}" alt="sua_tam"
                                title="Sữa tắm Victoria's Secret quyến rũ">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Sữa tắm Victoria's Secret quyến rũ">Sữa tắm Victoria's
                                    Secret...</h6>
                                <div class="price">
                                    <span class="text-danger">560.000đ</span>
                                    <span class="text-secondary mx-2"><del>670.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>



                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/1.webp')}}" alt="kem_chong_nang" title="Kem chống nắng AHA">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Kem chống nắng AHA">Kem chống nắng AHA</h6>
                                <div class="price">
                                    <span class="text-danger">350.000đ</span>
                                    <span class="text-secondary mx-2"><del>370.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp')}}" alt="dau_duong_da"
                                title="Dầu dưỡng da Phyto..." class="border border-light">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Dầu dưỡng da Phytoceuticals Argan">Dầu dưỡng da
                                    Phytoceuticals Argan</h6>
                                <div class="price">
                                    <span class="text-danger">169.000đ</span>
                                    <span class="text-secondary mx-2"><del>196.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/3461949333418s01d20170826t1549.webp')}}" alt="kem_duong_da"
                                title="Kem dưỡng da AHA">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Kem dưỡng da AHA">Kem dưỡng da AHA</h6>
                                <div class="price">
                                    <span class="text-danger">420.000đ</span>
                                    <span class="text-secondary mx-2"><del>450.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart "
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/156dc0eb7a087348e1b8c38613020e (1).webp')}}" alt="nuoc_hoa" 
                                title="Nước hoa Dolce & Gabbana">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Dolce & Gabbana">Nước hoa Dolce & Gabbana</h6>
                                <div class="price">
                                    <span class="text-danger">148.000đ</span>
                                    <span class="text-secondary mx-2"><del>270.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/facialtreatmentessence2 (1).webp')}}" alt="tinh_chat_duong_da"
                                title="Tinh chất dưỡng da SK-II Facial">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Tinh chất dưỡng da SK-II Facial">Tinh chất dưỡng da SK-II
                                    Facial</h6>
                                <div class="price">
                                    <span class="text-danger">4100.000đ</span>
                                    <span class="text-secondary mx-2"><del>4300.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart "
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
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
    </section>

    <!-- trendProduct----------------------------------------------------------------------- -->
    <section class="trendPro">
        <div class="container section4">
            <div class="title_module_bbf a-center section">
                <h2 class="bf_flower">
                    <a href="san-pham-noi-bat" title="Sản phẩm mới" class="text-dark" style="text-decoration: none;">
                        <h3>Sản phẩm xu hướng</h3>
                    </a>
                </h2>
                <span class="destitle">Những sản phẩm được khách hàng lựa chọn nhiều nhất</span>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/baremineralsoriginalfoundation.webp')}}" alt="phan_nen"
                                title="Phấn nền bareMinerals Original">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Phấn nền bareMinerals Original">Phấn nền bareMinerals
                                    Original</h6>
                                <div class="price">
                                    <span class="text-danger">560.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container  p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/8a6dcb8e287174a7f949119dc28ca2.webp')}}" alt="sua_tam"
                                title="Sữa tắm dạng kem Victoria’s Secret">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Sữa tắm dạng kem Victoria’s Secret">Sữa tắm dạng kem
                                    Victoria’s Secret</h6>
                                <div class="price">
                                    <span class="text-danger">860.000đ</span>
                                    <span class="text-secondary mx-2"><del>930.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp')}}" alt="dau_duong_da"
                                title="Dầu dưỡng da Phyto..." class="border border-light">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Dầu dưỡng da Phytoceuticals Argan">Dầu dưỡng da
                                    Phytoceuticals Argan</h6>
                                <div class="price">
                                    <span class="text-danger">169.000đ</span>
                                    <span class="text-secondary mx-2"><del>196.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="item">
                    <div class="container p-3" style="text-align: center;">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/10f387959a5a5a43fea8e5e43c4c69.webp')}}" alt="nuoc_hoa"
                                title="Nước hoa Versace Bright Crystal">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Versace Bright Crystal">Nước hoa Versace Bright
                                    Crystal</h6>
                                <div class="price">
                                    <span class="text-danger">1.000.000đ</span>
                                    <!-- <span class="text-secondary mx-2"><del>150.000đ</del></span> -->
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/156dc0eb7a087348e1b8c38613020e (1).webp')}}" alt="nuoc_hoa"
                                title="Nước hoa Dolce & Gabbana">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Nước hoa Dolce & Gabbana">Nước hoa Dolce & Gabbana</h6>
                                <div class="price">
                                    <span class="text-danger">148.000đ</span>
                                    <span class="text-secondary mx-2"><del>270.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/facialtreatmentessence2 (1).webp')}}" alt="tinh_chat_duong_da"
                                title="Tinh chất dưỡng da SK-II Facial">
                            <div class="infoPro">
                                <h6 class="text-dark" title="Tinh chất dưỡng da SK-II Facial">Tinh chất dưỡng da SK-II
                                    Facial</h6>
                                <div class="price">
                                    <span class="text-danger">4100.000đ</span>
                                    <span class="text-secondary mx-2"><del>4300.000đ</del></span>
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart "
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);" title="Thêm vào giỏ">
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
    </section>

    <section class="awe-section-9 mt-5">
        <section class="section_newletter">
            <div class="container">
                <div class="row">
                    <div class=" col-md-5 text-light">
                        <h2>
                            Đăng ký nhận tin
                        </h2>
                        <p>
                            Bạn có thể đăng ký nhận tin khuyến mãi bất cứ lúc nào, những thông tin sẽ được gửi
                            tới bạn
                            nhanh nhất.
                        </p>
                    </div>
                    <div class="col-md-7">
                        <div class="mail_footer">
                            <form class="margin-bottom-0 btn border-secondary rounded-fill ms-5" action="#"
                                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                target="_blank">
                                <input type="email" value="" placeholder="Nhập email của bạn" name="EMAIL"
                                    id="mail" class="btn btn-light rounded-fill" style="width: 500px">
                                <button class="btn btn-success subscribe" name="subscribe" id="subscribe"><i
                                        class="fa fa-paper-plane"></i> Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
