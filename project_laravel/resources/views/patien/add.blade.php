@extends('admin.master')
@section('content')
<h1>Thêm bệnh nhân</h1>
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error')
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Tên bệnh nhân</label>
            <input class="form-control" name="txtten" placeholder="Họ tên bệnh nhân" value="{!! old('txtUser') !!}"/>
        </div>
        <div class="form-group">
            <label>Địa chỉ:</label>
            <input type="text" class="form-control" name="txtdiachi" placeholder="Nhập địa chỉ" />
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" name="txtsdt" placeholder="Số điện thoại" />
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="text" class="form-control" name="txtngaysinh" placeholder="Ngày sinh" />
        </div>
        <div class="form-group">
            <label>Loại bệnh</label>
            <input type="text" class="form-control" name="txtloaibenh" placeholder="Tên bệnh" />
        </div>
        <div class="form-group">
            <label>Phòng</label>
            <input type="text" class="form-control" name="txtphong" placeholder="Bệnh nhân nằm tại phòng" value="{!! old('txtEmail') !!}"/>
        </div>
        
        <button type="submit" class="btn btn-default">Thêm</button>
        <button type="reset" class="btn btn-default">Xóa trắng</button>
        <form>
        </div>
        @endsection()
