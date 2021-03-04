<?php

class Java implements Observer
{
    private function send($message)
    {
        echo __CLASS__ . ' : ' . $message;
    }

    public function update(Observable $subject)
    {
        if ($subject->getStatus() == Work::SAVED_SUCCESS) {
            $this->send("Найдена работа\n", Work::SAVED_SUCCESS);
        }

    }
}