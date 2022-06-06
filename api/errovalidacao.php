<?php
    session_start();
    $msgErro = explode(".",$_SESSION['erro']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="bodyErro">
    <div class="box" id="boxErro" >
        <form >
            <fieldset class="field_erro">
                <legend class="leg_erro"><b>Dados Inválidos</b></legend>
                <br><br>
                <div class="inputBox" id="erro">
                    <?php
                        foreach($msgErro as $erro){
                            echo "$erro <br><br>";
                        }
                    ?>
                </div>
                <input type="button" name="submit" id="submit_erro" value="Voltar" onclick='history.go(-1)'>
            
            </fieldset>    
        </form>
    </div>
</body>
</html>