<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $primaryKey = 'respondent_id';
    protected $fillable = [
        'respondent_label',
        'respondent_name',
        'respondent_age',
        'respondent_address'
    ];
    public $timestamps = false;
}
