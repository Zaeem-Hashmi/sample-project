<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index(){
        $users = $this->categoryRepository->all();
        return($users);
    }
    public function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
   public function data()
   {
      $user = User::all();
      return $user; 
   }
}
