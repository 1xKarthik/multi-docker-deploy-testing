<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsDashboard
 * 
 * @property int $id
 * @property string $name
 * @property int $id_cms_privileges
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsDashboard extends Eloquent
{
	protected $table = 'cms_dashboard';

	protected $casts = [
		'id_cms_privileges' => 'int'
	];

	protected $fillable = [
		'name',
		'id_cms_privileges',
		'content'
	];
}
