<?php

namespace App\Controllers;
use App\Models\DestinationsModel;
use App\Models\EnquireModel;


Class Enquire extends BaseController{

    public function index(){

        $EnquireModel = new EnquireModel();
        $data['enquire'] = $EnquireModel->findAll();
        
         return view('enquire',$data);
        
    }

    public function enquire_delete(){

    	if($this->request->getVar('id'))
      {
          $id = $this->request->getVar('id');

          $EnquireModel = new EnquireModel();

          $EnquireModel->where('id', $id)->delete($id);

          echo '<div class="alert alert-success">Enquire Data Deleted</div>';
      }
    	
    }
}

