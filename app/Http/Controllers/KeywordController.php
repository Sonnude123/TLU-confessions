<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    //
    public function getDanhSach(){
        $keyword = Keyword::all();
        return view('admin.keyword.danhsach',['keyword'=>$keyword]);
    }
    public function xoa($idKeyword){
        $keyword = Keyword::find($idKeyword);
        $keyword->delete();
        return redirect('admin/keyword/danhsach')->with('success','đã xóa từ khóa');
    }
    public function getSua($idKeyword){
        $keyword = Keyword::find($idKeyword);
        return view('admin.keyword.sua',['keyword'=>$keyword]);
    }
    public function postSua(Request $request, $idKeyword){
        $keyword = Keyword::find($idKeyword);
        $this->validate($request,[
            'title'=>'required'
        ],[
            'title.required'=>'Bạn chưa nội dung từ khóa'
        ]);
        $keyword->content = $request->title;
        $keyword->updated_at = Carbon::now();

        $keyword->save();
        return redirect('admin/keyword/sua/'.$idKeyword)->with('thongbao','Sửa từ khóa thành công');
    }
    public function getThem(){
        return view('admin.keyword.them');
    }

    public function postThem(Request $request){
        $this->validate($request,[
            'title'=>'required'
        ],[
            'title.required'=>'Bạn chưa nhập nội dung từ khóa'
        ]);
        $keyword = new Keyword();
        $keyword->content = $request->title;
        //$category->created_at = Carbon::now();
        //$category->updated_at = Carbon::now();

        $keyword->save();
        return redirect('admin/keyword/danhsach')->with('thongbao','Thêm từ khóa thành công');
    }
}