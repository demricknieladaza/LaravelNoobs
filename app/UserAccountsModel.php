<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccountsModel extends Model
{
    protected $fillable = ['fullname','company','email','phone','password'];
}
