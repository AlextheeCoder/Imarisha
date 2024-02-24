<x-layout>
    <div class="profile-create">
    <form class="farm-form" method="POST" action="/provider/store">
        @csrf
    <div class="form-section current-section">
        <h2>Create Your Provider Profile</h2>
        
        <div class="part" >
            <label for="organization_name">What is your Orgnization's Name:</label>
            <input type="text" name="organization_name" placeholder="Organization Name" required>
        </div>

        <div class="part">
            <label for="website">What is your Orgnization's Website:</label>
            <input type="text" name="website" placeholder="Website">
        </div>

        <div class="part">
            <label for="type">What Type of provider are you:</label>
            <select id="type" name="type" required>
                <option value="financial">Financial Provider</option>
                <option value="inputs">Inputs Provider</option>
                <option value="labor">Labor Provider</option>
                <option value="marketing">Marketing Provider</option>
                <option value="knowledge">Knowledge Provider</option>
            </select>
        </div>
       
        <div class="part">
            <label for="target_profile">Target profile:</label>
            <select id="target_profile" name="target_profile" required>
                <option value="small_scale">Small Scale Farmers</option>
                <option value="medium_scale">Medium Scale Farmers</option>
                <option value="large_scale">Large Scale Farmers</option>
                <option value="all">All</option>
            </select>
        </div>

        <div class="part">
            <label for="about">Tell us about your organization: </label>
            <div id="about" style="height:150px;"></div> 
            <textarea name="about" style="display:none;"></textarea> 
        </div>
        
        <div class="part">
            <button class="button" type="submit">Continue</button>
        </div>
       
    </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#about', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Tell us about your organization...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); 
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="about"]').value = quill.root.innerHTML;
        });
      </script>
</x-layout>