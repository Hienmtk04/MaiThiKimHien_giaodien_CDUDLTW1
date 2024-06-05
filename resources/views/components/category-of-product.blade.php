<div class="category mt-2">
    <div class="name container">
        <h6 style="font-size: 20px;"><b>Danh mục sản phẩm</b></h6>
    </div>
    <ul class="list ms-0">
        @foreach ($list as $item)
            <li class="list-item"><a href="#" class="text-dark">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</div>