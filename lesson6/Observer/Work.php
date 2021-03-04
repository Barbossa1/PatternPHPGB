<?php

class Work implements Observable
{
    private $status = 0;
    const SAVED_SUCCESS = 1;
    private $observers = [];

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(Observer $instance)
    {
        foreach ($this->observers as $observer) {
            if ($instance === $observer) {
                return false;
            }
        }

        $this->observers[] = $instance;
    }

    public function detach(Observer $instance)
    {
        foreach ($this->observers as $key => $observer) {
            if ($instance === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function save()
    {
        if (1) {
            $this->status = self::SAVED_SUCCESS;
        }
        $this->notify();
    }
}