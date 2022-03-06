<?php

namespace App\validation;
use App\Models\UserskyModel;

class UserRules{
	public function validateUser(string $str,string $fields,array $data){

		   $model = new UserskyModel();
		   $user = $model->where('email',$data['email'])
		                 ->first();
		                 
		   
		   

		    if(!$user)
		    return false;

		    return password_verify($data['password'], $user['password']);             
	}
}