<x-layout>

    <div class="farm-info-header">
        <h1>"PEMU Empowers Smallholder Farmers and Agrifood Entrepreneurs with Technology and Personalized Support"</h1>
        @auth
            <a href="/providers/profile">Create Your PEMU Profile!</a>
         @else
            <a href="/login">Sign In</a>
        @endauth
      </div>



    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Are you a provider<br><strong class="black">Discover with PEMU</strong></h2>
                        <p>
                            PEMU Agrifood Academy offers service providers increased visibility and market expansion through its extensive network of farmers and entrepreneurs. The collaborative ecosystem allows providers to tailor offerings to regional needs, positioning them as leaders in innovation and sustainability. PEMU's commitment to education and skill development provides opportunities for providers to contribute to training programs, enhancing their advisory roles. Aligning with PEMU not only boosts business prospects but also allows providers to actively participate in shaping the future of sustainable agriculture in Kenya.</p>

                      
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure>
                            <img style="border-radius: 100%; width: 80%; margin-left: 50px; margin-top:50px; max-height: 500px;" src="{{ asset('images/provider.jpg') }}" alt="img" />
                        </figure>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>