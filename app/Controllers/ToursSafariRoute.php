<?php 
namespace App\Controllers;
use App\Models\TourSafarisRouteModel;
use App\Models\Tours_andSafarisModel;
Class ToursSafariRoute extends BaseController{

    public function index(){

        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tours'] = $Tours_andSafarisModel->findAll();
        $TourSafarisRouteModel = new TourSafarisRouteModel();
        $data['tourssafariroute'] = $TourSafarisRouteModel->findAll();
        
        return view('tour_safari_route',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $tours_and_safari_route_day_error = '';
            $tours_and_safari_route_description_error = '';
            $tours_and_safari_title_error = '';
        
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'tours_and_safari_route_day'  =>  'required',
                'tours_and_safari_route_description'  =>  'required|min_length[3]',
                'tours_and_safari_title'  =>  'required',
              
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('tours_and_safari_route_day'))
                {
                    $tours_and_safari_route_day_error = $validation->getError('tours_and_safari_route_day');
                }

                if($validation->getError('tours_and_safari_route_description'))
                {
                    $tours_and_safari_route_description_error = $validation->getError('tours_and_safari_route_description');
                }

                if($validation->getError('tours_and_safari_title'))
                {
                    $tours_and_safari_title_error = $validation->getError('tours_and_safari_title');
                }

             

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                  
                    $TourSafarisRouteModel = new TourSafarisRouteModel();
                    $TourSafarisRouteModel->save([
                        'tours_and_safari_id'      =>  $this->request->getVar('tours_and_safari_title'),
                        'tours_and_safari_route_day'      =>  $this->request->getVar('tours_and_safari_route_day'),
                        'tours_and_safari_route_description'      =>  $this->request->getVar('tours_and_safari_route_description'),
                        

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                    $TourSafarisRouteModel = new TourSafarisRouteModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'tours_and_safari_id'      =>  $this->request->getVar('tours_and_safari_title'),
                        'tours_and_safari_route_day'      =>  $this->request->getVar('tours_and_safari_route_day'),
                        'tours_and_safari_route_description'      =>  $this->request->getVar('tours_and_safari_route_description'),
                        
                    ];

                    $TourSafarisRouteModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'tours_and_safari_title_error'        =>  $tours_and_safari_title_error,
                'tours_and_safari_route_day_error'    =>  $tours_and_safari_route_day_error,
                'tours_and_safari_route_description_error'   => $tours_and_safari_route_description_error,
             
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_tours_and_safari_route()
    {
        if($this->request->getVar('id'))
        {
            $TourSafarisRouteModel = new TourSafarisRouteModel();

             $destinations_data = $TourSafarisRouteModel->where('id', $this->request->getVar('id'))->first();

                 
                  $output['tours_and_safari_title'] = $destinations_data['tours_and_safari_id'];
                    $output['tours_and_safari_route_day'] = $destinations_data['tours_and_safari_route_day'];
        
                    $output['tours_and_safari_route_description'] = $destinations_data['tours_and_safari_route_description'];

            echo json_encode($output);
        }
    }

    
  public  function tours_and_safaris_route_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $TourSafarisRouteModel = new TourSafarisRouteModel();

          $TourSafarisRouteModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Destinations Data Deleted</div>';
      }
  }
  public function single_destinations($title){
    //   echo $title;
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['destination'] = $DestinationsModel->where('destinations_title', $title)->first();
         return view('destinations_details',$data);

  }

}