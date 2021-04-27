<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $guarded = [];

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
