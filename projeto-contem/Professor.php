<?php
namespace Professor;
use Entidade\Entidade;
include("\Entidade.php");
class Professor extends Entidade{
    public $formacao;
    public $instituicao;

    public function __construct($formacao,$instituicao,$nome,$matricula,$cpf,$rg,$nascimento,$sexo,$n_mae,$email,$telefone,$logradouro,$numero,$bairro,$cidade,$estado)
    {
        $this->formacao=$formacao;
        $this->instituicao=$instituicao;
        parent::__construct($nome,$matricula,$cpf,$rg,$nascimento,$sexo,$n_mae,$email,$telefone,$logradouro,$numero,$bairro,$cidade,$estado);
    }
}
?>