<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'name', 'contact', 'join'
    ];

    public function trackers() 
    {
        return $this->hasMany(Tracker::class);
    }
}
