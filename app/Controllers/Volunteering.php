<?php 

namespace App\Controllers;
use App\Models\VolunteeringModel;
use App\Models\Tours_andSafarisModel;
use App\Models\DestinationsModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;
Class Volunteering extends BaseController{

    public function index(){

       $VolunteeringModel = new VolunteeringModel();
        $data['volunteering'] = $VolunteeringModel->findAll();
        
         return view('volunteering',$data);
        
    }


    public function all(){
            $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['alldestinations'] = $DestinationsModel->findAll();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
        $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
       $VolunteeringModel = new VolunteeringModel();
        $data['volunteering'] = $VolunteeringModel->findAll();
             $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();
        
        return view('voluntering/voluntering',$data);

        
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $volunteering_title_error = '';
            $volunteering_description_error = '';
        
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'volunteering_title'  =>  'required|min_length[3]',
                'volunteering_description'  =>  'required|min_length[3]',
             
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('volunteering_title'))
                {
                    $volunteering_title_error = $validation->getError('volunteering_title');
                }

                if($validation->getError('volunteering_description'))
                {
                    $volunteering_description_error = $validation->getError('volunteering_description');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('volunteering_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/volunteeringimages', $newName);
                    $imagee = $file->getName();
                  
                    $VolunteeringModel = new VolunteeringModel();
                    $VolunteeringModel->save([
                        'volunteering_title'      =>  $this->request->getVar('volunteering_title'),
                        'volunteering_description'      =>  $this->request->getVar('volunteering_description'),
                        'volunteering_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('volunteering_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/volunteeringimages', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_volunteering_image');
                    }

                    $VolunteeringModel = new VolunteeringModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'volunteering_title'      =>  $this->request->getVar('volunteering_title'),
                        'volunteering_description'      =>  $this->request->getVar('volunteering_description'),
                        'volunteering_image' =>  $imagee
                    ];

                    $VolunteeringModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'volunteering_title_error'    =>  $volunteering_title_error,
                'volunteering_description_error'   =>  $volunteering_description_error,
            
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_volunteering()
    {
        if($this->request->getVar('id'))
        {
            $VolunteeringModel = new VolunteeringModel();

             $volunteering = $VolunteeringModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['volunteering_title'] = $volunteering['volunteering_title'];
                
        
                    $output['volunteering_description'] = $volunteering['volunteering_description'];

                     if($volunteering['volunteering_image'] != ''){

                  $output['volunteering_image'] = '<img src ="'.base_url().'/uploads/volunteeringimages/'.$volunteering['volunteering_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_volunteering_image" name="hidden_volunteering_image" value="'.$volunteering['volunteering_image'].'" />';
                                                           }
                          else{
                              $output['volunteering_image'] = '<input type="hidden" name="hidden_volunteering_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }

    
  public  function volunteering_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $VolunteeringModel = new VolunteeringModel();

          $VolunteeringModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Destinations Data Deleted</div>';
      }
  }


  public function single_volunteering($title){
    //   echo $title;
       $VolunteeringModel = new VolunteeringModel();
        $data['volunteering'] = $VolunteeringModel->where('volunteering_title', $title)->first();
        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();

        $db = db_connect();
        $DestinationModel = new DestinationModel($db);
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();
        
        $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        $data['nothern'] = $DestinationModel->notherndestination();  
    $data['southern'] = $DestinationModel->southerndestination();
    $data['western'] = $DestinationModel->westerndestination();  
    $data['coastal'] = $DestinationModel->coastaldestination();
         return view('voluntering/voluntering_details',$data);

  }



  public function all_tours_and_safaris(){
    $Tours_andSafarisModel = new Tours_andSafarisModel();
    $data['tourssafari'] = $Tours_andSafarisModel->findAll();
    $DestinationsModel = new DestinationsModel();
    $data['destinations'] = $DestinationsModel->findAll();
    $data['toursandsafari'] = $Tours_andSafarisModel->findAll();

    $db = db_connect();
    $TrekkingMountRouteModel = new RouteModel($db);
    $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
    $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
    return view('all_tours_and_safaris',$data);
}

}