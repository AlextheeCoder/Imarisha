<x-layout>
   <div class="profile-create">
            <form class="farm-form">
                <label for="land-size">Land Size:</label>
                <select id="land-size" name="land-size">
                <option value="0-5">0 to 5 acres</option>
                <option value="0-5">5 to 10 acres</option>
                <option value="0-5">10 to 15 acres</option>
                <option value="0-5">15 to 20 acres</option>
                </select>
            
                <label for="location">Farm County:</label>
                <input type="text" id="county" name="county" required>

                <label for="location">Farm sub county:</label>
                <input type="text" id="subcounty" name="subcounty" required>

                <label for="location">Farm Location:</label>
                <input type="text" id="location" name="location" required>
                <label for="location">Farm Sub-Location:</label>
                <input type="text" id="sublocation" name="sublocation" required>
            
                <label for="soil-type">Soil Type:</label>
                <select id="soiltype" name="soiltype">
                    <option value="loam">Loam</option>
                    <option value="blackcotton">Black cotton</option>
                  
                    </select>
            
                <label for="irrigation">Do you have irrigation?</label>
                <div class="radio-group">
                    <input type="radio" id="irrigation-yes" name="irrigation" value="yes">
                    <label for="irrigation-yes">Yes</label>
                    <input type="radio" id="irrigation-no" name="irrigation" value="no">
                    <label for="irrigation-no">No</label>
                </div>
                <label for="water-source">Water Source:</label>
                <select id="water-source" name="water-source">
                <option value="river">River</option>
                <option value="lake">Lake</option>
              
                </select>
            
                <label for="crops">Types of Crops Planted:</label>
                <input type="text" id="crops" name="crops" required>
            
                <label for="livestock">Livestock:</label>
                <div class="radio-group">
                    <input type="radio" id="livestock-yes" name="livestock" value="yes">
                    <label for="livestock-yes">Yes</label>
                    <input type="radio" id="livestock-no" name="livestock" value="no">
                    <label for="livestock-no">No</label>
                </div>
            
                <label for="sell-location">Where do you sell?</label>
                <input type="text" id="sell-location" name="sell-location" required>
            
                <label for="market">Do you have a market?</label>
                
                <div class="radio-group">
                    <input type="radio" id="market-yes" name="market" value="yes">
                    <label for="market-yes">Yes</label>
                    <input type="radio" id="market-no" name="market" value="no">
                    <label for="market-no">No</label>
                </div>
                
            
                <label for="capital">Do you need capital?</label>
                <div class="radio-group">
                    <input type="radio" id="capital-yes" name="capital" value="yes">
                    <label for="capital-yes">Yes</label>
                    <input type="radio" id="capital-no" name="capital" value="no">
                    <label for="capital-no">No</label>
                </div>
                <label for="manpower">Do you have adequate manpower?</label>
                <div class="radio-group">
                    <input type="radio" id="manpower-yes" name="manpower" value="yes">
                    <label for="manpower-yes">Yes</label>
                    <input type="radio" id="manpower-no" name="manpower" value="no">
                    <label for="manpower-no">No</label>
                </div>
            
                <label for="knowledge">How knowledgeable are you? (Scale of 1 to 5)</label>
                <input type="range" id="knowledge" name="knowledge" min="1" max="5" required>
                <button type="submit">Submit</button>
            </form>
   </div>
</x-layout>