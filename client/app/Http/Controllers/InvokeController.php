<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class InvokeController extends BaseController
{
    public function __invoke()
    {
        return "Invoke Method!!";
    }
}
