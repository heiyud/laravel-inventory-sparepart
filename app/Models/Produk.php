<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $primaryKey = 'part_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = "produk";
    protected $fillable=['part_code','part_name','tipe_code','kategori','berat','warna','rak_code','part_img','harga','stok'];
}
