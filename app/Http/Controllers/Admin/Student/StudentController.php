<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Student\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository) {
        $this->studentRepository = $studentRepository;
    }
    //
    public function index() {
        
        $students = $this->studentRepository->getStudents();
        return view('admin/students/index', compact('students'));
    }
}
