<link rel="stylesheet" type="text/css" href="cssT/cadastro.css">
<h1>Novo Treinador </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">


    <div class="mb-3">
        <label for="Nome">Nome</label>
        <input type="text" name="t_nome" class="form-control" id="">
    </div>

    <div class="mb-3">
        <label for="Telefone">Telefone</label>
        <input type="text" name="t_fone" class="form-control" id="">
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="t_email" class="form-control" id="">
    </div>


    <div class="mb-3">
        <label for="Especialização">Especialização</label>
        <input type="text" name="t_esp" class="form-control" id="">
    </div>

    <div class="mb-3">
        <label for="Senha">Senha</label>
        <input type="password" name="t_senha" class="form-control" id="">
    </div>



    <div class="mb-3">
        <button type="submit" class="btn-link1">Enviar</button>
    </div>
</form>