
	<?php
		require 'header.php'
	?>

	<!-- Overview
	================================================== -->
	<section id="main" style="background-image:url(images/alumni-reunion.png)">
		<div class="container">
			<div class="desktop-12 columns">
				<p class="tagline">ISCTE Bring Us Together.</p>
				
				<p class="tagline-desc">The annual event that aims to bring together alumni of ISCTE - University Institute of Lisbon from around the world</p>

				<!--<div class="box-buttons">
					<a href="#" class="button btn-documentation">View More</a>
					<a href="https://github.com/subwaymatch/typegrid/archive/master.zip" class="button btn-download">Old Edition</a>
				</div>-- // .box-buttons -->
			</div><!-- // .desktop-12 -->
		</div><!-- // .container -->
	</section><!-- // section#main -->


	<!-- Documentation
	================================================== -->
	<section id="documentation">
		<div class="container">
			
			<div class="clear"></div>

			<div class="desktop-2 columns">
			<div class="navbar-collapse collapse">
				<ul class="nav-documentation">
					<li><a href="/">Home</a></li>
					<li><a href="programme.php">Programme</a></li>
					<li><a href="participants.php">Participants</a></li>
					<li><a href="registration.php">Registration</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="multimedia.php">Multimédia</a></li>
					<li><a href="/2012/">2012 Edition</a></li>
				</ul><!-- // ul.list -->
			</div>
			<div id='mySwipe' style='margin:20px auto' class='swipe'>
			<div class='swipe-wrap'>
				
				<?php
					foreach ($_SESSION['images'] as $key => $value) {
						echo "<div><a href='". $_SESSION['url'][$key] . "' target='_blank'><img src='/sponsors/" . $_SESSION['images'][$key] . "' class='img-responsive'/></a></div>";
					}
				?>
			</div>
			</div>
			</div><!-- // .desktop-3 -->

			<div class="desktop-10 tablet-12 columns">
				
				<div class="box-documentation">
					<h3 class="first">Registration Complete</h3>

					<p>"Your registration is complete. Enjoy the event!</p>
				</div><!-- // .box-documentation -->

			</div><!-- // .desktop-10 -->
		</div><!-- // .container -->
	</section><!-- // section#documentation -->

	<?php
		require 'footer.php'
	?>