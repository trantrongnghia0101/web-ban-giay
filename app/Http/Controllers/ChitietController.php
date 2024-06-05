<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;
use Illuminate\Http\Request;

class ChitietController extends Controller
{
    public function chitiet($id)
    {
        $product = products::findOrFail($id);
        $relatedProducts = products::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();
    
        return view('chitiet', compact('product', 'relatedProducts'));
    }
       
}
