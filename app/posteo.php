<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posteo extends Model
{
    protected $fillable = ['post', 'fecha', 'user_id', 'user_id2'];
}
