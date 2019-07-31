<? $this->load->view('common/header'); ?>


<div class="slider-area">
	<div class="slider">
		<div id="bg-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
			<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 10792px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(-2698px, 0px, 0px); transform-origin: 3372.5px center; perspective-origin: 3372.5px center;"><div class="owl-item" style="width: 1349px;"><div class="item"><img src="" alt="Mirror Edge"></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="" alt="Mirror Edge"></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="" alt="GTA V"></div></div><div class="owl-item" style="width: 1349px;"><div class="item"><img src="" alt="GTA V"></div></div></div></div>



			<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
	</div>
	<div class="container slider-content">
		<div class="row">
			<style type="text/css">
				.search-label {
					cursor: pointer;
					margin: 1px 20px;
					padding-top: 5px;
					color: #000;
					border-bottom: dashed 1px #000;
					display: inline-block;
					font-weight: normal;
				}

				@media screen and (max-width: 600px) {
					#index_search {
						padding-top: 10px !important;
					}

					.search-label {
						margin: 0px 0px;
						padding-top: 5px;
						color: #000;
						border-bottom: dashed 1px #000;
						display: inline-block;
						font-weight: normal;
					}
				}

				@media screen and (max-width: 480px) {
					.page-title h2 {
						font-size: 20px !important;
						margin-top: 35px;
					}
				}

				@media screen and (max-width: 767px) and (min-width: 480px) {
					.page-title h2 {
						font-size: 20px !important;
						margin-top: 120px;
					}
				}

				@media screen and  (max-width: 979px) and (min-width: 768px) {
					.page-title h2 {
						font-size: 20px !important;
						margin-top: 50px;
					}
				}

				@media (min-width: 768px)
					.form-inline .form-group {
						width: 80% !important;
					}

			</style>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="background-color: #00B050;">
							<button type="button" class="close btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
							<h3 class="modal-title">Identify Your Property</h3>
						</div>
						<div class="modal-body">
							<form action="http://localhost/andhra/property_show.php" method="get">
								<div class="row">
									<div class="col-md-12">
										<h4 style="color: black"> Search by Property ID</h4>
										<span class="small" style="color: black; float: left; display: inline-block;"> <i class="fa fa-info-circle"></i> This feature is only for premium properties</span><br>
										<div class="input-group">
											<input class="form-control" type="text" placeholder="Ex: ACAXXXXX" id="search_property_id" required="" onblur="getSearchPropertByID();" onkeypress="getSearchPropertByID();" onkeyup="getSearchPropertByID();" onkeydown="getSearchPropertByID();" style="color: blue; font-weight: bold; border-radius: 5px; ">
											<span class="input-group-btn">
                                                <button class="btn btn-primary subscribe" id="search_id_submit" type="submit" onsubmit="return validateSearchByid()"><i class="pe-7s-search pe-2x"></i></button>
                                            </span>
										</div>
									</div>
								</div>

								<script>
                                    function getSearchPropertByID() {
                                        var search_property_id = $("#search_property_id").val();

                                        // alert(search_property_id);
                                        // console.log('search_property_id');
                                        $.ajax({
                                            type: "POST",
                                            url: "getPropertyByID.php",
                                            data: "search_property_id=" + search_property_id,
                                            cache: false,
                                            success: function (response) {
                                                response = JSON.parse(response);
                                                // console.log(response.property_id);return false;
                                                $("#search_property_id2").val(response.property_id);
                                                $("#search_property_type").val(response.property_type);
                                                $("#search_property_status").val(response.status);
                                                $("#search_err_status").val(response.error);

                                                document.getElementById("search_property_type").style.color = (response.error == '1' ? "red" : "blue");
                                                document.getElementById("search_property_id2").style.color = (response.error == '1' ? "red" : "blue");
                                                document.getElementById("search_property_status").style.backgroundColor = (response.status == '1' ? "#00B050" : "tomato");
                                                document.getElementById("search_property_status").innerText = (response.status == '1' ? "Active" : "Inactive");
                                                // document.getElementById("search_err_status_d").readonly = (response.error == '1' ? "false" : "true");
                                                document.getElementById("search_id_submit").style.display = (response.error == '1' ? "none" : "block");

                                            }
                                        });
                                    }

                                    function validateSearchByid() {
                                        alert('hai');
                                        var search_err_status = parseInt($("#search_err_status").val());
                                        alert(search_err_status);
                                        if (search_err_status == 1) {
                                            akert("Please enter valid data");
                                            return false;
                                        } else {
                                            return true;
                                        }
                                    }
								</script>
								<div class="row">
									<div class="col-md-5">
										<div class="input-group">
											<label for="search_property_id" style="font-weight:normal; color: black; float: left;">Property ID:</label>
											<input type="text" id="search_property_id2" name="p_id" class="form-control" style="border-radius: 5px; color: blue; font-weight: bold;" readonly="">
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group">
											<label for="search_property_type" style="font-weight:normal; color: black; float: left;">Property Type:</label>
											<input type="text" id="search_property_type" name="p_Ty" value="" class="form-control" style="color: blue; font-weight: bold; border-radius: 5px;" readonly="">
											<input type="hidden" id="search_err_status" value="" class="form-control" style="color: blue; font-weight: bold; border-radius: 5px;" readonly="">
										</div>
									</div>
									<div class="col-md-2 text-center" style="margin: 30px 0px 0px 0px; padding-left: 0px;">
										<h4 id="search_property_status" class="badge badge-primary" style="font-size: 18px; font-weight: lighter; padding: 5px 9px; background-color: tomato;"></h4>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12" id="index_search" style="padding-top: 150px;">
				<h1 style="text-shadow: -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;" id="chooseProperty">Choose your Property</h1>
				<h5 style="text-shadow: -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;"> 100% VERIFIED / Map View</h5>
				<div class="search-form wow pulse animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: pulse;">
					<style>
						@media screen and  (max-width: 979px) and (min-width: 768px) {
							.med-search {
								width: 80% !important;
								margin: 10px 15px !important;
							}
						}

						@media screen and  (max-width: 1300px) and (min-width: 980px) {
							.med-search {
								width: 70% !important;
								margin: 10px 15px !important;
							}
						}
					</style>

					<form action="http://localhost/andhra/properties_search.php" class="form-inline" method="post">
						<!--<button class="btn toggle-btn" type="button"><i class="fa fa-bars"></i></button>-->
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group med-search" id="index_proFor" style="text-align: center;">
									<div class="iradio_square-yellow" style="position: relative;"><input type="radio" class="form-control" name="property_for" id="Buy" value="Buy" required="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
									<label style="background-color: #00B050; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; padding: 5px; " for="Buy">Buy</label>
									<div class="iradio_square-yellow" style="position: relative;"><input type="radio" class="form-control" name="property_for" id="Rent" value="Rent" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
									<label style="background-color: #00B050; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; padding: 5px; " for="Rent">Rent</label>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group med-search" style="text-align: center;">
									<div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Property Type"><span class="filter-option pull-left">Property Type</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> - Property Type -</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Apartment</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Agricultural Land</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Commercial Building</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Commercial Land</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Commercial Shop</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Flat</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">House/Villa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Residential Land</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="property_type" class="selectpicker show-tick" title="Property Type" required="" tabindex="-98"><option class="bs-title-option" value="">Property Type</option>
											<option value="0"> - Property Type -</option>
											<option value="Apartment">Apartment</option>
											<option value="Agricultural_Land">Agricultural Land</option>
											<option value="Commercial_Building">Commercial Building</option>
											<option value="Commercial_Land">Commercial Land</option>
											<option value="Commercial_Shop">Commercial Shop</option>
											<option value="FLAT">Flat</option>
											<option value="House_Villa">House/Villa</option>
											<option value="Residential_Land">Residential Land</option>
										</select></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group med-search" style="text-align: center;">
									<div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="dist" title="Select your District"><span class="filter-option pull-left">Select your District</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">East Godavari</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">West Godavari</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="dist" name="dist" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your District" onchange="change_dist();" required="" tabindex="-98"><option class="bs-title-option" value="">Select your District</option>
											<!--
																		<option value=""> </option>
									-->                                        <option value="AP_05">East Godavari</option>
											<option value="AP_37">West Godavari</option>
										</select></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group med-search" style="text-align: center;">
									<select name="town" id="town" class="form-control show-tick" title="Select your Area" required="">
										<option> -- select town --</option>
									</select>
								</div>
							</div>
							<div class="col-lg-1" style="width: margin: 10px 15px;">
								<button class="btn search-btn" type="submit" name="search" id="search_head"><i class="fa fa-search"></i></button>
							</div>
						</div>

						<div class="row">
							<a data-toggle="modal" data-target="#myModal"> <label class="search-label"> Search By ID </label> </a>
							<label style="color: #000;"> | </label>
							<a onclick="alert(&#39;This Feature will be soon&#39;)"> <label class="search-label"> Keyword Search </label> </a>
							<label style="color: #000;"> | </label>
							<a onclick="alert(&#39;This Feature will be soon&#39;)"> <label class="search-label"> Advance Search </label> </a>
						</div>

					</form></div>


			</div>
		</div>
	</div>
</div>



<!-- property area -->
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
	<div class="container">
		<div class="row">
			<style>
				@media screen and (max-width: 600px) {
					#index_property_list {
						padding-top: 125px;
					}
				}
			</style>
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title" id="index_property_list">
				<!-- /.feature title -->
				<h2>Top submitted property</h2>
			</div>
		</div>

		<div class="row">
			<div class="proerty-th">

				<h5 class="text-danger text-center" style="padding-left: 15px; font-weight: bold;">Popular Flats</h5>

				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA447888&amp;p_Ty=FLAT">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/FLAT/ACA447888.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA447888&amp;p_Ty=FLAT">
									Anaparti,Asdsd  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Bed Room :</b> 1BHK  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 2.5Lac - 5Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA123680&amp;p_Ty=FLAT">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/FLAT/ACA123680.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA123680&amp;p_Ty=FLAT">
									Anaparti,Asdsd  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Bed Room :</b> 1BHK  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 2.5Lac - 5Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA934522&amp;p_Ty=FLAT">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/FLAT/ACA934522.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA934522&amp;p_Ty=FLAT">
									Anaparti,Asdsd  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Bed Room :</b> 1BHK  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 2.5Lac - 5Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA311937&amp;p_Ty=FLAT">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/FLAT/ACA311937.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA311937&amp;p_Ty=FLAT">
									Anaparti,Asdsd  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Bed Room :</b> 1BHK  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 2.5Lac - 5Lac </span>
						</div>
					</div>
				</div>
				<h5 class="text-danger text-center" style="padding-left: 15px; font-weight: bold;">Popular Residential Lands</h5>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA265916&amp;p_Ty=Residential_Land">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/FLAT/ACA265916.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA265916&amp;p_Ty=Residential_Land">
									Ravulapalem,Opposite Of Gangi Sree Ramula Towers  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 10, acres  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 10Lac - 15Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA113915&amp;p_Ty=Residential_Land">
								<img style="height: 225px;" >
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA113915&amp;p_Ty=Residential_Land">
									Kakinada,Opposite Of Dmart  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 4, acres  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 50K - 1Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA291604&amp;p_Ty=Residential_Land">
								<img style="height: 225px;">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA291604&amp;p_Ty=Residential_Land">
									Amalapuram,Bus Stop   </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 2, sq-meter  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 1.5Lac - 2.5Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA237740&amp;p_Ty=Residential_Land">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/Residential_Land/ACA237740.jpg">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA237740&amp;p_Ty=Residential_Land">
									Yanam,Budha Park  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 128, sq-meter  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 20Lac - 25Lac </span>
						</div>
					</div>
				</div>


				<h5 class="text-danger text-center" style="padding-left: 15px; font-weight: bold;">Popular Agriculure Lands</h5>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA332726&amp;p_Ty=Agricultural_Land">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/Agricultural_Land/ACA332726.jpg">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA332726&amp;p_Ty=Agricultural_Land">
									Dharmavaram,Mmmmm  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 2, acres  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 30Lac - 35Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA267998&amp;p_Ty=Agricultural_Land">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/Agricultural_Land/ACA267998.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA267998&amp;p_Ty=Agricultural_Land">
									Proddutur,  </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 3, sq-yard  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 5Lac - 7.5Lac </span>
						</div>
					</div>
				</div>
				<style>
					.item-thumb img + span .text-warning {
						position: relative;
						top: -220px;
						left: 2px;
					}
				</style>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-two proerty-item">
						<div class="item-thumb">
							<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA499430&amp;p_Ty=Agricultural_Land">
								<img style="height: 225px;" src="<?= base_url() ?>images/properties/Agricultural_Land/ACA499430.png">
								<span class="text-warning bg-warning alert-warning" style="padding:0px; display: initial;">Premium</span>
							</a>
						</div>
						<div class="item-entry overflow">
							<h5 style="font-size: 11px">
								<a href="http://localhost/andhra/property_show.php?&amp;p_id=ACA499430&amp;p_Ty=Agricultural_Land">
									Mandapeta,Kalapuvu Center   </a>
							</h5>
							<div class="dot-hr"></div>
							<span class="pull-left"><b>Area :</b> 4, sq-meter  </span>
							<span class="proerty-price pull-right">                                             <i class="fa fa-rupee"></i> 7.5Lac - 10Lac </span>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-3 p0">
					<div class="box-tree more-proerty text-center">
						<div class="item-tree-icon">
							<i class="fa fa-th"></i>
						</div>
						<div class="more-entry overflow">
							<h5><a href="http://localhost/andhra/property-1.html">CAN'T DECIDE ? </a></h5>
							<h5 class="tree-sub-ttl">Show all properties</h5>
							<button class="btn border-btn more-black" value="All properties" id="all_properties">All properties</button>
						</div>
						<div class="alert alert-info" id="success-alert" style="display: none;">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>Please Select Location! </strong>
							Properties has been shown
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!--Welcome area -->
<div class="Welcome-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 Welcome-entry  col-sm-12">
				<div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
					<div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
								<!-- /.feature title -->
								<h2 style="font-size: 25px"> ANDHRA 100 ACRES </h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
						<div class="row">
							<div class="col-xs-6 m-padding">
								<div class="welcome-estate">
									<div class="welcome-icon">
										<i class="pe-7s-home pe-4x"></i>
									</div>
									<h3>Any property</h3>
								</div>
							</div>
							<div class="col-xs-6 m-padding">
								<div class="welcome-estate">
									<div class="welcome-icon">
										<i class="pe-7s-users pe-4x"></i>
									</div>
									<h3>More Clients</h3>
								</div>
							</div>


							<div class="col-xs-12 text-center">
								<i class="welcome-circle"></i>
							</div>

							<div class="col-xs-6 m-padding">
								<div class="welcome-estate">
									<div class="welcome-icon">
										<i class="pe-7s-notebook pe-4x"></i>
									</div>
									<h3>Easy to use</h3>
								</div>
							</div>
							<div class="col-xs-6 m-padding">
								<div class="welcome-estate">
									<div class="welcome-icon">
										<i class="pe-7s-help2 pe-4x"></i>
									</div>
									<h3>Any help </h3>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Count area -->
<div class="count-area">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
				<!-- /.feature title -->
				<h2>You can trust Us </h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="count-item">
							<div class="count-item-circle">
								<span class="pe-7s-users"></span>
							</div>
							<div class="chart" data-percent="5000">
								<h2 class="percent" id="counter">1008</h2>
								<h5>HAPPY CUSTOMER </h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="count-item">
							<div class="count-item-circle">
								<span class="pe-7s-home"></span>
							</div>
							<div class="chart" data-percent="12000">
								<h2 class="percent" id="counter1">1 300</h2>
								<h5>Properties in stock</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="count-item">
							<div class="count-item-circle">
								<span class="pe-7s-flag"></span>
							</div>
							<div class="chart" data-percent="120">
								<h2 class="percent" id="counter2">146</h2>
								<h5>City registered </h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="count-item">
							<div class="count-item-circle">
								<span class="pe-7s-graph2"></span>
							</div>
							<div class="chart" data-percent="5000">
								<h2 class="percent" id="counter3">1023</h2>
								<h5>VISITORS</h5>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- boy-sale area -->
<? $this->load->view('common/footer')?>
<? $this->load->view('common/js')?>
