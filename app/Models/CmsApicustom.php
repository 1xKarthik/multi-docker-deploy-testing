<?php

/**
 * Date: Sun, 06 Jan 2019 09:09:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CmsApicustom
 * 
 * @property int $id
 * @property string $permalink
 * @property string $tabel
 * @property string $aksi
 * @property string $kolom
 * @property string $orderby
 * @property string $sub_query_1
 * @property string $sql_where
 * @property string $nama
 * @property string $keterangan
 * @property string $parameter
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $method_type
 * @property string $parameters
 * @property string $responses
 *
 * @package App\Models
 */
class CmsApicustom extends Eloquent
{
	protected $table = 'cms_apicustom';

	protected $fillable = [
		'permalink',
		'tabel',
		'aksi',
		'kolom',
		'orderby',
		'sub_query_1',
		'sql_where',
		'nama',
		'keterangan',
		'parameter',
		'method_type',
		'parameters',
		'responses'
	];
}
