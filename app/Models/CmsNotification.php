<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsNotification
 * 
 * @property int $id
 * @property int $id_cms_users
 * @property string $content
 * @property string $url
 * @property bool $is_read
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsNotification extends Eloquent
{
	protected $casts = [
		'id_cms_users' => 'int',
		'is_read' => 'bool'
	];

	protected $fillable = [
		'id_cms_users',
		'content',
		'url',
		'is_read'
	];
}
