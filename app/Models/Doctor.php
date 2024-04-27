<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender'];

    public function doctors()
    {
        return $this->hasMany(DoctorSchedules::class, 'doctor_id');
    }
}
