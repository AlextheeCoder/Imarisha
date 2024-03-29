<x-layout>
   <div class="profile-create">
    <form class="farm-form" method="POST" action="/profile/store">
        @csrf
             <!-- Section 1: General Information -->
            @include('Farmer.pages.sections.section1')
              <!-- Section 2: Farming Practices and Challenges -->
            @include('Farmer.pages.sections.section2')
            @include('Farmer.pages.sections.section3')
            @include('Farmer.pages.sections.section4')
            @include('Farmer.pages.sections.section5')
            @include('Farmer.pages.sections.section6')

        </form>
    </div>


    
    
    <script>
        let currentSection = 1;
    
        function nextSection() {
            const currentSectionId = `section${currentSection}`;
            const nextSectionId = `section${currentSection + 1}`;
            const currentSectionElement = document.getElementById(currentSectionId);
            const nextSectionElement = document.getElementById(nextSectionId);
    
            if (currentSectionElement && nextSectionElement) {
                currentSectionElement.classList.remove('current-section');
                nextSectionElement.classList.add('current-section');
                currentSection++;
            }
            event.preventDefault();  
        }
    
        function prevSection() {
            const currentSectionId = `section${currentSection}`;
            const prevSectionId = `section${currentSection - 1}`;
            const currentSectionElement = document.getElementById(currentSectionId);
            const prevSectionElement = document.getElementById(prevSectionId);
    
            if (currentSectionElement && prevSectionElement && currentSection > 1) {
                currentSectionElement.classList.remove('current-section');
                prevSectionElement.classList.add('current-section');
                currentSection--;
            }
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
    
                if (!response.ok) {
                    const message = `An error has occurred: ${response.status}`;
                    throw new Error(message);
                }
    
                window.location.href = '/farmer/success';
            } catch (error) {
                console.error('Form submission error:', error);
            }
        }
    
       
        document.querySelector('.farm-form button[type="submit"]').addEventListener('click', submitForm);
    </script>
        
    
</x-layout>