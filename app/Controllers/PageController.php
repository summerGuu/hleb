<?php

namespace App\Controllers;

class PageController extends \MainController
{

    function index(){

       return HLEB_START - microtime(true);
    }

    function ajax(){

        $array = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");

        return strval(json_encode($array));
    }

}