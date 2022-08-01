<h3>Novo Usuário</h3>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">

    <!--
        By Luferat
        Adicionei 'id' em todos os campos para usar a tag 'label' corretamente.
        O atributo 'for=' de label deve apontar para o 'id' do campo 
        correspondente, assim, quando clicamos na label o campo correspondente
        será automaticamente selecionado.
    -->

    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <!--
        By Luferat
        Como a senha aqui, será inserida pelo administrador, e não pelo próprio
        usuário se cadastrando, podemos usar 'type="text"' em vez de 
        'type="password".
    -->

    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" id="nascimento" class="form-control">
    </div>

    <div class="mb-3">
        <label for="bio">Resumo da Biografia</label>
        <input type="text" name="bio" id="bio" class="form-control">
    </div>

    <!--
    By Luferat
    Troquei o tipo de campo de 'tipo' para 'select' porque o banco de dados só aceita 
    os valores informados pelo tipo 'ENUM', ou seja, 'admin','moderador' ou 'user'.
    -->

    <div class="mb-3">
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" class="form-control">
            <option value="user">Usuário genérico</option>
            <option value="moderador">Moderador</option>
            <option value="admin">Administrador</option>
        </select>
        <!-- <input type="text" name="tipo" class="form-control"> -->
    </div>

    <!-- 
    By Luferat
    Removi o campo 'date' porque ele deve ser inserido automaticamente pelo 
    SQL, já que deve representar exatamente o momento atual em que os dados
    foram inseridos no banco de dados.
    -->

    <!--
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data" class="form-control">
    </div>
    -->

    <!--
    By Luferat
    Troquei o 'type' do campo 'avatar' para 'url', já que este campo somente 
    aceita endereços de imagem. Você pode usar as imagens do site abaixo como
    exemplos para preencher este campo.
        → https://randomuser.me/photos
    -->

    <div class="mb-3">
        <label for="avatar">Avatar</label>
        <input type="url" name="avatar" id="avatar" class="form-control">
    </div>
    
    <!-- 
    By Luferat
    Removi o campo 'status' porque ele pode ser inserido automaticamente pelo 
    SQL com o valor padrão (default) 'on', já que não tem muito sentido criar
    um usuário desabilitado ('off'), tampouco apagado ('deleted'). 
    -->

    <!--
    <div class="mb-3">
        <label>Status</label>
        <input type="text" name="status" class="form-control">
    </div>
    -->

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>