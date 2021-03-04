<?php

interface Observer
{
    public function update(Observable $instance);
}