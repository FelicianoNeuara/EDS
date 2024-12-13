<?php

namespace App\Models;

use App\Models\CourseCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lersson extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'course_id',
        'title',
        'description',
        'date_start',
        'status'
    ];

    public function CourseCategory ()
    {
        return $this->belongsTo(CourseCategory::class, 'course_id');
    }
}
