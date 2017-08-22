<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
	protected static $articles;
	
	public function __construct()
	{
		
	}
	
	public static function addArticles($array)
	{
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
//		$query = DB::table('articles')->select('name','text', 'id');

//		$articles = $query->addSelect('text AS fullText')->get();
		
		//WHERE
		/*$articles = $query
									->where([
										['id', '>', 5],
									['name', 'like', 'Tes%', 'or'],
									
									])
			->get();
		
		dump($articles);*/

//		$articles = DB::table('articles')->get();
//		$articles = Article::where('id','>',7)->get();
//		foreach ($articles as $article) {
//			echo $article->text . '<br>';
//		}
//
//		$articles = Article::find(1);
//		$articles = Article::where('id', 1)->first();
		
//		Article::findOrFail(111);
//		Article::where('id',1)->firstOrFail();
//
//		$articles = Article::find([1, 2, 3]);
//		echo $articles[0]->text;
//		dump($articles);
//
//		$article->name = 'New Article';
//		$article->text = 'New Text';
//		$article->save();
//		$article = Article::find(24);
//		$article->name = 'New name 2';
//		$article->text = 'New text 2';
//		$article->save();
		Article::create([
				'name'=>'Hello world',
				'text'=>'text'
			]
		);
//		dump($article);
//		dump(self::$articles);
	}
	
	public function getArticle($id)
	{
		
	}
}
