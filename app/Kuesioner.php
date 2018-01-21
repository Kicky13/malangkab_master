<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'question_id';

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
