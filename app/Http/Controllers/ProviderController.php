<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Financial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Input;
use App\Models\Labor;

class ProviderController extends Controller
{
    //
    public function providers_info(){
        return view('Provider.provider-info');
    }

    public function provider_profile(){
        return view('Provider.provider-profile');
    }

    public function provider_store(Request $request){

        $formFields = $request->validate([
            'organization_name' => 'required|string',
            'website' => 'nullable|string',
            'about' => 'required|string',
            'type' => 'required',
            'target_profile' => 'required',           
        ]);

        $user = $request->user();
        $userId = $user->id;
        $formFields['user_id'] = $userId;
        info($formFields);
        Log::info('Request data:', $request->all());
        

            if ($request->type === 'financial') {
                Provider::create($formFields);
                return view('Provider.provider-forms.financial');
            } elseif ($request->type === 'inputs') {
                Provider::create($formFields);
                return view('Provider.provider-forms.inputs'); 
            } 
            elseif ($request->type === 'labor') {
                Provider::create($formFields);
                return view('Provider.provider-forms.labor'); 
            }
            elseif ($request->type === 'marketing') {
                Provider::create($formFields);
                return view('');  
            }
            elseif ($request->type === 'knowledge') {
                Provider::create($formFields);
                return view(''); 
            }else {
                
                return view('Provider.provider-profile')->with('error', 'Try again'); 
            }  

    }

    public function financial_provider(Request $request){
        $formFields = $request->validate([
            'loan_types' => 'required|string',
            'interest_rates' => 'nullable|double',
            'repayment_terms' => 'required|string',
            'eligibility_criteria' => 'required|string',
            'savings_products' => 'required|string',  
            'insurance_offered' => 'required|string',  

        ]);

        $user = $request->user();
        $providerId = $user->id;
        $formFields['provider_id'] = $providerId;

        Financial::create($formFields);

        return view('Provider.success');

    }


    public function inputs_provider(Request $request){

        $formFields = $request->validate([
            'equipment_provision' => 'nullable|string',
            'delivery_options' => 'nullable|string',
            'additional_services' => 'nullable|string',
        
            
            //Checkbox sections
            'seed_types' => 'nullable|array',
            'seed_types.*' => 'nullable|string',

            'fertilizers' => 'nullable|array',
            'fertilizers.*' => 'nullable|string',

            'pesticides' => 'nullable|array',
            'pesticides.*' => 'nullable|string',

            'farming_equipment' => 'nullable|array',
            'farming_equipment.*' => 'nullable|string',

        ]);




        //Section 6 Checkbox
        $formFields['seed_types'] = $request->input('seed_types');
        $formFields['fertilizers'] = $request->input('fertilizers');
        $formFields['pesticides'] = $request->input('pesticides');
        $formFields['farming_equipment'] = $request->input('farming_equipment');



        $user = $request->user();
        $providerId = $user->id;
        $formFields['provider_id'] = $providerId;

        Input::create($formFields);

        return view('Provider.success');
    }


    public function labor_provider(Request $request){

        $formFields = $request->validate([
            'skill_levels'=> 'required',
            'specializations'=> 'required',
            'contract_types'=> 'required',
            'availability'=> 'required',
            'pricing_model'=> 'required',
            'verified'=> 'required',
            'additional_info'=> 'nullable',

        ]);

        $user = $request->user();
        $providerId = $user->id;
        $formFields['provider_id'] = $providerId;

        Labor::create($formFields);

        return view('Provider.success');

    }
}
