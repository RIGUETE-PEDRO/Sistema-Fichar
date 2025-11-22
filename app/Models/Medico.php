<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medico
 * 
 * @property int $id
 * @property int $usuario_id
 * @property int $especialidade_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Especialidade $especialidade
 * @property Usuario $usuario
 * @property Collection|DiasTrabalho[] $dias_trabalhos
 * @property Collection|Vaga[] $vagas
 *
 * @package App\Models
 */
class Medico extends Model
{
	protected $table = 'medicos';

	protected $casts = [
		'usuario_id' => 'int',
		'especialidade_id' => 'int'
	];

	protected $fillable = [
		'usuario_id',
		'especialidade_id'
	];

	public function especialidade()
	{
		return $this->belongsTo(Especialidade::class);
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}

	public function dias_trabalhos()
	{
		return $this->hasMany(DiasTrabalho::class);
	}

	public function vagas()
	{
		return $this->hasMany(Vaga::class);
	}
}
