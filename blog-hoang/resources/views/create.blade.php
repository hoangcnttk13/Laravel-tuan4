<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm tin tức</title>
</head>
<body>
	@include('menu')

<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12">
          <h1>Thêm mới tin tức</h1>
      </div>
      <div class="col-12">
         <form method="post" action="{{ route('store') }}">
         @csrf
         <div class="form-group">
            <label>Tên Tin Tức</label>
            <input type="text" class="form-control" name="ten"  placeholder="thêm tin tức" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Nội dung</label>
             <input type="noidung" class="form-control" name="noidung" placeholder="thêm nội dung" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Ngày đăng</label>
            <input type="date" class="form-control" name="ngaydang" required>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
     </div>
   </div>
   
</body>
</html>