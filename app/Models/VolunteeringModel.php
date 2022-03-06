<?php namespace App\Models;

use CodeIgniter\Model;

class VolunteeringModel extends Model
{
	protected $table = 'volunteering_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['volunteering_title','volunteering_description','volunteering_image'];



	
}


?>
