<x-layout>
   <div class="homepage-container">
      <header>
         <div class="header-content">
             <h1>A better harvest</h1>
             <p>Unlocking the potential of small-scale farmers with best-in-class inputs, financing, insurance, and training</p>
             <div class="buttons">

                 
                 @auth
                    <a href="/farm/profile" class="btn-farmer">Create profile</a>
                    @else
                    <a href="/login" class="btn-farmer">Sign in</a>
                 @endauth
             </div>
         </div>
     </header>
   
   
   
   <!-- Provider Section -->
   <section class="provider-section">
      <div class="section-content">
          <div class="column" style="margin-left: 50px">
              <!-- Bootstrap Carousel -->
              <div id="providerCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <!-- Image 1 -->
                      <div class="carousel-item active">
                          <img src="https://images.unsplash.com/photo-1574593932842-41c54335d231?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Provider Image 1">
                      </div>
                      <!-- Image 2 -->
                      <div class="carousel-item">
                          <img src="https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Provider Image 2">
                      </div>
                      <!-- Add more images as needed -->
  
                      <!-- Controls -->
                      <a class="carousel-control-prev" href="#providerCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#providerCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
          <div class="column">
              <h2>Why Imarisha</h2>
              <p>Imarisha takes pride in providing specialized loans that empower farmers engaged in various agricultural fields, catering to their specific requirements, be it in animal husbandry or crop cultivation.</p>
              
          </div>
      </div>
  </section>
   

   </div>
</x-layout>