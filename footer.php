	
	<!-- Footer -->
	<div class="footer">
		
		
		
		<div class="footer-grid-3 links">
			<div class="container">
				<div class="col-md-3 col-sm-3 link">
					<h4>Services</h4>
					<ul>
						<li><a href="engineering.php">Engineering</a></li>
						<li><a href="procurement.php">Procurement</a></li>
						<li class="no-border"><a href="construction.php">Construction</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-3 link">
					<h4>Why Us</h4>
					<ul>
						<li><a href="equipments.php">Equipment</a></li>
						<li><a href="management_team.php">Team</a></li>
						<li class="no-border"><a href="clients.php">Clients</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-3 link">
					<h4>Projects</h4>
					<ul>
						<li><a href="ongoing_projects.php">Ongoing Projects</a></li>
						<li><a href="major_accomplishments.php">Major Accomplishments</a></li>
						<li><a href="past_projects.php">Past Projects</a></li>
						<li class="no-border"><a href="gallery.php">Gallery</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-3 connect-social">
					<h4>Connect</h4>
					<ul>
						<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
						<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
						<li><a href="#" class="linkedin" title="Go to Our Linkedin Page"></a></li>
						<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
					</ul>
					
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 9221-34599315,34577808</p>
					<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> al_princeengineers@yahoo.com</p>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="footer-grid-4 copyright">
			<p>&copy; 2017 Al-Prince Engineers. All Rights Reserved | Design by <a href="#"> Qbsco </a></p>
		</div>

	</div>
	<!-- //Footer -->

<!-- Custom-JavaScript-File-Links -->

	<!-- Necessary-JavaScript-File-For-Bootstrap --> <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Supportive-JavaScript-File --> <script type="text/javascript" src="js/jquery.min.js"></script>
<script>
jQuery("#mainheading_banner").text('<?php $str_replace = str_replace(".php"," ",str_replace("/betipk/alprince/","",$_SERVER['REQUEST_URI'])); echo ucwords(str_replace("_"," ",$str_replace));?>');
</script>
	<!-- Slider-JavaScript-Files -->
	<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='js/camera.js'></script>
	<script>
		jQuery(function(){
			jQuery('#camera_wrap_2').camera({
				loader: 'bar',
				pagination: false,
				thumbnails: false
			});
		});
	</script>
	<!-- //Slider-JavaScript-Files -->

	<!-- Navigation-Effect-JavaScript-Files -->	
	<script src="js/velocity.min.js"></script>
	<script src="js/main.nav.js"></script>
	<!-- //Navigation-Effect-JavaScript-Files -->

	<!-- Content-Tabs-JavaScript-Files -->
	<script src="js/cbpFWTabs.js"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
	<!-- //Content-Tabs-JavaScript-Files -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->

	<!-- Skills-Bar-Animation-JavaScript -->
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- //Skills-Animation-JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll, .navbar li a, .footer li a").click(function(event){
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

<!-- //Custom-JavaScript-File-Links -->

</body>

</html>

