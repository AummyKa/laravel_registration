<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;
	protected $fillable = ['name', 'lastname' ,'username','password','sex','date_of_birth','interest'];


	public static function getData()
	{
	  $results = Self::all();
	  return $results;
	}

	
	public static function destroy($id)
	{
	   	Self::find($id)->delete();
	   	return redirect('results');
	}


}