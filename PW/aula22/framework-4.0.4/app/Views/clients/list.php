<h1> Lista de clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>email</th>
        <th>ações</th>
    </tr>
    
    <?php
    foreach ($clients as $client) {
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?> 
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <a href="<?=base_url("clients/{$client['idClient']}")?>" >ver detalhes </a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>