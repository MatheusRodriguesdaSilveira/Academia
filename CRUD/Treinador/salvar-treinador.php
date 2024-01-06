<?php
switch ($_REQUEST["acao"]) {

    //Cadastrar
    case 'cadastrar':
        $t_nome = $_POST["t_nome"];
        $t_fone = $_POST["t_fone"];
        $t_email = $_POST["t_email"];
        $t_esp = $_POST["t_esp"];
        
        $sql = "INSERT INTO treinador (t_nome, t_fone, t_email,t_esp) 
        VALUES ('{$t_nome}', '{$t_fone}', '{$t_email}','{$t_esp}')";

        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar;</script>";};
        break;


    //Editar
    case 'editar':
        $t_nome = $_POST["t_nome"];
        $t_fone = $_POST["t_fone"];
        $t_email = $_POST["t_email"];
        $t_esp = $_POST["t_esp"];


        $sql = "UPDATE treinador SET 
        t_nome='{$t_nome}', 
        t_fone='{$t_fone}',
        t_email='{$t_email}',
        t_esp='{$t_esp}'
        WHERE id=".$_REQUEST["id"];
        
        

        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar;</script>";
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar;</script>";}
        break;
    
       
    //Excluir
     case 'excluir':
            
        $sql = "DELETE FROM treinador WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
          
        if ($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar;</script>";
        }else{
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar;</script>";}
            break;
}