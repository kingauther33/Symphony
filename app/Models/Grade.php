<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function students() {
        return $this->hasMany(Student::class, 'grade_id', 'id');
    }
}
