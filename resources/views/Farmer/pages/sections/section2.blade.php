<div class="form-section" id="section2">
               
    <h2>Section 2: Farming Practices and Challenges</h2>
     <!-- Section 2: Farming Practices and Challenges -->
    
     <div class="part">
        <label for="regenerative-practice">Current Regenerative Agriculture Practice:</label>
        <div class="radio-group">
            <div class="custom-radio">
                <input type="radio" id="regenerative-radio-1" name="regenerative-practice" value="yes" checked="">
                <label class="radio-label" for="regenerative-radio-1">
                    <div class="radio-circle"></div>
                    <span class="radio-text">Yes</span>
                </label>
    
                <input type="radio" id="regenerative-radio-2" name="regenerative-practice" value="no">
                <label class="radio-label" for="regenerative-radio-2">
                    <div class="radio-circle"></div>
                    <span class="radio-text">No</span>
                </label>
    
                <input type="radio" id="regenerative-radio-3" name="regenerative-practice" value="unsure">
                <label class="radio-label" for="regenerative-radio-3">
                    <div class="radio-circle"></div>
                    <span class="radio-text"> Unsure what it is</span>
                </label>
            </div>
        </div>
    </div>

<div class="part">
    <label for="farming-challenges">Primary Farming Challenges:</label>
    <div class="checkbox-group">  
        <label class="checkbox">
            <input type="checkbox" id="challenge-input-1" name="farming-challenges" value="access-inputs">
            <span class="checkmark"></span>
            <span class="text">Access to quality inputs</span>
        </label>
        <label class="checkbox">
            <input type="checkbox" id="challenge-input-2" name="farming-challenges" value="market-access">
            <span class="checkmark"></span>
            <span class="text">Market access</span>
        </label>
        <label class="checkbox">
            <input type="checkbox" id="challenge-input-3" name="farming-challenges" value="knowledge-techniques">
            <span class="checkmark"></span>
            <span class="text">Knowledge on techniques</span>
        </label>
        <label class="checkbox">
            <input type="checkbox" id="challenge-input-4" name="farming-challenges" value="government-support">
            <span class="checkmark"></span>
            <span class="text">Government support</span>
        </label>
        <label class="checkbox">
            <input type="checkbox" id="challenge-input-5" name="farming-challenges" value="environmental-challenges">
            <span class="checkmark"></span>
            <span class="text">Environmental challenges</span>
        </label>
       
          
    </div>
</div>

<div class="part">
    <label for="soil-quality">Soil Quality Rating:</label>
    <select id="soil-quality" name="soil-quality">
        <option value="good">Good</option>
        <option value="average">Average</option>
        <option value="poor">Poor</option>
    </select>
</div>


<div class="part">
    <label for="irrigation-access">Access to Irrigation:</label>
    <div class="radio-group">
        <div class="custom-radio">
            <input type="radio" id="irrigation-radio-1" name="irrigation-access" value="reliable">
            <label class="radio-label" for="irrigation-radio-1">
                <div class="radio-circle"></div>
                <span class="radio-text">Reliable and sufficient</span>
            </label>

            <input type="radio" id="irrigation-radio-2" name="irrigation-access" value="partially-reliable">
            <label class="radio-label" for="irrigation-radio-2">
                <div class="radio-circle"></div>
                <span class="radio-text">Partially reliable</span>
            </label>

            <input type="radio" id="irrigation-radio-3" name="irrigation-access" value="rain-fed-agriculture">
            <label class="radio-label" for="irrigation-radio-3">
                <div class="radio-circle"></div>
                <span class="radio-text">Rain-fed agriculture</span>
            </label>

            <input type="radio" id="irrigation-radio-4" name="irrigation-access" value="not-applicable">
            <label class="radio-label" for="irrigation-radio-4">
                <div class="radio-circle"></div>
                <span class="radio-text">Not applicable</span>
            </label>
        </div>
    </div>
</div>



<div class="part">
    <label for="water-source">Water Source:</label>
    <select id="water-source" name="water-source">
        <option value="river">River</option>
        <option value="lake">Lake</option>
    </select> 
</div>


<div class="part">
    <label for="soil-improvement-techniques">Soil Improvement Techniques:</label>
    <div class="checkbox-group">
        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-1" name="soil-improvement-techniques" value="organic-matter-addition">
            <span class="checkmark"></span>
            <span class="text">Organic matter addition</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-2" name="soil-improvement-techniques" value="crop-rotation-diversification">
            <span class="checkmark"></span>
            <span class="text">Crop rotation/diversification</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-3" name="soil-improvement-techniques" value="conservation-tillage">
            <span class="checkmark"></span>
            <span class="text">Conservation tillage</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-4" name="soil-improvement-techniques" value="cover-cropping">
            <span class="checkmark"></span>
            <span class="text">Cover cropping</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-5" name="soil-improvement-techniques" value="soil-testing">
            <span class="checkmark"></span>
            <span class="text">Soil testing</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-6" name="soil-improvement-techniques" value="irrigation-management">
            <span class="checkmark"></span>
            <span class="text">Irrigation management</span>
        </label>

        <label class="checkbox">
            <input type="checkbox" id="soil-improvement-input-7" name="soil-improvement-techniques" value="other">
            <span class="checkmark"></span>
            <span class="text">Other (Please specify)</span>
        </label>
        <input type="text" id="other-soil-improvement" name="other-soil-improvement">
    </div>
</div>



    <div class="button-group">
        <button onclick="prevSection('section2', 'section1')">Previous</button>
        <button onclick="nextSection('section2', 'section3')">Next</button>
    </div>
</div>