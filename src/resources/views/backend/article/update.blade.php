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
                        <li class="breadcrumb-item">
                            <a href="#!">blog</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Tạo mới blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <!-- blog edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Tạo mới blog</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="blog-edit">
                                    <ul class="nav nav-tabs nav-justified md-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-edit"></i>
                                                </div>
                                                Thông tin blog
                                            </a>
                                            <div class="slide w-100"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <form action=" {{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home7" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="name">Tên
                                                                blog (*)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="name"
                                                                    name="pa_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"
                                                                for="blog_category">Menu</label>
                                                            <div class="col-sm-10">
                                                                <select name="pa_menu_id" id="blog_category"
                                                                    class="form-control">
                                                                    @foreach ($menus as $menu)
                                                                        <option value="{{ $menu->id }}">
                                                                            {{ $menu->mn_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" for="desc">Mô tả </label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" id="desc" name="pa_desc"></textarea>
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
                                                                            name="pa_status" id="gender-1" value="1">
                                                                        Hoạt
                                                                        động
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="pa_status" id="gender-2" value="0">
                                                                        Không
                                                                        hoạt động
                                                                    </label>
                                                                </div>
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Ảnh blog</label>
                                                            <div class="col-sm-10">
                                                                <div style="position:relative;">
                                                                    <a class="btn btn-primary" href="#">
                                                                        Chọn ảnh
                                                                        <input type="file"
                                                                            style="position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:&quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity:0;background-color:transparent;color:transparent;"
                                                                            name="pa_image" size="40" class="js-upload"
                                                                            id="blogImage"
                                                                            oninput="previewblogImage.src=window.URL.createObjectURL(this.files[0])">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img id="previewblogImage" src="/images/no-image.jpg"
                                                            alt="Preview Image" width="200px" height="200px" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label class="col-sm-2 col-form-label" for="summary-ckeditor">Nội
                                                            dung </label>
                                                        <textarea class="form-control" id="summary-ckeditor" name="pa_content"></textarea>
                                                    </div>
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
                <!-- blog edit card end -->
            </div>
        </div>
        <div class="row">

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/admin/blog/blog.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    <script src="{{ asset('libraries\assets\pages\filer\jquery.fileuploads.init.js') }}" type="text/javascript"></script>
@endsection
