<h1>Listar Planos</h1>
<?php
    $sql = "SELECT * FROM plano";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd  > 0 ){
    print "<table class='table table-hover table-bordered table-striped'>";
    print "<tr>";
    print "<th>#/<th>";
    print "<th>Email/<th>";
    print "<th>Tipo de Treino/<th>";
    print "<th>Opção de Treino/<th>";
    print "<th>Ações</th>";
    print"</tr>";



            while($row = $res->fetch_object()){
            print "<tr>";
                print "<td>".$row->id."/<td>";
                print "<td>".$row->p_email."/<td>";
                print "<td>".$row->p_tipo."/<td>";
                print "<td>".$row->p_op."/<td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                        </td>";
                print"</tr>";
            }
        print "</table>";
    }else
    {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
