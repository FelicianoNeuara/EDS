<?php

namespace App\Models;

use App\Models\CourseCategory;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable=[									

        'category_id',
        'department_id',
        'professor_id',
        'price',
        'duration',
        'date_start',
        'max_student',
        'description',
        'level',
        'photo'
    ];

    public function CourseCategory ()
    {
        return $this->belongsTo(CourseCategory::class);
    }
    public function Departments()
    {
        return $this->belongsTo(Departments::class);
    }

}
