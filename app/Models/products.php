<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','category_id','img'];

    public function products ($query, $limit){
        return $query->orderBy('id','desc')->limit($limit)->with(['category']);
    }
    public function category (){
        return $this->belongsTo(categories::class);
    }

    
}
