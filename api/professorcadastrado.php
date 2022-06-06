<?php
    session_start();
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $n_mae = $_POST["n_mae"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $formacao = $_POST["formacao"];
    $instituicao = $_POST["instituicao"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    require_once('funcoesValidacao.php');
    if(validaMatricula($matricula)!= ""){
        $msgErro[] = validaMatricula($matricula);
    }
    if(validaCpf($cpf)!= ""){
        $msgErro[] = validaCpf($cpf);
    }
    if(validaNome($nome)!= ""){
        $msgErro[] = validaNome($nome);
    }
    if(validaNome($n_mae)!= ""){
        $msgErro[] = validaNome($n_mae);
    }
    if(validaTelefone($telefone)!= ""){
        $msgErro[] = validaTelefone($telefone);
    }
    if(validaEstado($estado)!= ""){
        $msgErro[] = validaEstado($estado);
    }
    if(!empty($msgErro)){
        
        $_SESSION['erro'] = implode( "", $msgErro );
        header('location: errovalidacao.php');  
    }
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Professor</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div class="box">
        <form name="professor" >
            <fieldset>
                <legend><b>Professor Cadastrado</b></legend>
                <br><br>
                <div class="inputBox">
                    <label>Nome: </label>
                    <?php echo $nome; ?>
                </div>
                <br>
                <div class="inputBox">
                    <label>Matrícula:</label>
                    <?php echo $matricula; ?>
                </div>  
                <br>
                <div class="inputBox">                 
                    <label>CPF:</label>
                    <?php echo $cpf; ?>
                </div>
                <br>
                <div class="inputBox">                   
                    <label>RG:</label>
                    <?php echo $rg; ?>
                </div>  
                <br>
                <div class="inputBox"> 
                    <label>Data de nascimento:</label>
                    <?php 
                        $date = date_create($nascimento);
                        echo date_format($date, 'd-m-Y'); 
                    ?>
                </div>           
                <br>
                <div class="inputBox">              
                    <label>Sexo:</label>
                    <?php echo $sexo; ?>
                </div>
                <br>
                <div class="inputBox">
                    <label>Nome da mãe:</label>
                    <?php echo $n_mae; ?>
                </div>   
                <br>
                <div class="inputBox">
                    <label>E-mail:</label>
                    <?php echo $email; ?>
                </div>  
                <br>
                <div class="inputBox">
                    <label>Telefone:</label>
                    <?php echo $telefone; ?>
                </div>  
                <br>
                <div class="inputBox">
                    <label>Formação:</label>
                    <?php echo $formacao; ?>
                </div>  
                <br>
                <div class="inputBox">
                    <label>Instituição de Formação:</label>
                    <?php echo $instituicao; ?>
                </div>  
                <br>
                <fieldset class="field_endereco">
                    <legend id="leg_end"><b>Endereço</b></legend>
                    <br>
                    <div class="inputBox">
                        <label>Logradouro:</label>
                        <?php echo $logradouro; ?>
                    </div>  
                    <br>
                    <div class="inputBox"> 
                        <label>Número:</label>
                        <?php echo $numero; ?>
                    </div>  
                    <br> 
                    <div class="inputBox">
                        <label>Bairro:</label>
                        <?php echo $bairro; ?>
                    </div>  
                    <br>
                    <div class="inputBox">
                        <label>Cidade:</label>
                        <?php echo $cidade; ?>
                    </div>  
                    <br>
                    <div class="inputBox">
                        <label>Estado:</label>
                        <?php echo $estado; ?>
                    </div> 
                    <br>   
                </fieldset>
                <br><br> 
                <a href="index.html"> <input type="button" name="submit" id="submit" value="Voltar"></a> 
            
            </fieldset>    
        </form>
    </div>
</body>
</html>