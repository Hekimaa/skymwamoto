<?php 

namespace App\Controllers;
use App\Models\MountainTrekkingModel;
Class MountainTrekking extends BaseController{

    public function index(){

        $MountainTrekkingModel = new MountainTrekkingModel();
        $data['trekking'] = $MountainTrekkingModel->findAll();
        
        return view('mountain_trekking',$data);
    }

    public function save()
    {
        if($this->request->getVar('action'))
        {
            helper(['form', 'url']);
            $mountain_title_error = '';
            $mountain_price_error = '';
            $mountain_description_error = '';
            $mountain_days_error = '';
            
            
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
                'mountain_title'  =>  'required|min_length[3]',
                'mountain_price'  =>  'required',
                'mountain_description'  =>  'required|min_length[3]',
                'mountain_days'  =>  'required',
                
                
            ]);

            if(!$error)
            {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if($validation->getError('mountain_title'))
                {
                    $mountain_title_error = $validation->getError('mountain_title');
                }

                if($validation->getError('mountain_price'))
                {
                    $mountain_price_error = $validation->getError('mountain_price');
                }

                if($validation->getError('mountain_description'))
                {
                    $mountain_description_error = $validation->getError('mountain_description');
                }
                if($validation->getError('mountain_days'))
                {
                    $mountain_days_error = $validation->getError('mountain_days');
                }

            }
            else
            {
                $success = 'yes';
                if($this->request->getVar('action') == 'Add')
                {

                   $file = $this->request->getFile('mountain_image');
                   $newName = $file->getRandomName();
                    $file->move('uploads/mountain_images', $newName);
                    $imagee = $file->getName();
                  
                    $MountainTrekkingModel = new MountainTrekkingModel();
                    $MountainTrekkingModel->save([
                        'mountain_title'      =>  $this->request->getVar('mountain_title'),
                        'mountain_price'      =>  $this->request->getVar('mountain_price'),
                        'mountain_days'      =>  $this->request->getVar('mountain_days'),
                        'mountain_description'      =>  $this->request->getVar('mountain_description'),
                        'mountain_image' =>  $imagee

                    ]);

                    $message = '<div class="alert alert-success">User Data Added</div>';
                }

                    if($this->request->getVar('action') == 'Edit')
                {


                     $file = $this->request->getFile('mountain_image');
                     if($file != ''){
                   $newName = $file->getRandomName();
                    $file->move('uploads/mountain_images', $newName);
                    $imagee = $file->getName();
                    }
                    else{

                     $imagee = $this->request->getVar('hidden_destinations_image');
                    }

                    $MountainTrekkingModel = new MountainTrekkingModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'mountain_title'      =>  $this->request->getVar('mountain_title'),
                        'mountain_price'      =>  $this->request->getVar('mountain_price'),
                        'mountain_days'      =>  $this->request->getVar('mountain_days'),
                        'mountain_description'      =>  $this->request->getVar('mountain_description'),
                        'mountain_image' =>  $imagee
                    ];

                    $MountainTrekkingModel->update($id, $data);

                    $message = '<div class="alert alert-success">Destination Data Updated</div>';
                }
            }

            $output = array(
                'mountain_title_error'    =>  $mountain_title_error,
                'mountain_price_error'   =>  $mountain_price_error,
                'mountain_description_error'   =>  $mountain_description_error,
                'mountain_days_error'   =>  $mountain_days_error,
                'error'         =>  $error,
                'success'       =>  $success,
                'message'       =>  $message
            );

            echo json_encode($output);
        }
    }

    public function fetch_single_mountaintrekking()
    {
        if($this->request->getVar('id'))
        {
            $MountainTrekkingModel = new MountainTrekkingModel();

             $destinations_data = $MountainTrekkingModel->where('id', $this->request->getVar('id'))->first();

                 
                    $output['mountain_title'] = $destinations_data['mountain_title'];
                    $output['mountain_price'] = $destinations_data['mountain_price'];
                    $output['mountain_days'] = $destinations_data['mountain_days'];
                    $output['mountain_description'] = $destinations_data['mountain_description'];

                     if($destinations_data['mountain_image'] != ''){

                  $output['mountain_image'] = '<img src ="'.base_url().'/uploads/mountain_images/'.$destinations_data['mountain_image'].'" class= "img-thumbnail" width="50" height= "35" /> <input type="hidden" id="hidden_destinations_image" name="hidden_destinations_image" value="'.$destinations_data['mountain_image'].'" />';
                                                           }
                          else{
                              $output['mountain_image'] = '<input type="hidden" name="hidden_destinations_image" value="" />';
                          }
           
            echo json_encode($output);
        }
    }

    
  public  function mounttrekking_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $MountainTrekkingModel = new MountainTrekkingModel();

          $MountainTrekkingModel->where('id', $id)->delete($id);

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