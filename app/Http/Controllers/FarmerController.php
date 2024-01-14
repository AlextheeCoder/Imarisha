<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //
    public function farmer_info(){
        return view('Farmer.pages.farmer-info');
    }
    public function farm_profile(){
        return view('Farmer.pages.profile-create');
    }
}
