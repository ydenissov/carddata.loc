<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Logger extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table = 'logger';

    protected $fillable = [
        'req_time',
        'ip_addr',
        'method',
        'duration',
        'input',
        'output',
        'url',
    ];

    protected $hidden = [
        'req_time',
        'ip_addr',
        'method',
        'duration',
        'input',
        'output',
        'url',
    ];

}
