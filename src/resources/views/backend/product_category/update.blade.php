@extends('layouts.admin.app')

@section('content')
    <div id="producUpdate">
        @include('layouts.admin.product.nav', ['optionNav' => 2])
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Danh mục sản phẩm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <!-- Product edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Cập nhập danh mục sản phẩm</h5>
                    </div>
                    <div class="card-block">
                        <form action="{{ route('product_category.update', $category->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tên danh mục (*)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục"
                                                value="{{ $category->name }}">
                                            @include('layouts.admin.error', ['name' => 'name'])
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mã danh mục</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="code" placeholder="Mã danh mục"
                                                value="{{ $category->code }}">
                                            @include('layouts.admin.error', ['name' => 'code'])
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Danh mục cha</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="parent_id">
                                                <option value="" readonly="true" hidden="true" selected>Chọn danh mục cha
                                                </option>
                                                @if ($categories)
                                                    @foreach ($categories as $item)
                                                        <option
                                                            value="{{ $item->parent_id }} {{ $category->id === $item->parent_id ? 'selected' : '' }}">
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status" id="gender-1"
                                                        value="1" {{ $category->status === 1 ? 'checked' : '' }}>
                                                    Hoạt
                                                    động
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status" id="gender-2"
                                                        value="0" {{ $category->status === 0 ? 'checked' : '' }}>
                                                    Không
                                                    hoạt động
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                                        <div class="col-sm-10">
                                            <div style="position:relative;">
                                                <a class="btn btn-primary" href="#">
                                                    Chọn ảnh
                                                    <input type="file"
                                                        style="position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:&quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity:0;background-color:transparent;color:transparent;"
                                                        name="image" size="40" class="js-upload" id="productImage"
                                                        oninput="previewProductImage.src=window.URL.createObjectURL(this.files[0])">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <img id="previewProductImage"
                                        src="{{ pare_url_file($category->image ?? '') ?? '/images/no-image.jpg' }}"
                                        alt="Preview Image" width="200px" height="200px" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary m-b-0">Cập nhập</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
