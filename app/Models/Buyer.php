<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductUom;

class Buyer extends Model
{
    use HasFactory;
    protected $table = 'buyer';
    protected $guarded = [];  
    
}
