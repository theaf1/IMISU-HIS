<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['name', 'patient_id'];

    public function patient()
{
   return $this-> belongsTo(patient::class);
}};