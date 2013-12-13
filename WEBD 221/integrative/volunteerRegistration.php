<!--
Page: Volunteer Registration HTML

Integrative Assignment: Not Far From the Tree Client
By: Ariel Gelbard & Andres Hernandez
Date: Tuesday, December 10, 2013
-->
<?php $pagename="Volunteer Registration";?>
<?php include("includes/header.php");?>
			<script src='js/parsley.js'></script>
			<section class='getting_involved_main'>
				<h2>Volunteer Registration Form</h2>
				<p></p>
				<img src='assets/volunteerbanner.png'  alt="Volunteers"/>
			</section>
	        <form action='submitPost.php' method='post' parsley-validate>
	        	<section class='main_info'>
		        	<label>
		            	<div class="label" for="firstname"><span>*</span>First Name</div>
		            	<input type="text" name="firstname" required parsley-error-message="Please tell us your first name" parsley-error-container="section.main_info">
					</label>
		        	<label>
		            	<div class="label"><span>*</span>Last Name</div>
		            	<input type="text" name="lastname" required="required" parsley-error-message="Please tell us your last name" parsley-error-container="section.main_info">
					</label>
		        	<label>
		            	<div class="label"><span>*</span>E-mail</div>
		            	<input type="email" name='email' required parsley-error-message="Please tell us your email address" parsley-error-container="section.main_info">
					</label>
		        	<label>
		            	<div class="label">affiliation</div>
		            	<input type="text" name='affiliation'>
					</label>
				</section>				

				<section class='ways'>
					<h6><span>*</span>Ways to Get Involved</h6>
					<label>
						<input type="checkbox" name="ways[]" value="picking fruit" parsley-group="waysInvolved" parsley-mincheck="1" parsley-error-container="section.ways" >
		            	<div class="label">picking fruit</div>
		            	
					</label>
					<label>
						<input type="checkbox" name="ways[]" value="distributing flyers" parsley-group="waysInvolved" parsley-mincheck="1">
		            	<div class="label">distributing flyers</div>
		            	
					</label>

					<label>
						<input type="checkbox" name="ways[]" value="tabling events" parsley-group="waysInvolved" parsley-mincheck="1">
		            	<div class="label">tabling events</div>
		            	
					</label>
					<label>
						<input type="checkbox" name="ways[]" value="lending proffesional skills" parsley-group="waysInvolved" parsley-mincheck="1">
		            	<div class="label">lending proffesional skills</div>
		 
					</label>	
				</section>

				<section class='available'>
					<h6><span>*</span>Availability</h6>
					<label>
						<input type="checkbox" name="available[]" value="weekends" parsley-group="ava" parsley-mincheck="1" parsley-error-container="section.available">
		            	<div class="label">Weekends</div>
		            	
					</label>
					<label>
						<input type="checkbox" name="available[]" value="weekdays" parsley-group="ava" parsley-mincheck="1">
		            	<div class="label">Weekdays</div>
		            	
					</label>	
					<label>
						<input type="checkbox" name="available[]" value="evenings" parsley-group="ava" parsley-mincheck="1">
		            	<div class="label">Evenings</div>
		            	
					</label>
				</section>

				<section class='phone'>
					<h6><span>*</span>Phone Number 1</h6>
					<div class='sec'>
			           	<input type="tel" name="phone1[]" required parsley-error-message="Phone Number 1 should be a valid phone number." parsley-error-container="section.phone">
						<label>
			            	<div class="label">Extension</div>
			            	<input type="text" name="phone1[]" class='ext'>
						</label>
					</div>
					<h6>Phone Number 2</h6>
					<div class='sec'>
			           	<input type="tel" name="phone2[]" parsley-error-message="Phone Number 2 should be a valid phone number." parsley-error-container="section.phone"> 
						<label>
			            	<div class="label">Extension</div>
			            	<input type="text" name="phone2[]" class='ext'>
						</label>
					</div>
				</section>

				<section class='liability'>
					<h6><span>*</span>Volunteer release of liability</h6>
					<p>RELEASE OF LIABILITY, WAIVER OF CLAIMS, ASSUMPTION OF RISKS AND INDEMNITY AGREEMENT (Hereinafter “Release Agreement”)</p>
					<p>To: “Not far from the tree” and their volunteers, employees, guides, agents, representatives, successors and assigns (all of whom are hereinafter collectively referred to as "the Releasees")</p>
					<p>I RECOGNIZE AND ACKNOWLEDGE that there are inherent risks and hazards involved in harvesting fruit. I agree to assume all such risks and hazards and bear all costs of medical attention.</p>
					<label>
						<input type="checkbox" name="agree" value="yes" required>
		            	<div class="label"><span>*</span>I have read and agree to the above release of liability</div>
		            	
					</label>	
					<label>
						<input type="checkbox" name="newsletter" value="yes">
		            	<div class="label">Sign up for our newsletter</div>
		            	
					</label>
				</section>
				
				<input type="submit" name='submit_volunteer'>
			</form>
<?php include("includes/footer.php");?>