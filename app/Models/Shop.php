<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shop
 * 
 * @property int $id
 * @property string|null $shop_user
 *
 * @package App\Models
 */
class Shop extends Model
{
	protected $table = 'shop';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'shop_user'
	];
}
