<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $primaryKey = 'kode_mk';
	public $incrementing = false;

	protected $fillable = [
	'kode_mk','nama_mk','sks'
	];
}
