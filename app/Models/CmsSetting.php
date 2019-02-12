<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsSetting
 * 
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $content_input_type
 * @property string $dataenum
 * @property string $helper
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $group_setting
 * @property string $label
 *
 * @package App\Models
 */
class CmsSetting extends Eloquent
{
	protected $fillable = [
		'name',
		'content',
		'content_input_type',
		'dataenum',
		'helper',
		'group_setting',
		'label'
	];
}
