<?php 

namespace App\Repositories\Admin\Package;

use App\Repositories\BaseRepository;

class PackageRepository extends BaseRepository implements PackageRepositoryInterface {

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Package::class;
    }

    public function sumSalary()
    {
        $query = $this->_model->sum('salary');  
        return $query;
    }
}