@extends('layouts.site')
@section('title', 'Sản phẩm')
@section('maincontent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        {{-- 
    <style>
        .item1:hover {
            border: 1px solid #94e3df;
            border-radius: 20px;
            color: #94e3df;
        }

        .addCart:hover {
            background-color: #95e0d2;
            color: #95e0d2;
            ;

        }

        .item img {
            width: 200px;
            height: 220px;
        }

        .item {
            height: 400px;
        }

        .bread-crumb {
            background: #ece9e9;
            border-top: solid 1px #ebebeb;
            border-bottom: solid 2px #d1cfcf;
        }

        .scrollview {
            width: auto;
            height: 200px;
            overflow: auto;
            /* Cho phép cuộn khi nội dung vượt quá kích thước của scrollview */
            padding-right:  20px;
        }
        .scrollview ul li a {
            font-size: 15px;
        }
    </style> --}}
        <style>
            .button_add {
                color: #fc3e3e;
            }
            .button_add:hover {
                background-color: #fc3e3e;
                color: white;
            }

            .add_Cart:hover {
                background-color: #fc3e3e;
                color: white;
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

                            <li><strong><span style="color: #94e3df;"> Tất cả sản phẩm</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="main container">

            <div class="row ">
                <div class="col-md-2 mt-5">
                    {{-- category --}} 
                    <div class="category mt-2">
                        <div class="name container">
                            <h6 style="font-size: 20px;"><b>Danh mục sản phẩm</b></h6>
                        </div>
                        <ul class="list ms-0">
                            <li class="list-item"><a href="#" class="text-dark">Kem dưỡng da</a></li>
                            <li class="list-item"><a href="#" class="text-dark">Chăm sóc da</a></li>
                            <li class="list-item"><a href="#" class="text-dark">Chăm sóc mặt</a></li>
                            <li class="list-item"><a href="#" class="text-dark">Son môi</a></li>
                        </ul>
                    </div>

                    {{-- brand --}}
                    <x-brand/>
                </div>

                {{-- All Product --}}
                <x-all-product/>
                
                <hr />

            </div>
        </section>
    </body>
    <script src=" {{ asset('js/main.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    </html>
@endsection
