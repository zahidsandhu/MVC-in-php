<?php include_once('assets/common/header.php'); ?>			<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>Join Now For FREE</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="wt-active">Join Now</li>
				</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<!--Register Form Start-->
	<div class="wt-haslayout wt-main-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
					<div class="wt-registerformhold">
						<div class="wt-registerformmain">
							<div class="wt-registerhead">
								<div class="wt-title">
									<h3>Join For a Good Start</h3>
								</div>
								<div class="wt-description">
									<p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina</p>
								</div>
							</div>
							<div class="wt-joinforms">
								<form class="wt-formtheme wt-formregister">
									<fieldset class="wt-registerformgroup">
										<div class="form-group form-group-half">
											<input type="text" name="First Name" class="form-control" placeholder="Full Name">
										</div>
										<div class="form-group form-group-half">
											<input type="text" name="Email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group form-group-half">
											<input type="text" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group form-group-half">
											<input type="text" name="phone" class="form-control" placeholder="Phone">
										</div>
										<div class="form-group form-group-full">
											<input type="text" name="phone" class="form-control" placeholder="Address Line">
										</div>
										<div class="form-group form-group-half">
											<input type="text" name="county" class="form-control" placeholder="County">
										</div>
										<div class="form-group form-group-half">
											<input type="text" name="city" class="form-control" placeholder="City">
										</div>
										<div class="form-group form-group-full">
											<input type="text" name="post_code" class="form-control" placeholder="Post Code">
										</div>
                                        <div class="form-group">
											<span class="wt-select">
												<select data-placeholder="Options" name="options" onchange="show_hide_options3(this.value)">
													<option selected disabled>--Select Options--</option>
													<option value="Guard">Guard</option>
													<option value="Company">Company</option>
												</select>
											</span>
										</div>
										<div class="form-group form-group-full" id="details_b1" style="display:none;">
											<input type="text" name="sia" class="form-control" placeholder="Sia Licence">
										</div>
										<div class="form-group form-group-full" id="details_b2" style="display:none;">
											<span class="wt-select">
												<select name="category" data-required="true"  >
	                                                <option value disabled selected>--Select Category--</option>
	                                                <option value="Door Supervisor">Door Supervisor</option>
	                                                <option value="CCTV Security">CCTV Security</option>
	                                                <option value="Events Security">Events Security</option>
	                                                <option value="Residential Security">Residential Security</option>
	                                                <option value="Retail Security">Retail Security</option>
	                                                <option value=" Construction Security">Construction Security</option>
	                                                <option value="Corporate Security">Corporate Security</option>
	                                                <option value="Other">Other</option>
	                                            </select>
                                            </span>
										</div>
										<div class="form-group form-group-full" id="details_a1" style="display:none;">
											<input type="text" name="sia" class="form-control" placeholder="Company Name">
										</div>
										<div class="form-group form-group-full" id="details_a2" style="display:none;">
											<input type="text" name="sia" class="form-control" placeholder="Company No">
										</div>
										<div class="form-group form-group-full" id="details_a3" style="display:none;">
											<input type="text" name="Designation" class="form-control" placeholder="Your Designation">
										</div>
										<div class="form-group form-group-full">
											<label class="form-check-lael" for="check-terms">
                                                <input type="checkbox" name="agreement" id="check-terms" value="agreement" required>
                                                I consent to having this website store my submitted information so they can respond to my inquiry.
                                            </label>
										</div>
										<div class="form-group">
											<input type="submit" name="submit" class="wt-btn btn" value="submit">
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="wt-registerformfooter">
							<span>Already Have an Account? <a href="login.php">Login Now</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Register Form End-->
</main>
<!--Main End-->
<?php include_once('assets/common/footer.php'); ?>
<script>
	function show_hide_options3(immigration){
    if(immigration=="Company"){
        document.getElementById('details_a1').style.display="block";
        document.getElementById('details_a2').style.display="block";
        document.getElementById('details_a3').style.display="block";
        document.getElementById('details_b1').style.display="none";
        document.getElementById('details_b2').style.display="none";
    }if(immigration=="Guard"){
        document.getElementById('details_b1').style.display="block";
        document.getElementById('details_b2').style.display="block";
        document.getElementById('details_a1').style.display="none";
        document.getElementById('details_a2').style.display="none";
        document.getElementById('details_a3').style.display="none";
    }
  }
</script>