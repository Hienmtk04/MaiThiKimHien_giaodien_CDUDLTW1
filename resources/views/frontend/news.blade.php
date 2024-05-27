@extends('layouts.site')
@section('title', 'Tin tức')
@section('maincontent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
        <link rel="stylesheet" href="{{ asset('css/news.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <style>
            .detail {
                color: #94e3df;
                border: 1px solid #94e3df;
            }

            .detail:hover {
                color: #ffffff;
                background: #94e3df;
            }
        </style>
    </head>

    <body>
        <section class="bread-crumb">
            <span class="crumb-border p-3"></span>
            <div class="container">
                <div class="rows">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="home">
                                <a href="{{ route('site.home') }}" class="text-dark"><span>Trang chủ</span></a>
                                <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"
                                        style="color: #94e3df;"></i>&nbsp;</span>
                            </li>

                            <li><strong><span style="color: #94e3df;">@yield('title')</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="main container">
            <div class="m-5 container">
                <h3>Tin tức</h3>
                <p>
                    Nhanh chóng cập nhật những thông tin hữu ích nhất từ chúng tôi để có biến giấc mơ làm đẹp trở nên đơn
                    giản hơn bao giờ hết.
                </p>
                <div class="row mt-5 container">
                    <div class="container item1 col-md-3 m-2 "
                        style="width: 250px; height: 400px; text-align: center">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/mat-na-duong-da-4311.webp') }}" style="width: 220px">
                            <div style="width: 220px; text-align: center">
                                <a href="" style="text-decoration: none">
                                    <p class="text-dark">Chị em đua nhau uống colagen để căng da</p>
                                </a>
                                <button class='btn border detail mt-3'>
                                    <span>Chi tiết &nbsp; <i class="fa-solid fa-angle-right"></i></span>
                                </button>
                            </div>
                        </a>
                    </div>

                    <div class="container item1 col-md-3 m-2 "
                        style="width: 250px; height: 400px; text-align: center">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/dung-nuoc-hoa-hong-39069.webp') }}" style="width: 220px">
                            <div style="width: 220px; text-align: center">
                                <a href="" style="text-decoration: none">
                                    <p class="text-dark">Lớp trang điểm bền màu cả ngày nhờ 5 loại kem lót</p>
                                </a>
                                <button class='btn border detail mt-3'>
                                    <span>Chi tiết &nbsp; <i class="fa-solid fa-angle-right"></i></span>
                                </button>
                            </div>
                        </a>
                    </div>

                    <div class="container item1 col-md-3 m-2 "
                        style="width: 250px; height: 400px; text-align: center">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/nuoc-hoa-hong-mira-culous-rose-soothing-facial-toner-1m4g3-7akdxr-simg-d0daf0-800x1200-max.webp') }}"
                                style="width: 220px">
                            <div style="width: 220px; text-align: center">
                                <a href="" style="text-decoration: none">
                                    <p class="text-dark">8 công dụng tuyệt vời của Toner hoa hồng sâm</p>
                                </a>
                                <button class='btn border detail mt-3'>
                                    <span>Chi tiết &nbsp; <i class="fa-solid fa-angle-right"></i></span>
                                </button>
                            </div>
                        </a>
                    </div>

                    <div class="container item1 col-md-3 m-2 "
                        style="width: 250px; height: 400px; text-align: center">
                        <a href="#" style="text-decoration: none;">
                            <img src="{{ asset('images/chong-nang-hieu-qua.webp') }}" style="width:220px">
                            <div style="width: 220px; text-align: center">
                                <a href="" style="text-decoration: none">
                                    <p class="text-dark">Nhiều người không bao giờ thiếu kem chống nắng</p>
                                </a>
                                <button class='btn border detail mt-3'>
                                    <span>Chi tiết &nbsp; <i class="fa-solid fa-angle-right"></i></span>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <hr/>
        </section>
    </body>

    </html>

@endsection
