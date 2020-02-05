<?php

require 'perfil.php';
require 'usuario.php';

$perfil = new Perfil(1, "Administrador");

$usuario = new Usuario(1, "Diego", $perfil);
$usuario->nome = "Meu novo nome";

echo $usuario->getTipoAcesso();

?>