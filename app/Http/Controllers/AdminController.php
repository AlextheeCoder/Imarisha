<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){

        //Count
        $farmersCount = User::where('role', 'farmer')->count();
        $providersCount = User::where('role', 'provider')->count();
        $profilesCount = Profile::count();
        

        //Latest users
        $latestUsers = User::orderBy('created_at', 'desc')->take(8)->get();
        // Get today's date and yesterday's date
        $today = Carbon::now()->toDateString();
        $yesterday = Carbon::yesterday()->toDateString();
    

        // Get counts for today
        $userstoday = USer::whereDate('created_at', $today)->count();
        $farmersCountToday = User::where('role', 'farmer')->whereDate('created_at', $today)->count();
        $providersCountToday = User::where('role', 'provider')->whereDate('created_at', $today)->count();
        $profilesCountToday = Profile::whereDate('created_at', $today)->count();
    
        // Get counts for yesterday
        $farmersCountYesterday = User::where('role', 'farmer')->whereDate('created_at', $yesterday)->count();
        $providersCountYesterday = User::where('role', 'provider')->whereDate('created_at', $yesterday)->count();
        $profilesCountYesterday = Profile::whereDate('created_at', $yesterday)->count();
    
        // Calculate percentage increase
        $farmersIncrease = ($farmersCountYesterday != 0) ? (($farmersCountToday - $farmersCountYesterday) / $farmersCountYesterday) * 100 : ($farmersCountToday != 0 ? 100 : 0);
        $providersIncrease = ($providersCountYesterday != 0) ? (($providersCountToday - $providersCountYesterday) / $providersCountYesterday) * 100 : ($providersCountToday != 0 ? 100 : 0);
        $profilesIncrease = ($profilesCountYesterday != 0) ? (($profilesCountToday - $profilesCountYesterday) / $profilesCountYesterday) * 100 : ($profilesCountToday != 0 ? 100 : 0);
    
        return view("Admin.index", [
            'latestUsers' => $latestUsers,
            'farmersCount' => $farmersCount,
            'providersCount' => $providersCount,
            'profilesCount' => $profilesCount,
            'farmersCountToday' => $farmersCountToday,
            'providersCountToday' => $providersCountToday,
            'profilesCountToday' => $profilesCountToday,
            'farmersIncrease' => $farmersIncrease,
            'providersIncrease' => $providersIncrease,
            'profilesIncrease' => $profilesIncrease,
             'userstoday'=>$userstoday,
        ]);
    }
}
