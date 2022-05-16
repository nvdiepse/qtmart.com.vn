<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    const STATUS = [
        "ACTIVE" => 1,
        "DISABLE" => 2,
    ];
    // use SoftDeletes;
    protected $table = 'mod_brand';
    public $timestamps = true;
    // protected $fillable = ['name', 'code', 'status'];
}
