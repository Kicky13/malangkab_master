<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $primaryKey = 'site_id';
    public $timestamps = false;
    protected $fillable = [
        'site_name',
        'site_description',
        'site_city',
        'site_province',
        'site_url'
    ];
}
