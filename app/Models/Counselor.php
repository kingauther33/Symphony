<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Counselor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'counselors';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];


    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function exams() {
        return $this->hasMany(Exam::class, 'counselor_id', 'id');
    }
}
