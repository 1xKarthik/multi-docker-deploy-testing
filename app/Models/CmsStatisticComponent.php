<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsStatisticComponent
 * 
 * @property int $id
 * @property int $id_cms_statistics
 * @property string $componentID
 * @property string $component_name
 * @property string $area_name
 * @property int $sorting
 * @property string $name
 * @property string $config
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsStatisticComponent extends Eloquent
{
	protected $casts = [
		'id_cms_statistics' => 'int',
		'sorting' => 'int'
	];

	protected $fillable = [
		'id_cms_statistics',
		'componentID',
		'component_name',
		'area_name',
		'sorting',
		'name',
		'config'
	];
}
