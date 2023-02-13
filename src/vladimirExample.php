<?php
namespace githubinphpcomposer;

class vladimirExample
{
    protected static $instance;

    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function showText($text){
        echo $text;
    }

}