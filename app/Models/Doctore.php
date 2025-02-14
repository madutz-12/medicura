<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctore
 *
 * @property $id
 * @property $nombre
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $Cedula
 * @property $especialidad
 * @property $email
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'Cedula', 'especialidad', 'email'];


}
