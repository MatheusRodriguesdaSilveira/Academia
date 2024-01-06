<?php
switch ($_REQUEST["acao"]) {

    //Cadastrar
    case 'cadastrar':
        $NOME_CLIENTE = $_POST["NOME_CLIENTE"];
        $FONE_CLIENTE = $_POST["FONE_CLIENTE"];
        $EMAIL_CLIENTE = $_POST["EMAIL_CLIENTE"];
        $PASS_CLIENTE =$_POST["PASS_CLIENTE"];
    
        
        $sql = "INSERT INTO cliente (NOME_CLIENTE, FONE_CLIENTE, EMAIL_CLIENTE, PASS_CLIENTE) 
        VALUES ('{$NOME_CLIENTE}','{$FONE_CLIENTE}','{$EMAIL_CLIENTE}', '{$PASS_CLIENTE}')";

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
        $NOME_CLIENTE = $_POST["NOME_CLIENTE"];
        $FONE_CLIENTE = $_POST["FONE_CLIENTE"];
        $EMAIL_CLIENTE = $_POST["EMAIL_CLIENTE"];
        $PASS_CLIENTE =$_POST["PASS_CLIENTE"];
        


        $sql = "UPDATE cliente SET 
        NOME_CLIENTE='{$NOME_CLIENTE}',
        FONE_CLIENTE='{$FONE_CLIENTE}',
        EMAIL_CLIENTE='{$EMAIL_CLIENTE}',
        PASS_CLIENTE='{$PASS_CLIENTE}'

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
            
        $sql = "DELETE FROM cliente WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
          
        if ($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar;</script>";
        }else{
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar;</script>";}
            break;
}