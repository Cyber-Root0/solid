<?php

interface operations{
    public function soma();
    public function substracao();
    public function multiplicacao();
    public function divisao();

}
class calculadora implements operations{
    private $n1;
    private $n2;
    public function __construct($n1,$n2){
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    public function soma() : int
    {
        return $this->n1 + $this->n2;
    }

    public function substracao() : int
    {
        return $this->n1 - $this->n2; 
    }
    public function multiplicacao() : float
    {
        return $this->n1 * $this->n2;
    }

    public function divisao() : float
    {
        $this->n1 / $this->n2;
    }
}
