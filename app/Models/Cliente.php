<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $primNombre
 * @property $primApellido
 * @property $cargo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
  public function scopeBuscarpor($query, $tipo, $buscar)
  {
    if ( ($tipo) && ($buscar) ) {
      return $query->where($tipo,'like',"%$buscar%");
    }
  }

    static $rules = [
		'primNombre' => 'required',
		'primApellido' => 'required',
		'cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['primNombre','primApellido','cargo'];



}
