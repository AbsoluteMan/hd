<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class admin extends User
{
    protected $rememberTokenName = '';
}
