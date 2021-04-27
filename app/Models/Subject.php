<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function exams() {
        return $this->hasMany(Exam::class, 'subject_id', 'id');
    }

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
