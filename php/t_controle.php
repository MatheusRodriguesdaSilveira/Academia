<?php
                                 // ESSA DAQUI SE REFERE A TABELA DE PLANOS
    include_once "t_cadastro.php";

    $p_tipo = $_POST['p_tipo'];
    $p_op = $_POST['p_op'];
    $p_email = $_POST['p_email'];
    

    $Plano = new Plano();

    $Plano->setp_tipo($p_tipo);
    $Plano->setp_op($p_op);
    $Plano->setp_email($p_email);

    //===============Inserir======================

    if (isset($_POST["Inserir"]))
    {

        if ($Plano->Inserir())
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

            $Resultado = $Plano->Pesquisar();

            foreach($Resultado as $res){
                echo $res['p_tipo']."<br>";
                echo $res['p_op']."<br>";
                echo $res['p_email']."<br>";
                echo $res['p_esp']."<br>";
            }

    }

    //================Apagar========================

    if(isset($_POST["Apagar"]))
    {

        


    }

?>