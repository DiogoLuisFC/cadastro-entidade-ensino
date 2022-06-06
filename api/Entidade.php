<?php
namespace Entidade;
abstract class  Entidade{
    public $nome;
    public $matricula;
    public $cpf;
    public $rg; 
    public $nascimento;
    public $sexo;
    public $n_mae;
    public $email; 
    public $telefone;

    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;

    public function __construct($nome,$matricula,$cpf,$rg,$nascimento,$sexo,$n_mae,$email,$telefone,$logradouro,$numero,$bairro,$cidade,$estado)
    {
        $this->nome=$nome;
        $this->matricula=$matricula;
        $this->cpf=$cpf;
        $this->rg=$rg; 
        $this->nascimento=$nascimento;
        $this->sexo=$sexo;
        $this->n_mae=$n_mae;
        $this->email=$email; 
        $this->telefone=$telefone;
    
        $this->logradouro=$logradouro;
        $this->numero=$numero;
        $this->bairro=$bairro;
        $this->cidade=$cidade;
        $this->estado=$estado;
    }
    private function validaCpf()
    {
        $msgErro = "CPF.";
        if(strlen($this->cpf) != 11){
            return $msgErro;
        }
        elseif(!is_numeric($this->cpf)){
            return $msgErro;
        }
    }

    private function validaNome()
    {   $msgErro = "Nome.";
        if(str_word_count($this->nome)<2){
            return $msgErro;
        }
    }
    private function validaTelefone()
    {
        $msgErro = "Telefone.";
        if(strlen($this->telefone) != 11 && strlen($this->telefone) != 10){
            return $msgErro;
        }
        elseif(!is_numeric($this->telefone)){
            return $msgErro;
        }
    }
    private function validaEstado()
    {
        $msgErro = "Estado.";
        if(strlen($this->estado) != 2){
            return $msgErro;
        }
        elseif(!ctype_alpha($this->estado)){
            return $msgErro;
        }
    }
    function validarDados(){
        $msgErro = "";
        $msgErro .= $this->validaCpf();
        $msgErro .= $this->validaNome();
        $msgErro .= $this->validaTelefone();
        $msgErro .= $this->validaEstado();
        return $msgErro;
    }

}
?>