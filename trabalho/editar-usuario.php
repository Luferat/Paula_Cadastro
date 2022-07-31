<h3>Editar Usuário</h3>

<?php

$sql = "select * from usuarios where id=" .$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar" method="post">
    <input type= "hidden" name= "acao" value= "editar">
    <input type= "hidden" name= "id" value= "<?php
    print $row->id; ?>">


    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" requered>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="nascimento" value="<?php print $row->nascimento; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Bio</label>
        <input type="text" name="bio" value="<?php print $row->bio; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="tipo" value="<?php print $row->tipo; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data" value="<?php print $row->data; ?>"class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Avatar</label>
        <input type="text" name="avatar" value="<?php print $row->avatar; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <input type="text" name="status" value="<?php print $row->status; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <button type= "submit" class= "btn btn-primary">Enviar</button>
    </div>

</form>