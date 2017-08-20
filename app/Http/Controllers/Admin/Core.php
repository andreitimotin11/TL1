<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
	protected static $articles;
	public function __construct()
	{
		
	}
	public static function addArticles($array){
		return self::$articles[] = $array;
	}
	
	public function getArticles()
	{
//		$articles = DB::table('articles')->get();
//		$articles = DB::table('articles')->first();
//		$articles = DB::table('articles')->value('name');
		/*DB::table('articles')->chunk(2, function ($articles){
			foreach ($articles as $article) {
				Core::addArticles($article);
			}
		});*/
//		$articles = DB::table('articles')->pluck('text');
//		$articles = DB::table('articles')->max('id');
		
//		$articles = DB::table('articles')->select('name', 'id', 'text')->get();
//		$articles = DB::table('articles')->distinct()->select('name')->get();
		$query = DB::table('articles')->select('name','text', 'id');
		
//		$articles = $query->addSelect('text AS fullText')->get();
		
		//WHERE
		$articles = $query
									->where([
										['id', '>', 5],
									['name', 'like', 'Tes%', 'or'],
									
									])
			->get();
		
		dump($articles);
//		dump(self::$articles);
	}
	public function getArticle($id)
	{
		
	}
}
