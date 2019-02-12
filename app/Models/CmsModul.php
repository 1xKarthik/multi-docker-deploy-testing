<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsModul
 * 
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string $path
 * @property string $table_name
 * @property string $controller
 * @property bool $is_protected
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class CmsModul extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'is_protected' => 'bool',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'name',
		'icon',
		'path',
		'table_name',
		'controller',
		'is_protected',
		'is_active'
	];
}
