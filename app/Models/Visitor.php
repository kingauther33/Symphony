<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $table = 'visitors';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
