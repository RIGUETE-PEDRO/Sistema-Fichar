<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogsSistema
 * 
 * @property int $id
 * @property int|null $usuario_id
 * @property string $acao
 * @property string|null $detalhes
 * @property string|null $ip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class LogsSistema extends Model
{
	protected $table = 'logs_sistema';

	protected $casts = [
		'usuario_id' => 'int'
	];

	protected $fillable = [
		'usuario_id',
		'acao',
		'detalhes',
		'ip'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
}
