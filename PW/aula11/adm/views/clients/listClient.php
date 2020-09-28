<h1> Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>ID cliente</th>
        <th>açoes</th>
    </tr>
    
    <?php
    foreach ($arrayClients as $client) {
  
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?> 
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
            <td>
                <a href="?controller=clients&action=updateClient&id=<?=$client['idClient']?>" class="btn btn-warning"> editar</a>
            </td>
            <td>
                <a href="?controller=clients&action=deleteClient&id=<?=$client['idClient']?>" class="btn btn-danger">excluir</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>