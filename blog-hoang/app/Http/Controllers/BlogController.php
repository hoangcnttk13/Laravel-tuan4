<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $blogss = new Blog();
      $blogss->ten = $request->input('ten');
      $blogss->noidung = $request->input('noidung');
      $blogss->ngaydang = $request->input('ngaydang');
      $blogss->save();

      //dung session de dua ra thong bao
      // Session::flash('success', 'Tạo mới tin tức thành công');
      //tao moi xong quay ve trang danh sach khach hang
      return redirect()->route('index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $blog = Blog::findOrFail($id);
        return view('edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
      $blogssss = Blog::findOrFail($id);
      $blogssss->ten     = $request->input('ten');
      $blogssss->noidung    = $request->input('noidung');
      $blogssss->ngaydang      = $request->input('ngaydang');
      $blogssss->save();
      

      //dung session de dua ra thong bao
      // Session::flash('success', 'Cập nhật khách hàng thành công');
      //cap nhat xong quay ve trang danh sach khach hang
      return redirect()->route('index');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
      $blogsss = Blog::findOrFail($id);
      $blogsss->delete();

      //dung session de dua ra thong bao
      // Session::flash('success', 'Xóa khách hàng thành công');

      //xoa xong quay ve trang danh sach khach hang
      return redirect()->route('index');
  }
}
