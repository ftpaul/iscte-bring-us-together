<div class="navbar-collapse collapse">
	<ul class="nav-documentation">
		<li><a href="/cn/">首页</a></li>
    	<li><a href="programme.php">活动安排</a></li>
    	<li><a href="participants.php">与会代表</a></li>
    	<li><a href="registration.php">注册登记</a></li>
    	<li><a href="multimedia.php">Multimedia</a></li>
    	<li><a href="contacts.php">联系我们</a></li>
     	<li><a href="/2012/">2012 Edition</a></li>
	</ul><!-- // ul.list -->
</div>
<div id='mySwipe' style='margin:20px auto' class='swipe'>
<div class='swipe-wrap'>
	
	<?php
		foreach ($_SESSION['images'] as $key => $value) {
			echo "<div><a href='". $_SESSION['url'][$key] . "' target='_blank'><img src='../sponsors/" . $_SESSION['images'][$key] . "' class='img-responsive'/></a></div>";
		}
	?>
</div>
</div>