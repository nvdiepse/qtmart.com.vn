@extends('layouts.admin.app')

@section('content')
    <div id="producCreate">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Danh mục menu</a>
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
                        <h5>Tạo mới</h5>
                    </div>
                    <div class="card-block">
                        <form action="{{ route('menu.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tên menu (*)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mn_name" placeholder="Tên menu">
                                            @include('layouts.admin.error', ['name' => 'mn.name'])
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Danh mục cha</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="parent_id">
                                                <option value="" readonly="true" hidden="true" selected>Chọn danh mục cha
                                                </option>
                                                @if ($menus)
                                                    @foreach ($menus as $menu)
                                                        <option value="{{ $menu->id }}"> {{ $menu->mn_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="mn_status"
                                                        id="gender-1" value="1">
                                                    Hoạt
                                                    động
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="mn_status"
                                                        id="gender-2" value="0">
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
                                    <button type="submit" class="btn btn-primary m-b-0">Tạo mới</button>
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
