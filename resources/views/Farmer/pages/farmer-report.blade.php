<x-layout>
    <div class="farmer-report">
        <div class="container">
            <div class="main-body">
            
                  
            
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{$profile->user->profile ? asset('storage/' . $profile->user->profile) : asset('/images/homies.jpg')}}" alt="Admin" class="rounded-circle" width="150">
                            
                            <div class="mt-3">
                                <h4>{{$profile->user->firstname}} {{$profile->user->lastname}}</h4>
                              <p class="text-secondary mb-1">{{$profile->user->email}}</p>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">County</h6>
                            <span class="text-secondary">{{$profile->user->county}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">Sub County</h6>
                            <span class="text-secondary">{{$profile->user->subcounty}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">Phone Number</h6>
                            <span class="text-secondary">{{$profile->user->number}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">Gender</h6>
                            <span class="text-secondary">{{$profile->user->gender}}</span>
                          </li>
                       
                        </ul>
                      </div>

                      <div class="card mt-3">
                       
                          
                            <div class="card-body">
                              <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Analysis</i>Most compatible providers</h6>
                              <small>Provider 1</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <small>Provider 2</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <small>Provider 3</small>
                              <div class="progress mb-3" style="height: 5px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                             
                            </div>
                       
                      
                      </div>

                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                            <!-- -----------------------------------------------------------------Section 1------------------------------------------------------------------------- -->
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Type of Farming Entity</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$profile->farm_type}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Size of Farm</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->land_size}}
                            </div>
                          </div>
                          <hr>
                          <!-- -----------------------------------------------------------------Section 2------------------------------------------------------------------------- -->
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Current Regenerative Agriculture Practice</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->regenerative_practice}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Primary Farming Challenges</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->farming_challenges) }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Soil Quality Rating</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$profile->soil_quality}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Access to Irrigation</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->irrigation_access}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Water Source</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->water_source}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Soil Improvement Techniques</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->soil_improvement_techniques) }}
                            </div>
                          </div>
                          <!-- -----------------------------------------------------------------Section 3------------------------------------------------------------------------- -->
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Interest in Training Services</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->interest_training}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Desired Training Areas</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->training_areas) }}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Willingness to Pay for Training</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->pay_for_training}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Likelihood to Join Digital Platform</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                             {{$profile->join_digital_platform}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Challenges in Finding Operators</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->find_operators}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Interest in Upskilling Operators</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->upskill_operators}}
                            </div>
                          </div>

                    <!-- -----------------------------------------------------------------Section 4------------------------------------------------------------------------- -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Farm Operation as a Business</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->farm_operation}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Record-Keeping</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->record_keeping}}
                            </div>
                        </div>
                    
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Profitability Analysis</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->profitability_analysis}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Long-term Strategy/Plan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->long_term_strategy}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Sources of Finance</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->sources_of_finance) }}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Borrowing Habits</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->borrowing_habits}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Challenges in Finance Access</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->finance_access_challenges) }}
                            </div>
                        </div>


                        <!-- -----------------------------------------------------------------Section 5------------------------------------------------------------------------- -->
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Sales Channels</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->sales_channels) }}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Market Reliability</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->market_reliability}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Selling Challenges</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->selling_challenges) }}
                            </div>
                        </div>


                        <!-- -----------------------------------------------------------------Section 6------------------------------------------------------------------------- -->

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Current Crops</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->current_crops) }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Interest in New Crops</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->interest_new_crops}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Constraints in Crop Choice</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->crop_choice_constraints) }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Current Livestock</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->current_livestock) }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Interest in Livestock Farming</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->interest_livestock_farming}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Challenges in Livestock Farming</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ implode(', ', $profile->livestock_farming_challenges) }}
                            </div>
                        </div>


                        <!-- -----------------------------------------------------------------Sections end------------------------------------------------------------------------- -->
                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                              <a class="btn btn-info " target="__blank" href="#">Edit</a>
                            </div>
                          </div>
                        </div>
                      </div>
        
                 
        
        
        
                    </div>
                  </div>
        
                </div>
            </div>
    </div>
</x-layout>