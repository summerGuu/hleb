<?php

namespace App\Controllers;

use Hleb\Constructor\Handlers\Request;

class PageController extends \MainController
{

    function index(){

       return HLEB_START - microtime(true);
    }

    function ajax(){

        $array = array(Request::get('page'), "time" => HLEB_START - microtime(true));

        return strval(json_encode($array));
    }

    function map(){

        $array = array(Request::get(), "time" => HLEB_START - microtime(true));

        return render("main", $array);
    }

}