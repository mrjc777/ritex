<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['business_name', 'direction', 'city', 'state', 
        'phone', 'activity', 'legal_representative', 'email', 'ruex_number', 
        'enrollment_number', 'nit_number', 'mining_sector', 'ritex_type', 'tax', 
        'national_custom', 'enablement_date', 'user_id'];
}
