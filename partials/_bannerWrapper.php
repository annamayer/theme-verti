<?php
if ($this->getThemeOption('showHomeBanner')){ ?>	
<!-- Banner Wrapper -->
<div id="banner-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u">
			
				<!-- Banner -->
					<div id="banner" class="box">

						<div>
							<div class="row">
								<div class="7u bannerFullWidth">
									<h2><?php echo $this->generateManagedString('string2', 'span', 'Hi. This is Verti.'); ?></h2>
									<p><?php echo $this->generateManagedString('string3', 'span', "It's a free responsive HTML5 site template by HTML5 UP"); ?></p>
								</div>
								<div class="5u bigLinks bannerFullWidth">
									<ul><li><a href="#firstLink" class="button button-big button-icon button-icon-rarrow"><?php echo $this->generateManagedString('text1', 'div', "OK let's go"); ?></a></li>
										<li><a href="#mainBlock" class="button button-alt button-big button-icon button-icon-question"><?php echo $this->generateManagedString('text1', 'div', "More info", ''); ?></a></li>
									</ul></div>
							</div>
						</div>
					
					</div>

			</div>
		</div>
	</div>
</div>
<?php
}
?>