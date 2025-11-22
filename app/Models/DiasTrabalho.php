<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiasTrabalho
 * 
 * @property int $id
 * @property int $medico_id
 * @property string $dia_semana
 * @property Carbon $hora_inicio
 * @property Carbon $hora_fim
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medico $medico
 *
 * @package App\Models
 */
class DiasTrabalho extends Model
{
	protected $table = 'dias_trabalho';

	protected $casts = [
		'medico_id' => 'int',
		'hora_inicio' => 'datetime',
		'hora_fim' => 'datetime'
	];

	protected $fillable = [
		'medico_id',
		'dia_semana',
		'hora_inicio',
		'hora_fim'
	];

	public function medico()
	{
		return $this->belongsTo(Medico::class);
	}
}
