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
                       
                          
                        <div class="col-sm-12">
                            <a class="btn btn-info " style="margin: 10px;" target="__blank" href="#">Go To Dashboard</a>
                          </div>
                       
                      
                      </div>

                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                            <!-- -----------------------------------------------------------------Section 1------------------------------------------------------------------------- -->
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Organization Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$profile->organization_name}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Website</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$profile->website}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Provider Type</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$profile->type}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Target Profile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$profile->target_profile}}
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