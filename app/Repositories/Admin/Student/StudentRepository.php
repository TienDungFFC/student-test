<?php 

namespace App\Repositories\Admin\Student;

use App\Repositories\BaseRepository;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface {

    const LIMIT_PER_PAGE = 10;
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Student::class;
    }

    public function getStudentBiggestSalary()
    {
        $query = $this->_model
            ->select('name', 'salary')
            ->join('packages', 'packages.student_id', '=', 'students.id')
            ->where('salary',  function($q) {
                $q->from('packages')
                    ->selectRaw('max(salary)');
            });
        return $query->get();
    }

    public function getFriendBiggestSalary()
    {
        $query = $this->_model
            ->select('friend_id', 'name', 'salary', 'students.id')
            ->rightJoin('friends', 'students.id', '=', 'friends.student_id')
            ->join('packages', 'friends.friend_id', '=', 'packages.student_id')
            ->where('salary',  function($q) {
                $q->from('packages')
                    ->selectRaw('max(salary)');
            });
        return $query->get();
    }

    public function getStudents($per_page = null)
    {
        $query = $this->_model
            ->with('package');

        if ($per_page === null) {
            $per_page = $this::LIMIT_PER_PAGE;
        }
        return $query->paginate($per_page);
    }
}