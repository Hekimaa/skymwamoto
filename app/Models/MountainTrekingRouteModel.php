<?php namespace App\Models;

use CodeIgniter\Model;

class MountainTrekingRouteModel extends Model
{
	protected $table = 'mountaintreking_route_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['mountaintreking_id','mounttrekking_route_inclusive','mountaintrekingroute_description','mountaintrekingroute_day'];



	
}


?>
