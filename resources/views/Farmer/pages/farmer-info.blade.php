<x-layout>
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Are you a farmer<br><strong class="black">Connect with Imarisha</strong></h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>

                        @auth
                        <a href="/farm/profile">Create your profile</a>
                            @else
                        <a href="/login">Sign In</a>
                        @endauth
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure>
                            <img style="border-radius: 100%; width: 80%; margin-left: 50px; margin-top:50px;" src="{{ asset('images/pic3.jpg') }}" alt="img" />
                        </figure>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>