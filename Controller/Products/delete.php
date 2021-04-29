<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

// echo $_GET['user'];

$conn->deleteProd($_GET['product']);

echo '<script>
alert("Exclusão feita com Sucesso.");

window.location.href = "../../products.php";
</script>';

?>