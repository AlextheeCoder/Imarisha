<x-layout>

    <div class="farm-info-header">
        <h1>"PEMU Empowers Smallholder Farmers and Agrifood Entrepreneurs with Technology and Personalized Support"</h1>
        @auth
            <a href="/farm/profile">Create Your PEMU Profile!</a>
         @else
            <a href="/login">Sign In</a>
        @endauth
      </div>



    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Are you a farmer<br><strong class="black">Connect with PEMU</strong></h2>
                        <p>
                            PEMU Agrifood Academy is poised to transform the agricultural landscape in Kenya by combining technology and personalized support. The startup empowers smallholder farmers with tailored learning programs in regenerative agriculture, sustainable business practices, and effective management. PEMU also facilitates access to sustainable inputs and technologies, enhancing productivity and promoting environmental stewardship. Through its extensive network, the academy connects farmers to local and global markets, positioning their products for success. Led by founder Peter Muthee, PEMU is committed to creating a comprehensive ecosystem for sustainable growth, offering farmers the knowledge and tools to thrive in the evolving agrifood sector.
                        </p>

                      
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure>
                            <img style="border-radius: 100%; width: 80%; margin-left: 50px; margin-top:50px; max-height: 500px;" src="{{ asset('images/omugundi.jpg') }}" alt="img" />
                        </figure>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how">
        <h1 class="how-title">How it works</h1>
        <div class="row">
            <div class="col-md-6">
              <div class="instruction-card">
                <img src="/images/login.png" alt="Instruction 1" class="instruction-image">
                @auth
                <h5>1. Login/Sign up!</h5>
                @else
                <a href="/login"><h5>1. Login/Sign up!</h5></a>
                @endauth
                
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="instruction-card">
                <img src="/images/profile.png" alt="Instruction 2" class="instruction-image">
                <a href="#"><h5>2. Create you Profile</h5></a>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="instruction-card">
                <img src="/images/connected.png" alt="Instruction 3" class="instruction-image">
                <a href=""><h5>3. Get Connected</h5></a>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="instruction-card">
                <img src="/images/prosper.png" alt="Instruction 4" class="instruction-image">
                <h5>4. Prosper</h5>
                
              </div>
            </div>
          </div>
    </div>

</x-layout>