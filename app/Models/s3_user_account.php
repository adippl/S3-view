<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class s3_user_account extends Model
{
    use HasFactory;
		public function article(){
			return $this->belongsTo('App\User');}
}
