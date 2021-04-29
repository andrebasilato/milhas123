<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$conn->client_id = $_POST['client_id'];
$conn->product_id = $_POST['product_id'];
$conn->qtd = $_POST['qtd'];

$conn->insertBuy($_POST['client_id'], $_POST['product_id'], $_POST['qtd']);

echo '<script>
alert("Compra feita com Sucesso.");

window.location.href = "../../shopping.php";
</script>';