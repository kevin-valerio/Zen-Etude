<?php
/**
 * Created by PhpStorm.
 * User: s16005532
 * Date: 09/01/18
 * Time: 16:13
 */


Class Home extends Controller {

    public function index() {
        session_start();
        require ROOT . '/views/home.html';

    }


    public function error()  {
        session_start();
        require ROOT . '/views/error404.html';
     }



}