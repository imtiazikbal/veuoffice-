<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }
    public function news(){
        return $this->hasMany(News::class);
        
    }
}
