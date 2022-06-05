<?php
namespace Aluno;
include("Entidade.php");
use Entidade\Entidade;

class Aluno extends Entidade{
    public $curso;
    public $turno;
    public $ano_matricula;

    public function __construct($curso,$turno,$ano_matricula,$nome,$matricula,$cpf,$rg,$nascimento,$sexo,$n_mae,$email,$telefone,$logradouro,$numero,$bairro,$cidade,$estado)
    {
        $this->curso=$curso;
        $this->turno=$turno;
        $this->ano_matricula=$ano_matricula;
        parent::__construct($nome,$matricula,$cpf,$rg,$nascimento,$sexo,$n_mae,$email,$telefone,$logradouro,$numero,$bairro,$cidade,$estado);
    }

    private function validaMatricula()
    {
        $msgErro = "Matrícula.";
        if(strlen($this->matricula) != 6 || !ctype_alnum($this->matricula)){
            return $msgErro;
        }
        else{
            $numerico=0;
            for($cont = 0;$cont< strlen($this->matricula);$cont++)
            {
                if (is_numeric($this->matricula[$cont])){
                    $numerico++;
                }
            }
            if($numerico != 4){
                echo $numerico; 
                return $msgErro;
            } 
            
        } 
    }

    private function validaAnoMatricula()
    {
        $msgErro = "Ano de Matrícula.";
        if(strlen($this->anoMatricula) != 4 || !is_numeric($this->anoMatricula)){
            return $msgErro;
        }
        elseif($this->anoMatricula > date("Y")  || $this->anoMatricula < 1900 ){
            return $msgErro;
        }
    }
    public function validarDados(){
        $msgErro = "";
        $msgErro .= parent::validarDados();
        $msgErro .= $this->validaMatricula();
        $msgErro .= $this->validaAnoMatricula();
        return $msgErro;
    }

}
?>