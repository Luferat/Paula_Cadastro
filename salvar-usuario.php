<?php

// Degub → echo '<pre>'; print_r($_POST); echo '</pre>'; exit;

switch ($_REQUEST["acao"]) {

    case 'cadastrar';

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $nascimento = $_POST["nascimento"];
        $bio = $_POST["bio"];
        $tipo = $_POST["tipo"];
        // By Luferat → $data = $_POST["data"]; 
        $avatar = $_POST["avatar"];
        // By Luferat → $status = $_POST["status"];

        // By Luferat → $sql = "insert into usuarios (nome, email, senha, nascimento, bio, tipo, data, avatar, status) values ('{$nome}', '{$email}','{$senha}','{$nascimento}','{$bio}','{$tipo}','{$data}','{$avatar}','{$status}')";
        $sql = " INSERT INTO usuarios (nome, email, senha, nascimento, bio, tipo, avatar) VALUES ('{$nome}', '{$email}', '{$senha}', '{$nascimento}', '{$bio}', '{$tipo}', '{$avatar}');";

        // Degub → echo '<pre>'; print_r($sql); echo '</pre>'; exit;

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('cadastrado com sucesso');</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=lista';</script>";
        }

        break;

    case 'editar';

        $id = $_POST["id"]; // → By Luferat
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        // By Luferat → $senha = md5($_POST["senha"]);
        $nascimento = $_POST["nascimento"];
        $bio = $_POST["bio"];
        $tipo = $_POST["tipo"];
        // By Luferat → $data = $_POST["data"];
        $avatar = $_POST["avatar"];
        // By Luferat → $status = $_POST["status"];

        // By Luferat → $sql = "update usuarios set nome='{$nome}',email='{$email}',senha='{$senha}',nascimento='{$nascimento}',bio='{$bio}',tipo='{$tipo}',data='{$data}',avatar='{$avatar}',status='{$status}',where id=" . $_REQUEST["id"];

        $sql = "UPDATE usuarios SET nome = '{$nome}', email = '{$email}', nascimento = '{$nascimento}', bio = '{$bio}', tipo = '{$tipo}', avatar = '{$avatar}' WHERE id = '{$id}';";

        // Debug → echo '<pre>'; print_r($sql); echo '</pre>'; exit;

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso')</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {
            print "<script>alert('Não foi possível editar')</script>";
            print "<script>location.href='?page=lista';</script>";
        }

        break;

    case 'excluir';

        /**
         * By Luferat
         * Por questões éticas e jurídicas, nunca usamos "DELETE" em banco de 
         * dados. Os dados devem sempre ser preservados de forma a manter a
         * qualidade da informação. Lembra dos 'três pilares da segurança da
         * informação'?
         * 
         * Assim, troquei "DELETE" por "UPDATE", já que seu banco de dados já
         * prevê isso no campo 'status' do ususário, atribuindo a este o valor 
         * 'deleted'.
         */

        // By Luferat → $sql = "delete from usuarios where id=" . $_REQUEST["id"];

        $sql = "UPDATE usuarios SET status = 'deleted' WHERE id=" . $_REQUEST["id"];

        // Debug → echo '<pre>'; print_r($sql); echo '</pre>'; exit;

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso')</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {

            print "<script>alert('Não foi possível excluir')</script>";
            print "<script>location.href='?page=lista';</script>";
        }

        break;
}
