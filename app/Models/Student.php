<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'age', 'classroom', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
