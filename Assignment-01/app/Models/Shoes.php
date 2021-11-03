<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shoes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'image','name','brand_name','code','color','size','price'
    ];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
