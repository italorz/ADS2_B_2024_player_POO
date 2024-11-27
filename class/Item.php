<?php
class Item{
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name,int $tamanho,string $classe) {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function setName(string $name):void{
        $this->name=$name;
    }
    public function setTamanho(int $tamanho):void{
        $this->tamanho=$tamanho;
    }
    public function setClasse(string $classe) :void {
        $this->classe=$classe;
    }

    public function getName():string{
        return $this->name;
    }
    public function getTamanho():int{
        return $this->tamanho;
    }
    public function getClasse():string{
        return $this->classe;
    }

}



