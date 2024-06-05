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

            @foreach ($list as $item)
                <div class="item">
                    <div class="container">
                        <a href="{{ route('site.product.detail', ['slug' => $item->slug]) }}" style="text-decoration: none;">
                            <img src="{{ asset($item->image) }}" alt={{ $item->name }} title={{ $item->name }}>
                            <div class="infoPro">
                                <h6 class="text-dark" title={{ $item->name }}>{{ $item->name }}</h6>
                                <div class="price">
                                    @if ($item->pricesale)
                                        <span class="text-danger">{{ $item->pricesale }}đ</span>
                                        <span class="text-secondary mx-2"><del>{{ $item->price }}đ</del></span>
                                    @else
                                        <span class="text-danger">{{ $item->price }}đ</span>
                                    @endif
                                </div>
                                <form action="/cart/add" method="post"
                                    class="variants form-nut-grid btn border-danger rounded-fill addCart"
                                    data-id="product-actions-14341653" enctype="multipart/form-data">
                                    <div class="group_action">
                                        <input type="hidden" name="variantId" value="24344327">
                                        <a class="button_add add_to_cart"
                                            style="text-decoration: none; color: rgb(245, 12, 12);"
                                            title="Thêm vào giỏ">
                                            <b>THÊM GIỎ HÀNG</b>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
