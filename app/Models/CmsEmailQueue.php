<?php

/**
 * Date: Sun, 06 Jan 2019 09:10:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsEmailQueue
 * 
 * @property int $id
 * @property \Carbon\Carbon $send_at
 * @property string $email_recipient
 * @property string $email_from_email
 * @property string $email_from_name
 * @property string $email_cc_email
 * @property string $email_subject
 * @property string $email_content
 * @property string $email_attachments
 * @property bool $is_sent
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class CmsEmailQueue extends Eloquent
{
	protected $casts = [
		'is_sent' => 'bool'
	];

	protected $dates = [
		'send_at'
	];

	protected $fillable = [
		'send_at',
		'email_recipient',
		'email_from_email',
		'email_from_name',
		'email_cc_email',
		'email_subject',
		'email_content',
		'email_attachments',
		'is_sent'
	];
}
