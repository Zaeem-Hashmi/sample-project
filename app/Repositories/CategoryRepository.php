<?php
namespace App\Repositories;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\User;

class CategoryRepository implements CategoryRepositoryInterface { 
    public function all(){
        return User::get('name');
    }

}