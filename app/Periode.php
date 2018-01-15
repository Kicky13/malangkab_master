<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Periode extends Model
{
    protected $table = 'periode';
    protected $primaryKey = 'periode_id';
    public $timestamps = 'false';
    protected $fillable = [
        'periode_month',
        'periode_years'
    ];

    public function nowPeriode()
    {
        $date = new Carbon(now());
        if ($date->month < 7){
            $month = 'JAN - JUN';
        } else {
            $month = 'JUL - DES';
        }
        $id = Periode::where([
            ['periode_month', $month],
            ['periode_years', $date->year]
        ])->first();
        return $id->periode_id;
    }
}
