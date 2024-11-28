<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional, if different from default)
    protected $table = 'appointments';

    // Fillable attributes (you can only mass-assign these fields)
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'status',
        'notes',
    ];

    /**
     * Relationship with the Patient model.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Relationship with the Doctor model.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
