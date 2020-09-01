<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $table = 'measurements';
    protected $fillable = ['unit_measurement', 'description'];
    protected $timestamp = false;
}
