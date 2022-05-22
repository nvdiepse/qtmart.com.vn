@extends('layouts.admin.app')

@section('content')
    <div id="producUpdate">
        @include('layouts.admin.product.nav', ['optionNav' => 2])

        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Danh sách menu</a>
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
                        <h5>Cập nhập menu</h5>
                    </div>
                    <div class="card-block">
                        <form action="{{ route('menu.update', $menu->id) }}" method="post">
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
                                        <label class="col-sm-2 col-form-label">Tên menu (*)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="Tên menu"
                                                value="{{ $menu->mn_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Menu cha</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="mn_parent_id">
                                                {{-- <option value="" readonly="true" hidden="true" selected>Chọn danh mục cha
                                                </option> --}}
                                                @foreach ($menus as $item)
                                                    <option
                                                        value="{{ $item->mn_parent_id }} {{ $menu->id === $item->mn_parent_id ? 'selected' : '' }}">
                                                        {{ $item->mn_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="mn_status"
                                                        id="gender-1" value="1"
                                                        {{ $menu->mn_status === 1 ? 'checked' : '' }}>
                                                    Hoạt
                                                    động
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="mn_status"
                                                        id="gender-2" value="0"
                                                        {{ $menu->mn_status === 0 ? 'checked' : '' }}>
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
