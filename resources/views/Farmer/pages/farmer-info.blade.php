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
   
   <!-- Farmer Section -->
   <div class="farmer-section">
    <div class="image-side">
        <img src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?q=80&w=1991&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Farmer Image">
    </div>

    <div class="text-side">
        <h2>Why Imarisha</h2>
        <p>Imarisha takes pride in providing specialized loans that empower farmers engaged in various agricultural fields, catering to their specific requirements, be it in animal husbandry or crop cultivation.</p>
        <div class="learn-more">
            <a href="#">Learn More</a>
        </div>
    </div>
</div>

   

   </div>
</x-layout>