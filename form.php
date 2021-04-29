<?php
// $conn = new \Connection();

?>

<div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="Digite seu Nome" value="<?= $usuarios['nome'] == '' ? "" : $usuarios['nome'] ?>" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?= $usuarios['cpf'] == '' ? "" : $usuarios['cpf'] ?>" autocomplete="off" required>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="celular" id="tel" placeholder="Digite seu Celular" value="<?= $usuarios['telefone'] == '' ? "" : $usuarios['telefone'] ?>" autocomplete="off" required>
</div>

<div class="form-group">
    <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua Senha" autocomplete="off" required>
