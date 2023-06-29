<?php

Interface Geometric{
    public function area() : float;
    public function perimete() : float;
    public function __construct();
}

interface Render{
    public function ShowEcho() : string; 
}
Class Square implements Geometric{
    
    private $side;
    public function __construct($side){
        $this->side = $side;

    }
    public function perimete(){
        return $this->side * 4;
    }
    public function area(){
        return $this ** 2;
    }

}

Class Rectangle implements Geometric{
    private $height;
    private $width;

    public function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;
    }

    public function area(){
        return $this->height * $this->width;
    }

    public function perimete(){
        return ($this->height * 2) + ($this->width * 2);
    }
}

Class SquareExample extends Example implements Render{
    public function GeometricShapes(){

        $square = new Square(10);
        $this->ShowEcho("Area", $square->area());
        $this->ShowEcho("Perimete", $square->perimete());

    }

    public function ShowEcho($title, $value){
        echo "\n".$title." : ".$value."\n";
    }
}

Class RectangleExample extends Example implements Render{
    public function GeometricShapes(){

        $rectangle = new Rectangle(10, 20);
        $this->ShowEcho("Area", $rectangle->area());
        $this->ShowEcho("Perimete", $rectangle->perimete());

    }

    public function ShowEcho($title, $value){
        echo "\n".$title." : ".$value."\n";
    }
}

?>