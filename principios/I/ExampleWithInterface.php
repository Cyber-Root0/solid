<?php

interface BasicCalculation{
    public function soma();
    public function divisao();
    public function subtracao();
    public   function mult(); 
    public function raiz();
}


Class BasicCalculator implements BasicCalculation{
    public function soma(){

    }

    public function subtracao(){

    }

    public function mult(){

    }
    public function divisao(){
            
    }
    public function raiz(){
        throw new Exception();
    }
    
}