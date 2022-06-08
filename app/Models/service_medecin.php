<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_medecin extends Model
{
    use HasFactory;
    protected $table='service_medecin';
    protected $fillable = ['service_id','medecin_id'];
   
}
