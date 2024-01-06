<?php
switch ($_REQUEST["acao"]) {

    //Cadastrar
    case 'cadastrar':
        $p_email = $_POST["p_email"];
        $p_tipo =$_POST["p_tipo"];
        $p_op = $_POST["p_op"];
        
        $sql = "INSERT INTO plano (p_tipo, p_op, p_email) 
        VALUES ('{$p_tipo}', '{$p_op}', '{$p_email}')";

        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar;</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar;</script>";};
        break;


    //Editar
    case 'editar':
        $p_email = $_POST["p_email"];
        $p_tipo =$_POST["p_tipo"];
        $p_op = $_POST["p_op"];


        $sql = "UPDATE plano SET 
        p_tipo='{$p_tipo}',
        p_op='{$p_op}',
        p_email='{$p_email}'
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
            
        $sql = "DELETE FROM plano WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
          
        if ($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar;</script>";
        }else{
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar;</script>";}
            break;
}