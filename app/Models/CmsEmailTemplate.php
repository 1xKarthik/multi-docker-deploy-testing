<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsEmailTemplate
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $subject
 * @property string $content
 * @property string $description
 * @property string $from_name
 * @property string $from_email
 * @property string $cc_email
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsEmailTemplate extends Eloquent
{
	protected $fillable = [
		'name',
		'slug',
		'subject',
		'content',
		'description',
		'from_name',
		'from_email',
		'cc_email'
	];
}
