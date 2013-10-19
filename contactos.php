
	<?php
		require 'header.php'
	?>

	<!-- Documentation
	================================================== -->
	<section id="documentation">
		<div class="container">
			
			<div class="clear"></div>

			<div class="desktop-2 columns">
			<div class="navbar-collapse collapse">
				<ul class="nav-documentation">
					<li><a href="/">Home</a></li>
					<li><a href="programa.php">Programa</a></li>
					<li><a href="participantes.php">Participantes</a></li>
					<li><a href="registo.php">Registo</a></li>
					<li><a href="multimedia.php">Multimédia</a></li>
					<li><a href="contactos.php">Contactos</a></li>
					<li><a href="/2012/">Edição 2012</a></li>
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
					<h3 class="first">Contactos</h3>

					<h5>ISCTE-IUL – Portugal</h5>
					<br>
Virgínia Trigo <br>
<em>Virginia.trigo@iscte.pt</em><br><br>

Marina Ventura <br>
+351 91 174 96 05 <br>
<em>Marina.ventura@iscte.pt</em>
<br><br>

<h5>University of Electronic Science and Technology of China – Chengdu</h5>
<br>
XIAO Wen / Joy <br>
0086-28-8320 6921/ 0086-138 800 56612 <br>
<em>xiaowen@uestc.edu.cn</em>
<br><br>

<h5>Southern Medical University - Guangzhou</h5>
<br>
XU Ruimin (Eva) <br>
0086-20-6278 9481/ 0086-13924162363 <br>
<em>xuruimin@smu.edu.cn; xuruim@gmail.com</em> <br>

				</div><!-- // .box-documentation -->

			</div><!-- // .desktop-10 -->
		</div><!-- // .container -->
	</section><!-- // section#documentation -->

	<?php
		require 'footer.php'
	?>