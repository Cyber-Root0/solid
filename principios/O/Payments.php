<?php

Interface Payments{

    private function __construct();
    private function getAmount() : float;
    private function getPayer() : array;
}

Class PaymentsConstruct{

    private $method;
    private $payer;
    private $amount;

    public function __construct($amount, $payer){
        $this->method = __CLASS__;
        $this->amount = $amount;
        $this->payer = $payer;
    }
}

Class Pix extends PaymentsConstruct implements Payments {

    private function getAmount(){
        return $this->amount;
    }
    private function getPayer(){
       return $this->payer;
    }
}

Class Boleto extends PaymentsConstruct implements Payments {

    private function getAmount(){
        return $this->amount;
    }
    private function getPayer(){
       return $this->payer;
    }
}

Class Cartao extends PaymentsConstruct implements Payments {

    private function getAmount(){
        return $this->amount;
    }
    private function getPayer(){
       return $this->payer;
    }
}

Class PaymentCore{
    private $url = "https://api.mercadopago.com.br/";
    private $payment;
    
    public function __construct(PaymentsConstruct $payment){
        $this->payment = $payment;
    }
    public function ProcessPayment(){    
        $this->request($this->payment->method, $this->payment->amount,  $this->payment->payer);
    }

    public function request($method, $amount, $payer){
        file_get_contents($this->url."?".http_build_query(
            array(
                "metodo" => $method,
                "total" => $amount,
                "payer" => $payer
            )
        ));
    }


}

?>