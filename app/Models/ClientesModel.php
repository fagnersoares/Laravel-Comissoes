<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    public $timestamps = false;
    protected $table = 'op_cliente';
    protected $fillable = [
                                'cliente_cnpj',
                                'cliente_nome',
                                'cliente_cep',
                                'cliente_endereco',
                                'cliente_bairro',
                                'cliente_cidade',
                                'cliente_estado',
                                'cliente_situacao'
                            ];
}
