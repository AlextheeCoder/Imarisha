<x-layout>
    <div class="profile-create">
    <form class="farm-form" method="POST" action="/provider/inputs/store">
        @csrf
    <div class="form-section current-section">
        <h2>Create Your Provider Profile</h2>
    

        <div class="part">
            <label for="training-areas">What kind of seeds do you provide:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="seed-types-1" name="seed_types[]" value="cereals">
                    <span class="checkmark"></span>
                    <span class="text">Cereals</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="seed-types-2" name="seed_types[]" value="legumes">
                    <span class="checkmark"></span>
                    <span class="text">Legumes</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="seed-types-3" name="seed_types[]" value="vegetables">
                    <span class="checkmark"></span>
                    <span class="text">Vegetables</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="seed-types-4" name="seed_types[]" value="specialty-crops">
                    <span class="checkmark"></span>
                    <span class="text">Specialty Crops</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="seed-types-5" name="seed_types[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>



        <div class="part">
            <label for="training-areas">What kind of Fertilizers do you provide:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="fertilizers-1" name="fertilizers[]" value="organic">
                    <span class="checkmark"></span>
                    <span class="text">Organic</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="fertilizers-2" name="fertilizers[]" value="chemical">
                    <span class="checkmark"></span>
                    <span class="text">Chemical</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="fertilizers-3" name="fertilizers[]" value="specific-formulas">
                    <span class="checkmark"></span>
                    <span class="text">Specific Formulas</span>
                </label>
        
        
                <label class="checkbox">
                    <input type="checkbox" id="fertilizers-5" name="fertilizers[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>



        <div class="part">
            <label for="training-areas">What kind of pesticides do you provide:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="pesticides-input-1" name="pesticides[]" value="herbicides">
                    <span class="checkmark"></span>
                    <span class="text">Herbicides</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="pesticides-input-2" name="pesticides[]" value="insecticides">
                    <span class="checkmark"></span>
                    <span class="text">Insecticides</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="pesticides-input-3" name="pesticides[]" value="biocontrol_options">
                    <span class="checkmark"></span>
                    <span class="text">Biocontrol options</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="pesticides-input-4" name="pesticides[]" value="rodenticides">
                    <span class="checkmark"></span>
                    <span class="text">Rodenticides</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="pesticides-input-5" name="pesticides[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>



        <div class="part">
            <label for="training-areas">What kind of farming equipment do you provide:</label>
            <div class="checkbox-group">
                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-1" name="farming_equipment[]" value="heavy_machinery">
                    <span class="checkmark"></span>
                    <span class="text">Heavy Machinery</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-2" name="farming_equipment[]" value="gardening_tools">
                    <span class="checkmark"></span>
                    <span class="text">Garnening Tools</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-3" name="farming_equipment[]" value="workshop_tools">
                    <span class="checkmark"></span>
                    <span class="text">Workshop Tools</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-4" name="farming_equipment[]" value="livestock_equipment">
                    <span class="checkmark"></span>
                    <span class="text">Livestock Equipment</span>
                </label>

                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-5" name="farming_equipment[]" value="spare_parts">
                    <span class="checkmark"></span>
                    <span class="text">Spare Parts</span>
                </label>
        
                <label class="checkbox">
                    <input type="checkbox" id="farming-equipment-input-5" name="farming_equipment[]" value="none">
                    <span class="checkmark"></span>
                    <span class="text">None</span>
                </label>
        
            </div>
        </div>








        <div class="part">
            <label for="equipment_provision">How are you provisioning your equipment:</label>
            <select id="equipment_provision" name="equipment_provision" required>
                <option value="sale">Sale</option>
                <option value="rentals">Rentals</option>
                <option value="none">None</option>
            </select>
        </div>

        <div class="part">
            <label for="delivery_options">What are your delivery options:</label>
            <select id="delivery_options" name="delivery_options" required>
                <option value="to_farm">To farm</option>
                <option value="collection_points">Collection Points </option>
                <option value="none">None</option>
            </select>
        </div>


        <div class="part">
            <label for="additional_services">Any aditional services?: </label>
            <div id="additional_services" style="height:150px;"></div> 
            <textarea name="additional_services" style="display:none;"></textarea> 
        </div>


       
        
        <div class="part">
            <button class="button" type="submit">Finish</button>
        </div>
       
    </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#additional_services', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Any aditional services...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); // Assuming your form's class
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="additional_services"]').value = quill.root.innerHTML;
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