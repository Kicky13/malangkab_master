<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'administrator';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_level',
        'admin_name',
        'register_number',
        'position_id',
        'password',
        'admin_address'
    ];
    public $timestamps = false;
}
