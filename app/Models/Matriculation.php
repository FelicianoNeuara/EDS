<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculation extends Model
{
    use HasFactory;
		
    protected $table='matriculations';
    protected $fillable=[
        'Student_id',
        'course_id',
        'payment_type',
        'status' 
    ];
    public function Student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }
    public function CourseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'course_id');
    }

}
