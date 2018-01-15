<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'response';
    protected $primaryKey = 'response_id';
    protected $fillable = [
        'site_id',
        'respondent_id',
        'periode_id',
        'question_id',
        'response_value'
    ];
    public $timestamps = false;
}
