<?php
session_start();
require './config/app.php';
require "./config/Header.php";
?>
		<div class="inner-banner title-area text-center image-9">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Paiement </h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">...</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>Paiement</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<!-- Google Map Ends -->
			<div class="check-out">
				<div class="container">
					<div class="row">
						<form>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<!-- Cart Total Starts -->
								<div class="cart-total animated" data-animation="fadeInUp" data-animation-delay="400">
									<h1>Cart Total</h1>
									<table class="table">
										<tbody>
											<tr>
												<th scope="row">Cart Subtotals</th>
												<td>$150.00</td>
											</tr>
											<tr>
												<th scope="row">Shipping & Handling</th>
												<td>$20.00</td>
											</tr>
											<tr>
												<th scope="row">Order Totals</th>
												<td>$70.00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Cart Total Ends -->
								<!-- Payment Method Starts -->
								<div class="payment-method animated" data-animation="fadeInUp" data-animation-delay="600">
									<h1>Select Payment Method</h1>
									<div class="form-group">
										<select class="form-control">
											<option>Credit Card</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<!-- Payment Method Starts -->									
							</div>
							<!-- Shipping Address Starts -->
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="row animated" data-animation="fadeInUp" data-animation-delay="400">
									<div class="col-lg-12">
										<h1>Shipping Address</h1>
										<div class="form-group">
											<select class="form-control">
												<option>Select Delivery Method</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="First Name *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Last Name *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Address *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="City">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Postal Code">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Phone #">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Email *">
										</div>
										<div class="form-group">
											<textarea rows="5" class="form-control" name="comment" placeholder="Order Notes *"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- Shipping Address Ends -->
							<!-- Billing Details Starts -->
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="row animated" data-animation="fadeInUp" data-animation-delay="600">
									<div class="col-lg-12">
										<h1>Billing Details</h1>
										<div class="form-group">
											<select class="form-control">
												<option>Select Country</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="First Name *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Last Name *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Company Name *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Address *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="City">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Postal Code">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Phone #">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="subject" placeholder="Email *">
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox"> Creat an account
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox"> Ship the same address
											</label>
										</div>
										<input class="btn btn-default" type='submit' value='Order Now'>
									</div>
								</div>
							</div>
							<!-- Billing Details Ends -->							
						</form>
					</div>
				</div>
			</div>
		<?php
		require './config/footer.php';
		?>