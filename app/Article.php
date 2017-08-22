<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	//
	protected $table = 'articles'; // Nume tabelului
	protected $primaryKey = 'id';
//	public $incrementing;
//	public $timestamps = false;
	protected $fillable = ['name', 'text'];
	protected $guarded = ['*'];
	protected $dates = ['deleted_at'];
}
