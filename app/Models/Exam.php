<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exams';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function training_department() {
        return $this->belongsTo(Training_department::class, 'training_department_id', 'id');
    }

    public function exam_type() {
        return $this->belongsTo(Exam_type::class, 'exam_type_id', 'id');
    }

    public function exam_results() {
        return $this->hasMany(Exam_result::class, 'exam_id', 'id');
    }

    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
}
