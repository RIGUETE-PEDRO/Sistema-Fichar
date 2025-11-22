<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidade
 * 
 * @property int $id
 * @property string $nome
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Medico[] $medicos
 *
 * @package App\Models
 */
class Especialidade extends Model
{
	protected $table = 'especialidades';

	protected $fillable = [
		'nome'
	];

	public function medicos()
	{
		return $this->hasMany(Medico::class);
	}
}
