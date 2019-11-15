<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Member;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function productList(Request $request){
        // 1. Lấy keyword từ đường dẫn
        $kw = $request->keyword; 
        // 2. thực hiện câu lệnh select * from posts where title like %keyword%
        if(!$request->has('keyword') || empty($kw)){
            $products = Product::paginate(10); 
        }else{
            $products = Product::where('pro_name', 'like', "%$kw%")
            ->paginate(5);
            // thêm tham số đường dẫn keyword khi người dùng
            // có tìm kiếm để tránh lỗi phân trang
            $products->withPath("?keyword=$kw");
        }
        return view('tindang.list-product', [
            'dsSanPham' => $products
        ]);
    }

    public function addForm(){
        $cates = Category::all();
        $member = Member::all();
        return view('tindang.add-product', compact('cates', 'member'));
    }
    public function saveAdd(Request $request){
        $model = new Product(); 
        $model->fill($request->all());
        // $model->name = $_POST['name'];
        // $model->slug = $_POST['slug'];
        //hasFile ktra sự tồn tại
        if ($request->hasFile('pro_image')) {
            $filename = $request->pro_image->getClientOriginalName();
            // thay the ky tu khoang trang bang '-'
            $filename = str_replace('','-', $filename);
            $filename = uniqid() . '-' . $filename;
            //storeAS tự động gán cho tệp lưu trữ ảnh 
            $path = $request->file('pro_image')->storeAS('product', $filename);
            // quy định đường dẫn lưu ảnh theo $path
            $model->pro_image = "images/$path";
        }
        $model->save();
        return redirect()->route('product');
    }

    public function remove($id){
        //Bắt đầu transaction bằng các câu lệnh SQL trên CSDL
        DB::beginTransaction();
        try{
            $model = Product::find($id);
            if($model){
                $model->delete();
                DB::commit();
            }
        }
        catch(Exception $ex){
            DB::rollback();
        }
        
        return redirect(route('product'));
    }

    public function editForm($id){
        $model = Product::find($id);
        if (!$model) {
            return redirect()->route('product');
        }
        $cates = Category::all();
        $member = Member::all();
        return view('tindang.edit-product', compact('model','cates','member'));
        
    }

    public function saveEdit(Request $request) {
       $model = Product::find($request->id);
         //hasFile('pro_images')) ktra xem pro_images có tồn tại hay k
       if ($request->hasFile('pro_image')) {
        $path = $request->file('pro_image')->storeAS('product', str_replace(' ','-',uniqid().'-'.$request->pro_image->getClientOriginalName()));
        $model->pro_image = 'images/'.$path;
    };
    if ($request->hasFile('pro_image_thumb')) {
        $path = $request->file('pro_image_thumb')->storeAS('product_thumb', str_replace(' ','-',uniqid().'-'.$request->pro_image_thumb->getClientOriginalName()));
        $model->pro_image_thumb = 'images/'.$path;
    }
    $model->fill($request->all());
    $model->save();
    return redirect(route('product'));  
}

public function deleteAll(Request $request)
{
    $del = $request->input('del');

    Product::WhereIn('id', $del)->delete();

    return redirect(route('product'));  
}
}