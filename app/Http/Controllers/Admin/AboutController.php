<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
    //
	public function show()
	{
		
		$data = ['title'=> 'Hello world'];
		
		
		$result = DB::insert("INSERT INTO `articles` (`name`, `text`) VALUES (?, ?)",['test1', 'text']);
//		DB::update('UPDATE `articles` SET `name` = ? WHERE id = ?', ['nume', 6]);
//		$result = DB::connection()->getPdo()->lastInsertID();
//		DB::delete('DELETE FROM `articles` WHERE id = ?', [18]);
		$articles = DB::select('SELECT * FROM `articles` ');
//		dump($result);
		dump($articles);
		return view('default.template')->withTitle('Hello world');
	}
}
