<?php namespace App\Models;

use CodeIgniter\Model;

class DestinationsModel extends Model
{
	protected $table = 'destinations_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['destinations_title','destinations_area', 'destinations_description','destinations_whentogo','destinations_location','destinations_attractions','destinations_image'];



	
}


?>
