<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'visitors';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function exam() {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }
}
