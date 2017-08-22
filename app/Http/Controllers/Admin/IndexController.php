<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
class IndexController extends Controller
{
	public function __construct()
	{
//		$this->middleware('mymiddle');
	}
	
	//
	public function show()
	{
//		$route = Route::current()->uri;
//		dd($route);
		$data = ['title'=> 'Hello world'];
//		return view('default.template',$data);
//		return view('default.template')->with($data);
		
		if(view()->exists('default.template')){
			
			/*$path = config('view.paths');
//			dd($_ENV);
			return view()->file($path[0] . '/default/template.blade.php')->withTitle('Hello world');*/
//			return view('default.template')->withTitle('Hello world');
			$data = ['title'=>'Trulala'];
//			dd(view('default.template',$data)->getName());
			return view('default.template',$data);
		}
		abort(404);
	}
}
