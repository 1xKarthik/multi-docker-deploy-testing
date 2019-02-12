<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsPrivilege
 * 
 * @property int $id
 * @property string $name
 * @property bool $is_superadmin
 * @property string $theme_color
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsPrivilege extends Eloquent
{
	protected $casts = [
		'is_superadmin' => 'bool'
	];

	protected $fillable = [
		'name',
		'is_superadmin',
		'theme_color'
	];
}
