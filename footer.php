	<!-- Subscribe
	================================================== -->
	<section id="subscribe">
		<div class="container">
			<div class="desktop-2 columns">
				<h3>
					<span class="font-color-primary">Sponsors</span>
				</h3>
			</div>

			<div class="desktop-10 tablet-10 columns">
				<?php
					foreach ($_SESSION['images'] as $key => $value) {
						echo "<a href='". $_SESSION['url'][$key] . "' target='_blank'><img src='/sponsors/" . $_SESSION['images'][$key] . "' class='img-responsive'/></a>";
					}
				?>
			</div>

		</div>
	</section> 




	<!-- Footer
	================================================== -->
	<section id="footer">
		<div class="container">
			<div class="desktop-2 columns">
				<h3 class="font-color-white">Contact</h3>
			</div><!-- // .desktop-2 -->

			<div class="desktop-5 tablet-10 columns">
				<div id="box-address">
					<strong>ISCTE-IUL</strong><br />
					Av das Forças Armadas, Lisbon, Portugal<br />
				</div><!-- // #box-address -->
			</div><!-- // .desktop-5 -->

			<div class="desktop-5 tablet-10 tablet-offset-2 columns">
				<div id="box-contact">
					<a href="mailto:marina.ventura@iscte.pt" class="bold link-email">marina.ventura@iscte.pt</a><br />
					<a href="http://alumni-reunion.iscte-iul.pt" class="bold">alumni-reunion.iscte-iul.pt</a>
				</div><!-- // #box-address -->
			</div><!-- // .desktop-5 -->
		</div><!-- // .container -->
	</section><!-- // #footer -->

	<!-- JS
	================================================== -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="js/swipe.js"></script>
	<script src="js/modal.js"></script>

	<script type="text/javascript">
		var elem = document.getElementById('mySwipe');
		window.mySwipe = Swipe(elem, {
		  // startSlide: 4,
		     auto: 1000,
		  // continuous: true,
		  // disableScroll: true,
		  // stopPropagation: true,
		  // callback: function(index, element) {},
		  // transitionEnd: function(index, element) {}
		});

	</script>


<!-- End Document
================================================== -->
</body>
</html>