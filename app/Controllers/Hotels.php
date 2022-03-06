<?php 

namespace App\Controllers;
use App\Models\HotelsModel;
use App\Models\DestinationsModel;
use App\Models\DestinationModel;
use App\Models\Tours_andSafarisModel;
use App\Models\RouteModel;
Class Hotels extends BaseController{

    public function index(){

        $HotelsModel = new HotelsModel();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['hotels'] = $HotelsModel->findAll();
        
        return view('hotels',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $hotels_title_error = '';
            $hotels_destinations_error = '';
            $hotels_price_error = '';
            $hotels_description_error = '';
            $hotels_features_error = '';
            $hotels_level_error = '';
            
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'hotels_title'  =>  'required|min_length[3]',
                'hotels_destinations'  =>  'required',
                'hotels_features'  =>  'required|min_length[3]',
                'hotels_description'  =>  'required|min_length[3]',
                'hotels_price'  =>  'required',

                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('hotels_title'))
                {
                    $hotels_title_error = $validation->getError('hotels_title');
                }

                if($validation->getError('hotels_destinations'))
                {
                    $hotels_destinations_error = $validation->getError('hotels_destinations');
                }

                if($validation->getError('hotels_price'))
                {
                    $hotels_price_error = $validation->getError('hotels_price');
                }

                if($validation->getError('hotels_description'))
                {
                    $hotels_description_error = $validation->getError('hotels_description');
                }

                if($validation->getError('hotels_features'))
                {
                    $hotels_features_error = $validation->getError('hotels_features');
                }

                 if($validation->getError('hotels_level'))
                {
                    $hotels_level_error = $validation->getError('hotels_level');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('hotels_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/hotels_image', $newName);
                    $imagee = $file->getName();
                  
                    $HotelsModel = new HotelsModel();
                    $HotelsModel->save([
                        'hotels_title'      =>  $this->request->getVar('hotels_title'),
                        'hotels_destinations'      =>  $this->request->getVar('hotels_destinations'),
                        'hotels_features'      =>  $this->request->getVar('hotels_features'),
                        'hotels_description'      =>  $this->request->getVar('hotels_description'),
                        'hotels_price'      =>  $this->request->getVar('hotels_price'),
                         'hotels_level'      =>  $this->request->getVar('hotels_level'),
                        'hotels_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('hotels_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/hotels_image', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_destinations_image');
                    }

                    $HotelsModel = new HotelsModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'hotels_title'      =>  $this->request->getVar('hotels_title'),
                        'hotels_destinations'      =>  $this->request->getVar('hotels_destinations'),
                        'hotels_features'      =>  $this->request->getVar('hotels_features'),
                        'hotels_description'      =>  $this->request->getVar('hotels_description'),
                        'hotels_price'      =>  $this->request->getVar('hotels_price'),
                        'hotels_level'      =>  $this->request->getVar('hotels_level'),
                        'hotels_image' =>  $imagee 
                    ];

                    $HotelsModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'hotels_title_error'    =>  $hotels_title_error,
                'hotels_destinations_error'   =>  $hotels_destinations_error,
                'hotels_price_error'   =>  $hotels_price_error,
                'hotels_description_error'   =>  $hotels_description_error,
                'hotels_features_error'   =>  $hotels_features_error,
                'hotels_level_error'   =>  $hotels_level_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_hotels()
    {
        if($this->request->getVar('id'))
        {
            $HotelsModel = new HotelsModel();

             $hotels_data = $HotelsModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['hotels_title'] = $hotels_data['hotels_title'];
                    $output['hotels_destinations'] = $hotels_data['hotels_destinations'];
                    $output['hotels_price'] = $hotels_data['hotels_price'];
                    $output['hotels_features'] = $hotels_data['hotels_features'];
                    $output['hotels_description'] = $hotels_data['hotels_description'];
                    $output['hotels_level'] = $hotels_data['hotels_level'];

                     if($hotels_data['hotels_image'] != ''){

                  $output['hotels_image'] = '<img src ="'.base_url().'/uploads/hotels_image/'.$hotels_data['hotels_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_destinations_image" name="hidden_destinations_image" value="'.$hotels_data['hotels_image'].'" />';
                                                           }
                          else{
                              $output['hotels_image'] = '<input type="hidden" name="hidden_destinations_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }

    
  public  function hotels_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $HotelsModel = new HotelsModel();

          $HotelsModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Destinations Data Deleted</div>';
      }
  }

  
  public function single_destinations($title){
   
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['destination'] = $DestinationsModel->where('destinations_title', $title)->first();
         return view('destinations_single',$data);

  }

    public function single_hotels($title){

           $db = db_connect();
           $DestinationsModel = new DestinationsModel();
           $data['destinations'] = $DestinationsModel->findAll();
           $data['destinationss'] = $DestinationsModel->findAll();
           $Tours_andSafarisModel = new Tours_andSafarisModel();
           $data['tourssafari'] = $Tours_andSafarisModel->findAll();
           $Tours_andSafarisModel = new Tours_andSafarisModel();
           $data['tourssafaris'] = $Tours_andSafarisModel->findAll();

          $DestinationModel = new DestinationModel($db);
          $data['nothern'] = $DestinationModel->notherndestination();  
          $data['southern'] = $DestinationModel->southerndestination();
          $data['western'] = $DestinationModel->westerndestination();  
          $data['coastal'] = $DestinationModel->coastaldestination();
   
           
           $TrekkingMountRouteModel = new RouteModel($db);
           $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
           $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        $HotelsModel = new HotelsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['hotelsdetails'] = $HotelsModel->where('hotels_title', $title)->first();
         return view('hotels_details',$data);

    }

}