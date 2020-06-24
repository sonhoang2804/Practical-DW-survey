<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    public $fillable = [
        "name",
        "email",
        "phone",
        "feedback",
    ];
}
