<?php namespace App\Models;

use CodeIgniter\Model;

class Tours_andSafarisModel extends Model
{
	protected $table = 'tours_and_safari_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['tours_and_safari_title', 'tours_and_safari_price','tours_and_safari_description','tours_and_safari_image'];



	
}


?>
