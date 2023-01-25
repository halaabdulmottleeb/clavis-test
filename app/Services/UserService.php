<?php

namespace App\Services;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService {

    public $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login($data){

        $user = $this->userRepository->findOneBy(["email" =>  $data["email"]]);
        
        if($user){

            if(Hash::check($data['password'], $user->password)){
                return response()->json(["message" => "success", "data" => [
                    'user_name' => $user->user_name,
                    'email'     => $user->email,
                    'token'     => $user->createToken('login_token')->accessToken 
                ] ], 200);
            }

        }
        

        return response()->json(["message" => "Wrong Email Or Password"], 301);
    }
    

    public function register($data){
        $data['password'] = Hash::make($data['password']);

        return $this->userRepository->create($data);
    }

}