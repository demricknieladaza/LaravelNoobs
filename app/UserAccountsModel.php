<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class UserAccountsModel extends Model
{
    protected $table = 'user_accounts_models';
    protected $fillable = ['fullname','company','email','phone','password'];

    public function projects(){
        return $this->hasMany('App\ProjectInformations');
    }
}
