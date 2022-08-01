<?php

switch ($_REQUEST["acao"]){
case 'cadastrar';
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$nascimento = $_POST["nascimento"];
$bio = $_POST["bio"];
$tipo = $_POST["tipo"];
$data = $_POST["data"];
$avatar = $_POST["avatar"];
$status = $_POST["status"];

$sql ="insert into usuarios (nome, email, senha, nascimento, bio, tipo, data, avatar, status) values ('{$nome}', '{$email}','{$senha}','{$nascimento}','{$bio}','{$tipo}','{$data}','{$avatar}','{$status}')";

$res = $conn ->query($sql);

if($res==true){
print "<script>alert('cadastrado com sucesso');</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível cadastrar');</script>";
print "<script>location.href='?page=lista';</script>";


}


break;

case 'editar';
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$nascimento = $_POST["nascimento"];
$bio = $_POST["bio"];
$tipo = $_POST["tipo"];
$data = $_POST["data"];
$avatar = $_POST["avatar"];
$status = $_POST["status"];

/**
 * By Luferat
 * O único erro que encontrei foi uma vírgula a mais ono final de "status='{$status}'".
 * 
 *  ERRADO → status='{$status}',
 *  CERTO  → status='{$status}'
 **/

$sql = "update usuarios set 
nome='{$nome}',
email='{$email}',
senha='{$senha}',
nascimento='{$nascimento}',
bio='{$bio}',
tipo='{$tipo}',
data='{$data}',
avatar='{$avatar}',
status='{$status}'
where
id=".$_REQUEST["id"];

// Degub → echo '<pre>'; print_r($sql); echo '</pre>'; exit;

$res = $conn->query($sql);

if($res==true){
print "<script>alert('Editado com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

    print "<script>alert('Não foi possível editar')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;


case 'excluir';
$sql = "delete from usuarios where id=" .$_REQUEST["id"];

$res = $conn ->query ($sql);


if($res==true){
print "<script>alert('Excluido com sucesso')</script>";
print "<script>location.href='?page=lista';</script>";

}else{

print "<script>alert('Não foi possível excluir')</script>";
print "<script>location.href='?page=lista';</script>";


}

break;

}


?>