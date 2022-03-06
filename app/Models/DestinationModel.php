<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class DestinationModel{
	protected $db;

	public function __construct(ConnectionInterface &$db){
		$this->db =& $db;

	}
	


	function notherndestination(){
		$nothern  = "nothern";
		   
		return  $this->db->table('destinations_tbl')
		                 ->where('destinations_tbl.destinations_area = ',$nothern)
		                 
		                ->get()
		                ->getResult();
	}

		function alldestinations(){
		
		   
		return  $this->db->table('destinations_tbl')
		                 ->limit(8)
		                ->get()
		                ->getResult();
	}
	

	function southerndestination(){
		$southern  = "southern";
		   
		return  $this->db->table('destinations_tbl')
		                 ->where('destinations_tbl.destinations_area = ',$southern)
		                ->get()
		                ->getResult();
	}


	function westerndestination(){
		$western  = "western";
		   
		return  $this->db->table('destinations_tbl')
		                 ->where('destinations_tbl.destinations_area = ',$western)
		                ->get()
		                ->getResult();
	}
	


	function coastaldestination(){
		$coastal  = "coastal";
		   
		return  $this->db->table('destinations_tbl')
		                 ->where('destinations_tbl.destinations_area = ',$coastal)
		                ->get()
		                ->getResult();
	}
	

	

}