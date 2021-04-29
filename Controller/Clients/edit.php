<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$user = $_POST['user'];
$name = $_POST['name'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$pass = $_POST['password'];

$cpf = str_replace(".", "", $_POST['cpf']);
$cpf = str_replace("-", "", $cpf);

$celular = str_replace("(", "", $_POST['celular']);
$celular = str_replace(")", "", $celular);
$celular = str_replace(" ", "", $celular);
$celular = str_replace("-", "", $celular);

// echo "$user <br/> $name <br/> $cpf <br/> $celular <br/> $pass";

$conn->update($user, $name, $cpf, $celular, $pass);

echo '<script>
alert("Registro atualizado com Sucesso.");

window.location.href = "../../clients.php";
</script>';
