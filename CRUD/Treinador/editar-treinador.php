<H1>Editar Treinador</H1>
<?php
    $sql = "SELECT * FROM treinador WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="t_nome" class="form-control" value="<?php print $row->t_nome; ?>"class="form-control" id="">
    </div>

    <div class="mb-3">
        <label for="Telefone">Telefone</label>
        <input type="text" name="t_fone" class="form-control" value="<?php print $row->t_fone; ?>"class="form-control"id="">
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="t_email" class="form-control" value="<?php print $row->t_email; ?>"class="form-control" id="">
    </div>


    <div class="mb-3">
        <label for="Especialização">Especialização</label>
        <input type="text" name="t_esp" class="form-control" value="<?php print $row->t_esp; ?>"class="form-control" id="">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-link1">Enviar</button>
    </div>
</form>

