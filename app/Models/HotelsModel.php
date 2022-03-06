<?php namespace App\Models;

use CodeIgniter\Model;

class HotelsModel extends Model
{
	protected $table = 'hotels_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['hotels_title', 'hotels_description','hotels_level','hotels_features','hotels_activities','hotels_price','hotels_destinations','hotels_image'];



	
}


?>
