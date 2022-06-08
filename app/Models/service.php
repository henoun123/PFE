<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $fillable = ['nom','date_creation'];


    public function pathelogies()
    {
        return $this->hasMany(patologie::class);
    }

    public function medecins()
    {
        return $this->belongsToMany('App\models\Medecin','service_medecin','service_id','medecin_id');
    }

}
