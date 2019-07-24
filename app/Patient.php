<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['first_Name', 'last_Name', 'DOB', 'division_id'];
public function division()
    {
       return $this->belongsTo(division::class);
    }
public function treatments()
{
    return $this->hasMany(treatment::class);
}
};
