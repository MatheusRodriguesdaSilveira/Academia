<?php
include "c_cadastro.php";
include "c_controle.php";
include "conexao.php";

session_start();


// VERIFICADOR SE POSSUÍ DADOS NULL


if(empty($_POST) or (empty($_POST["EMAIL_CLIENTE"]) or 
(empty($_POST["PASS_CLIENTE"]))))
{print"<script>location.href='index.php';</script>";

}

$sql = "SELECT * FROM cliente 
        WHERE  NOME_CLIENTE = '($EMAIL_CLIENTE)' 
        AND PASS_CLIENTE = '($PASS_CLIENTE)'";

$res = $conn->query($sql) or die ($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd >0){
    $_SESSION["EMAIL_CLIENTE"] = $EMAIL_CLIENTE;
    $_SESSION["NOME_CLIENTE"] = $row->NOME_CLIENTE;
    print "<script>location.href='dashboard.php;</script>";
}else{
    print"<script>alert('Email e/ou senha incorreta');</script>";
    print"<script>location.href='index.php';</script>";
}