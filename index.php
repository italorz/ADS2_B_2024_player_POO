<?php
require_once("./class/Ataque.php");
require_once("./class/Player.php");
require_once("./class/Magia.php");
require_once("./class/Defesa.php");
require_once("./class/Item.php");
require_once("./class/Inventario.php");

$item1= new Item('Livro',2,'magia');
$item6= new Item('Amuleto',2,'magia');
$item2= new Item('Espada',7,'ataque');
$item3= new Item('Lança',7,'ataque');
$item4= new Item('Espada',7,'ataque');
$item5= new Item('Armadura',4,'defesa');

//Player1
$player1 = new Player('Bob');
echo "NickName: {$player1->getNickName()}.<br> Nivel: {$player1->getNivel()}. <br>Seu invetario Iniciou com: {$player1->getInventario()->getCapacidadeMaximo()}";
$player1->SubirNivel();
$player1->coletarItem($item1);
$player1->coletarItem($item4);
$player1->getInventario()->capacidadeLivre();
$player1->soltarItem('Livro');
$player1->getInventario()->capacidadeLivre();
echo '<hr>';
//Player2
$player2 = new Player('Lord');
echo "NickName: {$player2->getNickName()}.<br> Nivel: {$player2->getNivel()}. <br>Seu invetario Iniciou com: {$player1->getInventario()->getCapacidadeMaximo()}";
$player2->coletarItem($item1);
$player2->coletarItem($item2);
$player2->coletarItem($item3);
$player2->coletarItem($item4);
$player2->getInventario()->capacidadeLivre();
$player2->soltarItem('Espada');
$player2->getInventario()->capacidadeLivre();
