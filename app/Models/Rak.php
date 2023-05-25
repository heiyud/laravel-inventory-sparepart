<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $table = "rak";
    protected $fillable=['id','rak_code','rak_name','rak_desc'];
}
