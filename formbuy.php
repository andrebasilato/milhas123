<?php
// $conn = new \Connection();
session_start();

?>

<div class="form-group">
    <input class="form-control" type="text" name="client_id" readonly placeholder="ID do Cliente" value="<?= $_SESSION['id_cliente'] ?>" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="product_id" readonly id="product_id" placeholder="ID do Produto" value="<?= $produtos['id_produto'] == '' ? "" : $produtos['id_produto'] ?>" autocomplete="off" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="description" id="description" placeholder="Descrição do Produto" value="<?= $produtos['descricao'] == '' ? "" : $produtos['descricao'] ?>" autocomplete="off" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="qtd" id="qtd" placeholder="Quantidade" autocomplete="off" required>
