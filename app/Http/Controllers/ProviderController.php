<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Financial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Input;
use App\Models\Knowledgeprovider;
use App\Models\Labor;
use App\Models\Market;

class ProviderController extends Controller
{
    //
    public function providers_info(){
        return view('Provider.provider-info');
    }

    public function provider_profile(){
        return view('Provider.provider-profile');
    }

    public function viewReport(){
        $userId = auth()->user()->id;
    
        // Fetch the profile for the user
        $profile = Provider::where('user_id', $userId)->with('user')->first();
    
        // Pass the profile data to the view
        return view('Provider.provider-report', ['profile' => $profile]);
     
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
                return view('Provider.provider-forms.markets');
            }
            elseif ($request->type === 'knowledge') {
                Provider::create($formFields);
                return view('Provider.provider-forms.knowledge');
            }else {
                
                return view('Provider.provider-profile')->with('error', 'Try again'); 
            }  

    }

    public function financial_provider(Request $request){
        $formFields = $request->validate([
            'loan_types' => 'required|string',
            'interest_rates' => 'nullable',
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

    public function marketing_provider(Request $request){
        $formFields = $request->validate([
            'market_channels' => 'nullable|string',
            'value_addition' => 'nullable',
            'transport_provided' => 'nullable|string',
            'pricing_models' => 'nullable|string',
            'quality_standards' => 'nullable|string',  
            'contract_terms' => 'nullable|string',  

             //Checkbox sections
             'target_crops' => 'nullable|array',
             'target_crops.*' => 'nullable|string',
 
             'target_livestock' => 'nullable|array',
             'target_livestock.*' => 'nullable|string',

        ]);

       

        $formFields['target_crops'] = $request->input('target_crops');
        $formFields['target_livestock'] = $request->input('target_livestock');

        info($formFields);
        Log::info('Request data:', $request->all());
        $user = $request->user();
        $providerId = $user->id;
        $formFields['provider_id'] = $providerId;

        Market::create($formFields);

        return view('Provider.success');

    }

    public function knowledge_provider(Request $request){
        $formFields = $request->validate([
            'pricing_models' => 'nullable|string',
            'credentials' => 'nullable',
           

             //Checkbox sections
             'target_crops' => 'nullable|array',
             'target_crops.*' => 'nullable|string',
 
             'target_livestock' => 'nullable|array',
             'target_livestock.*' => 'nullable|string',

             'delivery_methods' => 'nullable|array',
             'delivery_methods.*' => 'nullable|string',

        ]);

       

        $formFields['target_crops'] = $request->input('target_crops');
        $formFields['target_livestock'] = $request->input('target_livestock');
        $formFields['delivery_methods'] = $request->input('target_livestock');

        $user = $request->user();
        $providerId = $user->id;
        $formFields['provider_id'] = $providerId;

        Knowledgeprovider::create($formFields);

        return view('Provider.success');

    }




}
