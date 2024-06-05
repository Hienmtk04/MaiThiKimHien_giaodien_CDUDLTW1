@extends('layouts.admin')
@section('title', 'Quản lý chủ đề')
@section('maincontent')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12 d-flex justify-content-between align-items-center mb-4" style="margin-bottom: 20px;">
                <div>
                    <h1>Danh sách chủ đề</h1>
                </div>
                <div class="ml-auto">
                    {{-- <a href=""><button type="button" class="btn btn-secondary ml-1 mb-4">
                            <CgAdd /> Thêm sản phẩm
                        </button></a> --}}
                    <a href=""><button type="button" class="btn btn-danger ml-1 mb-4">
                            <CgAdd /> Thùng rác
                        </button></a>
                </div>
            </div>
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 50px">ID</th>
                        <th>Tên chủ đề</th>
                        <th>Slug</th>
                        <th>Mô tả</th>
                        <th style="width: 250px">Hành động</th>
                    </tr>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href=""><button type="button" class="btn btn-success ml-2"><i
                                            class="fa fa-fw fa-edit"></i></i></button></a>
                                <a href=""><button type="button" class="btn btn-danger ml-2"><i
                                            class="fa fa-fw fa-trash"></i></button></a>
                                <a href=""><button type="button" class="btn btn-warning ml-2"><i
                                            class="fa fa-fw fa-eye"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
