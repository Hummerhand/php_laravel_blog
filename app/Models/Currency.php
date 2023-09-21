<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    // protected $table = 'foobar'; Если таблица имеет другое название, а не такое как модел во множественном числе
    // protected $primaryKey = 'uuid';  Если поле id называется как то по другомуЮ можно его изменить

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'price',
        'active',
        'sort',
    ];

    protected $hidden = [
        'price',
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'integer',
    ];

    protected $dates = [
        // Можно указать кастомные поля, которые нужно автоматом преобразовывать в объект класса Carbon
    ];
}
