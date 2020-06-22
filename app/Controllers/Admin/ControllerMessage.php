<?php

namespace Projet\Controllers\Admin;
use Projet\Models\Admin\MessageManager;

class ControllerMessage
{
    private $messageManager;

    public function __construct(){
       $this->messageManager = new MessageManager();
    }

    public function index($tri=null)
    {
        //$messageManager = new \Projet\Models\Admin\MessageManager();
        if(is_null($tri)){
            $messages = $this->messageManager->getTousMessages();
            require 'app/views/admin/adminMessages.php';
            exit;
        }else{
            if($tri=="asc"){
                $messages = $this->messageManager->getTousMessagesAsc();
                echo $this->messageManager->ajax($messages);
            }elseif($tri=="desc"){
                $messages = $this->messageManager->getTousMessagesDesc();
                echo $this->messageManager->ajax($messages);
            }
        }
    }
}