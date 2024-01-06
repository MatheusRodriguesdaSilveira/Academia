<?php

    include_once "c_cadastro.php";

    $NOME_CLIENTE = $_POST['c_name'];
    $FONE_CLIENTE = $_POST['c_fone'];
    $EMAIL_CLIENTE = $_POST['c_email'];
    $PASS_CLIENTE = $_POST['c_pass'];

    $Cliente = new Cliente();

    $Cliente->setNOME_CLIENTE($NOME_CLIENTE);
    $Cliente->setFONE_CLIENTE($FONE_CLIENTE);
    $Cliente->setEMAIL_CLIENTE($EMAIL_CLIENTE);
    $Cliente->setPASS_CLIENTE($PASS_CLIENTE);

    //===============Cadastrar======================

    if (isset($_POST["Cadastrar"]))
    {

        if ($Cliente->Cadastrar())
        {
            echo "Inclusão executado com sucesso";
        }
        else
        {
            echo "Erro na inclusão, refazer a operação";
        }

    }
    
    //=================Pesquisar====================

    if (isset($_POST["Pesquisar"]))
    {

            $Resultado = $Cliente->Pesquisar();

            foreach($Resultado as $res){
                echo $res['NOME_CLIENTE']."<br>";
                echo $res['FONE_CLIENTE']."<br>";
                echo $res['EMAIL_CLIENTE']."<br>";
                echo $res['PASS_CLIENTE']."<br>";
            }

    }

    //================Apagar========================

    if(isset($_POST["Apagar"]))
    {

        


    }

?>