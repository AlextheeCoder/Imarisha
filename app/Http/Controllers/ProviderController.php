<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //
    public function providersinfo(){
        return view('Provider.provider-info');
    }
}
