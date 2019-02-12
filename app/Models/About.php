<?php

/**
 * Date: Sun, 06 Jan 2019 09:09:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class About
 * 
 * @property int $id
 * @property string $full_name
 * @property string $title
 * @property string $linkedin_url
 * @property string $github_url
 * @property int $intro_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class About extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'about';

	protected $casts = [
		'intro_id' => 'int'
	];

	protected $fillable = [
		'full_name',
		'title',
		'linkedin_url',
		'github_url',
		'intro_id'
	];
}
