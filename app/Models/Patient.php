<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    // Fillable attributes to allow mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'dob',
        'address',
        'gender',
    ];
    
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
