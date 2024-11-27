<?php
require_once('Inventario.php');

class Player{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;
    public function __construct(string $nickname, int $nivel=1) {
        $this->setNickName($nickname);
        $this->setNivel($nivel);
        $this->inventario = new inventario(20);
    }
    public function getInventario() : Inventario {
        return $this->inventario;
    }

    public function setNickName($nickname):void{
        $this->nickname=$nickname;

    }
    public function setNivel($nivel):void{
        $this->nivel=$nivel;
    }
    public function getNivel():int {
        
        return $this->nivel;
    }
    public function getNickName():string {
        return $this->nickname;
    }
    public function SubirNivel():void{
        $this->setNivel($this->getNivel()+1);
        $this->inventario->setCapacidadeMaximo(
            ($this->getNivel()*3)
        +$this->inventario->getCapacidadeMaximo());

        echo "<br>Subiu de nivel para: {$this->getNivel()}.";
    }

    public function coletarItem($item): void{
        $this->inventario->adiciona($item);
    }
    public function soltarItem($name): void{
        $this->inventario->remover($name);
    }

    



}




