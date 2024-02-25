<x-layout>
    <div class="profile-create">
    <form class="farm-form" method="POST" action="/provider/marketing/store">
        @csrf
     <div class="form-section current-section">
        <h2>Create Your Provider Profile</h2>
    
        <div class="part">
            <label for="market_channels">What market channesl are you offering:</label>
            <select id="market_channels" name="market_channels" required>
                <option value="direct_to_consumer">Direct to Consumer</option>
                <option value="cooperatives">Cooperatives</option>
                <option value="retailers">Retailers</option>
                <option value="wholesalers">Wholesalers</option>
                <option value="export">Export</option>
            </select>
        </div>


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
            <label for="transport_provided">Do you provide transport:</label>
            <div class="radio-group">
                <div class="custom-radio">
                    <input type="radio" id="transport-1" name="transport_provided" value="true">
                    <label class="radio-label" for="transport-1">
                        <div class="radio-circle"></div>
                        <span class="radio-text">Yes</span>
                    </label>
        
                    <input type="radio" id="transport-2" name="transport_provided" value="false">
                    <label class="radio-label" for="transport-2">
                        <div class="radio-circle"></div>
                        <span class="radio-text">No</span>
                    </label>
        
                </div>
            </div>
        </div>


  

        <div class="part">
            <label for="pricing_models">what pricing models are you offering:</label>
            <select id="pricing_models" name="pricing_models" required>
                <option value="fixed">Fixed Price</option>
                <option value="negotiated">Negotiated</option>
                <option value="market_linked">Market-Linked</option>
            </select>
        </div>

     


        <div class="part">
            <label for="quality_standards">Certifications and quality requirements: </label>
            <div id="quality_standards" style="height:150px;"></div> 
            <textarea name="quality_standards" style="display:none;"></textarea> 
        </div>


        <div class="part">
            <label for="contract_terms">Contract Terms: </label>
            <div id="contract_terms" style="height:150px;"></div> 
            <textarea name="contract_terms" style="display:none;"></textarea> 
        </div>

        

       
        
        <div class="part">
            <button class="button" type="submit">Finish</button>
        </div>
       
    </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#quality_standards', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Specificy the certifications or specific quality requirements you work with...',
          theme: 'snow'
        });

        const quill2 = new Quill('#contract_terms', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Specify your contract terms...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); // Assuming your form's class
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="quality_standards"]').value = quill.root.innerHTML;
        });
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="contract_terms"]').value = quill.root.innerHTML;
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