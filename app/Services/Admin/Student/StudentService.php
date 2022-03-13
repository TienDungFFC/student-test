<?php

namespace App\Services\Admin\Student;
use App\Repositories\Admin\Student\StudentRepositoryInterface;

class StudentService implements StudentServiceInterface
{
    private $studentRepo;

    public function __construct(StudentRepositoryInterface $studentRepo)
    {
        $this->studentRepo = $studentRepo;
    }
    
}