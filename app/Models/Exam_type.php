<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam_type extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exam_types';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function exams() {
        return $this->hasMany(Exam::class, 'exam_type_id', 'id');
    }
}
