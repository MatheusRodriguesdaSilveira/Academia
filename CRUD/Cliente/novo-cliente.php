<link rel="stylesheet" type="text/css" href="css/cadastro.css"> 
<h1>Cadastrar-se </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="NOME_CLIENTE" class="form-control" >
    </div>
    
    <div class="mb-3">
        <label for="Telefone">Telefone do Cliente</label>
        <input type="text" name="FONE_CLIENTE" class="form-control" >
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="EMAIL_CLIENTE" class="form-control" >
    </div>
    
    <div class="mb-3">
        <label for="Senha">Senha</label>
        <input type="password" name="PASS_CLIENTE" class="form-control" >
    </div>
  
    <div class="mb-3">
        <button type="submit" class="btn-link1">Enviar</button>
    </div>
</form>