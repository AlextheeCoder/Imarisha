<x-layout>
   <div class="profile-create">
        <form class="farm-form" method="POST" action="/profile/store">
            @csrf
             <!-- Section 1: General Information -->
            @include('Farmer.pages.sections.section1')

              <!-- Section 2: Farming Practices and Challenges -->
            @include('Farmer.pages.sections.section2')
               <!-- Section 3 content here -->
            @include('Farmer.pages.sections.section3')
            <!-- Section 4: Business Operations and Financial Management -->
            @include('Farmer.pages.sections.section4')  
            <!-- Section 5: Sales and Marketing -->
            @include('Farmer.pages.sections.section5')
            <!-- Section 6: Crop and Livestock Enterprises -->
            @include('Farmer.pages.sections.section6')

          
        </form>
    </div>


    <script>
        function nextSection(currentSectionId, nextSectionId) {
            document.getElementById(currentSectionId).classList.remove('current-section');
            document.getElementById(nextSectionId).classList.add('current-section');
            event.preventDefault();  
        }
    
        function prevSection(currentSectionId, prevSectionId) {
            document.getElementById(currentSectionId).classList.remove('current-section');
            document.getElementById(prevSectionId).classList.add('current-section');
            event.preventDefault();  
        }
    
        async function submitForm() {
        const form = document.querySelector('.farm-form');
        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: form.method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            });

            if (response.ok) {
                
                window.location.href = '/'; 
            } else {
                
                console.error('Form submission failed:', response.statusText);
            }
        } catch (error) {
            console.error('An unexpected error occurred:', error);
        }
    }
    </script>
    
    
    
    
</x-layout>