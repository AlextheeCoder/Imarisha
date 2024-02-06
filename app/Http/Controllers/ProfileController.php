<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function store(Request $request){
        $formFields = $request->validate([
            'farm-type' => 'required|string',
            'land-size' => 'required|string',
            'soil-improvement-techniques' => 'required|array',
            'soil-improvement-techniques.*' => 'required|string',
            'regenerative-practice' => 'required|string',
            'farming-challenges' => 'required|array',
            'farming-challenges.*' => 'required|string',
            'soil-quality' => 'required|string',
            'irrigation-access' => 'required|string',
            'water-source' => 'required|string',
            'interest-training' => 'required|string',
            'training-areas' => 'required|array',
            'training-areas.*' => 'required|string',
            'pay-for-training' => 'required|string',
            'join-digital-platform' => 'required|string',
            'find-operators' => 'required|string',
            'upskill-operators' => 'required|string',
            'farm-operation' => 'required|string',
            'record-keeping' => 'required|string',
            'profitability-analysis' => 'required|string',
            'long-term-strategy' => 'required|string',
            'sources-of-finance' => 'required|array',
            'sources-of-finance.*' => 'required|string',
            'borrowing-habits' => 'required|string',
            'finance-access-challenges' => 'required|array',
            'finance-access-challenges.*' => 'required|string',
            'sales-channels' => 'required|array',
            'sales-channels.*' => 'required|string',
            'market-reliability' => 'required|string',
            'selling-challenges' => 'required|array',
            'selling-challenges.*' => 'required|string',
            'current-crops' => 'required|array', 
            'current-crops.*' => 'required|string',
            'crop-choice-constraints' => 'required|array',
            'crop-choice-constraints.*' => 'required|string',
            'current-livestock' => 'required|array',
            'current-livestock.*' => 'required|string',
            'livestock_farming_challenges' => 'required|array',
            'livestock_farming_challenges.*' => 'required|string', 
            'interest_livestock_farming' => 'required|string',
            'interest-new-crops' =>'required|string'


                        
            

        ]);



        $user = $request->user();
        $userId = $user->id;
        $formFields['user_id'] = $userId;
        info($formFields);
        Log::info('Request data:', $request->all());
        Profile::create($formFields);

    }
}
