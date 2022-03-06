<?php 

namespace App\Controllers;
use App\Models\DestinationsModel;
use App\Models\Tours_andSafarisModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;
use App\Models\EnquireModel;

Class Destinations extends BaseController{

    public function index(){

        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        
        return view('destinations',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $destinations_title_error = '';
            $destinations_description_error = '';
            $destinations_attractions_error = '';
            $destinations_location_error = '';
            $destinations_whentogo_error = '';
            $destinations_area_error='';
            
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'destinations_title'  =>  'required|min_length[3]',
                'destinations_description'  =>  'required|min_length[3]',  
                'destinations_location'  =>  'required|min_length[3]',
                'destinations_attractions'  =>  'required|min_length[3]',
                'destinations_whentogo'  =>  'required|min_length[3]',
                'destinations_area'  =>  'required|min_length[3]',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('destinations_title'))
                {
                    $destinations_title_error = $validation->getError('destinations_title');
                }

                if($validation->getError('destinations_description'))
                {
                    $destinations_description_error = $validation->getError('destinations_description');
                }

                if($validation->getError('destinations_attractions'))
                {
                    $destinations_attractions_error = $validation->getError('destinations_attractions');
                }

                if($validation->getError('destinations_location'))
                {
                    $destinations_location_error = $validation->getError('destinations_location');
                }

                if($validation->getError('destinations_whentogo'))
                {
                    $destinations_whentogo_error = $validation->getError('destinations_whentogo');
                }

                 if($validation->getError('destinations_area'))
                {
                    $destinations_area_error = $validation->getError('destinations_area');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('destinations_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/destinations_image', $newName);
                    $imagee = $file->getName();
                  
                    $DestinationsModel = new DestinationsModel();   
                    $DestinationsModel->save([
                         'destinations_title'      =>  $this->request->getVar('destinations_title'),
                        'destinations_description'      =>  $this->request->getVar('destinations_description'),
                        'destinations_location'      =>  $this->request->getVar('destinations_location'),
                        'destinations_attractions'      =>  $this->request->getVar('destinations_attractions'),
                        'destinations_whentogo'      =>  $this->request->getVar('destinations_whentogo'),
                        'destinations_area'      =>  $this->request->getVar('destinations_area'),
                        'destinations_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('destinations_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/destinations_image', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_destinations_image');
                    }

                    $DestinationsModel = new DestinationsModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'destinations_title'      =>  $this->request->getVar('destinations_title'),
                        'destinations_description'      =>  $this->request->getVar('destinations_description'),
                        'destinations_location'      =>  $this->request->getVar('destinations_location'),
                        'destinations_attractions'      =>  $this->request->getVar('destinations_attractions'),
                        'destinations_whentogo'      =>  $this->request->getVar('destinations_whentogo'),
                        'destinations_area'      =>  $this->request->getVar('destinations_area'),
                        'destinations_image' =>  $imagee
                    ];

                    $DestinationsModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'destinations_title_error'    =>  $destinations_title_error,
                'destinations_description_error'   =>  $destinations_description_error,
                'destinations_attractions_error'   =>  $destinations_attractions_error,
                'destinations_location_error' =>  $destinations_location_error,  
                'destinations_whentogo_error' =>  $destinations_whentogo_error, 
                'destinations_area_error' =>  $destinations_area_error, 
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_destinations()
    {
        if($this->request->getVar('id'))
        {
            $DestinationsModel = new DestinationsModel();

             $destinations_data = $DestinationsModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['destinations_title'] = $destinations_data['destinations_title'];  
                    $output['destinations_location'] = $destinations_data['destinations_location'];
                    $output['destinations_description'] = $destinations_data['destinations_description'];
                    $output['destinations_attractions'] = $destinations_data['destinations_attractions']; 
                    $output['destinations_area'] = $destinations_data['destinations_area']; 
                    $output['destinations_whentogo'] = $destinations_data['destinations_whentogo'];
                     if($destinations_data['destinations_image'] != ''){

                  $output['destinations_image'] = '<img src ="'.base_url().'/uploads/destinations_image/'.$destinations_data['destinations_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_destinations_image" name="hidden_destinations_image" value="'.$destinations_data['destinations_image'].'" />';
                                                           }
                          else{
                              $output['destinations_image'] = '<input type="hidden" name="hidden_destinations_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }

    
  public  function destinations_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $DestinationsModel = new DestinationsModel();

          $DestinationsModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Destinations Data Deleted</div>';
      }
  }
  public function single_destinations($title){
    //   echo $title;
    $DestinationsModel = new DestinationsModel();
        $data['destination'] = $DestinationsModel->where('destinations_title', $title)->first();
        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();
          $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();
	    
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
         return view('destinations/destinations_details',$data);

  }
    public function all_destinations(){ 
        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['alldestinations'] = $DestinationsModel->findAll();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();
        return view('destinations/all_destinations',$data);
    }

    public function destinations_hotels($title){

        $db = db_connect();

        $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();

        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['alldestinations'] = $DestinationsModel->findAll();

        
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        

        $db  = \Config\Database::connect();
        $builder = $db->table('destinations_tbl');
        $builder->where('destinations_tbl.destinations_title =',$title);
        $builder->where('hotels_tbl.hotels_level =','luxury');
        $builder->join('hotels_tbl', 'destinations_tbl.id = hotels_tbl.hotels_destinations ');
        $query   = $builder->get();
        $data['luxury'] = $query->getResult();

         $builder = $db->table('destinations_tbl');
        $builder->where('destinations_tbl.destinations_title =',$title);
        $builder->where('hotels_tbl.hotels_level =','midrange');
        $builder->join('hotels_tbl', 'destinations_tbl.id = hotels_tbl.hotels_destinations ');
        $query   = $builder->get();
        $data['midrange'] = $query->getResult();

        $builder = $db->table('destinations_tbl');
        $builder->where('destinations_tbl.destinations_title =',$title);
        $builder->where('hotels_tbl.hotels_level =','midrange');
        $builder->join('hotels_tbl', 'destinations_tbl.id = hotels_tbl.hotels_destinations ');
        $query   = $builder->get();
        $data['comfortable'] = $query->getResult();
        return view('destinations_hotels',$data);
    }

        public function saveenquire()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $name_error = '';
            $email_error = '';
            $phonenumber_error = '';
            $country_error = '';
            $date_error = '';
            $message_error = '';
            $persons_error = '';
            
            
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'name'  =>  'required|min_length[3]',
                'email'  =>  'required|min_length[3]',  
                'phonenumber'  =>  'required',
                'country'  =>  'required|min_length[3]',
                'date'  =>  'required',
                'message'  =>  'required|min_length[3]',
                'persons'  =>  'required',
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('name'))
                {
                    $name_error = $validation->getError('name');
                }

                if($validation->getError('email'))
                {
                    $email_error = $validation->getError('email');
                }

                if($validation->getError('phonenumber'))
                {
                    $phonenumber_error = $validation->getError('phonenumber');
                }

                if($validation->getError('country'))
                {
                    $country_error = $validation->getError('country');
                }

                if($validation->getError('date'))
                {
                    $date_error = $validation->getError('date');
                }


                if($validation->getError('message'))
                {
                    $message_error = $validation->getError('message');
                }

                if($validation->getError('persons'))
                {
                    $persons_error = $validation->getError('persons');
                }


            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                  
                  
                    $EnquireModel = new EnquireModel();   
                    $EnquireModel->save([

                        'name'      =>  $this->request->getVar('name'),
                        'email'      =>  $this->request->getVar('email'),
                        'phonenumber'      =>  $this->request->getVar('phonenumber'),
                        'country'      =>  $this->request->getVar('country'),
                        'date'      =>  $this->request->getVar('date'),
                        'message'      =>  $this->request->getVar('message'),
                        'persons'      =>  $this->request->getVar('persons'),
                        'enquire'      =>  $this->request->getVar('enquire'),
                        

                    ]);
                             $message = '<strong>Name: </strong>'.$this->request->getVar('name').'<br><br>'
                            .'<strong>PhoneNumber:</strong>'.$this->request->getVar('phonenumber').'<br><br>'
                            .'<strong>Country:</strong>'.$this->request->getVar('country').'<br><br>'
                            .'<strong>Travel Date:</strong>'.$this->request->getVar('date').'<br><br>'
                            .'<strong>Other Information:</strong>'.$this->request->getVar('message').'<br><br>'
                            .'<strong>Number of Persons:</strong>'.$this->request->getVar('persons').'<br><br>'
                            .'Thanks<br>';

                              $email = \Config\Services::email();
                              $email->setNewline("\r\n");
                              $email->setCRLF("\r\n");
                              $email->setFrom($this->request->getVar('email'), $this->request->getVar('name'));
                             
                              $email->setTo("info@skymwamoto.co.tz");
                              $email->setSubject($this->request->getVar('enquire'));
                              $email->setMessage($message);
                              $email->send();
                              if ($email->send()) {
                                  echo '<div class="alert alert-success">Enquire  Received</div>';
                              }  


                     $message = '<div class="alert alert-success">Enquire Received</div>';
                }

            
            }

            $output = array(
                'name_error'    =>  $name_error,
                'email_error'   =>  $email_error,
                'phonenumber_error'   =>  $phonenumber_error,
                'country_error' =>  $country_error,  
                'date_error' =>  $date_error,
                'message_error' =>  $message_error,  
                'persons_error' =>  $persons_error,  
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

}