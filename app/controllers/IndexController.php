<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        echo '<h1>Hello1111!</h1>';exit;
    }

    public function index2Action()
    {
        echo '<h1>Hello22222!</h1>';exit;
    }
}