<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'mod_menu';
    protected $guarded = [''];
}
