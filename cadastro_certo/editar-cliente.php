<H1>Editar clientes</H1>
<?php
    $sql = "SELECT * FROM cliente WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="NOME_CLIENTE" class="form-control" value="<?php print $row->NOME_CLIENTE; ?>">
    </div>

    <div class="mb-3">
        <label for="Telefone do Cliente">Telefone do Cliente</label>
        <input type="text" name="FONE_CLIENTE" class="form-control" value="<?php print $row->FONE_CLIENTE; ?>">
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="EMAIL_CLIENTE" class="form-control"  value="<?php print $row->EMAIL_CLIENTE; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label for="Senha">Senha</label>
        <input type="password" name="PASS_CLIENTE" class="form-control" >
    </div>

   

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>