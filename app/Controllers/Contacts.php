<?php

namespace App\Controllers;
use App\Models\DestinationsModel;
use App\Models\Tours_andSafarisModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;
use App\Models\ContactsModel;

Class Contacts extends BaseController{

    public function index(){
        
       
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
		$data['destinationss'] = $DestinationsModel->findAll();
		$Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
		
        $data['tourssafaris'] = $Tours_andSafarisModel->findAll();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
      $DestinationModel = new DestinationModel($db);
        $data['nothern'] = $DestinationModel->notherndestination();  
        $data['southern'] = $DestinationModel->southerndestination();
        $data['western'] = $DestinationModel->westerndestination();  
        $data['coastal'] = $DestinationModel->coastaldestination();
      
        return view('contact/contact',$data);
    }

     public function save()
    { 

          if($this->request->getMethod() =='post'){

        $data = array(
       
        'name' => $this->request->getVar('name'),
        'email' => $this->request->getVar('email'), 
        'message' => $this->request->getVar('message'),
        
         );
          $ContactsModel =  new ContactsModel();
             $ContactsModel->save($data);
           
                   
        $DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
        $data['destinationss'] = $DestinationsModel->findAll();
        $Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
        
        $data['tourssafaris'] = $Tours_andSafarisModel->findAll();

        $db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db);
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();
        $data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        // return view('contact/contact',$data);
        return redirect()->route('/');

         }

       }

       public  function message(){

        $ContactsModel = new ContactsModel();
        $data['message'] = $ContactsModel->findAll();
        
        return view('message',$data);
       } 

        public  function message_delete()
  {
      if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $ContactsModel = new ContactsModel();

          $ContactsModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Message Data Deleted</div>';
      }
  }  

}
?>