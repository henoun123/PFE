<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patiant_patologie extends Model
{
    use HasFactory;
    protected $table='patiant_patologies';
    protected $fillable = ['patologie_id','patiant_id'];
   
}
