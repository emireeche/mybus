<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $cliente_id
 * @property $ruta_id
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $costo_total
 * @property $estadoreserva
 * @property $numeropasajeros
 * @property $costoxpersona
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta $ruta
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'ruta_id' => 'required',
		'fecha_inicio' => 'required',
		'fecha_fin' => 'required',
		'costo_total' => 'required',
		'estadoreserva' => 'required',
		'numeropasajeros' => 'required',
		'costoxpersona' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','ruta_id','fecha_inicio','fecha_fin','costo_total','estadoreserva','numeropasajeros','costoxpersona'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Ruta', 'id', 'ruta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'cliente_id');
    }
    

}
