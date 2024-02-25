<x-layout>
    <div class="profile-create">
    <form class="farm-form" method="POST" action="/provider/knowledge/store">
        @csrf
     <div class="form-section current-section">
        <h2>Create Your Provider Profile</h2>
    
       

        <div class="part">
            <label for="target_crops">What kind of crops are you targeting:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-1" name="target_crops[]" value="staple">
                    <span class="checkmark"></span>
                    <span class="text">Staple food Crops</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-2" name="target_crops[]" value="cash">
                    <span class="checkmark"></span>
                    <span class="text">Cash Crops</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-3" name="target_crops[]" value="fruits_and_vegetables">
                    <span class="checkmark"></span>
                    <span class="text">Fruits and Vegetables</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-4" name="target_crops[]" value="specialty-crops">
                    <span class="checkmark"></span>
                    <span class="text">Specialty Crops</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-5" name="target_crops[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>


        <div class="part">
            <label for="target_livestock">What kind of Livestock are you targeting:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="livestock-1" name="target_livestock[]" value="cattle">
                    <span class="checkmark"></span>
                    <span class="text">Cattle</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="livestock-2" name="target_livestock[]" value="sheep">
                    <span class="checkmark"></span>
                    <span class="text">Sheep</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="livestock-3" name="target_livestock[]" value="goats">
                    <span class="checkmark"></span>
                    <span class="text">Goats</span>
                </label>

                <label class="checkbox">
                    <input type="checkbox" id="livestock-4" name="target_livestock[]" value="poultry">
                    <span class="checkmark"></span>
                    <span class="text">Poultry</span>
                </label>
                <label class="checkbox">
                    <input type="checkbox" id="livestock-5" name="target_livestock[]" value="pigs">
                    <span class="checkmark"></span>
                    <span class="text">Pigs</span>
                </label>
                <label class="checkbox">
                    <input type="checkbox" id="livestock-6" name="target_livestock[]" value="bees">
                    <span class="checkmark"></span>
                    <span class="text">Bees</span>
                </label>
                <label class="checkbox">
                    <input type="checkbox" id="livestock-7" name="target_livestock[]" value="fish">
                    <span class="checkmark"></span>
                    <span class="text">Fish</span>
                </label>
        
        
                <label class="checkbox">
                    <input type="checkbox" id="livestock-8" name="target_livestock[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>


        
        <div class="part">
            <label for="delivery_methods">What is your delivery method:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-1" name="delivery_methods[]" value="workshops">
                    <span class="checkmark"></span>
                    <span class="text">Workshops</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-2" name="delivery_methods[]" value="On_farm_onsultations">
                    <span class="checkmark"></span>
                    <span class="text">On-farm Consultations</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-3" name="delivery_methods[]" value="webinars">
                    <span class="checkmark"></span>
                    <span class="text">Webinars</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-4" name="delivery_methods[]" value="digital_resources">
                    <span class="checkmark"></span>
                    <span class="text">Digital Resources</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="target-crops-5" name="delivery_methods[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>


  

        <div class="part">
            <label for="pricing_models">what pricing models are you offering:</label>
            <select id="pricing_models" name="pricing_models" required>
                <option value="fixed">Fixed Price</option>
                <option value="negotiated">Negotiated</option>
                <option value="market_linked">Market-Linked</option>
                <option value="free">Free</option>
            </select>
        </div>

     


   


        <div class="part">
            <label for="credentials">What are your credentials: </label>
            <div id="credentials" style="height:150px;"></div> 
            <textarea name="credentials" style="display:none;"></textarea> 
        </div>

        

       
        
        <div class="part">
            <button class="button" type="submit">Finish</button>
        </div>
       
    </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#credentials', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Specificy Certifications, affiliations, years of experience...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); // Assuming your form's class
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="credentials"]').value = quill.root.innerHTML;
        });
       
      </script>





      <script>
const checkboxGroups = document.querySelectorAll('.checkbox-group');

checkboxGroups.forEach(group => {
    const checkboxes = group.querySelectorAll('input[type="checkbox"]');
    const noneCheckbox = group.querySelector('input[value="none"]');

    // Event listener for the 'None' checkbox in this group
    noneCheckbox.addEventListener('change', () => {
        if (noneCheckbox.checked) {
            checkboxes.forEach(checkbox => {
                if (checkbox !== noneCheckbox) {
                    checkbox.checked = false;
                }
            });
        }
    });

    // Event listener for regular checkboxes in this group
    checkboxes.forEach(checkbox => {
        if (checkbox !== noneCheckbox) { // Exclude the 'None' checkbox
            checkbox.addEventListener('change', () => {
                noneCheckbox.checked = false;
            });
        }
    });
});

      </script>
</x-layout>