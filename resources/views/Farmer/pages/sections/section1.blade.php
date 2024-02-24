<div class="form-section current-section" id="section1">
    <h2>General Information</h2>
    <div class="part">
        <label for="farm-type">Type of Farming Entity:</label>
        <select id="farm-type" name="farm_type" required>
            <option value="individual">Individual Farmer</option>
            <option value="cooperative">Farming Cooperative</option>
            <option value="organization">Agricultural Organization</option>
        </select>
    </div>
   
    <div class="part">
        <label for="land-size">Size of Farm:</label>
        <select id="land-size" name="land_size" required>
            <option value="less-than-5">Less than 5 hectares</option>
            <option value="5-10">5 to 10 hectares</option>
            <option value="10-20">10 to 20 hectares</option>
            <option value="more-than-20">More than 20 hectares</option>
        </select>
    </div>
    
    <button class="button" onclick="nextSection('section1', 'section2')">Next</button>
</div>