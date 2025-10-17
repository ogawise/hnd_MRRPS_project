<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'user_type' => ['required', 'in:student,lecturer'],
            'terms' => ['required', 'accepted'],
        ], [
            'name.regex' => 'The name may only contain letters and spaces.',
            'terms.required' => 'You must accept the terms and conditions.',
        ]);
    }

    protected function create(array $data)
    {
        // Create user in users table
        $user = User::create([
            'name' => strip_tags(trim($data['name'])),
            'email' => strtolower(trim($data['email'])),
            'password' => Hash::make($data['password']),
            'user_type' => $data['user_type'],
            'is_active' => true,
        ]);

        // Create record in respective table based on user_type
        if ($data['user_type'] === 'student') {
            Student::create([
                'user_id' => $user->id,
                'student_id' => 'STU' . date('Y') . str_pad(Student::count() + 1, 5, '0', STR_PAD_LEFT),
                'is_active' => true,
            ]);
        } elseif ($data['user_type'] === 'lecturer') {
            Lecturer::create([
                'user_id' => $user->id,
                'staff_id' => 'LEC' . date('Y') . str_pad(Lecturer::count() + 1, 4, '0', STR_PAD_LEFT),
                'is_active' => true,
            ]);
        }

        return $user;
    }

    // Optional: Custom redirect based on user type
    protected function redirectTo()
    {
        if (auth()->check()) {
            $userType = auth()->user()->user_type;
            
            return match($userType) {
                'student' => '/student/dashboard',
                'lecturer' => '/lecturer/dashboard',
                'admin' => '/admin/dashboard',
                default => '/dashboard'
            };
        }
        
        return '/dashboard';
    }
}