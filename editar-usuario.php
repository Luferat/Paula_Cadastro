<h3>Editar Usuário</h3>

<?php

$sql = "select * from usuarios where id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

// Debug → echo '<pre>'; print_r($row); echo '</pre>'; exit;

?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <!--
    By Luferat
    Adicionei 'id' em todos os campos para usar a tag 'label' corretamente.
    O atributo 'for=' de label deve apontar para o 'id' do campo 
    correspondente, assim, quando clicamos na label o campo correspondente
    será automaticamente selecionado.
    -->

    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php print $row->email; ?>" class="form-control">
    </div>

    <!--
        By Luferat
        Como, somente o ususário deveria trocar a senha e este cadastro trata 
        de tarefas de administrador, vamos remover o campo 'Senha' deste 
        formulário.
    -->

    <!--
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" for="senha" class="form-control" required>
    </div>
    -->

    <div class="mb-3">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" id="nascimento" value="<?php print $row->nascimento; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="bio">Resumo da Biografia</label>
        <input type="text" name="bio" id="bio" value="<?php print $row->bio; ?>" class="form-control">
    </div>

    <!--
    By Luferat
    Troquei o tipo de campo de 'tipo' para 'select' porque o banco de dados só
    aceita os valores informados pelo tipo 'ENUM', ou seja, 'admin','moderador'
    ou 'user'.

    Como é um campo diferenciado, temos que inserir o PHP necessário para 
    selecionar 'selected' a opção correta na listagem do formulário já 
    preenchido.
    -->

    <div class="mb-3">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" class="form-control">
            <option value="user" <?php if ($row->tipo == 'user') echo 'selected'; ?>>Usuário genérico</option>
            <option value="moderador" <?php if ($row->tipo == 'moderador') echo 'selected'; ?>>Moderador</option>
            <option value="admin" <?php if ($row->tipo == 'admin') echo 'selected'; ?>>Administrador</option>
        </select>
        <!-- <input type="text" name="tipo" value="<?php print $row->tipo; ?>"  class="form-control"> -->
    </div>

    <!--
    By Luferat
    O campo 'data', que representa o momento em que o usuário é cadastrado, é 
    apenas informativo e, por diversas questões (éticas, legais, ...), nunca 
    deve ser alterado, por isso, foi removido.
    -->

    <!--
    <div class="mb-3">
        <label for="data">Data</label>
        <input type="date" name="data" if="data" value="<?php print $row->data; ?>" class="form-control">
    </div>
    -->

    <div class="mb-3">
        <label for="avatar">Avatar</label>
        <input type="text" name="avatar" id="avatar" value="<?php print $row->avatar; ?>" class="form-control">
    </div>

    <!--
    By Luferat
    O campo 'status', que representa a condição atual do usuário no sistema,
    é apenas informativo e, por diversas questões (éticas, legais, ...), não 
    deve ser alterado por aqui, por isso, foi removido.

    Uma sugestão: pode ser interessante adicionar uma opção em 'lista.php', por
    exemplo, para desativar o usuário, fazendo 'status="off"' para ele, assim
    como fazemos para apagá-lo com 'status="deleted"'!!!
    -->

    <!--
    <div class="mb-3">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="<?php print $row->status; ?>" class="form-control">
    </div>
    -->

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>