<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam_result extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exam_results';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function exam() {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
