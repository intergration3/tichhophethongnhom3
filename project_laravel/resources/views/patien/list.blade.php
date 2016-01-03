@extends('admin.master')
@section('content')
<h1>Danh sách bệnh nhân</h1>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ngày sinh</th>
            <th>Tên bệnh</th>
            <th>Phòng</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt=0 ?>
        @foreach($user as $item_user)
        <?php $stt=$stt+1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item_user["ten"] !!}</td>
            <td>{!! $item_user["diachi"] !!}</td>
            <td>{!! $item_user["sdt"] !!}</td>
            <td>{!! $item_user["ngaysinh"] !!}</td>
            <td>{!! $item_user["tenbenh"] !!}</td>
            <td>{!! $item_user["phong"] !!}</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.user.getDelete',$item_user['id']) !!}"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.user.getEdit',$item_user['id']) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()
