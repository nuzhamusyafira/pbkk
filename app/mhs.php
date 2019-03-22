<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
	protected $primaryKey = 'nrp';
	public $incrementing = false;

	protected $fillable = [
	'nrp','nama','nipdosenwali'
	];

	// cara has many
	// public function dosennya(){
	// 	return $this->belongsTo('App\dosen', 'nipdosenwali');
	// }

	// cara has one
	// public function dosennya()
 //    {
 //        return $this->hasOne('App\dosen', 'nip', 'nipdosenwali');
 //    }
}
