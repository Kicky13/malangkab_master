<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $table = 'dimension';
    protected $primaryKey = 'dimension_id';
    public $timestamps = false;
    protected $fillable = [

    ];

    public function kuesioner()
    {
        return $this->hasMany(Kuesioner::class);
    }
}