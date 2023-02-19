<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Price extends Model
{
    use HasFactory;

    protected $table = 'book__price';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_id',
        'name',
        'price',
    ];
}
