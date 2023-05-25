<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $primaryKey = 'tipe_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = "tipe";
    protected $fillable=['tipe_code','tipe_name','tipe_fitur','tipe_cc','th_rilis'];
}
