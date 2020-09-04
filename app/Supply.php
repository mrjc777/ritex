<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $table = 'supplies';
    protected $fillable = ['input_code', 'description', 'measurement_id', 'tariffheading_id', 'companie_id'];
    protected $timestamp = false;
}
