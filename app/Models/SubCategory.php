<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    function category() {
        // sub تابع ل category
     return $this->belongsTo(Category::class) ;
    }
}
