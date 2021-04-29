<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$prod = $_POST['product_id'];
$description = $_POST['description'];

// echo "$prod <br/> $description <br/>";

$conn->updateProd($prod, $description);

echo '<script>
alert("Registro atualizado com Sucesso.");

window.location.href = "../../products.php";
</script>';
