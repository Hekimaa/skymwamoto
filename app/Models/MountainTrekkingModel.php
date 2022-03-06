<?php namespace App\Models;

use CodeIgniter\Model;

class MountainTrekkingModel extends Model
{
	protected $table = 'mountaintrekking_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['mountain_title', 'mountain_image','mountain_price','mountain_days','mountain_description'];
	
}


?>
