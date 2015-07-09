<?php

namespace GoodWork\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserPermission extends Eloquent
{
    protected $table = 'user_permissions';

    protected $fillable = [
      'is_admin',
    ];

    public static $defaults = [
      'is-admin' => false
    ];
}
