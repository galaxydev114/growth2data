<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass asignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'telephone',
        'company',
        'description',
        'interest',
        'dashboards_amt',
        'data_sources_amt',
        'data_engineering_help',
        'dashboard_type',
        'app_service_type',
    ];
}
