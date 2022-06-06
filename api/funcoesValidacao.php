<?php
    function validaCpf($cpf)
    {
        $msgErro = "CPF.";
        if(strlen($cpf) != 11){
            return $msgErro;
        }
        elseif(!is_numeric($cpf)){
            return $msgErro;
        }
    }
    function validaNome($nome)
    {   $msgErro = "Nome.";
        if(str_word_count($nome)<2){
            return $msgErro;
        }
    }
    function validaTelefone($telefone)
    {
        $msgErro = "Telefone.";
        if(strlen($telefone) != 11 && strlen($telefone) != 10){
            return $msgErro;
        }
        elseif(!is_numeric($telefone)){
            return $msgErro;
        }
    }


    // **************************


    function validaMatricula($matricula)
    {
        $msgErro = "Matrícula.";
        if(strlen($matricula) != 6 || !ctype_alnum($matricula)){
            return $msgErro;
        }
        else{
            $numerico=0;
            for($cont = 0;$cont< strlen($matricula);$cont++)
            {
                if (is_numeric($matricula[$cont])){
                    $numerico++;
                }
            }
            if($numerico != 4){
                echo $numerico; 
                return $msgErro;
            } 
            
        } 
    }

    function validaAnoMatricula($anoMatricula)
    {
        $msgErro = "Ano de Matrícula.";
        if(strlen($anoMatricula) != 4 || !is_numeric($anoMatricula)){
            return $msgErro;
        }
        elseif($anoMatricula > date("Y")  || $anoMatricula < 1900 ){
            return $msgErro;
        }
    }
    function validaEstado($estado)
    {
        $msgErro = "Estado.";
        if(strlen($estado) != 2){
            return $msgErro;
        }
        elseif(!ctype_alpha($estado)){
            return $msgErro;
        }
    }
