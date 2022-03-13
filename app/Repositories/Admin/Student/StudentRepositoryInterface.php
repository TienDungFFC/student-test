<?php
namespace App\Repositories\Admin\Student;

interface StudentRepositoryInterface
{
    /**
     * Lấy sinh viên có lương cao nhất
     * @return mixed
     */
    public function getStudentBiggestSalary();

    /**
     * Lấy sinh viên có bạn thân lương cao nhất
     * @return mixed
     */
    public function getFriendBiggestSalary();

     /**
     * Lấy danh sách sinh viên
     * @param int $per_page
     * @return mixed
     */
    public function getStudents($per_page = null);
}