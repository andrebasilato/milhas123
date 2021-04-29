<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$conn->description = $_POST['description'];

$conn->insertProd($_POST['description']);

echo '<script>
alert("Cadastro feito com Sucesso.");

window.location.href = "../../products.php";
</script>';