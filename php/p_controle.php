<?php
                             // ESSA DAQUI SE REFERE A TABELA DE TREINADORES
    include_once "p_cadastro.php";

    $t_name = $_POST['t_name'];
    $t_phone = $_POST['t_phone'];
    $t_email = $_POST['t_email'];
    $t_esp = $_POST['t_esp'];

    $Treinador = new Treinador();

    $Treinador->sett_name($t_name);
    $Treinador->sett_phone($t_phone);
    $Treinador->sett_email($t_email);
    $Treinador->sett_esp($t_esp);

    //===============Inserir======================

    if (isset($_POST["Inserir"]))
    {

        if ($Treinador->Inserir())
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

            $Resultado = $Treinador->Pesquisar();

            foreach($Resultado as $res){
                echo $res['t_name']."<br>";
                echo $res['t_phone']."<br>";
                echo $res['t_email']."<br>";
                echo $res['t_esp']."<br>";
            }

    }

    //================Apagar========================

    if(isset($_POST["Apagar"]))
    {

        


    }

?>