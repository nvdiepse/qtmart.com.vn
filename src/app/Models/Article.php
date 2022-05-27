<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'mod_product_articles';
    protected $guarded = [''];
}
