	<?php
		require 'header.php'
	?>
	<!-- Documentation
	================================================== -->
	<section id="documentation">
		<div class="container">
			
			<div class="clear"></div>

			<div class="desktop-2 columns">
			<?php
					require 'menu.php'
				?>
			</div><!-- // .desktop-2 -->

			<div class="desktop-10 tablet-12 columns">
				
				<div class="box-documentation">
					<h3 class="first">Multimedia</h3>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="FI4-WdzdyeY" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/FI4-WdzdyeY/0.jpg" class="img-responsive">
                    	</a>
                    </div>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="vMXNZa15MAU" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/vMXNZa15MAU/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    <div class="clear"></div>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="_My7sbGs5ow" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/_My7sbGs5ow/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    
                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="ZFrUbRN6LMo" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/ZFrUbRN6LMo/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    <div class="clear"></div>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="GUyJqerirQw" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/GUyJqerirQw/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    
                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="aZru_DapM_A" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/aZru_DapM_A/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    <div class="clear"></div>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="rWZFdqt4PCE" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/rWZFdqt4PCE/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    
                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="6EMYzeYvEJE" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/6EMYzeYvEJE/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    <div class="clear"></div>

                    <div class="desktop-4 columns">
                    	<a data-toggle="modal" data-id="qtm1OCMFTIc" class="open-youtube-modal" href="#youtube-modal">
                    		<img src="http://img.youtube.com/vi/qtm1OCMFTIc/0.jpg" class="img-responsive">
                    	</a>
                    </div>
                    
                    <div class="desktop-4 columns">
                        <a data-toggle="modal" data-id="X_DtmnJgVpg" class="open-youtube-modal" href="#youtube-modal">
                            <img src="http://img.youtube.com/vi/X_DtmnJgVpg/0.jpg" class="img-responsive">
                        </a>
                    </div>
                    <div class="clear"></div>

                    <div class="desktop-4 columns">
                        <a data-toggle="modal" data-id="7CKa_N90fb4" class="open-youtube-modal" href="#youtube-modal">
                            <img src="http://img.youtube.com/vi/7CKa_N90fb4/0.jpg" class="img-responsive">
                        </a>
                    </div>
                    
                    <div class="desktop-4 columns">
                        &nbsp;
                    </div>
                    <div class="clear"></div>
                
                         

				</div><!-- // .box-documentation -->

			</div><!-- // .desktop-10 -->
		</div><!-- // .container -->
	</section><!-- // section#documentation -->

	<!-- Modal -->
	<div class="modal fade" id="youtube-modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body" style="max-height:324px;padding:0;">
	        <iframe id="video" width="598" height="324" src="about:blank" frameborder="0" allowfullscreen></iframe>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php
		require 'footer.php'
	?>

	<script type="text/javascript" charset="utf-8">
		$(document).on("click", ".open-youtube-modal", function () {
		     var youtubeId = $(this).data('id');
		     var link = "http://www.youtube.com/embed/" + youtubeId;
		     $(".modal-body #video").attr('src', link);
		});
		$('#youtube-modal').on('hidden.bs.modal', function () {
			 $(".modal-body #video").attr('src', '');
		});
	</script>