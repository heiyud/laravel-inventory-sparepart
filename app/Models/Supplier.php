<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey = 'supp_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = "supplier";
    protected $fillable=['supp_code','supp_name','supp_address','supp_phone','supp_person'];
}

