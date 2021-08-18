<?php

namespace App\Repository\Eloquent;

use App\Repository\CandidateRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CandidateRepository extends AbstractBaseRepository implements CandidateRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }


}
