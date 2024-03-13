<?php

abstract class InternalPart{
    public abstract function inside();
}
abstract class ExsternalPart{
    public abstract function outside();
}

class CPU extends InternalPart{
    public function inside(){
        echo "Sono l'unita di elaborazione centrale \n";
    }
}

class RAM extends InternalPart{
    public function inside(){
        echo "Sono la memoria ad accesso casuale \n";
    }
}

class SchedaGrafica extends InternalPart{
    public function inside(){
        echo "Sono un unita di elaborazione grafica \n";
    }
}

// DISPOSITIVI ESTERNI

class Schermo extends ExsternalPart{
    public function outside(){
        echo "Impianto elettronico per la visualizzazione di immagini ecc \n";
    }
}

class Mouse extends ExsternalPart{
    public function outside(){
        echo "Aggeggio per puntare roba su uno schermo digitale \n";
    }
}

class Tastiera extends ExsternalPart{
    public function outside(){
        echo "Affare che serve ad immettere testo in file elettronici volanti \n";
    }
}

class Computer{
    public $PartiInterne;
    public $Periferiche;

    public function __construct(InternalPart $PartiInterne, ExsternalPart $Periferiche){
        $this->PartiInterne=$PartiInterne;
        $this->Periferiche=$Periferiche;
    }
    public function hardware(){
        $this->PartiInterne->inside();
    }
    public function Aggeggi(){
        $this->Periferiche->outside();
    }
}

// $computer1= new Computer(new RAM(),new Tastiera());
// $computer1->hardware();
// $computer1->Aggeggi();
$computer2= new Computer(new CPU(),new Mouse());
$computer2->hardware();
$computer2->Aggeggi();