@extends('layouts.admin.app')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Danh sách đơn hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Danh sách đơn hàng</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover  table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Ghi chú</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>Sản phẩm</th>
                                    <th>TT vận chuyển</th>
                                    <th>Trạng thái đơn</th>
                                    <th>Tiền hàng</th>
                                    <th>Phí vận chuyển</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>|Ưu tiên giao: Chủ nhật|</td>

                                    <td>
                                        <div class="chk-option">
                                            <b class="">#12398521473</b>
                                            <p>
                                                16:13 | 10.05.2022
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="chk-option">
                                            <b class="">Diepnv`</b>
                                            <p>
                                                0987001396
                                            </p>
                                        </div>
                                    </td>
                                    <td>255 Lai xá, Kim chung, Hoài đức, Hà nội</td>
                                    <td>
                                        <a href="">Áo</a>
                                        <br>
                                        <a href="">Quẩn</a>
                                    </td>
                                    <td>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </td>
                                    <td>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </td>
                                    <td>50.000 (VND)</td>
                                    <td>20.000 (VND)</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
