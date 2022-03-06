<?php 
namespace App\Controllers;
use App\Models\MountainTrekingRouteModel;
use App\Models\RouteModel; 
use App\Models\DestinationModel;
use App\Models\MountainTrekkingModel;
use App\Models\Tours_andSafarisModel;
use App\Models\DestinationsModel;

Class MountainTrekkingRoute extends BaseController{

    public function index(){

        $MountainTrekkingModel = new MountainTrekkingModel();
        $data['mountains'] = $MountainTrekkingModel->findAll();


        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingroute();
     
        
        return view('mountaintrekkingroute',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $mountaintreking_id_error = '';
            $mounttrekking_route_day_error = '';
            $mounttrekking_route_description_error = ''; 
            $mounttrekking_route_inclusive_error = ''; 
    
        
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'mountaintreking_id'  =>  'required',
                'mounttrekking_route_inclusive'  =>  'required|min_length[3]',
                'mounttrekking_route_day'  =>  'required|min_length[3]',
                'mounttrekking_route_description'  =>  'required',
              
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('mountaintreking_id'))
                {
                    $mounttrekking_route_title_error = $validation->getError('mountaintreking_id');
                }

                if($validation->getError('mounttrekking_route_day'))
                {
                    $mounttrekking_route_day_error = $validation->getError('mounttrekking_route_day'); 
                }

                if($validation->getError('mounttrekking_route_description'))
                {
                    $mounttrekking_route_description_error = $validation->getError('mounttrekking_route_description');
                }

                if($validation->getError('mounttrekking_route_inclusive'))
                {
                    $mounttrekking_route_inclusive_error = $validation->getError('mounttrekking_route_inclusive');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                  
                    $MountainTrekingRouteModel = new MountainTrekingRouteModel();
                    $MountainTrekingRouteModel->save([
                        'mountaintreking_id'      =>  $this->request->getVar('mountaintreking_id'), 
                        'mounttrekking_route_inclusive'      =>  $this->request->getVar('mounttrekking_route_inclusive'),
                        'mountaintrekingroute_description'      =>  $this->request->getVar('mounttrekking_route_description'),
                        'mountaintrekingroute_day'      =>  $this->request->getVar('mounttrekking_route_day'),
                        

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                    $MountainTrekingRouteModel = new MountainTrekingRouteModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'mountaintreking_id'      =>  $this->request->getVar('mountaintreking_id'), 
                        'mounttrekking_route_inclusive'      =>  $this->request->getVar('mounttrekking_route_inclusive'),
                        'mountaintrekingroute_description'      =>  $this->request->getVar('mounttrekking_route_description'),
                        'mountaintrekingroute_day'      =>  $this->request->getVar('mounttrekking_route_day'),
                      
                    ];

                    $MountainTrekingRouteModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'mountaintreking_id_error'        =>  $mountaintreking_id_error,

                'mounttrekking_route_day_error'    =>        $mounttrekking_route_day_error,
                'mounttrekking_route_inclusive_error'   => $mounttrekking_route_inclusive_error,
                'mounttrekking_route_description_error'   => $mounttrekking_route_description_error, 
             
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_mountaintrekking_route()
    {
        if($this->request->getVar('id'))
        {
            $MountainTrekingRouteModel = new MountainTrekingRouteModel();

             $destinations_data = $MountainTrekingRouteModel->where('id', $this->request->getVar('id'))->first();

             
                 $output['mountaintreking_id'] = $destinations_data['mountaintreking_id'];
                $output['mounttrekking_route_day'] = $destinations_data['mountaintrekingroute_day'];
        
                $output['mounttrekking_route_description'] = $destinations_data['mountaintrekingroute_description'];

            echo json_encode($output);
        }
    }

    
  public  function mountaintrekking_route_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $MountainTrekingRouteModel = new MountainTrekingRouteModel();

          $MountainTrekingRouteModel->where('id', $id)->delete($id);

          echo $id;
      }
  }


  public function single_mountaintrekking_route($title){
 
    $Tours_andSafarisModel = new Tours_andSafarisModel();
    $data['tourssafari'] = $Tours_andSafarisModel->findAll();
    $DestinationsModel = new DestinationsModel();
    $data['destinations'] = $DestinationsModel->findAll();

         $db  = \Config\Database::connect();
        $builder = $db->table('mountaintrekking_tbl');
        $builder->where('mountain_days =',$title);
        $builder->join('mountaintreking_route_tbl', 'mountaintrekking_tbl.id = mountaintreking_route_tbl.mountaintreking_id');
        $query   = $builder->get();
        $data['mountaintrekkingdetails'] = $query->getResult();

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
          
           return view('mountaintrekking/mountaintrekking_tours_details',$data);

  }

}