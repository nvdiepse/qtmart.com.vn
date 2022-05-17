@extends('layouts.admin.app')

@section('content')
    <div id="orderCreate">
        @include('layouts.admin.product.nav')
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Sản phẩm</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tạo mới sản phẩm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <form action="">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>THÔNG TIN KHÁCH HÀNG</h5>
                        </div>
                        <div class="card-block">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="textarea" class="form-control" placeholder="Ghi chú đơn hàng">
                            </div>
                        </div>
                        <hr>
                        <div class="card-header">
                            <h5>THÔNG TIN NHẬN HÀNG</h5>
                        </div>
                        <div class="card-block">

                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <!-- Product edit card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>THÔNG TIN SẢN PHẨM</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <div class="row">

                            </div>
                        </div>
                    </div>
                    <!-- Product edit card end -->
                </div>
            </div>
            <div class="row">
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ mix('js/admin/order/create.js') }}"></script>
@endsection
