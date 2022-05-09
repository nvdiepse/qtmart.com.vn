@extends('layouts.admin.app')

@section('content')

    <div id="producCreate">
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
        <div class="row">
            <div class="col-sm-12">
                <!-- Product edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Tạo mới sản phẩm</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product-edit">
                                    <ul class="nav nav-tabs nav-justified md-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-edit"></i>
                                                </div>
                                                Thông tin sản phẩm</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-document-search"></i>
                                                </div>
                                                SEO Metadata</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-ui-image"></i>
                                                </div>
                                                Thuộc tính sản phẩm</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home7" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <br>
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tên sản phẩm(*)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Mã sản phẩm</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Tự động tạo mã">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Danh mục sản phẩm</label>
                                                            <div class="col-sm-10">
                                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Select One Value Only</option>
                                                                    <option value="opt2">Type 2</option>
                                                                    <option value="opt3">Type 3</option>
                                                                    <option value="opt4">Type 4</option>
                                                                    <option value="opt5">Type 5</option>
                                                                    <option value="opt6">Type 6</option>
                                                                    <option value="opt7">Type 7</option>
                                                                    <option value="opt8">Type 8</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Đơn vị tính</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Vd: Cái, Chiếc, Lọ ...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                                        <div class="col-sm-10">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Hoạt động
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Không hoạt động
                                                                </label>
                                                            </div>
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel">
                                            <form class="md-float-material card-block">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                            <input type="text" class="form-control" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-ui-keyboard"></i></span>
                                                            <input type="text" class="form-control" placeholder="Keyword">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                            <input type="text" class="form-control" placeholder="Description">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="text-center m-t-20">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="messages7" role="tabpanel">
                                            <div class="md-float-material card-block">
                                                <div class="row p-t-10 p-b-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="libraries\assets\images\product-edit\product-edit1.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row p-t-10 p-b-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="libraries\assets\images\product-edit\product-edit2.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row p-t-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="libraries\assets\images\product-edit\product-edit3.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product edit card end -->
            </div>
        </div>
        <div class="row">

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('libraries\assets\pages\filer\jquery.fileuploads.init.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ mix('js/admin/product/create.js') }}"></script>
@endsection
