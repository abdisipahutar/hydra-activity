<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /* Core Attributes */
	protected $table = 'm_user';
	protected $primaryKey = 'id';
	protected $fillable = ['username', 'password', 'created_datetime', 'updated_datetime'];
	protected $rules = "";
	protected $fieldLang = "";

	public $timestamps = false;

	public function __construct(){
		parent::__construct();
	}
}