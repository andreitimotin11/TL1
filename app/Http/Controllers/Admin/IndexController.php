<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function show()
	{
		
		$data = ['title'=> 'Hello world'];
//		return view('default.template',$data);
//		return view('default.template')->with($data);
		if(view()->exists('default.template')){
			$path = config('view.paths');
//			dd($path);
			return view()->file($path[0] . '/default/template.blade.php')->withTitle('Hello world');
			return view('default.template')->withTitle('Hello world');
		}
		abort(404);
	}
}
