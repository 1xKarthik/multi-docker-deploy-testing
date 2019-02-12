<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsApikey
 * 
 * @property int $id
 * @property string $screetkey
 * @property int $hit
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsApikey extends Eloquent
{
	protected $table = 'cms_apikey';

	protected $casts = [
		'hit' => 'int'
	];

	protected $fillable = [
		'screetkey',
		'hit',
		'status'
	];
}
