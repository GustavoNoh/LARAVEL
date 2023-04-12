<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Subject extends Model
{
    use HasFactory;
    //una asignatura tiene muchos temas
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    protected function ing(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),//strtoupper para convertir los valores a mayusculas 
            set: fn (string $value) => strtolower($value)//strtolower para convertir los valores a minusculas
        );
    }

    protected function especialidad(): Attribute
    {
        return Attribute::make(
            function ($value, $attributes) {
                switch ($attributes['carrera']) {
                    case 'isc':
                        return 'Ingeniería en Sistemas Computacionales';
                        break;
                    case 'ier':
                        return 'Ingeniería en Energías Renovables';
                        break;
                    case 'iem':
                        return 'Ingeniería Electromecánica';
                        break;
                    case 'ie':
                        return 'Ingeniería Electrónica';
                        break;
                    case 'ii':
                        return 'Ingeniería Industrial';
                        break;
                    default:
                        # code...
                        break;
                }
            }
        );
    }
}
