<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Student\StudentRepositoryInterface;
use App\Repositories\Admin\Package\PackageRepositoryInterface;

class DashboardController extends Controller
{
    protected $studentRepository;
    protected $packageRepository;

    public function __construct(
        StudentRepositoryInterface $studentRepository,
        PackageRepositoryInterface $packageRepository
    ) {
        $this->studentRepository = $studentRepository;
        $this->packageRepository = $packageRepository;
    }
    //
    public function index() {
        $totalSalary = $this->packageRepository->sumSalary();
        $numbersStudent = $this->studentRepository->count();
        $studentBiggestSalary = $this->studentRepository->getStudentBiggestSalary();
        $friendBiggestSalary = $this->studentRepository->getFriendBiggestSalary();
        return view('admin/dashboard/index', compact('totalSalary', 'numbersStudent', 'studentBiggestSalary', 'friendBiggestSalary'));
    }
}
