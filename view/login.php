<?php include_once('assets/common/header.php'); ?>			<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>Login</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="wt-active">Login Now</li>
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
				<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-6 push-lg-2">
					<div class="wt-registerformhold">
						<div class="wt-registerformmain">
							<div class="wt-registerhead">
								<div class="wt-title">
									<h3>Let's Login Now</h3>
								</div>
							</div>
							<div class="wt-joinforms">
								<form class="wt-formtheme wt-formregister">
									<fieldset class="wt-registerformgroup">
										<div class="form-group form-group-full">
											<input type="email" name="email" class="form-control" placeholder="enter Your Email">
										</div>
										<div class="form-group form-group-full">
											<input type="password" name="password" class="form-control" placeholder="Enter Your Password">
										</div>
										<div class="form-group">
											<input type="submit" name="submit" class="btn btn-primary" value="Login">
										</div>
									</fieldset>
								</form>
							</div>
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