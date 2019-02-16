<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>Booking by <span>Email</span></h4>
				<p>It's free and always will be.</p>
				<form class="contact__form">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required id="name">
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required id="number">
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required id="email">
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="selectcity" class="autocomplete validate" name="city">
									<label for="selectcity">Select City or Place</label>
								</div>
								<div class="input-field col s12">
									<select name="package" id="package">
										<option value="" disabled selected>Select your package</option>
										<option value="Honeymoon Package">Honeymoon Package</option>
										<option value="Family Package">Family Package</option>
										<option value="Holiday Package">Holiday Package</option>
										<option value="Group Package">Group Package</option>
										<option value="Regular Package">Regular Package</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="fromdate" name="arrival" >
									<label for="fromdate">Arrival Date</label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="todate" name="departure" >
									<label for="todate">Departure Date</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults" id="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens" id="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>							

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice" id="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="₹5000">₹5000</option>
										<option value="₹10,000">₹10,000</option>
										<option value="₹50,000">₹50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice" id="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="₹10,000">₹10,000</option>
										<option value="₹50,000">₹50,000</option>
										<option value="₹100,000">₹100,000</option>
									</select>
								</div>								
							</div>							
							<div class="row">
								<div class="input-field col s12">
									<input id="book-submit" type="button" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
			</div>
		</div>
	</section>