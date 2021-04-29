<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

// echo $_GET['buy'];
// exit();

$conn->deleteBuy($_GET['buy']);

echo '<script>
alert("Exclusão feita com Sucesso.");

window.location.href = "../../shopping.php";
</script>';

?>