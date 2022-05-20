@extends('layouts.admin.app')

@section('content')
    <div id="producUpdate">
        @include('layouts.admin.product.nav', ['optionNav' => 2])
        @include('layouts.admin.product.slide')

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
                        <form action="{{ route('product_category.update', $prCategories->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            @if ($errors->any())
                                                <div class="alert alert-danger background-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>* {{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tên danh mục (*)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục"
                                                value="{{ $prCategories->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mã danh mục</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="code" placeholder="Mã danh mục"
                                                value="{{ $prCategories->code }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Danh mục cha</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="parent_id">
                                                <option value="" readonly="true" hidden="true" selected>Chọn danh mục cha
                                                </option>
                                                <option value="1" {{ 1 === $prCategories->parent_id ? 'selected' : '' }}>
                                                    Danh mục 1</option>
                                                <option value="2" {{ 2 === $prCategories->parent_id ? 'selected' : '' }}>
                                                    Danh
                                                    mục 2</option>
                                                <option value="3" {{ 3 === $prCategories->parent_id ? 'selected' : '' }}>
                                                    Danh
                                                    mục 3</option>
                                                <option value="4" {{ 4 === $prCategories->parent_id ? 'selected' : '' }}>
                                                    Danh
                                                    mục 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status" id="gender-1"
                                                        value="1" {{ $prCategories->status === 1 ? 'checked' : '' }}>
                                                    Hoạt
                                                    động
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="status" id="gender-2"
                                                        value="0" {{ $prCategories->status === 1 ? 'checked' : '' }}>
                                                    Không
                                                    hoạt động
                                                </label>
                                            </div>
                                            <span class="messages"></span>
                                        </div>
                                    </div>
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
