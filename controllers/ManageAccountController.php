<?php
require_once 'models/User.php';
require_once 'utils/util.php';
require_once 'views/core.php';
require_once 'controllers/Controler.php';


class ManageAccountController extends Controller
{

    public function __construct()
    {
        parent::checkIfValidURL();
    }

    public function show()
    {
        showAllWithView("views/profil.php");
    }

}