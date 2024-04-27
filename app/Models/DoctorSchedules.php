<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedules extends Model
{
    use HasFactory;
    
    protected $fillable = ['doctor_id', 'hospital', 'time'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    protected $table = 'doctorschedules';
}
