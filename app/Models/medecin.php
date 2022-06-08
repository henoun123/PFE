<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medecin extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','telephone','date_recritement'];


    
    public function services()
    {
        return $this->belongsToMany('App\models\Service','service_medecin','medecin_id','service_id');
    }


}
