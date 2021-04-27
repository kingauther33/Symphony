<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function exam_results() {
        return $this->hasMany(Exam_result::class, 'student_id', 'id');
    }

    public function grade() {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
