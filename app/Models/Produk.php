<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;

class Produk extends Model
{
    use HasFactory;

    // protected $fillable = ['tile', 'body', 'harga'];
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
