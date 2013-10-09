<?php
$copyright = '&copy; Untitled. All rights reserved. | Images: <a href="http://fotogrph.com/">fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5up.net/">HTML5 UP</a>';
if ($this->getThemeOption('showFooter')){ ?>
<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container"><div class="row">
						<div class="3u mobFullWidth">
						
							<!-- Links -->
								<section class="widget-links">
									<?php echo $this->generateBlock('home5', true); ?>
								</section>
							</div>
						<div class="3u mobFullWidth">
						
							<!-- Links -->
								<section class="widget-links">
									<?php echo $this->generateBlock('home6', true); ?>
								</section>
							</div>
						<div class="3u mobFullWidth">
						
							<!-- Links -->
								<section class="widget-links">
									<?php echo $this->generateBlock('home7', true); ?>
								</section>
						</div>
						<div class="3u mobFullWidth">
						
							<!-- Contact -->
								<section class="widget-contact last"><?php echo $this->generateBlock('home8', true); ?>
								</section></div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								<?php echo $copyright; ?>
							</div>
						</div>
					</div>
				</footer></div>
<?php
}else{
?>
<!-- Footer Wrapper -->
<div id="footer-wrapper">
	<footer id="footer" class="container">
		<div class="12u">
				<div id="copyright">
					<?php echo $copyright; ?> 
				</div>
		</div>
	</footer>
</div>
<?php
}
?>