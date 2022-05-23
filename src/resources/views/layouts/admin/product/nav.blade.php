<div class="card">
    <ul class="nav nav-tabs md-tabs" role="tablist">
        <li class="nav-item active">
            <a class="nav-link {{ $optionNav === 1 ? 'active' : '' }}" data-toggle=""
                href="{{ route('product.index') }}" role="tab">Danh sách sản
                phẩm</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $optionNav === 2 ? 'active' : '' }}" data-toggle=""
                href="{{ route('product_category.index') }}" role="tab">Danh mục
                sản phẩm</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item" {{ $optionNav === 3 ? 'active' : '' }}>
            <a class="nav-link" data-toggle="tab" href="/admin/brand" role="tab">Thương hiệu sản phẩm</a>
            <div class="slide"></div>
        </li>
    </ul>
</div>
