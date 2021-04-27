<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_department extends Model
{
    use HasFactory;

    protected $table = 'training_departments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function exams() {
        return $this->hasMany(Exam::class, 'training_department_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
