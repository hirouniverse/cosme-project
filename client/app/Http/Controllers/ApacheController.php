<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ApacheController extends BaseController
{
    public function checkRewriteModule() {
        return view('apache.rewrite-module');
    }
}
