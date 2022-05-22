<div class="card">
    <ul class="nav nav-tabs md-tabs" role="tablist">
        <li class="nav-item active">
            <a class="nav-link {{ $optionNav === 1 ? 'active' : '' }}" data-toggle=""
                href="{{ route('blog.index') }}" role="tab">Danh sách Bog</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $optionNav === 2 ? 'active' : '' }}" data-toggle=""
                href="{{ route('menu.index') }}" role="tab">Danh sách menu</a>
            <div class="slide"></div>
        </li>
    </ul>
</div>
