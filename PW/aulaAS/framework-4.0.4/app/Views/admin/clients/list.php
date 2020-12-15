<form action="<?=base_url('admin/clients/search')?>" method=GET enctype='multipart/form-data'>
    <div>
        <h1>Pesquisa de clientes:</h1>
        <label>Pesquisar:</label>
        <input type="text" class="form-control" placeholder="Pesquisar por..." name="search" id="search">
    </div>    
        <br>
    <div>
        <button type="submit" class="btn btn-primary">Procurar</button>
    </div>
</form>    
    <br>
<h1> Lista de clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>email</th>
        <th colspan="3">ações</th>
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
                <a href="<?=base_url("admin/{$client['idClient']}")?>" > Ver Detalhes </a>
            </td>
            <td>
                <a class="btn btn-warning" href="<?=base_url("admin/clients/update/{$client['idClient']}")?>" > Alterar cliente </a>
            </td>
            <td>
                <a class="btn btn-danger" href="<?=base_url("admin/clients/delete/{$client['idClient']}")?>" >Deletar cliente </a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>