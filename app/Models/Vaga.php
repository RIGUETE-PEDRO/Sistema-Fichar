<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaga
 * 
 * @property int $id
 * @property int $medico_id
 * @property Carbon $data
 * @property Carbon $hora
 * @property bool $disponivel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Medico $medico
 * @property Collection|Agendamento[] $agendamentos
 *
 * @package App\Models
 */
class Vaga extends Model
{
	protected $table = 'vagas';

	protected $casts = [
		'medico_id' => 'int',
		'data' => 'datetime',
		'hora' => 'datetime',
		'disponivel' => 'bool'
	];

	protected $fillable = [
		'medico_id',
		'data',
		'hora',
		'disponivel'
	];

	public function medico()
	{
		return $this->belongsTo(Medico::class);
	}

	public function agendamentos()
	{
		return $this->hasMany(Agendamento::class);
	}
}
