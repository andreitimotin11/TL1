<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'home', 'uses' => 'Admin\IndexController@show']);
Route::get('/article/{id}', ['as'=>'article',function ($id) {
	echo $id;
}]);
Route::get('/articles', ['as'=>'articles','uses'=> 'Admin\Core@getArticles']);
Route::get('/page/{cat}/{id}', function ($cat, $id) {
	
//	echo config('app.locale');
	
	echo $id . ', ' . $cat;
})->where([ 'cat' => '[A-Za-z]+']);

Route::post('/comments', function () {
	print_r($_POST);
//	print_r($_GET);
});
Route::get('/form1', function (){
	 return view('form1');
});
Route::group(['prefix'=>'admin'],function (){
	Route::get('page/create/{var}',function ($id){
		$route = Route::current();
//		echo $route->getName();
//		echo $route->parameter('var',20);
		print_r($route->parameters()) ;
//		return redirect()->route('article', ['id'=>26]);
	})->name('createpage');
	Route::get('page/edit',function (){
		echo 'Page/edit';
	});
});
Route::get('/about', ['uses' =>'Admin\AboutController@show', 'as'=> 'about']);
