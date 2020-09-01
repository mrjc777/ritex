<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariffheading extends Model
{
    protected $table = 'Tariffheadings';
    protected $fillable = ['tariff_heading', 'description'];
    protected $timestamp = false;
}
