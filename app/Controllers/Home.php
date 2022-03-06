<?php

namespace App\Controllers;
use App\Models\DestinationsModel;
use App\Models\Tours_andSafarisModel;
use App\Models\RouteModel;
use App\Models\DestinationModel;

class Home extends BaseController
{
	public function index()
	{
		$DestinationsModel = new DestinationsModel();
        $data['destinations'] = $DestinationsModel->findAll();
		$Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafari'] = $Tours_andSafarisModel->findAll();
		$Tours_andSafarisModel = new Tours_andSafarisModel();
        $data['tourssafaris'] = $Tours_andSafarisModel->findAll();

		$db = db_connect();
        $TrekkingMountRouteModel = new RouteModel($db); 
        $data['mounttrakkingroute'] = $TrekkingMountRouteModel->mounttrekkingkilimanjaro();  
		$data['mounttrakkingroutemeru'] = $TrekkingMountRouteModel->mounttrekkingmeru();
        
         $DestinationModel = new DestinationModel($db);
         $data['destinationss'] = $DestinationModel->alldestinations();
		$data['nothern'] = $DestinationModel->notherndestination();  
		$data['southern'] = $DestinationModel->southerndestination();
		$data['western'] = $DestinationModel->westerndestination();  
		$data['coastal'] = $DestinationModel->coastaldestination();

	

		return view('home/index',$data);
	}
}
