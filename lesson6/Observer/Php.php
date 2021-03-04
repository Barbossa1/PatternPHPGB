<?php

class Php implements Observer
{
    private function log($message)
    {
        echo __CLASS__ . ' : ' . $message;
    }

    public function update(Observable $subject)
    {
        if ($subject->getStatus() == Work::SAVED_SUCCESS) {
            $this->log("Найдена работа\n", Work::SAVED_SUCCESS);
        }
    }
}