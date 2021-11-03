<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[ 
    'order_number','order_date','shoes_code','price','quantity','total'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
