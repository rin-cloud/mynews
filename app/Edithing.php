<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edithing extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
