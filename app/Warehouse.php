<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';
    protected $fillable = ['direction', 'kind', 'companie_id'];
    protected $timestamp = false;
}
