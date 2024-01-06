<link rel="stylesheet" type="text/css" href="css/cadastro.css">
  <?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $clientes = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }   

            $_SESSION['id'] = $clientes['id'];
            $_SESSION['nome'] = $clientes['nome'];

            header("Location:./painel_cliente.html");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<h1>Login Treinadores</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="Senha">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-link1">Enviar</button>
    </div>

