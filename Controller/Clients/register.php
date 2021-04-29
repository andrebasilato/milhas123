<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$conn->name = $_POST['name'];
$conn->cpf = $_POST['cpf'];
$conn->celular = $_POST['celular'];
$conn->password = $_POST['password'];

$cpf = str_replace(".", "", $_POST['cpf']);
$cpf = str_replace("-", "", $cpf);

$celular = str_replace("(", "", $_POST['celular']);
$celular = str_replace(")", "", $celular);
$celular = str_replace(" ", "", $celular);
$celular = str_replace("-", "", $celular);

$conn->register($_POST['name'], $cpf, $celular, $_POST['password']);

echo '<script>
alert("Cadastro feito com Sucesso.");

window.location.href = "../../index.php";
</script>';