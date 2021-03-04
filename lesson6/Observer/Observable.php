<?php

interface Observable
{
    public function attach(Observer $instance);
    public function detach(Observer $instance);
    public function notify();
}