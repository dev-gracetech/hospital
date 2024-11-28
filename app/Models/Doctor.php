<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    // Fillable attributes to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'specialization',
        'bio',
        'gender',
        'dob',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
