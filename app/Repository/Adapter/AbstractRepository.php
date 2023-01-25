<?php

namespace App\Repository\Adapter;

use Mockery\Expectation;

class AbstractRepository  {

    public $model;

    public function create($data)
    {
        try{
            return $this->model->query()->create($data);
        } catch (Expectation $e){
            abort(500, $e->getExceptionMessage());
        }
    }

    public function findOneBy($filters = [], $with = [])
    {
        try {
           return $this->model->query()->where($filters)->with($with)->first();
        } catch(Expectation $e) {

            abort(500, $e->getExceptionMessage());
        }
    }

    public function updateWhere($col, $value, $data =[])
    {
        try {
            $this->model->where($col, $value)->update($data);
        } catch(Expectation $e) {

            abort(500, $e->getExceptionMessage());
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->destroy($id);
        } catch(Expectation $e) {

            abort(500, $e->getExceptionMessage());
        }
    }
}