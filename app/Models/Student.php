<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'gender',
        'course',
        'year',
        'nationality',
        'language',
        'blood_group',
        'religion',
        'hobbies',
        'parents_info',
        'emergency_contact',
        'profile_image',
        'is_active',
        'additional_notes',
        'guardian_name',
        'guardian_phone',
        'guardian_address',
        'guardian_relation',
        'scholarship_status',
        'admission_year',
        'graduation_year',
        'previous_education',
        'extracurricular_activities',
        'academic_achievements',
        'transportation_mode',
        'health_issues',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'is_active' => 'boolean',
        'admission_year' => 'date',
        'graduation_year' => 'date',
    ];
}
