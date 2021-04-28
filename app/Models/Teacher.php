<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function grades() {
        return $this->hasMany(Grade::class, 'teacher_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
