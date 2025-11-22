<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agendamento
 * 
 * @property int $id
 * @property int $vaga_id
 * @property int $usuario_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Usuario $usuario
 * @property Vaga $vaga
 *
 * @package App\Models
 */
class Agendamento extends Model
{
	protected $table = 'agendamentos';

	protected $casts = [
		'vaga_id' => 'int',
		'usuario_id' => 'int'
	];

	protected $fillable = [
		'vaga_id',
		'usuario_id'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}

	public function vaga()
	{
		return $this->belongsTo(Vaga::class);
	}
}
