<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autobus
 *
 * @property $id
 * @property $nombre
 * @property $capacidad
 * @property $descripcion
 * @property $placa
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autobus extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'capacidad' => 'required',
		'descripcion' => 'required',
		'placa' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','capacidad','descripcion','placa','imagen'];



}
