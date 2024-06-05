<div class="brand mt-2">
    <div class="name container">
        <h6 style="font-size: 30px;"><b>Thương hiệu</b></h6>
    </div>
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
        class="scrollspy-example scrollview" tabindex="0">
        <ul class="list">
            @foreach ($list as $item)
            <li class="list-item"><a href="" style="text-decoration: none; color: black"
                class="ms-1">
                <input class="" type="checkbox">&nbsp;&nbsp; {{ $item->name }}</a></li>
            @endforeach

        </ul>
    </div>
</div>