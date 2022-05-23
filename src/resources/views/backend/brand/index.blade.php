@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="">
            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                <div class="f-20">
                    <i class="icofont icofont-edit"></i>
                </div>
                Thông tin sản phẩm
            </a>
            <div class="slide"></div>
        </div>
    </div>
    <br>
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
                    <li class="breadcrumb-item"><a href="#!">Tạo mới sản phẩm</a>
                    </li>
                </ul>
            </div>
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
                        <div class="row ms-2 me-3">
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                                <div
                                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
                                    <div class="dt-buttons">
                                        <button class="dt-button btn btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button"><span><i
                                                    class="bx bx-plus me-md-2"></i><span
                                                    class="d-md-inline-block d-none">Create
                                                    Invoice</span></span></button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"
                                            class="form-control" placeholder="Search Invoice"
                                            aria-controls="DataTables_Table_0"></label></div>
                                <div class="invoice_status mb-3 mb-md-0"><select id="UserRole" class="form-select">
                                        <option value=""> Select Status </option>
                                        <option value="Downloaded" class="text-capitalize">Downloaded</option>
                                        <option value="Draft" class="text-capitalize">Draft</option>
                                        <option value="Paid" class="text-capitalize">Paid</option>
                                        <option value="Partial Payment" class="text-capitalize">Partial Payment</option>
                                        <option value="Past Due" class="text-capitalize">Past Due</option>
                                        <option value="Sent" class="text-capitalize">Sent</option>
                                    </select></div>
                            </div>
                        </div>
                        <table class="invoice-list-table table border-top dataTable no-footer dtr-column"
                            id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                            style="width: 1372px;">
                            <thead>
                                <tr role="row">
                                    <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 0px; display: none;"
                                        aria-label=": activate to sort column ascending"></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 97px;"
                                        aria-label="#ID: activate to sort column ascending" aria-sort="descending">#ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 69px;" aria-label=": activate to sort column ascending"><i
                                            class="bx bx-trending-up"></i></th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 367px;"
                                        aria-label="Client: activate to sort column ascending">Mã thương hiệu</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 109px;"
                                        aria-label="Total: activate to sort column ascending">
                                        Tên thương hiệu</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 109px;"
                                        aria-label="Total: activate to sort column ascending">
                                        Thao tác</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->items() as $item)
                                    <tr class="odd">
                                        <td class=" control" tabindex="0" style="display: none;"></td>
                                        <td class="sorting_1"><a
                                                href="app-invoice-preview.html">#{{ $item->id }}</a></td>
                                        <td>
                                        <td class="sorting_1"><a
                                                href="app-invoice-preview.html">{{ $item->name }}</a></td>
                                        </td>
                                        <td>
                                        <td class="sorting_1"><a
                                                href="app-invoice-preview.html">{{ $item->code }}</a></td>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><a href="javascript:;"
                                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                    title="" data-bs-original-title="Send Mail" aria-label="Send Mail"><i
                                                        class="bx bx-send mx-1"></i></a><a href="app-invoice-preview.html"
                                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                                    title="" data-bs-original-title="Preview Invoice"
                                                    aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i></a>
                                                <div class="dropdown"><a href="javascript:;"
                                                        class="btn dropdown-toggle hide-arrow text-body p-0"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;"
                                                            class="dropdown-item">Download</a><a
                                                            href="app-invoice-edit.html" class="dropdown-item">Edit</a><a
                                                            href="javascript:;" class="dropdown-item">Duplicate</a>
                                                        <div class="dropdown-divider"></div><a href="javascript:;"
                                                            class="dropdown-item delete-record text-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mx-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 50 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                                data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                                class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0"
                                                class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0"
                                                class="page-link">5</a></li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                                aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
