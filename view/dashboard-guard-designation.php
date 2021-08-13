<?php include_once('assets/common/header.php'); ?>
<?php include_once('assets/dashboard/header.php'); ?>
<?php include_once('assets/dashboard/sidebar.php') ?>
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
	
		<!--Register Form Start-->
		<section class="wt-haslayout wt-dbsectionspace">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 float-left">
					<div class="wt-dashboardbox">
						<div class="wt-dashboardboxtitle">
							<h2>Add New Designation</h2>
						</div>
						<div class="wt-dashboardboxcontent">
							<form class="wt-formtheme wt-formprojectinfo wt-formcategory">
								<fieldset>
									<div class="form-group">
										<input type="text" name="designation" class="form-control" placeholder="Designation">
										<span class="form-group-description">Veniam quis nostrud exercitation</span>
									</div>
									<div class="form-group">
										<textarea name="message" class="form-control" placeholder="Description"></textarea>
										<span class="form-group-description">Veniam quis nostrud exercitation</span>
									</div>
									<div class="form-group form-group-label">
										<div class="wt-labelgroup">
											<label for="file">
												<span class="wt-btn">Select Files</span>
												<input type="file" name="file" id="file">
											</label><br>
											<span>Drop Icon here to upload</span>
											<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
										</div>
									</div>
									<div class="form-group">
										<ul class="wt-attachfile">
											<li class="wt-uploading">
												<span class="uploadprogressbar"></span>
												<span>Category Icon.jpg</span>
												<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
										</ul>
									</div>
									<div class="form-group wt-btnarea">
										<a href="javascript:void(0);" class="wt-btn">Add New Designation</a>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
					<div class="wt-dashboardbox wt-categorys">
						<div class="wt-dashboardboxtitle wt-titlewithsearch">
							<h2>Guard Designation</h2>
							<form class="wt-formtheme wt-formsearch">
								<fieldset>
									<div class="form-group">
										<input type="text" name="category" class="form-control" placeholder="Search Category">
										<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="wt-dashboardboxcontent wt-categoriescontentholder">
							<table class="wt-tablecategories">
								<thead>
									<tr>
										<th width="10%">Icon</th>
										<th width="20%">Name</th>
										<th width="60%">Description</th>
										<th width="10%">Publish</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><figure><img src="images/categories/door.png" alt="img description"></figure></td>
										<td>Door Supervisior</td>
										<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eius minima a omnis laboriosam, provident quam ipsam atque aspernatur reprehenderit unde velit doloribus eveniet veniam optio, maxime, adipisci libero fugit?</td>
										<td><button class="b-btn btn-primary btn-sm">yes</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_concierge.png" alt="img description"></figure></td>
										<td>Security Guard</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, eum, facilis. Officiis quos distinctio amet unde magnam odio deserunt, reiciendis. Dicta minus, impedit quaerat nostrum provident aliquam necessitatibus vero animi.</td>
										<td><button class="b-btn btn-primary btn-sm">yes</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/cctv.png" alt="img description"></figure></td>
										<td>CCTV Security</td>
										<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quod dolores, atque iusto ducimus error, ad corporis iste molestias tempore quae veniam ut? Aliquid non quae deleniti. Eos, nulla, porro?</td>
										<td><button class="b-btn btn-info btn-sm">&nbsp;No&nbsp;</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_event.png" alt="img description"></figure></td>
										<td>Event Security</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, adipisci quibusdam atque quos provident consequatur ipsam assumenda, qui modi maxime ipsum earum dolore vero impedit autem, necessitatibus dolorem reprehenderit optio.</td>
										<td><button class="b-btn btn-info btn-sm">&nbsp;No&nbsp;</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_retail.png" alt="img description"></figure></td>
										<td>Retail Security</td>
										<td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae blanditiis praesentium quia sunt eius consequatur rem, soluta commodi cum, quae laboriosam explicabo minima accusamus, fuga aliquam. In, vitae sapiente reiciendis.</td>
										<td><button class="b-btn btn-primary btn-sm">yes</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_construction.png" alt="img description"></figure></td>
										<td>Construction Security</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iste molestiae non dolores quo quae exercitationem voluptates placeat. Magni molestias repellat adipisci, aspernatur vitae labore esse ullam recusandae aliquid, nam.</td>
										<td><button class="b-btn btn-info btn-sm">&nbsp;No&nbsp;</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_corporate.png" alt="img description"></figure></td>
										<td>Corporate Security</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium, aliquam minus quaerat similique. Voluptatem, laborum doloribus reiciendis voluptates, ratione, omnis quaerat aliquid aperiam sapiente eaque modi labore fugit quos!</td>
										<td><button class="b-btn btn-primary btn-sm">yes</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_mobile.png" alt="img description"></figure></td>
										<td>Mobile Security Patrols</td>
										<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt at dolorem, laudantium cum velit possimus illum fuga similique temporibus animi hic, labore est debitis, iste corrupti quibusdam quidem molestiae, rerum!</td>
										<td><button class="b-btn btn-info btn-sm">&nbsp;No&nbsp;</button></td>
									</tr>
									<tr>
										<td><figure><img src="images/categories/ico_sec_industrial.png" alt="img description"></figure></td>
										<td>Close Protection</td>
										<td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium odio eveniet voluptas itaque sequi expedita, beatae quidem fugiat omnis cumque iure quia alias voluptatibus veritatis distinctio blanditiis pariatur! Neque, fuga.</td>
										<td><button class="b-btn btn-primary btn-sm">yes</button></td>
									</tr>
								</tbody>
							</table>
							<nav class="wt-pagination">
								<ul>
									<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
									<li><a href="javascrip:void(0);">1</a></li>
									<li><a href="javascrip:void(0);">2</a></li>
									<li><a href="javascrip:void(0);">3</a></li>
									<li><a href="javascrip:void(0);">4</a></li>
									<li><a href="javascrip:void(0);">...</a></li>
									<li><a href="javascrip:void(0);">50</a></li>
									<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register Form End-->
	</main><!--Main End-->
<?php include_once 'assets/dashboard/footer.php'; ?>