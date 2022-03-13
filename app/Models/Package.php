<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'salary'
    ];

    public function getSalaryAttribute($value)
    {
        return number_format($value, 3);
    }
}
