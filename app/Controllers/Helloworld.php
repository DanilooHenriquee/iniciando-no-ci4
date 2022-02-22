<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Helloworld extends BaseController
{
    public function index()
    {
        echo "<h1> Hello World ! </h1>";
    }
}
