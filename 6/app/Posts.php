<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    //論理削除
    use SoftDeletes;
    
    protected $guarded = array('id');

    public static $rules = array(
        'body' => 'required|max: 255',
    );
}
