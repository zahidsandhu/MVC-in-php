<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FARNEK SERVICES LTD</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
	<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/scrollbar.css">
	<link rel="stylesheet" href="assets/css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<link rel="stylesheet" href="assets/css/tipso.css">
	<link rel="stylesheet" href="assets/css/chosen.css">
	<link rel="stylesheet" href="assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/color.css">
	<link rel="stylesheet" href="assets/css/transitions.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link href="assets/https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	
</head>
<body class="">
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="index.php"><img src="assets/images/logo/Farneklogo.png" alt="Farnek Logo"></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li>
															<a href="home">Home</a>
														</li>
														<li>
															<a href="about">About</a>
														</li>
														<li>
															<a href="privacypolicy">Privacy Policy</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.php">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="joblisting.php">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="jobsingle.php">Job Single</a>
														</li>
														<li>
															<a href="jobproposal.php">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="userlisting.php">View Guards</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="contact">Contact</a>
												</li>
											</ul>
										</div>
									</nav>
									<?php  if(isset($_SESSION['login_success']) && $_SESSION['login_success'] === 1) { ?>
										

										<div class="wt-userlogedin">
											<figure class="wt-userimg">
												<img src="assets/images/user-img.jpg" alt="image description">
											</figure>
											<div class="wt-username">
												<h3>Louanne Mattioli</h3>
												<span>Amento Tech</span>
											</div>
											<nav class="wt-usernav">
												<ul>
													<!-- <li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Insights</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="dashboard-insights.php">Insights</a></li>
															<li><a href="dashboard-insightsuser.php">Insights User</a></li>
														</ul>
													</li> -->
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Manage Designation</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="dashboard-employee-designation.php">Admin Designation</a></li>
															<li><a href="dashboard-user-designation.php">User Designation</a></li>
															<li><a href="dashboard-guard-designation.php">Guard Designation</a></li>
														</ul>
													</li>

													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:avoid(0);">
															<span>Users</span>
														</a>
														<ul class="sub-menu children">
															<li><a href="dashboard-users-list.php">List Users</a></li>
															<li><a href="dashboard-insightsuser.html">List Admins</a></li>
															<li><a href="dashboard-insightsuser.html">List Moderators</a></li>
															<li><a href="dashboard-insightsuser.html">List Editors</a></li>
														</ul>
													</li>
													<!-- <li>
														<a href="dashboard-profile.php">
															<span>My Profile</span>
														</a>
													</li>
													<li class="menu-item-has-children">
														<a href="javascript:void(0);">
															<span>All Jobs</span>
														</a>
														<ul class="sub-menu">
															<li><a href="dashboard-completejobs.php">Completed Jobs</a></li>
															<li><a href="dashboard-canceljobs.php">Cancelled Jobs</a></li>
															<li><a href="dashboard-ongoingjob.php">Ongoing Jobs</a></li>
															<li><a href="dashboard-ongoingsingle.php">Ongoing Single</a></li>
														</ul>
													</li>
													<li>
														<a href="dashboard-managejobs.php">
															<span>Manage Jobs</span>
														</a>
													</li>
													<li class="wt-notificationicon menu-item-has-children">
														<a href="javascript:void(0);">
															<span>Messages</span>
														</a>
														<ul class="sub-menu">
															<li><a href="dashboard-messages.php">Messages</a></li>
															<li><a href="dashboard-messages2.php">Messages V 2</a></li>
														</ul>
													</li>
													<li>
														<a href="dashboard-saveitems.php">
															<span>My Saved Items</span>
														</a>
													</li>
													<li>
														<a href="dashboard-invocies.php">
															<span>Invoices</span>
														</a>
													</li>
													<li>
														<a href="dashboard-category.php">
															<span>Category</span>
														</a>
													</li> -->
													<!-- <li>
														<a href="dashboard-packages.php">
															<span>Packages</span>
														</a>
													</li>
													<li>
														<a href="dashboard-proposals.php">
															<span>Proposals</span>
														</a>
													</li> -->
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);">
															<span>Settings</span>
														</a>
														<ul class="sub-menu children">
															<li>
																<a href="dashboard-accountsettings.php">
																	<span>Account Settings</span>
																</a>
															</li>
															<li>
																<a href="dashboard-generalsettings.php">
																	<span>General Settings</span>
																</a>
															</li>
														</ul>
													</li>
													<li class="menu-item-has-children page_item_has_children">
														<a href="javascript:void(0);"><i class="ti-layers"></i>
															<span>Taxonomies</span>
														</a>
														<ul class="sub-menu children">
															<li>
																<a href="dashboard-languages.php">
																	<span>Languages</span>
																</a>
															</li>
															<li>
																<a href="dashboard-english-status.php">
																	<span>English Language Status</span>
																</a>
															</li>
															<li>
																<a href="dashboard-martial-status.php">
																	<span>Martial Status</span>
																</a>
															</li>
															<li>
																<a href="dashboard-blood-group.php">
																	<span>Blood Group</span>
																</a>
															</li>
														</ul>
													</li>
													<!-- <li>
														<a href="dashboard-helpsupport.php">
															<span>Help &amp; Support</span>
														</a>
													</li> -->
													<li>
														<a href="logout">
															<span>Logout</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>

									<?php }else{ ?>
										<div class="wt-loginarea">
											<figure class="wt-userimg">
												<img src="assets/images/user-login.png" alt="img description">
											</figure>
											<div class="wt-loginoption">
												<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
												<div class="wt-loginformhold">
													<div class="wt-loginheader">
														<span>Login</span>
														<a href="javascript:;"><i class="fa fa-times"></i></a>
													</div>
													<form method="post" action="submitlogin" class="wt-formtheme wt-loginform do-login-form">
														<fieldset>
															<div class="form-group">
																<input type="text" name="username" class="form-control" placeholder="Username">
															</div>
															<div class="form-group">
																<input type="password" name="password" class="form-control" placeholder="Password">
															</div>
															<div class="wt-logininfo">
																<!-- javascript:; -->
																<input class="wt-btn do-login-button" type="submit"  name="alllogin" value="Login">
																<span class="wt-checkbox">
																	<input id="wt-login" type="checkbox" name="rememberme">
																	<label for="wt-login">Keep me logged in</label>
																</span>
															</div>
														</fieldset>
														<div class="wt-loginfooterinfo">
															<a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
															<a href="register.php">Create account</a>
														</div>
													</form>
												    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
												        <fieldset>
												            <div class="form-group">
												                <input type="email" name="email" class="form-control get_password" placeholder="Email">
												            </div>
												           
												            <div class="wt-logininfo">
												                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
												            </div>     
												        </fieldset>
												        <div class="wt-loginfooterinfo">
												            <a href="javascript:void(0);" class="wt-show-login">Login</a>
												            <a href="register.php">Create account</a>
												        </div>
												    </form>
												</div>
											</div>
											<a href="register.php" class="wt-btn">Join Now</a>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->