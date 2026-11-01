<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class HomeController extends BaseController
{
    // ?c=home&a=index → App/Views/Home/index.view.php
    public function index(Request $request): Response
    {
        return $this->html();
    }

    // ?c=home&a=kosik → App/Views/Home/kosik.view.php
    public function kosik(Request $request): Response
    {
        return $this->html();
    }
}
