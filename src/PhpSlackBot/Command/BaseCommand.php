<?php
namespace PhpSlackBot\Command;

abstract class BaseCommand extends \PhpSlackBot\Base {

    protected $loop = null;

    public function executeCommand($message, $context) {
        return $this->execute($message, $context);
    }
    
    public function setLoop($loop) {
        $this->loop = $loop;
    }
}
