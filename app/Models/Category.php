<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // اسماء الاعمدة اللي م بدي اضيف او اعدل عليها هنا اراي فاضية يعني ولا وحدة 
    protected $guarded = [] ;
    function sub_category() {
        // 1 category to many sub,  relation
       return $this->hasMany(SubCategory::class);
    }
}
