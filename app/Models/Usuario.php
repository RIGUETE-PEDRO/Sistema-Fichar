<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string|null $telefone
 * @property int $role_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Agendamento[] $agendamentos
 * @property Collection|LogsSistema[] $logs_sistemas
 * @property Collection|Medico[] $medicos
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'email',
		'senha',
		'telefone',
		'role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function agendamentos()
	{
		return $this->hasMany(Agendamento::class);
	}

	public function logs_sistemas()
	{
		return $this->hasMany(LogsSistema::class);
	}

	public function medicos()
	{
		return $this->hasMany(Medico::class);
	}
}
