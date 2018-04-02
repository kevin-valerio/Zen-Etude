<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 01/04/2018
 * Time: 11:25
 */

class AdminController extends Controller
{
    public function __construct()
    {
        parent::checkIfValidURL();
    }
    public function show(){
        showAllWithView("views/admin.php");
    }
}