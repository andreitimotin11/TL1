<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 21.08.2017
 * Time: 16:12
 */
namespace App\Http\Controllers;

use App\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Feedback as FeedbackModel;

class Feedback extends Controller
{
	public function actionShowForm()
	{
		// Arata datele
		return view('form');
	}
	
	public function actionSaveForm()
	{
		//Salveaza forma in BD
//		dd($request)
		$post = $_POST;
		
//		dd($_POST);
		/*$keys = [];
		$values = [];
		foreach ($post as $key => $item) {
			if(!empty($item)){
				$keys[] = $key;
				$values[] = $item;
			}
		}
		dump($keys);
		dump($values);
//		dd($post);
		$sql = '';
		$arr = [
			':name'=> 'name',
			':email'=> 'email',
			':phone'=> 'phone',
//			':company'=> 'company',
//			':message'=> 'message',
		];
		DB::insert("INSERT INTO `Laravel1`.`feedback` (`id`, `name`, `email`, `phone`, `company`, `message`) VALUES (NULL, 'name', 'email', 'phone', 'company', 'message')");*/
		$message = new Message();
		$message->name = $post['name'];
		$message->email = $post['email'];
		$message->phone = $post['phone'];
		$message->company = $post['company'];
		$message->message = $post['message'];
		$message->save();
		// INSERT INTO `table` (name, email, phone) VALUES (:name, :email, :phone)
//		$model = new FeedbackModel();
//		dd($model);
//		$post = $model->clear($_POST);
		$post = $_POST;
//		$model->actionSaveForm($post);
		
	}
}