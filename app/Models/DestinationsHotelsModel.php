<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class RouteModel{
	protected $db;

	public function __construct(ConnectionInterface &$db){
		$this->db =& $db;

	}
	

	function mounttrekkingroute(){
		   
		return  $this->db->table('mountaintrekking_tbl')
		                 ->where('mountaintrekking_tbl.id = mountaintreking_route_tbl.mountaintreking_id')
		                 ->join('mountaintreking_route_tbl','mountaintreking_route_tbl.mountaintreking_id = mountaintrekking_tbl.id')
		                
		                ->get()
		                ->getResult();
	}

	function mounttrekkingkilimanjaro(){
		$id  = "Mount Kilimanjaro";
		   
		return  $this->db->table('mountaintrekking_tbl')
		                 ->where('mountaintrekking_tbl.mountain_title = ',$id)
		             
		                ->get()
		                ->getResult();
	}
	
	function mounttrekkingmeru(){
		$id  = "Mount Meru";
		   
		return  $this->db->table('mountaintrekking_tbl')
		                 ->where('mountaintrekking_tbl.mountain_title = ',$id)
		             
		                ->get()
		                ->getResult();
	}

}