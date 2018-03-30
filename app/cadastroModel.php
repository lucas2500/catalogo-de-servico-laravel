<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastroModel extends Model
{
    protected $fillable = [
 
 	"nomeServico", "descricao", "departamento", "prioridade", "canalSuporte",
 	"canalSolicitacao", "horarioFunc", "sla", "status"

    ];

    protected $table = "cadastro_servicos";
}
