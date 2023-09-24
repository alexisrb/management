<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'update'];

    protected $dates = ['fecha_de_nacimiento', 'fecha_de_ingreso'];

    protected $fillable = [
        'numero_de_empleado',
        'puesto',
        'name',
        'email',
        'password',
        'estatus'
        ,
    ];
}
