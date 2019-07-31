<div class="yamm-content col-sm-offset-1 col-md-offset-1">
	<div class="row">
		<div class="col-sm-4">
			<h5>Activities</h5>
			<ul>
				<li><a href="coming_soon.php">Latest Properties</a> </li>
				<li><a href="coming_soon.php">Legal Services</a> </li>
				<li><a href="coming_soon.php">Mortgage Lone</a></li>
				<li><a href="coming_soon.php">Our packages</a></li>
				<li><a href="add_with_us.php">Advertise with us</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h5>Real Guide</h5>
			<ul>
				<li><a href="guide_to_buy.php">Guide to Buy</a> </li>
				<li><a href="guide_to_sell.php">Guide to Sell</a> </li>
				<li><a href="guide_to_rent.php">Guide to Rent</a> </li>
				<li><a href="rules_of_rera.php">Rules of RERA</a> </li>
				<li><a href="news_show.php">Real Estate News</a> </li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h5>ABOUT US</h5>
			<ul>
				<li><a href="coming_soon.php">EMI Calculator</a> </li>
				<li><a href="coming_soon.php">Post Your Requirements</a> </li>
				<li><a href="about-us.php">About Andhra100acres</a> </li>
				<li><a href="contact.php">Feedback</a> </li>
				<li><a href="faq.php">FAQ</a> </li>
			</ul>
		</div>
	</div>
</div>
</li>
</ul>
</li>
<?php if (isset($_SESSION['uID'])) { ?>
	<li class="dropdown ymm-sw " data-wow-delay="0.1s">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">My Profile <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="user_manage_property.php">Your properties</a>  </li>
			<li><a href="user_post_select.php">Submit property</a>  </li>
			<li><a href="user-change-password.php">Change password</a> </li>
			<li><a href="user-profile.php">Your profile</a>  </li>
		</ul>
	</li>
<?php } ?>
