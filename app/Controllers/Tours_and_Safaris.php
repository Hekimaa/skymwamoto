<?php 

namespace App\Controllers;
use App\Models\Tours_andSafarisModel;
use App\Models\DestinationsModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;
Class Tours_and_Safaris extends BaseController{

    public function index(){

        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        
        return view('tours_and_safari',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $tours_and_safari_title_error = '';
            $tours_and_safari_price_error = '';
            $tours_and_safari_description_error = '';
            
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'tours_and_safari_title'  =>  'required|min_length[3]',
                'tours_and_safari_price'  =>  'required|min_length[3]',
                'tours_and_safari_description'  =>  'required|min_length[3]',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('tours_and_safari_title'))
                {
                    $tours_and_safari_title_error = $validation->getError('tours_and_safari_title');
                }

                if($validation->getError('tours_and_safari_price'))
                {
                    $tours_and_safari_price_error = $validation->getError('tours_and_safari_price');
                }

                if($validation->getError('tours_and_safari_description'))
                {
                    $tours_and_safari_description_error = $validation->getError('tours_and_safari_description');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('tours_and_safari_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/toursandsafariimages', $newName);
                    $imagee = $file->getName();
                  
                    $Tours_andSafarisModel = new Tours_andSafarisModel();
                    $Tours_andSafarisModel->save([
                        'tours_and_safari_title'      =>  $this->request->getVar('tours_and_safari_title'),
                        'tours_and_safari_price'      =>  $this->request->getVar('tours_and_safari_price'),
                        'tours_and_safari_description'      =>  $this->request->getVar('tours_and_safari_description'),
                        'tours_and_safari_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('tours_and_safari_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/toursandsafariimages', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_destinations_image');
                    }

                    $Tours_andSafarisModel = new Tours_andSafarisModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'tours_and_safari_title'      =>  $this->request->getVar('tours_and_safari_title'),
                        'tours_and_safari_price'      =>  $this->request->getVar('tours_and_safari_price'),
                        'tours_and_safari_description'      =>  $this->request->getVar('tours_and_safari_description'),
                        'tours_and_safari_image' =>  $imagee
                    ];

                    $Tours_andSafarisModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'tours_and_safari_title_error'    =>  $tours_and_safari_title_error,
                'tours_and_safari_description_error'   =>  $tours_and_safari_description_error,
                'tours_and_safari_price_error'   =>  $tours_and_safari_price_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_singletoursandsafaris()
    {
        if($this->request->getVar('id'))
        {
            $Tours_andSafarisModel = new Tours_andSafarisModel();

             $destinations_data = $Tours_andSafarisModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['tours_and_safari_title'] = $destinations_data['tours_and_safari_title'];
                    $output['tours_and_safari_price'] = $destinations_data['tours_and_safari_price'];
        
                    $output['tours_and_safari_description'] = $destinations_data['tours_and_safari_description'];

                     if($destinations_data['tours_and_safari_image'] != ''){

                  $output['tours_and_safari_image'] = '<img src ="'.base_url().'/uploads/toursandsafariimages/'.$destinations_data['tours_and_safari_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_destinations_image" name="hidden_destinations_image" value="'.$destinations_data['tours_and_safari_image'].'" />';
                                                           }
                          else{
                              $output['tours_and_safari_image'] = '<input type="hidden" name="hidden_destinations_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }

    
  public  function tours_and_safaris_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $Tours_andSafarisModel = new Tours_andSafarisModel();

          $Tours_andSafarisModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Destinations Data Deleted</div>';
      }
  }
  public function tours_and_safaris_details($title){
 
    $Tours_andSafarisModel = new Tours_andSafarisModel();
    $data['tourssafari'] = $Tours_andSafarisModel->findAll();
    $DestinationsModel = new DestinationsModel();
    $data['destinations'] = $DestinationsModel->findAll();

         $db  = \Config\Database::connect();
        $builder = $db->table('tours_and_safari_tbl');
        $builder->where('tours_and_safari_title =',$title);
        $builder->join('tours_and_safari_route_tbl', 'tours_and_safari_tbl.id = tours_and_safari_route_tbl.tours_and_safari_id');
        $query   = $builder->get();
        $data['tourssafaridetails'] = $query->getResult();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingroute();
        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
          $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();
          
           return view('toursandsafari/tours_and_safari_route_details',$data);

  }

  public function all_tours_and_safaris(){
    $Tours_andSafarisModel = new Tours_andSafarisModel();
    $data['tourssafari'] = $Tours_andSafarisModel->findAll();
 
     $DestinationsModel = new DestinationsModel();
    $data['destinations'] = $DestinationsModel->findAll();
    $data['toursandsafari'] = $Tours_andSafarisModel->findAll();

    $db = db_connect();
    $TrekkingMountRouteModel = new RouteModel($db);
    $DestinationModel = new DestinationModel($db);
    $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
    $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
    $data['nothern'] = $DestinationModel->notherndestination();  
    $data['southern'] = $DestinationModel->southerndestination();
    $data['western'] = $DestinationModel->westerndestination();  
    $data['coastal'] = $DestinationModel->coastaldestination();
    return view('toursandsafari/all_tours_and_safaris',$data);
}

}