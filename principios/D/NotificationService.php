<?php

interface MessageSender{
    private function send();
}

Class MailSender implements MessageSender{

    private function send(){

    }
}

Class SmsSender implements MessageSender{
    private function send(){

    }

}

class PushSender implements MessageSender{
    private function send(){

    }
}

Class NotificationService{

    private $messageSender;
    public function __construct(MessageSender $messageSender){
        $this->messageSender = $messageSender;
    }

    public function sendNotificatin(){
        $this->messageSender->send();

    }

}

?>