<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'is_active',
        'department',
        'phone',
        'date_of_birth',
        'address',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'date_of_birth' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Generate student ID if not provided
    public static function generateStudentId()
    {
        $count = self::count() + 1;
        return 'STU' . date('Y') . str_pad($count, 5, '0', STR_PAD_LEFT);
    }
}