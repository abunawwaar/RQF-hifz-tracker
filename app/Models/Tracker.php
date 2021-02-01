<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    protected $fillable = [
       'student_id', 'entry_type', 'from_hisbu', 'from_rubu', 'from_page', 'from_ayah', 'to_hisbu', 'to_rubu', 'to_page', 'to_ayah', 'date'
    ];

    public function student() 
    {
        return $this->belongsTo(Student::class);
    }
}
