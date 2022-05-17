<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'mod_product_category';

    const STATUS_ACTIVE = 1;
    const STATUS_HIDE = 0;
}
