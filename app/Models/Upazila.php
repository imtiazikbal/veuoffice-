<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function district(){
        return $this->belongsTo(District::class);       
     } 
}
