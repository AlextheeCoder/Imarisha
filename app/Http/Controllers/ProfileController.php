<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ProfileController extends Controller
{
    //
    public function store(Request $request)
    {
        

        $formFields = $request->validate([
            // Section 1
            'farm_type' => 'required|string',
            'land_size' => 'required|string',
    
            // Section 2
            'regenerative_practice' => 'required|string',
            'soil_quality' => 'required|string',
            'irrigation_access' => 'required|string',
            'water_source' => 'required|string',
    
            // Checkboxes
            'farming_challenges' => 'array',
            'farming_challenges.*' => 'string',
            'soil_improvement_techniques' => 'array',
            'soil_improvement_techniques.*' => 'string',
        ]);

       
    
       
        $formFields['farming_challenges'] = $request->input('farming_challenges');
        $formFields['soil_improvement_techniques'] = $request->input('soil_improvement_techniques');



        $user = $request->user();
        $userId = $user->id;
        $formFields['user_id'] = $userId;
        info($formFields);
        Log::info('Request data:', $request->all());
        Profile::create($formFields);
    
        return redirect('/')->with('message', 'success');
    }
    


}
