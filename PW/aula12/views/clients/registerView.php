<h2> dados do registro</h2>

<table class="table table-striped">
    <tr>
        <th> Nome: </th>
        <td> <?=$client['name']?> </td>
    </tr>

    <tr>
        <th> Email: </th>
        <td> <?=$client['email']?> </td>
    </tr>

    <tr>
        <th> Senha: </th>
        <td> <?=$client['senha']?> </td>
    </tr>

    <tr>
        <th> Genero: </th>
        <td> <?=$client['genero']?> </td>
    </tr>

    <tr>
        <th> Linguagem: </th>
        <td> 
        <?php
            foreach($language as $languages){
                echo $languages.", ";}
        ?>
        </td>
    </tr>

    <tr>
        <th> Tipo de Programadores: </th>
        <td> <?=$client['options']?> </td>
    </tr>

    <tr>
        <th> Qual sua plataforma preferida: </th>
        <td> <?=$client['platform']?> </td>
    </tr>

    <tr>
        <th> Interesse: </th>
        <td> <?=$client['interest']?> </td>
    </tr>
</table>