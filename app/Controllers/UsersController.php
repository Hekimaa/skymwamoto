<?php
namespace App\Controllers;
use App\Models\UserskyModel;

Class UsersController extends BaseController
{

   public function index(){

   	 $UserskyModel = new UserskyModel();
     $data['users'] = $UserskyModel->findAll();

    return view('users',$data);
   }

   public function dashboard(){

      return view('dashboard');
   }

    public function register(){
        helper(['form', 'url']);
           $firstname_error = '';
           $lastname_error = '';
           $email_error = '';
           $password_error = '';
           $password_confirm_error = '';
            $error = 'no';
            $success = 'no';
            $message = '';
            $members_exceed = '';
            $successs = '';

            $error = $this->validate([
          'firstname' =>'required|min_length[3]|max_length[20]',
          'lastname' =>'required|min_length[3]|max_length[20]',
          'email' =>'required|min_length[6]|max_length[50]|valid_email|is_unique[users_tbl.email]',
          'password' =>'required|min_length[6]|max_length[255]',
          'password_confirm' =>'matches[password]',
          ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('firstname'))
                {
                    $firstname_error = $validation->getError('firstname');
                }

                if($validation->getError('lastname'))
                {
                    $lastname_error = $validation->getError('lastname');
                }

                if($validation->getError('email'))
                {
                    $email_error = $validation->getError('email');
                }

                if($validation->getError('password'))
                {
                    $password_error = $validation->getError('password');
                }

                if($validation->getError('password_confirm'))
                {
                    $password_confirm_error = $validation->getError('password_confirm');
                }
                
            }
            else{

                 $success = 'yes';
           

             
         
             $model = new UserskyModel();
            $member = [
              'firstname' =>$this->request->getVar('firstname'),
              'lastname' =>$this->request->getVar('lastname'),
              'email' => $this->request->getVar('email'),
              'password' => $this->request->getVar('password'),
              
            ];
    
              $model->save($member);
             // $clients_id = $model->insertID;

              //   $data = [
              //   'id' => $clients_id,
              //   'firstname' => $this->request->getVar('firstname'),
              //    'password' => $this->request->getVar('lastname'),
              //   'lastname' => $this->request->getVar('lastname'),
              //   'email' => $this->request->getVar('email'),
              //   'isLoggedIn' => true,
              // ];
              // session()->set($data);
                 

                $output = "saved";

        
      }
            $output = array(
                'firstname_error'    =>  $firstname_error,
                'lastname_error'   =>  $lastname_error,
                'email_error'  =>  $email_error,
                'password_error'    => $password_error,
                'password_confirm_error'  =>$password_confirm_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message,
                'successs'       =>  $successs 
            );

      
        echo json_encode($output);
      }

       public function save(){
            //   echo "string";
        helper(['form']);
          $data = [];
    //   if($this->request->getMethod() =='post'){
            // echo "string";
         //lets do validation here
        //  $rules = [
          
        //   'email' =>'required|min_length[6]|max_length[50]|valid_email',
        //   'password' =>'required|min_length[1]|max_length[255]|validateUser[email,password]',
          
        //  ];
        //  $errors = [
        //   'password' =>[
        //     'validateUser' => 'Wrong Email or Password'
        //   ]
        //  ];
        //  if(!$this->validate($rules,$errors)){

        //   $data['validation'] = $this->validator;
        
        //  }
        //  else{

        //   //store the user in the database
        //   $model = new UserskyModel();
        //   $user = $model->where('email',$this->request->getVar('email'))
        //                                      ->first();
        //       $this->setUserSession($user);
                
        //     return redirect()->to(base_url().'/UsersController/dashboard/');
        //  }
    //   }
           
           echo view('login',$data);
       }
       
       public function login(){
           echo "string";
        // helper(['form']);
        //   $data = [];
    //   if($this->request->getMethod() =='post'){
            echo "string";
         //lets do validation here
        //  $rules = [
          
        //   'email' =>'required|min_length[6]|max_length[50]|valid_email',
        //   'password' =>'required|min_length[1]|max_length[255]|validateUser[email,password]',
          
        //  ];
        //  $errors = [
        //   'password' =>[
        //     'validateUser' => 'Wrong Email or Password'
        //   ]
        //  ];
        //  if(!$this->validate($rules,$errors)){

        //   $data['validation'] = $this->validator;
        
        //  }
        //  else{

        //   //store the user in the database
        //   $model = new UserskyModel();
        //   $user = $model->where('email',$this->request->getVar('email'))
        //                                      ->first();
        //       $this->setUserSession($user);
                
        //     return redirect()->to(base_url().'/UsersController/dashboard/');
        //  }
    //   }
           
        //   echo view('login',$data);

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


       public  function users_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $UserskyModel = new UserskyModel();

          $UserskyModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Users Data Deleted</div>';
      }
  }

   public function logins(){
   	 
     return view('login');

      }


        public function logout(){
  
      session()->destroy();
       return redirect()->to(base_url().'/login');
  }


}