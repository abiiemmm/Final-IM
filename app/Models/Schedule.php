<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
        protected $fillable = ['schedule_date', 'schedule_title', 'name', 'doctors', 'location', 'gender', 'age'];
        public $timestamps = false;

    // Atau jika Anda menggunakan $guarded:
    // protected $guarded = [];

    // Jika Anda memiliki tanggal yang harus disimpan dalam format tertentu
    protected $dates = ['date'];
}
