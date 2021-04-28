<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exams';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

//    public function training_department() {
//        return $this->belongsTo(Training_department::class, 'training_department_id', 'id');
//    }
//
//    public function exam_type() {
//        return $this->belongsTo(Exam_type::class, 'exam_type_id', 'id');
//    }
//
//    public function exam_results() {
//        return $this->hasMany(Exam_result::class, 'exam_id', 'id');
//    }
//
//    public function subject() {
//        return $this->belongsTo(Subject::class, 'subject_id', 'id');
//    }

    public function visitors() {
        return $this->hasMany(Visitor::class, 'exam_id', 'id');
    }

    public function counselor() {
        return $this->belongsTo(Counselor::class, 'counselor_id', 'id');
    }
}
