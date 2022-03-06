<?php namespace App\Models;

use CodeIgniter\Model;

class ContactsModel extends Model
{
	
	protected $table = 'message_tbl';

	protected $primaryKey = 'id';

	protected $allowedFields = ['name','email','message'];


	
}


?>
