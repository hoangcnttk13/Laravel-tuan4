<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sửa tin tức</title>
</head>
<body>
@include('menu')
<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12"><h1>Chỉnh sửa Tin Tức</h1></div>
      <div class="col-12">
         <form method="post" action="{{ route('update', $blog->id) }}">
         @csrf
         <div class="form-group">
         <label>Tên Tin Tức</label>
         <input type="text" class="form-control" name="ten" value="{{ $blog->ten }}" required>
         </div>
         <div class="form-group">
            <label>Nội Dung</label>
            <input type="noidung" class="form-control" name="noidung" value="{{ $blog->noidung }}" required></div>
         <div class="form-group">
            <label>Ngày đăng</label>
            <input type="date" class="form-control" name="ngaydang" value="{{ $blog->ngaydang }}" required>
         </div>
         <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
         <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
      </form>
      </div>
     </div>
</div>
</body>
</html>