@extends('layouts.admin.app')

@section('content')
    <div id="producCreate">
        @include('layouts.admin.product.nav')
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Thương hiệu sản phẩm</a>
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
                        <h5>Thương hiệu sản phẩm</h5>
                    </div>
                    <div class="card-block">
                        <form action="{{ route('brand.create') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            @include('layouts.admin.validate')
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tên thương hiệu(*)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="Tên danh mục">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mã thương hiệu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="code" placeholder="Mã danh mục">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary m-b-0">Tạo mới</button>
                                    <a href="/admin/brand" class="btn btn-info m-b-0">Quay lại</a>
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
