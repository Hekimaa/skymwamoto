<?php

namespace App\Controllers;
use App\Models\DestinationsModel;
use App\Models\Tours_andSafarisModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;

Class AboutUs extends BaseController{

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
        return view('about_us',$data);
        
    }
}