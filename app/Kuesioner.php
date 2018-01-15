<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'question_id';
}
