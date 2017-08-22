<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
	//
	
	public function clear()
	{
		
	}
	
	public function saveForm(array $post)
	{
		dd($post);
		$sql = 'INSERT ';
//		DB::insert($sql);
	}
	
}
