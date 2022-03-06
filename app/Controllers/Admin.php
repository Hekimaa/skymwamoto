<?php

namespace App\Controllers;
use App\Models\UserskyModel;

Class Admin extends BaseController{

    public function index(){
  
        return view('admin');

    }
    
    public function save(){
          //   echo "string";
        helper(['form']);
          $data = [];
      if($this->request->getMethod() =='post'){
            // echo "string";
        //  lets do validation here
         $rules = [
          
          'email' =>'required|min_length[6]|max_length[50]|valid_email',
          'password' =>'required|min_length[1]|max_length[255]|validateUser[email,password]',
          
         ];
         $errors = [
          'password' =>[
            'validateUser' => 'Wrong Email or Password'
          ]
         ];
         if(!$this->validate($rules,$errors)){

          $data['validation'] = $this->validator;
        
         }
         else{

          //store the user in the database
          $model = new UserskyModel();
          $user = $model->where('email',$this->request->getVar('email'))
                                             ->first();
                                           
            $this->setUserSession($user);
                
            return redirect()->to(base_url().'/UsersController/dashboard/');
         }
      }
           
           echo view('login',$data);
    }
    	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],  
			'email' => $user['email'],
			'isLoggedIn' => true,
		];
		session()->set($data);
		return true;

	}
    
}


?>