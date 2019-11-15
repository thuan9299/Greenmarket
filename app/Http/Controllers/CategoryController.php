<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
        public function categoryList(Request $request){
        // 1. Lấy keyword từ đường dẫn
        $kw = $request->keyword; 
        // 2. thực hiện câu lệnh select * from posts where title like %keyword%
        if(!$request->has('keyword') || empty($kw)){
            $cate = Category::paginate(5); 
        }else{
            $cate = Category::where('cate_name', 'like', "%$kw%")
                                ->paginate(5);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $cate->withPath("?keyword=$kw");
        }
        
        return view('category.list-cate', [
                'dsDanhMuc' => $cate
        ]);
    }

    public function remove($id){
        //Bắt đầu transaction bằng các câu lệnh SQL trên CSDL
        DB::beginTransaction();
        try{
            $model = Category::find($id);
            if($model){
                $model->delete();
                DB::commit();
            }
        }
        catch(Exception $ex){
            DB::rollback();
        }
        
        return redirect(route('category'));
    }

        public function editForm($id){
        $model = Category::find($id);
        if (!$model) {
            return redirect()->route('category');
         }
         $cates = Category::all();
         return view('category.edit-cate', compact('model','cates'));
    }
    public function saveEdit(Request $request) {
         $model = Category::find($request->id);
        $model->fill($request->all());
        $model->save();
        return redirect(route('category'));
    }
}