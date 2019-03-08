<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Trang chủ</title>
</head>
<body>
@include('menu')
<h1 align="center">Danh Sách Tin Tức</h1>
<table border="1" align="center">
	<thead>
		<tr>
		    <th>STT</th>
		    <th>Tên Tin Tức</th>
		    <th>Nội Dung</th>
		    <th>Ngày đăng</th>
		    <th>Thao tác</th>
		</tr>
	</thead>
	<tbody>
		@foreach($blogs as $key => $blog)
		<tr>
		    <td>{{$blog->id}}</td>
		    <td>{{$blog->ten}}</td>
		    <td>{{$blog->noidung}}</td>
		    <td>{{$blog->ngaydang}}</td>
		    <td>
		        <a href="{{route('create')}}">Thêm</a> | <a href="{{route('edit',$blog->id)}}">Sửa</a> | <a href="{{route('delete',$blog->id)}}">Xóa</a>
		    </td>
		</tr>
		@endforeach  
	</tbody>
</table>
</body>
</html>