<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsPrivilegesRole
 * 
 * @property int $id
 * @property bool $is_visible
 * @property bool $is_create
 * @property bool $is_read
 * @property bool $is_edit
 * @property bool $is_delete
 * @property int $id_cms_privileges
 * @property int $id_cms_moduls
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsPrivilegesRole extends Eloquent
{
	protected $casts = [
		'is_visible' => 'bool',
		'is_create' => 'bool',
		'is_read' => 'bool',
		'is_edit' => 'bool',
		'is_delete' => 'bool',
		'id_cms_privileges' => 'int',
		'id_cms_moduls' => 'int'
	];

	protected $fillable = [
		'is_visible',
		'is_create',
		'is_read',
		'is_edit',
		'is_delete',
		'id_cms_privileges',
		'id_cms_moduls'
	];
}
