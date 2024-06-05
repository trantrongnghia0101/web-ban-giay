<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shop(Request $request)
    {
        $kyw = $request->input('query');
        $category_id = $request->input('category_id');
        $categories = categories::orderBy('id', 'asc')->get();
        $products = null;
    
        if ($request->category_id) {
            $products = products::where("category_id", $request->category_id)->paginate(9);
        } elseif ($request->input('sort') == 'best-selling') {
            $products = products::where('sold', '>', 50)->orderBy("id", "asc")->paginate(9);
        } elseif ($request->input('sort') == 'best-view') {
            $products = products::where('view', '>', 50)->orderBy("id", "asc")->paginate(9);
        } else {
            $products = products::paginate(9);
        }
    
        return view('shop', compact(
            'categories',
            'products',
            'kyw',
            'category_id'
        ));
    }

    public function bestView()
        {
            $products = products::where('view', '>', 50)->orderBy("id", "asc")->paginate(9);
            $categories = categories::orderBy('id', 'asc')->get();

            return view('shop', compact('products', 'categories'));
        }

    public function bestSelling(Request $request){
        $categories = categories::orderBy('id','asc')->get();
        $category_id = $request->input('category_id');
        
        $products = products::where('sold', '>', 50)->orderBy("id", "asc")->paginate(9);
        
        return view('shop', compact(
            'categories',
            'products',
            'category_id'
        ));
    }

    public function search(Request $request){
    $categories = categories::orderBy('name','asc')->get();
    $category_id= $request->input('category_id');
    $kyw=$request->input('query');
    $products = products::where('name', 'LIKE', "%$kyw%")->orWhere('description','LIKE', "%$kyw%")->orderBy('id', 'DESC')->paginate(9);
    
    return view('shop', compact(
        'categories',
        'products',
        'kyw',
        'category_id'
    ));
    }

    
    
    
    }
