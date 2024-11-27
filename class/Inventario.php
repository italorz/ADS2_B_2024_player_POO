<?php
require_once('Item.php');


class Inventario{

    private int $capacidadeMaximo;
    private array $itens = [];

    public function __construct(int $capacidadeMaximo) {
        $this->setCapacidadeMaximo($capacidadeMaximo);
    }

    public function setCapacidadeMaximo(int $capacidadeMaximo) :void {
        if ($capacidadeMaximo<20) {
            $capacidadeMaximo=20;
        }
        
        $this->capacidadeMaximo=$capacidadeMaximo;
    }

    public function getCapacidadeMaximo():int {
        return $this->capacidadeMaximo;
    }
    public function capacidadeLivre():int{
        $totalTamanho=0;
        foreach ($this->itens as $item){
            $totalTamanho += $item->getTamanho();
        }
        $capacidade= $this->getCapacidadeMaximo()-$totalTamanho;
        echo "<br>A capacidade livre é: {$capacidade}.";
        return $capacidade;
    }

    public function adiciona(Item $item):void{
        if ($item->getTamanho()>=$this->capacidadeLivre()) {
            echo "<br>Não existe espaço disponivel para o item {$item->getName()}";
        }
        else{
        array_push($this->itens,$item);
        
        echo "<br>O item: {$item->getName()} foi adicionado.";
        
        }
    }

    public function remover(string $name):void{
        foreach($this->itens as $i=>$item){
            if ($item->getName() == $name) {
                unset($this->itens[$i]);
                
                echo "<br>O item {$name} da classe {$item->getClasse()} foi removido do inventario";
                
            }
            

        }
    }
    
}


