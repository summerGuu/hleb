<?php

namespace App\Controllers;

class PageController extends \MainController
{

    function index(){

       return HLEB_START - microtime(true);
    }

}