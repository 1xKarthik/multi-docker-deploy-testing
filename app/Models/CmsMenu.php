<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsMenu
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $path
 * @property string $color
 * @property string $icon
 * @property int $parent_id
 * @property bool $is_active
 * @property bool $is_dashboard
 * @property int $id_cms_privileges
 * @property int $sorting
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsMenu extends Eloquent
{
	protected $casts = [
		'parent_id' => 'int',
		'is_active' => 'bool',
		'is_dashboard' => 'bool',
		'id_cms_privileges' => 'int',
		'sorting' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'path',
		'color',
		'icon',
		'parent_id',
		'is_active',
		'is_dashboard',
		'id_cms_privileges',
		'sorting'
	];
}
