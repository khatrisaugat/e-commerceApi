<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'tbl_sub_cat';
    protected $primarykey = 'sub_cat_id';
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
