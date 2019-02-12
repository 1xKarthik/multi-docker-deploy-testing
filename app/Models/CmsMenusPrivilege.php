<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsMenusPrivilege
 * 
 * @property int $id
 * @property int $id_cms_menus
 * @property int $id_cms_privileges
 *
 * @package App\Models
 */
class CmsMenusPrivilege extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id_cms_menus' => 'int',
		'id_cms_privileges' => 'int'
	];

	protected $fillable = [
		'id_cms_menus',
		'id_cms_privileges'
	];
}
