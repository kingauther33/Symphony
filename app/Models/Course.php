<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function subjects() {
        return $this->hasMany(Subject::class, 'course_id', 'id');
    }

    public function grades(){
        return $this->hasMany(Grade::class, 'grade_id', 'id');
    }

    public function visitors() {
        return $this->hasMany(Visitor::class, 'course_id', 'id');
    }
}
