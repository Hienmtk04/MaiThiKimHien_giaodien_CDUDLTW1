@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
@section('maincontent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
        <link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <style>
            .bread-crumb {
                background: #ece9e9;
                border-top: solid 1px #ebebeb;
                border-bottom: solid 2px #d1cfcf;
            }

            .title-product {
                color: #292929;
                font-size: 24px;
                line-height: 26px;
                font-family: "Noto Serif", serif;
                font-weight: 700;
            }

            .description p {
                height: 50px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .addCart {
                color: #1e6225;
            }

            .addCart:hover {
                background-color: #1e6225;
                color: white;
            }

            .add_Cart:hover {
                background-color: rgb(245, 12, 12);
                color: white;
            }

            .add_Cart a:hover {
                color: white;
            }

            .button_add {
                color: red;
            }

            .owl-carousel .owl-item img {
                display: block;
                width: 100%;
                height: auto;
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

                            <li><strong><span style="color: #94e3df;">{{ $list->name }}</span></strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="main mt-5 container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($list->image) }}" alt="{{ $list->name }}" title={{ $list->name }}
                            class="border" style="width: 400px; height: 400px;">
                    </div>
                    <div class="col-md-6">
                        <div class=" details-pro">
                            <div class="info">
                                <h1 class="title-product">{{ $list->name }}</h1>
                                <div class="brand">
                                    <span class="star_reviews text-secondary opacity-25">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span>
                                        <label for="brand" class="text-secondary opacity-75">Thương hiệu: </label>
                                        <span class="brand_name"> Yves Saint Laurent</span>
                                    </span>

                                </div>
                                <hr>
                                <div class="price">
                                    @if ($list->pricesale)
                                        <span class="text-danger h3">{{ $list->pricesale }}đ</span>
                                        <span class="text-secondary mx-2"><del>{{ $list->price }}đ</del></span>
                                    @else
                                        <h3 class="text-danger">{{ $list->price }}đ</h3>
                                    @endif
                                </div>
                                <div class="description">
                                    <p title={{ $list->description }} >
                                        <b>{{ $list->description }}</b>
                                    </p>
                                </div>
                                <div class="quality">
                                    <div class="d-flex align-items-center mb-4 pt-2 ">
                                        <div class="input-group quantity mr-3" style="width: 200px">
                                            <button class='btn btn-success btn-plus' onclick="decreaseValue()">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input type="number" class="text-center form-control input-number"
                                                id="quantity" value="1" />
                                            <button class='btn btn-success btn-plus' onclick="increaseValue()">
                                                <i class='fa fa-plus'></i>
                                            </button>
                                        </div>
                                        <span class="">&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                        <button class='btn px-4 ms-2 border border-success addCart'>
                                            <i class="fa-solid fa-cart-plus"></i>
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Other Product --}}
                <x-other-product />
            </div>
        </section>
    </body>

    <script src=" {{ asset('js/main.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script>
        function increaseValue() {
            var value = parseInt(document.getElementById('quantity').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('quantity').value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('quantity').value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                document.getElementById('quantity').value = value;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        // Owl Carousel initialization
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    </html>

@endsection
