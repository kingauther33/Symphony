<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_type extends Model
{
    use HasFactory;

    protected $table = 'exam_types';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function exams() {
        return $this->hasMany(Exam::class, 'exam_type_id', 'id');
    }
}
