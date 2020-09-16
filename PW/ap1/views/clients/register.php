<h2> Registro de Clientes: </h2>

<form action="?controller=clients&action=registerView" method="post">

<div class="form-group">
    <label for="">nome:</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label for="">email:</label>
    <input type="text" name="email" class="form-control">
</div>

<div class="form-group">
    <label for="">senha:</label>
    <input type="password" name="senha" class="form-control">
</div>

<div class="form-group">
    <label for="">sexo:</label><br>
    <input type="radio" name="genero" id="male" value="Masculino" required>
    <label for="">Masculino</label><br>
    <input type="radio" name="genero" id="female" value="Feminino" required>
    <label for="">Feminino</label><br>
    <input type="radio" name="genero" id="others" value="Outros" required>
    <label for="">Outros</label><br>
</div>

<div class="form-group">
    <label for="">Linguagens de Programação:</label><br>
    <input type="checkbox" name="language[]" value="PHP">
    <label for="">PHP</label><br>
    <input type="checkbox" name="language[]" value="Phyton">
    <label for="">Phyton</label><br>
    <input type="checkbox" name="language[]" value="Java">
    <label for="">Java</label><br>
    <input type="checkbox" name="language[]" value="JavaScript">
    <label for="">JavaScript</label><br>
</div>

<div class="form-group">
    <label for="">Tipo de Programadores:</label><br>
    <select name="options" class="form-control" required>
        <option value="Front-End">Front-end</option>
        <option value="Back-End">Back-end</option>
        <option value="Designer UI/UX">Designer UI/UX</option>
    </select>
</div>

<div class="form-group">
    <label for="">Qual sua plataforma preferida:</label><br>
    <select name="platform" class="form-control" size="3" required>
        <option value="Windows">Windows</option>
        <option value="MacOS">MacOS</option>
        <option value="Linux">Linux</option>
        <option value="IOS">IOS</option>
        <option value="Android">Android</option>
    </select>
</div>

<div class="form-group">
    <label for="">interesse:</label>
    <textarea class="form-control" rows="5" id="comment" name="interest" required></textarea>
</div>
<br>
<input type="submit" value="Registrar" class="btn btn-primary">

</form>