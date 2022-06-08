<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patologie extends Model
{
    use HasFactory;
    protected $fillable = ['nom','service_id'];

    public function service()
    {
        return $this->belongsTo(service::class);
    }

    public function patiants()
    {
        return $this->belongsToMany('App\models\patient','patiant_patologie','patologie_id','patiant_id');
    }

}
