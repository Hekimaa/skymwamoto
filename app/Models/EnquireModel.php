<?php namespace App\Models;

use CodeIgniter\Model;

class EnquireModel extends Model
{
	protected $table = 'enquire_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name', 'email','phonenumber','country','date','message','persons','enquire'];



	
}


?>
