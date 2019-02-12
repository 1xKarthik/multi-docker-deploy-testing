<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsLog
 * 
 * @property int $id
 * @property string $ipaddress
 * @property string $useragent
 * @property string $url
 * @property string $description
 * @property string $details
 * @property int $id_cms_users
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsLog extends Eloquent
{
	protected $casts = [
		'id_cms_users' => 'int'
	];

	protected $fillable = [
		'ipaddress',
		'useragent',
		'url',
		'description',
		'details',
		'id_cms_users'
	];
}
