<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'head_dept',
        'starting_date',
    ];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}

