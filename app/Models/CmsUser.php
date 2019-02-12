<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsUser
 * 
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property string $email
 * @property string $password
 * @property int $id_cms_privileges
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $status
 *
 * @package App\Models
 */
class CmsUser extends Eloquent
{
	protected $casts = [
		'id_cms_privileges' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'photo',
		'email',
		'password',
		'id_cms_privileges',
		'status'
	];
}
