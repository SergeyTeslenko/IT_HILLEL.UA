<?php

namespace User\ComposerWork;
class Router
{
    public $text = "hello world!";


    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}