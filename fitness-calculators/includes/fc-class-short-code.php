<?php 
/*
 * create shortcode with class 
*/

class FcpShortCodes {


	public static function fcp_water_intake_calculator( $atts, $content = "" ) {
		$fcw_title = 'No title';
		if(trim(get_option('fcw_heading'))!=false)
		{
			$fcw_title = get_option('fcw_heading');	
		}

		$fcw_theme_color = '#004d99';
		if(trim(get_option('fcw_theme_color'))!=false)
		{
			$fcw_theme_color = get_option('fcw_theme_color');	
		}
		
		return '<style>#fcp-water-intake-form {
				    margin: 0px;
				    padding: 0px;
				    border: solid 2px '.$fcw_theme_color.';
				    width: 100%;
				    float: left;
				}
				#fcp-water-intake-form h3 {
				    text-transform: uppercase;
				    background-color: '.$fcw_theme_color.';
				    padding: 2%;
				    color: #fff;
				    font-weight: bolder;
				    text-align: center;
				    margin: 0px;
				}
				#fcp-water-intake-form .fcp-result-string {
				    background-color: '.$fcw_theme_color.';
				    padding: 1%;
				    color: #fff;
				    font-size: 20px;
				    text-align: center;
				    margin: 0px;
				}
				#fcp-water-intake-form .fcp-btn {
				    background-color: '.$fcw_theme_color.';
				    color: #fff;
				    text-transform: uppercase;
				    border-radius: 4px;
				    border: solid 2px '.$fcw_theme_color.';
				    padding: 1% 3% 1% 3%;
				}
				</style><div id="fcp-water-intake-form" class="container">
				<h3><span id="daily_Water_intake_calculator">'.$fcw_title.'</span></h3>	
			  <div class="fcp-row">
			  		<div class="fcp-radio-btn fcp-radio-btn-metric">
			  			<label for="fcp-water-intake-radio-metric">Metric</label>
			  			<input type="radio" id="fcp-water-intake-radio-metric" class="form-control fcp-water-radio" name="fcp-water-intake-radio" value="metric" checked="checked">
			  			<span class="fcp-error">require</span>
			  		</div>
			  		<div class="fcp-radio-btn fcp-radio-btn-standard">
			  			<label for="fcp-water-intake-radio-imperial">Standard</label>
			  			 <input type="radio" id="fcp-water-intake-radio-imperial" class="form-control fcp-water-radio" name="fcp-water-intake-radio" value="imperial">
			  			<span class="fcp-error">require</span>
			  		</div>

			  		<table class="fcp-table">
			  			<tbody><tr>
			  				<td>
			  					<label for="fcp-water-intake-age">Age</label>
							    <select id="fcp-water-intake-age" class="left form-control" name="fcp-water-intake-age">
							    	<option value="14-18">14-18</option>
							    	<option value="19-30">19-30</option>
							    	<option value="31-50">31-50</option>
							    	<option value="50+">50+</option>
							    </select>
			  				</td>
			  				<td>
			  					<label for="fcp-water-intake-sex">Sex</label>
							    <select id="fcp-water-intake-sex" class="left  form-control" name="fcp-water-intake-sex">
							    	<option value="male">Male</option>
							    	<option value="female">Female</option>
							    </select>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label for="fcp-water-intake-height">Height</label>
						    	<input id="fcp-water-intake-height" pattern="[0-9]" type="text" class="left  form-control" name="fcp-water-intake-height" placeholder="Centimeter">
						    	<span id="fcp-water-intake-height-error" class="fcp-error">require</span>
			  				</td>
			  				<td>
			  					<label for="fcp-water-intake-weight">Weight</label>
						    	<input id="fcp-water-intake-weight" pattern="[0-9]" type="text" class="left form-control" name="fcp-water-intake-weight" placeholder="Kilogram">
						    	<span id="fcp-water-intake-weight-error" class="fcp-error">require</span>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label for="fcp-water-intake-season">Season</label>
							    <select id="fcp-water-intake-season" class="left  form-control" name="fcp-water-intake-season">
							    	<option value="winter">Winter</option>
							    	<option value="normal">Normal</option>
							    	<option value="summer">Summer</option>
							    </select>
			  				</td>
			  				<td>
			  					<label for="fcp-water-intake-activity-level">Activity Level</label>
							    <select id="fcp-water-intake-activity-level" class="left form-control" name="fcp-water-intake-activity-level">
							    	<option value="lightly-active">Lightly Active </option>
							    	<option value="moderately-active">Moderately Active </option>
							    	<option value="very-active">Very Active</option>
							    </select>
			  				</td>
			  			</tr>
			  			<tr><td><button onclick="fcpCalculateWaterIntake()" class="btn btn-default fcp-btn">Calculate</button></td><td></td></tr>
			  		</tbody></table>
			  		<p class="fcp-result-string">You should drink <span class="fcp-calculated-result">......</span>  of water per day</p>

			  </div>
		</div>';
	}


	public static function fcp_protein_intake_calculator( $atts, $content = "" ) { 
		$fcp_title = 'No title';
		if(trim(get_option('fcp_heading'))!=false)
		{
			$fcp_title = get_option('fcp_heading');	
		}

		$fcp_theme_color = '#004d99';
		if(trim(get_option('fcp_theme_color'))!=false)
		{
			$fcp_theme_color = get_option('fcp_theme_color');	
		}
		return '<style>
				#fcp-protein-intake-form {
				    margin: 0px;
				    padding: 0px;
				    border: solid 2px '.$fcp_theme_color.';
				    width: 100%;
				    float: left;
				}

				#fcp-protein-intake-form h3 {
				    text-transform: uppercase;
				    background-color: '.$fcp_theme_color.';
				    padding: 2%;
				    color: #fff;
				    font-weight: bolder;
				    text-align: center;
				    margin: 0px;
				}
				
				#fcp-protein-intake-form .fcp-result-string {
				    background-color: '.$fcp_theme_color.';
				    padding: 1%;
				    color: #fff;
				    font-size: 20px;
				    text-align: center;
				    margin: 0px;
				}
				#fcp-protein-intake-form .fcp-btn {
				    background-color: '.$fcp_theme_color.';
				    color: #fff;
				    text-transform: uppercase;
				    border-radius: 4px;
				    border: solid 2px '.$fcp_theme_color.';
				    padding: 1% 3% 1% 3%;
				}
				</style><div id="fcp-protein-intake-form" class="container">
				<h3>'.$fcp_title.'</h3>	
			  <div class="fcp-row">
			  		<div class="fcp-radio-btn fcp-radio-btn-protein-metric">
			  			<label for="fcp-protein-intake-radio-metric">Metric</label>
			  			 <input type="radio"  id="fcp-protein-intake-radio-metric" class="form-control fcp-protein-radio" name="fcp-protein-intake-radio" value="metric">
			  			<span class="fcp-error">require</span>
			  		</div>
			  		<div class="fcp-radio-btn fcp-radio-btn-protein-standard">
			  			<label for="fcp-protein-intake-radio-imperial">Standard</label>
			  			 <input type="radio" id="fcp-protein-intake-radio-imperial" class="form-control fcp-protein-radio" name="fcp-protein-intake-radio" value="imperial">
			  			<span class="fcp-error">require</span>
			  		</div>

			  		<table class="fcp-table">
			  			<tr>
			  				<td>
			  					<label for="fcp-protein-intake-age">Age</label>
							    <input type="text" id="fcp-protein-intake-age" class="left form-control" name="fcp-protein-intake-age" />
							    <span id="fcp-protein-intake-age-error" class="fcp-error">age should be in 14 to 80 range</span>
			  				</td>
			  				<td>
			  					<label for="fcp-protein-intake-sex">Sex</label>
							    <select id="fcp-protein-intake-sex" class="left  form-control" name="fcp-protein-intake-sex">
							    	<option value="male">Male</option>
							    	<option value="female">Female</option>
							    </select>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label for="fcp-protein-intake-height">Height</label>
						    	<input  id="fcp-protein-intake-height" pattern="[0-9]" type="text"  class="left  form-control" id="fcp-protein-intake-height" name="fcp-protein-intake-height" placeholder="Centimeter/Feet" />
						    	<span id="fcp-protein-intake-height-error" class="fcp-error">require</span>
			  				</td>
			  				<td>
			  					<label for="fcp-protein-intake-weight">Weight</label>
						    	<input id="fcp-protein-intake-weight"  pattern="[0-9]" type="text" class="left form-control" id="fcp-protein-intake-weight" name="fcp-protein-intake-weight" placeholder="Kilogram/Pound" />
						    	<span id="fcp-protein-intake-weight-error" class="fcp-error">require</span>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label for="fcp-protein-intake-goal">Goal</label>
							    <select id="fcp-protein-intake-goal" class="left  form-control" name="fcp-protein-intake-goal">
							    	<option value="fat-loss">Fat loss</option>
							    	<option value="maintenance">Maintenance</option>
							    	<option value="muscle-gain">Muscle gain</option>
							    </select>
			  				</td>
			  				<td>
			  					<label for="fcp-protein-intake-activity-level">Activity Level</label>
							    <select id="fcp-protein-intake-activity-level" class="left form-control" name="fcp-protein-intake-activity-level">
							    	<option value="sedentary">Sedentary</option>
							    	<option value="lightly-active">Lightly Active </option>
							    	<option value="moderately-active">Moderately Active </option>
							    	<option value="very-active">Very Active</option>
							    </select>
			  				</td>
			  			</tr>
			  			<tr><td><button onclick="fcpCalculateproteinIntake()" class="btn btn-default fcp-btn">Calculate</button></td><td></td></tr>
			  		</table>
			  		<p class="fcp-result-string">You should take <span class=fcp-protein-calculated-result>......</span>  of protein per day</p>

			  </div>
		</div>';
	}


	// for BMI calculator
	public static function fcp_bmi_calculator( $atts, $content = "" ) { 
		$fcbmi_title = 'No title';
		if(trim(get_option('fcbmi_heading'))!=false)
		{
			$fcbmi_title = get_option('fcbmi_heading');	
		}

		$fcbmi_theme_color = '#004d99';
		if(trim(get_option('fcbmi_theme_color'))!=false)
		{
			$fcbmi_theme_color = get_option('fcbmi_theme_color');	
		}
		return '<style>
				#fcp-bmi-intake-form {
				    margin: 0px;
				    padding: 0px;
				    border: solid 2px '.$fcbmi_theme_color.';
				    width: 100%;
				    float: left;
				}

				#fcp-bmi-intake-form h3 {
				    text-transform: uppercase;
				    background-color: '.$fcbmi_theme_color.';
				    padding: 2%;
				    color: #fff;
				    font-weight: bolder;
				    text-align: center;
				    margin: 0px;
				}
				
				#fcp-bmi-intake-form .fcp-result-string {
				    background-color: '.$fcbmi_theme_color.';
				    padding: 1%;
				    color: #fff;
				    font-size: 20px;
				    text-align: center;
				    margin: 0px;
				}
				#fcp-bmi-intake-form .fcp-btn {
				    background-color: '.$fcbmi_theme_color.';
				    color: #fff;
				    text-transform: uppercase;
				    border-radius: 4px;
				    border: solid 2px '.$fcbmi_theme_color.';
				    padding: 1% 3% 1% 3%;
				}
				</style><div id="fcp-bmi-intake-form" class="container">
				<h3>'.$fcbmi_title.'</h3>	
			  <div class="fcp-row">
			  		<div class="fcp-radio-btn fcp-radio-btn-bmi-metric">
			  			<label for="fcp-bmi-intake-radio-metric">Metric</label>
			  			 <input type="radio"  id="fcp-bmi-intake-radio-metric" class="form-control fcp-protein-radio" name="fcp-bmi-intake-radio" value="metric">
			  			<span class="fcp-error">require</span>
			  		</div>
			  		<div class="fcp-radio-btn fcp-radio-btn-bmi-standard">
			  			<label for="fcp-bmi-intake-radio-imperial">Standard</label>
			  			 <input type="radio" id="fcp-bmi-intake-radio-imperial" class="form-control fcp-protein-radio" name="fcp-bmi-intake-radio" value="imperial">
			  			<span class="fcp-error">require</span>
			  		</div>

			  		<table class="fcp-table">
			  			<tr>
			  				<td>
			  					<label class="fcp-bmi-intake-height" for="fcp-bmi-intake-height">Height</label>
						    	<input  id="fcp-bmi-intake-height" pattern="[0-9]" type="text"  class="left  form-control" id="fcp-bmi-intake-height" name="fcp-bmi-intake-height" placeholder="Centimeter/Feet" />
						    	<span id="fcp-bmi-intake-height-error" class="fcp-error">require</span>
			  				</td>
			  				<td>
			  					<label for="fcp-bmi-intake-weight">Weight</label>
						    	<input id="fcp-bmi-intake-weight"  pattern="[0-9]" type="text" class="left form-control" id="fcp-bmi-intake-weight" name="fcp-bmi-intake-weight" placeholder="Kilogram/Pound" />
						    	<span id="fcp-bmi-intake-weight-error" class="fcp-error">require</span>
			  				</td>
			  			</tr>
			  			<tr><td><button onclick="fcpCalculatebmiIntake()" class="btn btn-default fcp-btn">Calculate</button></td><td></td></tr>
			  		</table>
			  		<p class="fcp-result-string">Your BMI is  <span class=fcp-bmi-calculated-result>......</span></p>
			  		<div id="bmiClassList">            	                
			                <table id="bmiResultTable" class="hide_result">
			                 <tbody><tr>
			                  <th>BMI</th><th>Classification</th>
			                 </tr>
			                 <tr class="">
			                  <td>less than 18.5:</td><td>underweight</td>
			                 </tr><tr>
			                 </tr><tr class="bmiGreen">
			                  <td>18.5 - 24.9:</td><td>normal weight</td>
			                 </tr>
			                 <tr class="">
			                  <td>25 - 29.9:</td><td>overweight</td>
			                 </tr><tr>
			                 </tr><tr class="">
			                  <td>30 - 34.9:</td><td>class I obese</td>
			                 </tr>
			                 <tr class="">
			                  <td>35 - 39.9:</td><td>class II obese</td>
			                 </tr>
			                 <tr class="">
			                  <td>40 upwards:</td><td>class III obese</td>
			                 </tr>           
			                </tbody></table>    
			        </div>

			  </div>
		</div>';
	}


	// for Body Fat calculator
	public static function fcp_bfc_calculator( $atts, $content = "" ) { 
		$fcbfc_title = 'No title';
		if(trim(get_option('fcbfc_heading'))!=false)
		{
			$fcbfc_title = get_option('fcbfc_heading');	
		}

		$fcbfc_theme_color = '#004d99';
		if(trim(get_option('fcbfc_theme_color'))!=false)
		{
			$fcbfc_theme_color = get_option('fcbfc_theme_color');	
		}
		return '<style>
				#fcp-bfc-intake-form {
				    margin: 0px;
				    padding: 0px;
				    border: solid 2px '.$fcbfc_theme_color.';
				    width: 100%;
				    float: left;
				}

				#fcp-bfc-intake-form h3 {
				    text-transform: uppercase;
				    background-color: '.$fcbfc_theme_color.';
				    padding: 2%;
				    color: #fff;
				    font-weight: bolder;
				    text-align: center;
				    margin: 0px;
				}
				
				#fcp-bfc-intake-form .fcp-result-string {
				    background-color: '.$fcbfc_theme_color.';
				    padding: 1%;
				    color: #fff;
				    font-size: 20px;
				    text-align: center;
				    margin: 0px;
				}
				#fcp-bfc-intake-form .fcp-btn {
				    background-color: '.$fcbfc_theme_color.';
				    color: #fff;
				    text-transform: uppercase;
				    border-radius: 4px;
				    border: solid 2px '.$fcbfc_theme_color.';
				}
				</style><div id="fcp-bfc-intake-form" class="container">
				<h3>'.$fcbfc_title.'</h3>	
			  <div class="fcp-row">
			  		<div class="fcp-radio-btn fcp-radio-btn-bfc-metric">
			  			<label for="fcp-bfc-intake-radio-metric">Metric</label>
			  			 <input type="radio"  id="fcp-bfc-intake-radio-metric" class="form-control fcp-protein-radio" name="fcp-bfc-intake-radio" value="metric">
			  			<span class="fcp-error">require</span>
			  		</div>
			  		<div class="fcp-radio-btn fcp-radio-btn-bfc-standard">
			  			<label for="fcp-bfc-intake-radio-imperial">Standard</label>
			  			 <input type="radio" id="fcp-bfc-intake-radio-imperial" class="form-control fcp-protein-radio" name="fcp-bfc-intake-radio" value="imperial">
			  			<span class="fcp-error">require</span>
			  		</div>
			  		<table class="fcp-table">
			  			<tr>
			  				<td>
			  					<label for="fcp-bfc-male">	
			  					Male
						    	<input value="male"  id="fcp-bfc-male"  type="radio"  class="left  form-control" id="fcp-bfc-male" name="fcp-bfc-gender" />
						    	<span id="fcp-bfc-male-error" class="fcp-error-gender">require</span>
						    	</label>
			  				</td>
			  				<td>
			  					<label for="fcp-bfc-female">
			  					Female
						    	<input value="female" id="fcp-bfc-female"  type="radio" class="left form-control" id="fcp-bfc-female" name="fcp-bfc-gender"  />
						    	<span id="fcp-bfc-female-error" class="fcp-error-gender">require</span>
						    	</label>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label class="fcp-bmi-intake-height" for="fcp-bfc-intake-height">Height</label>
						    	<input  id="fcp-bfc-intake-height" 
						    				pattern="[0-9]" 
						    				type="text"  
						    				class="left  form-control"  
						    				name="fcp-bmi-intake-height"
						    				placeholder="Centimeter/Feet" />
						    	<span id="fcp-bfc-intake-height-error" class="fcp-error-height">require</span>
			  				</td>
			  				<td>
			  					<label for="fcp-bmi-intake-weight">Weight</label>
						    	<input id="fcp-bfc-intake-weight"  pattern="[0-9]" type="text" class="left form-control" name="fcp-bfc-intake-weight" placeholder="Kilogram/Pound" />
						    	<span id="fcp-bfc-intake-weight-error" class="fcp-error-height">require</span>
			  				</td>
			  			</tr>
			  			<tr>
			  				<td>
			  					<label class="fcp-bfc-age" for="fcp-bfc-age">Age</label>
						    	<input  id="fcp-bfc-age"  type="text"  class="left  form-control" name="fcp-bfc-age" />
						    	<span id="fcp-bfc-age-error" class="fcp-error-age">require</span>
			  				</td>
			  				<td>
			  					&nbsp;
			  				</td>
			  			</tr>
			  			<tr><td><button onclick="fcpCalculatebfcIntake()" class="btn btn-default fcp-btn">Calculate</button></td><td></td></tr>
			  		</table>
			  		<p class="fcp-result-string">Your Body Fat is  <span class=fcp-bfc-calculated-result>......</span></p>
			  		<div id="bmiClassList">            	                
			                <table id="bfcResultTable" class="hide_result">
			                 <tbody><tr>
			                  <th>Description</th><th>Women</th><th>Men</th>
			                 </tr>
			                 <tr class="">
			                  <td>Recommended amount:</td><td>20-25%</td><td>8-14%</td>
			                 </tr><tr>
			                 </tr><tr class="bmiGreen">
			                  <td>Adults in United States, average:</td><td>22-25%</td><td>15-19%</td>
			                 </tr>
			                 <tr class="">
			                  <td>Obese:</td><td>30+%</td><td>25+%</td>
			                 </tr>           
			                </tbody></table>    
			        </div>

			  </div>
		</div>';
	}

 }

 // shortcode for water intake calculator
 add_shortcode( 'fcp-water-intake-calculator', array( 'FcpShortCodes', 'fcp_water_intake_calculator' ) );

 // shortcode for protein intake calculator
 add_shortcode( 'fcp-protein-intake-calculator', array( 'FcpShortCodes', 'fcp_protein_intake_calculator' ) );

 // shortcode for bmi calculator
 add_shortcode( 'fcp-bmi-calculator', array( 'FcpShortCodes', 'fcp_bmi_calculator' ) );

 // shortcode for Body Fat
 add_shortcode( 'fcp-bfc-calculator', array( 'FcpShortCodes', 'fcp_bfc_calculator' ) );
 
 ?>