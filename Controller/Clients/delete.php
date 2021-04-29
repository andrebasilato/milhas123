<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

// echo $_GET['user'];

$conn->delete($_GET['user']);

echo '<script>
alert("Exclusão feita com Sucesso.");

window.location.href = "../../clients.php";
</script>';

?>