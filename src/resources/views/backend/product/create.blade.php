@extends('layouts.admin.app')

@section('content')
    <div id="producCreate">
        @include('layouts.admin.product.nav', ['optionNav' => 1])
        <div class="card">
            <div class="">
            </div>
            <div class="slide"></div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Sản phẩm</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Tạo mới sản phẩm</a>
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
                                                Thông tin sản phẩm
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-document-search"></i>
                                                </div>
                                                SEO Metadata
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-ui-image"></i>
                                                </div>
                                                Thuộc tính sản phẩm
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <form action=" {{ route('product.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home7" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="product_name">Tên
                                                                sản phẩm (*)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="product_name"
                                                                    name="name">
                                                                @if ($errors->has('name'))
                                                                    <span class="invalid feedback text-danger" role="alert">
                                                                        <strong>{{ $errors->first('name') }}.</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="code">Mã sản
                                                                phẩm</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="code" class="form-control"
                                                                    name="code" placeholder="Tự động tạo mã">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"
                                                                for="product_category">Danh mục sản phẩm</label>
                                                            <div class="col-sm-10">
                                                                <select name="product_category_id" id="product_category"
                                                                    class="form-control">
                                                                    @foreach ($proCategories as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="unit">Đơn vị
                                                                tính</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="unit"
                                                                    name="product_unit"
                                                                    placeholder="Vd: Cái, Chiếc, Lọ ...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="price_entry">Giá
                                                                nhập</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="price_entry"
                                                                    name="price_entry" placeholder="VNĐ...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="price">Giá
                                                                bán</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="price"
                                                                    name="price" placeholder="VNĐ...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="desc">Mô tả sản
                                                                phẩm</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" id="desc" name="desc"></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Trạng thái</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="status" id="gender-1" value="1">
                                                                        Hoạt
                                                                        động
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="status" id="gender-2" value="0">
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
                                                                            name="image" size="40" class="js-upload"
                                                                            id="productImage"
                                                                            oninput="previewProductImage.src=window.URL.createObjectURL(this.files[0])">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img id="previewProductImage" src="/images/no-image.jpg"
                                                            alt="Preview Image" width="200px" height="200px" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-2 col-form-label" for="summary-ckeditor">Nội
                                                            dung</label>
                                                        <textarea class="form-control" id="summary-ckeditor" name="content"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile7" role="tabpanel">
                                                <div class="md-float-material card-block">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="icofont icofont-all-caps"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="icofont icofont-underline"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Label Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="icofont icofont-ui-keyboard"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Keyword">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i
                                                                        class="icofont icofont-copy-alt"></i></span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages7" role="tabpanel">
                                                <div class="md-float-material card-block">
                                                    <div class="row p-t-10 p-b-10">
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <a href="">
                                                                <img src="libraries\assets\images\product-edit\product-edit1.jpg"
                                                                    class="img-fluid width-100 m-b-20" alt="img-edit">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="icofont icofont-all-caps"></i></span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="col-xs-6 edit-left">
                                                                        <div class="form-radio">
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Largest
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Medium
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Small
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 edit-right text-right">
                                                                        <button type="button"
                                                                            class="btn btn-danger waves-effect waves-light">Remove
                                                                            <i
                                                                                class="icofont icofont-close-circled f-16 m-l-5"></i>
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
                                                                <img src="libraries\assets\images\product-edit\product-edit2.jpg"
                                                                    class="img-fluid width-100 m-b-20" alt="img-edit">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="icofont icofont-all-caps"></i></span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="col-xs-6 edit-left">
                                                                        <div class="form-radio">
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Largest
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Medium
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Small
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 edit-right text-right">
                                                                        <button type="button"
                                                                            class="btn btn-danger waves-effect waves-light">Remove
                                                                            <i
                                                                                class="icofont icofont-close-circled f-16 m-l-5"></i>
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
                                                                <img src="libraries\assets\images\product-edit\product-edit3.jpg"
                                                                    class="img-fluid width-100 m-b-20" alt="img-edit">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="icofont icofont-all-caps"></i></span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="col-xs-6 edit-left">
                                                                        <div class="form-radio">
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Largest
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Medium
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i
                                                                                        class="helper"></i>Small
                                                                                    Image
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 edit-right text-right">
                                                                        <button type="button"
                                                                            class="btn btn-danger waves-effect waves-light">Remove
                                                                            <i
                                                                                class="icofont icofont-close-circled f-16 m-l-5"></i>
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
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-center m-t-20">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light m-r-10">Tạo
                                                        mới</button>
                                                    <button type="button"
                                                        class="btn btn-warning waves-effect waves-light">Discard</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/admin/product/product.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <script src="{{ asset('libraries\assets\pages\filer\jquery.fileuploads.init.js') }}" type="text/javascript"></script>
@endsection
