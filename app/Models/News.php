<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    } 
     public function upazila(){
        return $this->belongsTo(Upazila::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function featured(){
        return $this->belongsTo(Featured::class);
    }

}
