<h1> Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>ID cliente</th>
        
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
        </tr>
    <?php
    }
    ?>
</table>