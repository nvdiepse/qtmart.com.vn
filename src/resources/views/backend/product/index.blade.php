@extends('layouts.admin.app')

@section('content')
    @include('layouts.admin.product.nav', ['optionNav' => 1])

    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Sản phẩm</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Danh sách sản phẩm</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>

    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
        <div class="dt-buttons">
            <button class="dt-button btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"
                onclick="window.location='{{ route('product.create') }}'">
                <span>
                    <i class="bx bx-plus me-md-2"></i>
                    <span class="d-md-inline-block d-none">Tạo mới </span>
                </span>
            </button>
        </div>
    </div>
    <br>

    <div id="productIndex">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <!-- Billing History -->
                <h5 class="card-header border-bottom">Danh sách sản phẩm</h5>
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                        {{-- search --}}
                        <div class="ms-2 me-3">
                            <div class="col-12 d-flex align-items-center flex-column flex-md-row pe-3 gap-md-2">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter pr-2">
                                    <label>
                                        <input type="search" class="form-control" placeholder="Tìm kiếm"
                                            aria-controls="DataTables_Table_0">
                                    </label>
                                </div>
                                <div class="invoice_status pb-2">
                                    <select class="form-control" aria-label=".form-select-lg example">
                                        <option value="" readonly="true" hidden="true" selected> Trạng thái </option>
                                        <option value="Downloaded" class="text-capitalize">Hoạt động</option>
                                        <option value="Draft" class="text-capitalize">Không hoạt động</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <table class="invoice-list-table table border-top dataTable no-footer dtr-column"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th aria-label="Balance">
                                        <input class="custom-control-input custom-control-input-danger" type="checkbox"
                                            id="customCheckbox4" checked="">
                                    </th>
                                    <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label=": activate to sort column ascending">Ảnh
                                    </th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-label="#ID: activate to sort column ascending"
                                        aria-sort="descending">
                                        Tên sản phẩm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label=": activate to sort column ascending">
                                        Đơn vị tính</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Client: activate to sort column ascending">Mã sản phẩm</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Total: activate to sort column ascending">
                                        Trạng Thái</th>
                                    <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-label="Issued Date: activate to sort column ascending">
                                        Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($products))
                                    @foreach ($products as $product)
                                        <tr class="odd">
                                            <td class="sorting_1"><a href="app-invoice-preview.html">#5089</a></td>
                                            <td>
                                                <img src="{{ pare_url_file($product->image) }}"
                                                    style="width: 80px;height: 100px">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td><span>{{ $product->product_unit }}</span></td>
                                            <td><span>{{ $product->code }}</span></td>
                                            <td>
                                                @if ($product->status == 1)
                                                    <a href="{{ route('product.active', $product->id) }}"
                                                        class="label label-info">Hoạt động</a>
                                                @else
                                                    <a href="{{ route('product.active', $product->id) }}"
                                                        class="label label-default">Không hoạt động</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('product.update', $product->id) }}"
                                                    class="btn btn-xs btn-primary">
                                                    <i class="fa fa-pencil"></i>
                                                    Chỉnh sửa
                                                </a>
                                                <a href="{{ route('product.delete', $product->id) }}"
                                                    class="btn btn-xs btn-danger js-delete-confirm">
                                                    <i class="fa fa-trash"></i>
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="row mx-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                    Showing {{ $products->count() }} to {{ $products->perPage() }} of
                                    {{ $products->total() }} entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    {!! $products->appends($query)->links() !!}
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <!--/ Billing History -->
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ mix('js/admin/product/index.js') }}"></script>
@endsection
