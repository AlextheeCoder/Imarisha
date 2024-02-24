<x-layout>
    <div class="profile-create">
    <form class="farm-form" method="POST" action="/provider/financial/store">
        @csrf
    <div class="form-section current-section">
        <h2>Create Your Provider Profile</h2>
        
        <div class="part" >
            <label for="loan_types">What Type of loans are you offering:</label>
            <select id="loan_types" name="loan_types" required>
                <option value="micro_loans">Micro Loans</option>
                <option value="seasonal_loans">Seasonal Loans</option>
                <option value="equipment_financing">Equipment Financing</option>
                <option value="long_term">Long-term Loans</option>
                <option value="grants">Grants</option>
                <option value="none">None</option>
                
            </select>
        </div>

        <div class="part">
            <label for="interest_rates">What are your interest rates:</label>
            <input type="number" name="interest_rates"  >
        </div>

        <div class="part">
            <label for="repayment_terms">What are your repayment options:</label>
            <select id="repayment_terms" name="repayment_terms" required>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="annually">annually</option>
                <option value="flexible">Felixble</option>
                <option value="none">None</option>
            </select>
        </div>

        <div class="part">
            <label for="eligibility_criteria">Describe your Eligibility Criteria: </label>
            <div id="eligibility_criteria" style="height:150px;"></div> 
            <textarea name="eligibility_criteria" style="display:none;"></textarea> 
        </div>

       
        <div class="part">
            <label for="savings_products">What savings products do you offer:</label>
            <select id="savings_products" name="savings_products" required>
                <option value="basic">Basic Savings Accounts</option>
                <option value="high_yield">High-Yield Savings Accounts</option>
                <option value="fixed_deposit">Fixed Deposit Accounts</option>
                <option value="group_savings">Group Savings Mechanisms</option>
                <option value="none">None</option>
            </select>
        </div>

        <div class="part">
            <label for="insurance_offered">What insuarance policies are you offering:</label>
            <select id="insurance_offered" name="insurance_offered" required>
                <option value="crop">Crop Insurance</option>
                <option value="livestock">Livestock Insurance</option>
                <option value="weather">Weather-Index Insurance</option>
                <option value="health">Health Insurance</option>
                <option value="none">None</option>
            </select>
        </div>

       
        
        <div class="part">
            <button class="button" type="submit">Finish</button>
        </div>
       
    </div>
    </form>
    </div>

    <script src="https://cdn.quilljs.com/1.1.3/quill.js"></script>
    <script>
        const quill = new Quill('#eligibility_criteria', {
          modules: {
            toolbar: [
              [{ header: [1, 2, false] }],
              ['bold', 'italic', 'underline']
            ],
          },
          placeholder: 'What is your eligibilty Criteria...',
          theme: 'snow'
        });
      
        const form = document.querySelector('.farm-form'); // Assuming your form's class
      
        form.addEventListener('submit', function() {
          document.querySelector('textarea[name="eligibility_criteria"]').value = quill.root.innerHTML;
        });
      </script>
</x-layout>