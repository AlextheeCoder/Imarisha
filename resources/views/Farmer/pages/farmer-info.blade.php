<x-layout>

    <div class="farm-info-header">
        <h1>"Imarisha provides farmers with opportunities for best-in-market farm inputs."</h1>
      </div>



    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Are you a farmer<br><strong class="black">Connect with Imarisha</strong></h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>

                      
                        
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

<div class="ceo-quote">
    <h1>"We empower farmers, turning their farms into successful businesses and gateways to the middle class."</h1>
</div>

<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                <div class="about_img">
                    <figure><img src="{{ asset('images/works.jpg') }}"  alt="img" style="border-radius: 100%"   style="border-radius: 100%; width: 80%; margin-left: 50px; margin-top:50px; max-height: 500px;"/></figure>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                <div class="about_box">
                    <h2>How it Works<br><strong class="black">Imarisha Platform</strong></h2>
                    <p>
                        Imarisha welcomes providers to revolutionize agriculture with their expertise. Join our platform to optimize crops, enhance livestock, offer financial solutions, and connect with skilled labor. By partnering with Imarisha, you contribute to a robust support network, empowering farmers and driving sustainable growth. Join us in shaping the future of agriculture and expanding your influence in the industry.
                    </p>
                    @auth
                    <a href="/farm/profile">Create your profile</a>
                        @else
                    <a href="/login">Sign In</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>