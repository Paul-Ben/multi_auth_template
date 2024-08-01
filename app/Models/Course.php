<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'courseTitle',
        'courseDescription',
        'courseCode',
        'courseLevel',
        'courseCategory',
        'courseCreditUnit',
        'department_id',
        'courseLecturer',
        'coursePrerequisites',
        'semester'

    ];

    public function deparmtnt()
    {
        return $this->belongsTo(Department::class);
    }
}
