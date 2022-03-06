<?php namespace App\Models;

use CodeIgniter\Model;

class TourSafarisRouteModel extends Model
{
	protected $table = 'tours_and_safari_route_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['tours_and_safari_id', 'tours_and_safari_route_sleep','tours_and_safari_route_description','tours_and_safari_route_day'];



	
}


?>
