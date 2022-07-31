<h3>Lista de Usuários</h3>
<?php
$sql = "select * from usuarios";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){

print "<table class= 'table table-hover table-striped table-bordered'>";

print "<tr>";
print "<th> # </th>" ;
print "<th> Nome </th>";
print "<th>E-mail</th>";
print "<th>Bio</th>";
print "<th>Avatar</th>";
print "<th>Status</th>";
print "<th>Data de Nascimento</th>";
print "<th>Ações</th>";

print "</tr>";

while ($row = $res->fetch_object() ){
print "<tr>";
print "<td>". $row->id. "</td>" ;
print "<td>". $row->nome. "</td>";
print "<td>". $row->email. "</td>";
print "<td>". $row->bio. "</td>";
print "<td>". $row->avatar. "</td>";
print "<td>". $row->status. "</td>";
print "<td>". $row->nascimento. "</td>";
print "<td>

<button onclick=\"location. href='?page=editar&id=".$row-> id."';\" class= 'btn btn-success'>Editar</button>

<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location. href='?page=salvar&acao=excluir&id=".$row-> id."';}else{false;}\" class= 'btn btn-danger'>Excluir</button>

</td>";

print "</tr>";

}

print "</table>";

}else{
    print "<p class= 'alert alert-danger'> Não  encontrou resultados!</p>";
}


?>