<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;

class Subjects
{
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'descricao',
        'data_inicio',
        'data_fim',
        'data_inicio',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'data_inicio' => 'datetime',
        'data_fim' => 'datetime',
        'email_verified_at' => 'datetime',
    ];
}
