<H1>Editar Plano</H1>
<?php
    $sql = "SELECT * FROM plano WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="p_email" class="form-control"  value="<?php print $row->p_email; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <label for="Tipo de Treino">Tipo de Treino (utilizar abreviações p_) </label>
        <input type="text" name="p_tipo" value="<?php print $row->p_tipo; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <label for="Opção de Treino">Opção de Treino (utilizar abreviações p_)</label>
        <input type="text" name="p_op" class="form-control" value="<?php print $row->p_op; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>