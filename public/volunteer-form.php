<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- HEAD START -->
<head>

	<!-- DESCRIPTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Join us !</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/jobs_form.css" type="text/css">
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    
    <script>
    $(document).ready(function(){
 	$('#submit-form').click(function(){
 		
 	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
 	 var names 				 = $('#job-form [name="job-names"]').val();	 
	 var type 				 = $('#job-form [name="job_type"]').val();	 
	 var country 				 = $('#job-form [name="job-country"]').val();	 
  	 var email_address = $('#job-form [name="job-email"]').val();
   	 var comment			 = $.trim($('#job-form .job-commnent').val());
   	 var data_html ='' ;
   
   
 				if(names == ""){
 					 $('.name-required').html('Name is required');
 				}else{
 					 $('.name-required').html('');
 				}
				
				if(country == ""){
 					 $('.country-required').html('Country is required');
 				}else{
 					 $('.country-required').html('');
 				}
				
 				if(email_address == ""){
 					 $('.email-required').html('Email is required');
 				}else if(reg.test(email_address) == false){
 					 $('.email-required').html('Email is required');
 				}else{
 					 $('.email-required').html('');
 				}
 				
 				if(comment == ""){
 					 $('.comment-required').html('Empty message');
 				}else{
 					 $('.comment-required').html('');
 				}
 				
 		if(comment != "" && names != "" && country != "" && reg.test(email_address) != false){
 		
 			data_html = "type="+ type + "&names="+ names + "&country=" + country + "&comment=" + comment + "&email_address="+ email_address;
 			
 			//alert(data_html);
 			
 		  $.ajax({
				  type: 'POST',
				  url: 'form-send.php',
				  data: data_html,
				  success: function(msg){
				  	if (msg == 'sent'){
				 			$('#success').html('Thanks for applying at relief1.org') 	;
				 			$('#success2').html('We\'ll get back to you as soon as possible.') 	;
				 			//$('#contact-form [name="contact-names"]').val('');	
				 		   //$('#contact-form [name="contact-names"]').val('');	 
						  //$('#contact-form [name="contact-email"]').val('');
    					 //$('#contact-form .contact-commnent').val('');
						$('#job-form').hide();
				 			
				 		}else{
				 			$('#error').html('Message failed. Please Try Again.') 	;	
				 		}
				 	 }
				});
 		
 	  	}
	 		return false;
 		})
	})
	</script>
    
    <?php 
	$type = $_POST['type'];
	$header = $_POST['header'];
	 ?>

<!-- HEAD END -->
</head>

<!-- HEADER START -->	            
<div id="header">
    	<div id="header_container">
        
        	<div id="logo"></div>
            <div id="nav">
                <ul style="float:right; margin-top:16px;">
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="sponsors.html">Sponsors</a></li>
                    <li><a href="about-us.html">Our Team</a></li>
                    <li><a href="join-us.html" style="color:#89CEDE;">Join Us</a></li>
                    <li><a href="http://blog.relief1.org/"> Blog</a></li>
                    <li><a href="index.html">Home</a></li>
                </ul>
            </div>
            <div class="nav_tip_job"></div>
            
        </div>
</div>
<!-- HEADER END -->

	
<!-- JOB FORM CONTAINER START -->  
<div id="job_form_container">
	<div class="heading">Volunteer position applying</div>
    <div class="volunteer_form">
    
            <div class="<?php echo $header?>"><?php echo $type?></div>

       		<div id="success"></div>
            <div id="success2"></div>

					<!-- JOB FORM START -->  
                    <form action="form-send.php" id="job-form" name="job-form" method="POST">
                        <label class="label"><span class="label">Name</span></label>
                        <input type="text" value="" name="job-names" class="job-names">
                        <span class="name-required"></span>
                        
                        <input type="hidden" name="job_type" value="<?php echo $type ?>" />
                        
                        <label class="label"><span class="label">Country</span></label>
                        <select name="job-country" class="job-country">
                                    <option value="">Choose a Country</option> 
                                    <option value="Afghanistan">Afghanistan</option> 
                                    <option value="Albania">Albania</option> 
                                    <option value="Algeria">Algeria</option> 
                                    <option value="American Samoa">American Samoa</option> 
                                    <option value="Andorra">Andorra</option> 
                                    <option value="Angola">Angola</option> 
                                    <option value="Anguilla">Anguilla</option> 
                                    <option value="Antarctica">Antarctica</option> 
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                    <option value="Argentina">Argentina</option> 
                                    <option value="Armenia">Armenia</option> 
                                    <option value="Aruba">Aruba</option> 
                                    <option value="Australia">Australia</option> 
                                    <option value="Austria">Austria</option> 
                                    <option value="Azerbaijan">Azerbaijan</option> 
                                    <option value="Bahamas">Bahamas</option> 
                                    <option value="Bahrain">Bahrain</option> 
                                    <option value="Bangladesh">Bangladesh</option> 
                                    <option value="Barbados">Barbados</option> 
                                    <option value="Belarus">Belarus</option> 
                                    <option value="Belgium">Belgium</option> 
                                    <option value="Belize">Belize</option> 
                                    <option value="Benin">Benin</option> 
                                    <option value="Bermuda">Bermuda</option> 
                                    <option value="Bhutan">Bhutan</option> 
                                    <option value="Bolivia">Bolivia</option> 
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                    <option value="Botswana">Botswana</option> 
                                    <option value="Bouvet Island">Bouvet Island</option> 
                                    <option value="Brazil">Brazil</option> 
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                    <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                    <option value="Bulgaria">Bulgaria</option> 
                                    <option value="Burkina Faso">Burkina Faso</option> 
                                    <option value="Burundi">Burundi</option> 
                                    <option value="Cambodia">Cambodia</option> 
                                    <option value="Cameroon">Cameroon</option> 
                                    <option value="Canada">Canada</option> 
                                    <option value="Cape Verde">Cape Verde</option> 
                                    <option value="Cayman Islands">Cayman Islands</option> 
                                    <option value="Central African Republic">Central African Republic</option> 
                                    <option value="Chad">Chad</option> 
                                    <option value="Chile">Chile</option> 
                                    <option value="China">China</option> 
                                    <option value="Christmas Island">Christmas Island</option> 
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                    <option value="Colombia">Colombia</option> 
                                    <option value="Comoros">Comoros</option> 
                                    <option value="Congo">Congo</option> 
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                    <option value="Cook Islands">Cook Islands</option> 
                                    <option value="Costa Rica">Costa Rica</option> 
                                    <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                    <option value="Croatia">Croatia</option> 
                                    <option value="Cuba">Cuba</option> 
                                    <option value="Cyprus">Cyprus</option> 
                                    <option value="Czech Republic">Czech Republic</option> 
                                    <option value="Denmark">Denmark</option> 
                                    <option value="Djibouti">Djibouti</option> 
                                    <option value="Dominica">Dominica</option> 
                                    <option value="Dominican Republic">Dominican Republic</option> 
                                    <option value="Ecuador">Ecuador</option> 
                                    <option value="Egypt">Egypt</option> 
                                    <option value="El Salvador">El Salvador</option> 
                                    <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                    <option value="Eritrea">Eritrea</option> 
                                    <option value="Estonia">Estonia</option> 
                                    <option value="Ethiopia">Ethiopia</option> 
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                    <option value="Faroe Islands">Faroe Islands</option> 
                                    <option value="Fiji">Fiji</option> 
                                    <option value="Finland">Finland</option> 
                                    <option value="France">France</option> 
                                    <option value="French Guiana">French Guiana</option> 
                                    <option value="French Polynesia">French Polynesia</option> 
                                    <option value="French Southern Territories">French Southern Territories</option> 
                                    <option value="Gabon">Gabon</option> 
                                    <option value="Gambia">Gambia</option> 
                                    <option value="Georgia">Georgia</option> 
                                    <option value="Germany">Germany</option> 
                                    <option value="Ghana">Ghana</option> 
                                    <option value="Gibraltar">Gibraltar</option> 
                                    <option value="Greece">Greece</option> 
                                    <option value="Greenland">Greenland</option> 
                                    <option value="Grenada">Grenada</option> 
                                    <option value="Guadeloupe">Guadeloupe</option> 
                                    <option value="Guam">Guam</option> 
                                    <option value="Guatemala">Guatemala</option> 
                                    <option value="Guinea">Guinea</option> 
                                    <option value="Guinea-bissau">Guinea-bissau</option> 
                                    <option value="Guyana">Guyana</option> 
                                    <option value="Haiti">Haiti</option> 
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                    <option value="Honduras">Honduras</option> 
                                    <option value="Hong Kong">Hong Kong</option> 
                                    <option value="Hungary">Hungary</option> 
                                    <option value="Iceland">Iceland</option> 
                                    <option value="India">India</option> 
                                    <option value="Indonesia">Indonesia</option> 
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                    <option value="Iraq">Iraq</option> 
                                    <option value="Ireland">Ireland</option> 
                                    <option value="Israel">Israel</option> 
                                    <option value="Italy">Italy</option> 
                                    <option value="Jamaica">Jamaica</option> 
                                    <option value="Japan">Japan</option> 
                                    <option value="Jordan">Jordan</option> 
                                    <option value="Kazakhstan">Kazakhstan</option> 
                                    <option value="Kenya">Kenya</option> 
                                    <option value="Kiribati">Kiribati</option> 
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                    <option value="Korea, Republic of">Korea, Republic of</option> 
                                    <option value="Kuwait">Kuwait</option> 
                                    <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                    <option value="Latvia">Latvia</option> 
                                    <option value="Lebanon">Lebanon</option> 
                                    <option value="Lesotho">Lesotho</option> 
                                    <option value="Liberia">Liberia</option> 
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                    <option value="Liechtenstein">Liechtenstein</option> 
                                    <option value="Lithuania">Lithuania</option> 
                                    <option value="Luxembourg">Luxembourg</option> 
                                    <option value="Macao">Macao</option> 
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                    <option value="Madagascar">Madagascar</option> 
                                    <option value="Malawi">Malawi</option> 
                                    <option value="Malaysia">Malaysia</option> 
                                    <option value="Maldives">Maldives</option> 
                                    <option value="Mali">Mali</option> 
                                    <option value="Malta">Malta</option> 
                                    <option value="Marshall Islands">Marshall Islands</option> 
                                    <option value="Martinique">Martinique</option> 
                                    <option value="Mauritania">Mauritania</option> 
                                    <option value="Mauritius">Mauritius</option> 
                                    <option value="Mayotte">Mayotte</option> 
                                    <option value="Mexico">Mexico</option> 
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                    <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                    <option value="Monaco">Monaco</option> 
                                    <option value="Mongolia">Mongolia</option> 
                                    <option value="Montserrat">Montserrat</option> 
                                    <option value="Morocco">Morocco</option> 
                                    <option value="Mozambique">Mozambique</option> 
                                    <option value="Myanmar">Myanmar</option> 
                                    <option value="Namibia">Namibia</option> 
                                    <option value="Nauru">Nauru</option> 
                                    <option value="Nepal">Nepal</option> 
                                    <option value="Netherlands">Netherlands</option> 
                                    <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                    <option value="New Caledonia">New Caledonia</option> 
                                    <option value="New Zealand">New Zealand</option> 
                                    <option value="Nicaragua">Nicaragua</option> 
                                    <option value="Niger">Niger</option> 
                                    <option value="Nigeria">Nigeria</option> 
                                    <option value="Niue">Niue</option> 
                                    <option value="Norfolk Island">Norfolk Island</option> 
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                    <option value="Norway">Norway</option> 
                                    <option value="Oman">Oman</option> 
                                    <option value="Pakistan">Pakistan</option> 
                                    <option value="Palau">Palau</option> 
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                    <option value="Panama">Panama</option> 
                                    <option value="Papua New Guinea">Papua New Guinea</option> 
                                    <option value="Paraguay">Paraguay</option> 
                                    <option value="Peru">Peru</option> 
                                    <option value="Philippines">Philippines</option> 
                                    <option value="Pitcairn">Pitcairn</option> 
                                    <option value="Poland">Poland</option> 
                                    <option value="Portugal">Portugal</option> 
                                    <option value="Puerto Rico">Puerto Rico</option> 
                                    <option value="Qatar">Qatar</option> 
                                    <option value="Reunion">Reunion</option> 
                                    <option value="Romania">Romania</option> 
                                    <option value="Russian Federation">Russian Federation</option> 
                                    <option value="Rwanda">Rwanda</option> 
                                    <option value="Saint Helena">Saint Helena</option> 
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                    <option value="Saint Lucia">Saint Lucia</option> 
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                    <option value="Samoa">Samoa</option> 
                                    <option value="San Marino">San Marino</option> 
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                    <option value="Saudi Arabia">Saudi Arabia</option> 
                                    <option value="Senegal">Senegal</option> 
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                    <option value="Seychelles">Seychelles</option> 
                                    <option value="Sierra Leone">Sierra Leone</option> 
                                    <option value="Singapore">Singapore</option> 
                                    <option value="Slovakia">Slovakia</option> 
                                    <option value="Slovenia">Slovenia</option> 
                                    <option value="Solomon Islands">Solomon Islands</option> 
                                    <option value="Somalia">Somalia</option> 
                                    <option value="South Africa">South Africa</option> 
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                    <option value="Spain">Spain</option> 
                                    <option value="Sri Lanka">Sri Lanka</option> 
                                    <option value="Sudan">Sudan</option> 
                                    <option value="Suriname">Suriname</option> 
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                    <option value="Swaziland">Swaziland</option> 
                                    <option value="Sweden">Sweden</option> 
                                    <option value="Switzerland">Switzerland</option> 
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                    <option value="Tajikistan">Tajikistan</option> 
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                    <option value="Thailand">Thailand</option> 
                                    <option value="Timor-leste">Timor-leste</option> 
                                    <option value="Togo">Togo</option> 
                                    <option value="Tokelau">Tokelau</option> 
                                    <option value="Tonga">Tonga</option> 
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                    <option value="Tunisia">Tunisia</option> 
                                    <option value="Turkey">Turkey</option> 
                                    <option value="Turkmenistan">Turkmenistan</option> 
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                    <option value="Tuvalu">Tuvalu</option> 
                                    <option value="Uganda">Uganda</option> 
                                    <option value="Ukraine">Ukraine</option> 
                                    <option value="United Arab Emirates">United Arab Emirates</option> 
                                    <option value="United Kingdom">United Kingdom</option> 
                                    <option value="United States">United States</option> 
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                    <option value="Uruguay">Uruguay</option> 
                                    <option value="Uzbekistan">Uzbekistan</option> 
                                    <option value="Vanuatu">Vanuatu</option> 
                                    <option value="Venezuela">Venezuela</option> 
                                    <option value="Viet Nam">Viet Nam</option> 
                                    <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                    <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                    <option value="Western Sahara">Western Sahara</option> 
                                    <option value="Yemen">Yemen</option> 
                                    <option value="Zambia">Zambia</option> 
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <span class="country-required"></span>
                                
                                 <label class="label"><span class="label">Your email</span></label>
                                 <input type="text" value="" name="job-email" class="job-email"/><span class="email-required"></span><span class="email-invalid"></span>
                                 
                                 
                                 <label class="label"><span class="label">What makes you special ?</span></label>
                                <textarea class="job-commnent" name="job-comments"></textarea value=""><span class="comment-required"></span>
                                <label class="label"></label>
                                 
                                <input id="submit-form" style="float:left; margin-left:75px; font-size:14px; height:41px; width:180px;" class="submit_job_button" name="submit" type="submit" value="Apply">
                              <div class="spacer"></div>
		    		</form>
					<!-- JOB FORM END -->  

    </div>
</div>    


<!-- MAIN FOOTER START -->  
        <div id="footer">
        <div id="main_footer">
            <div class="main_footer_container">
            
                <div class="main_footer_text" style="margin-left:20px;">
                    <div class="main_footer_title">Blog</div><div class="footer_link_blog">&nbsp;</div>
                    Keep up on the latest news, progress and what we are striving to achieve at Relief1. <br/><br/><a class="footer_link" href="http://blog.relief1.org/">Read our Blog</a>
                </div>
                <div class="main_footer_text">
                    <div class="main_footer_title">Help Us</div><div class="footer_link_job">&nbsp;</div>
                    If making a difference in the world matters to you, we have many opportunities to help. <br/><br/><a class="footer_link" href="join-us.html">Join our Team</a>
                </div>
 				<div class="main_footer_text">
                    <div class="main_footer_title">Partners</div><div class="footer_link_sponsor">&nbsp;</div>
                    Our worldwide network of partners and sponsors help make Relief1 a reality.<br/><br/><a class="footer_link" href="sponsors.html">Checkout our Partners</a>
                </div>
                 <div class="main_footer_text">
                    <div class="main_footer_title">About Us</div><br/><div class="footer_link_about">&nbsp;</div>
                    We are a worldwide team of like-minded people focused on making a difference.<br/><br/><a class="footer_link" href="about_us.html">Learn more About Us</a>
                </div>
                <div class="legal">
               Made with love from all around the world.<br /> Copyright © 2011 Relief1.
                </div>
                
            </div>
        </div>
        </div>
  		<!-- MAIN FOOTER END -->
           
</body>
</html>