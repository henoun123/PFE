<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examen extends Model
{
    use HasFactory;
    protected $fillable = ['nom','patient_id'];

    public function patient()
    {
        return $this->belongsTo(patient::class);
    }
}
