<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
	protected $primaryKey = 'nip';
	public $incrementing = false;

	protected $fillable = [
	'nip','namadosen'
	];

	// cara has many
	// public function mhsnya(){
	// 	return $this->hasMany('App\mhs','nipdosenwali');
	// }

	// cara has one
	// public function mhsnya()
 //    {
 //        return $this->belongsTo('App\mhs', 'nipdosenwali', 'nip');
 //    }

}
