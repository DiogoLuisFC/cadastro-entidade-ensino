<?php
use Professor\Professor;
use Aluno\Aluno;
include("\Aluno.php");
include("\Professor.php");

$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$nascimento = $_POST["nascimento"];
if (isset($_POST["sexo"])) $sexo = $_POST["sexo"];
$n_mae = $_POST["n_mae"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$formacao = $_POST["formacao"];
$instituicao = $_POST["instituicao"];

$curso = $_POST["curso"];
$turno = $_POST["turno"];
$ano_matricula = $_POST["ano_matricula"];

$logradouro = $_POST["logradouro"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$entidade = $_POST['entidade'];




if($entidade=='Professor'){
    $professor = new Professor($formacao,$instituicao,
        $nome,
        $matricula,
        $cpf,
        $rg,
        $nascimento,
        $sexo,
        $n_mae,
        $email,
        $telefone,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado,
        $entidade
    );
    // $msnErro = $professor->validarDados();
    // if($msnErro==""){
    //     echo json_encode('success');
    // }else{
    //     echo json_encode($msnErro);
    // }

}elseif($entidade=='Aluno'){
    $aluno = new Aluno($curso,$turno,$ano_matricula,
        $nome,
        $matricula,
        $cpf,
        $rg,
        $nascimento,
        $sexo,
        $n_mae,
        $email,
        $telefone,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado,
        $entidade
    );
    $msnErro=$aluno->validarDados();
    if($msnErro==""){
        echo json_encode('success');
    }else{
        echo json_encode($msnErro);
    }
}

?>