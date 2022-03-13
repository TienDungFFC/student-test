<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Auth\StudentRegisterRequest;
use App\Repositories\Admin\Student\StudentRepositoryInterface;
use App\Repositories\Admin\Package\PackageRepositoryInterface;
use Hash; 
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    private $studentRepo;
    private $packageRepo;

    public function __construct(
        StudentRepositoryInterface $studentRepo,
        PackageRepositoryInterface $packageRepo
    ) {
        $this->studentRepo = $studentRepo;
        $this->packageRepo = $packageRepo;
    }
    //
    public function index()
    {
        return view('auth/register');
    }

    public function register(StudentRegisterRequest $request)
    {
        $params = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        $student = $this->studentRepo->create($params);

        
        $this->packageRepo->create([
            'student_id' => $student->id,
            'salary' => 5000000,
        ]);

        Auth::guard('student')->login($student);

        return redirect()->intended('admin/dashboard');
    }
}
