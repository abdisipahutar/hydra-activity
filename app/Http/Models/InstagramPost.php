<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class InstagramPost extends Model
{
    /* Core Attributes */
	protected $table = 'm_instagram_post';
	protected $primaryKey = 'id';
	protected $fillable = ['code', 'owner', 'user_photo', 'user_name', 'taken_at', 'is_video', 'likes', 'images', 'caption', 'is_approved','created_datetime', 'updated_datetime'];
	protected $rules = "";
	protected $fieldLang = "";

	public $timestamps = false;

	public function __construct(){
		parent::__construct();
	}
}
