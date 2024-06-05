<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function productlist(){
        $categories=categories::orderBy('name', 'ASC')->get();
        $products=products::orderBy('id', 'DESC')->paginate(20);
        return view('admin.productlist',compact('categories', 'products'));
    }



  
    public function productadd(Request $request)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
                'img' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('img')) {
                $imageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('uploaded'), $imageName);
                $validatedData['img'] = $imageName;
            }

            $product = new products($validatedData);
            $product->save();
            
            return redirect()->route('productlist');
        }


    public function productdelete($id){
        $product=products::find($id);

        $imgpath="uploaded/".$product->img;
        if(file_exists($imgpath)){
            unlink($imgpath);
        }
        $product->delete();
        return redirect()->route('productlist');
    }

    public function productupdateform($id){
        $categories=categories::orderBy('name', 'ASC')->get();
        $products=products::orderBy('id', 'DESC')->paginate(20);
        $product=products::find($id);
        return view('admin.productupdateform',compact('categories', 'products','product'));
    }

    public function productupdate(Request $request){
        $validatedData = $request->validate([
            'name' =>'required|string|max:255',
            'price' =>'required|numeric',
            'category_id' =>'required|integer|exists:categories,id',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'decription' =>'nullable|string',
            'quantity' => 'nullable|numeric',
        ]);

        $id=$request->id;
        $product=products::findOrFail($id);

        if($request->hasFile('img')){
            $imageName = time().'.'.$request->img->extension();  
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;
            // kiểm tra hình củ và xóa
            $oldImagePath = public_path('uploaded/'.$product->img);
            if(file_exists($oldImagePath)){
                unlink($oldImagePath);
            }
        }
       
        $product->update($validatedData);

        return redirect()->route('productlist');
    }
    
    public function categories()
    {
        $categories = categories::all();
        return view('admin.categories', compact('categories'));
    }
    
    public function editCategory($id)
    {
        $category = categories::find($id);
        $selectedCategoryName = $category->name;
        $categories = categories::all();
        return view('admin.categories', compact('selectedCategoryName', 'categories'));
    }

public function updateCategory(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category = categories::find($id);
    $category->name = $validatedData['name'];
    $category->save();

    return redirect()->route('categories')->with('success', 'Danh mục đã được cập nhật thành công.');
}
    
    public function deleteCategory($id)
    {
        $category = categories::find($id);
        $category->delete();
    
        return redirect()->route('categories')->with('success', 'Danh mục đã được xóa thành công.');
    }

public function users()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

public function deleteUser($id)
{
    $user = User::find($id);
    $user->delete();

    return redirect()->route('users')->with('success', 'Người dùng đã được xóa thành công.');
}
}
