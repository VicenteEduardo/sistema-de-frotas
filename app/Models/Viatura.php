<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Viatura extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'viaturas';
    public $fillable = ['matricula', 'modelo', 'quantidade', 'descricao', 'imagem_viatura'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}
