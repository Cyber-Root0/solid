<?php
interface data{
    public function pack();
    public function getAllData();
}
class Client implements data{

    private $id;
    private $name;
    private $email;
    private $pwd;
    public function __construct($id,$name,$email,$pwd){

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->pwd = $pwd;

    }

    public function pack() : array
    {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "pwd" => $this->pwd
        );
    }

    public function getAllData() : string
    {
        return json_encode($this->pack());
    }
}