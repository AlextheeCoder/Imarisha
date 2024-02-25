<x-layout>
    <div class="profile-create">
        <form class="farm-form" method="POST" action="/provider/labor/store">
                @csrf
            <div class="form-section current-section">
                    <h2>Create Your Provider Profile</h2>
                    
                    <div class="part">
                        <label for="skill_levels">What id the skill level you are offering:</label>
                        <select id="skill_levels" name="skill_levels" required>
                            <option value="unskilled">Unskilled Labor</option>
                            <option value="semi_skilled">Semi-skilled Labor</option>
                            <option value="skilled">Skilled Labor</option>
                            <option value="none">None</option>
                            
                        </select>
                    </div>

                

             
                    <div class="part">
                        <label for="specializations">What is the specialization you are offering:</label>
                        <select id="specializations" name="specializations" required>
                            <option value="planting">Planting</option>
                            <option value="harvesting">Harvesting</option>
                            <option value="livestock_care">Livestock Care</option>
                            <option value="equipment_operation">Equipment Operation</option>
                            <option value="none">None</option>
                        </select>
                    </div>


                    <div class="part">
                        <label for="contract_types">What contract types are you offering:</label>
                        <select id="contract_types" name="contract_types" required>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="seasonal">Seasonal</option>
                            <option value="task_based">Task Based</option>
                            <option value="none">None</option>
                        </select>
                    </div>

                    
                    <div class="part">
                        <label for="availability">What is the availability of your service:</label>
                        <div class="radio-group">
                            <div class="custom-radio">
                                <input type="radio" id="availability-1" name="availability" value="immediate">
                                <label class="radio-label" for="availability-1">
                                    <div class="radio-circle"></div>
                                    <span class="radio-text">Immediate</span>
                                </label>
                    
                                <input type="radio" id="availability-2" name="availability" value="scheduled">
                                <label class="radio-label" for="availability-2">
                                    <div class="radio-circle"></div>
                                    <span class="radio-text">Scheduled</span>
                                </label>
                    
                            </div>
                        </div>
                    </div>
                

                
                    <div class="part">
                        <label for="pricing_model">What is your pricing model:</label>
                        <select id="pricing_model" name="pricing_model" required>
                            <option value="hourly">Hourly</option>
                            <option value="daily">Daily</option>
                            <option value="per_task">Per-Task</option>
                            <option value="negotiable">Negotiable</option>
                            <option value="none">None</option>
                        </select>
                    </div>

                    <div class="part">
                        <label for="verified">Are your laborers verified:</label>
                        <div class="radio-group">
                            <div class="custom-radio">
                                <input type="radio" id="verified-1" name="verified" value="true">
                                <label class="radio-label" for="verified-1">
                                    <div class="radio-circle"></div>
                                    <span class="radio-text">Yes</span>
                                </label>
                    
                                <input type="radio" id="verified-2" name="verified" value="false">
                                <label class="radio-label" for="verified-2">
                                    <div class="radio-circle"></div>
                                    <span class="radio-text">No</span>
                                </label>
                    
                            </div>
                        </div>
                    </div>

                
                    
                    <div class="part">
                        <label for="additional_info">Add any additional information: </label>
                        <div id="additional_info" style="height:150px;"></div> 
                        <textarea name="additional_info" style="display:none;"></textarea> 
                    </div>

                    <div class="part">
                        <button class="button" type="submit">Finish</button>
                    </div>
       
             </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#additional_info', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'Any additional info...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); // Assuming your form's class
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="additional_info"]').value = quill.root.innerHTML;
        });
      </script>
</x-layout>