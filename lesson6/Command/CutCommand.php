<?php


class CutCommand implements CommandInterface
{
    protected $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function execute()
    {
        $this->text->cut();
    }
}