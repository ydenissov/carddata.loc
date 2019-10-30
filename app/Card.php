<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Card extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'first_name',
        'last_name',
        'second_name',
        'gos_number',
        'vin',
        'kuzov',
        'shassi',
        'marka',
        'model',
        'massa',
        'max_massa',
        'category_okp',
        'category_pts',
        'fuel',
        'bracking_system',
        'tyres',
        'reg_doc_type',
        'reg_doc_seria',
        'reg_doc_number',
        'reg_doc_date',
        'reg_doc_organ',
        'primech',
        'metki',
        'taxi',
        'uchebka',
        'year',
        'probeg',
        'who_create',
        'who_update',
        'ip_addr',
    ];

    protected $hidden = [
        'created_at',
        'who_create',
        'updated_at',
        'who_update',
        'ip_addr',
    ];

}
