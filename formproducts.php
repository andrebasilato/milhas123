<?php
// $conn = new \Connection();

?>

<div class="form-group">
    <input class="form-control" type="text" name="product_id" readonly placeholder="ID do Produto" value="<?= $produtos['id_produto'] == '' ? "" : $produtos['id_produto'] ?>" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="description" id="description" placeholder="Descrição do Produto" value="<?= $produtos['descricao'] == '' ? "" : $produtos['descricao'] ?>" autocomplete="off" required>
