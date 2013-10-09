<div id="header-wrapper">
	<div class="container">
		<div class="row">
			<div class="5u mobFullWidth">
				<div class="logoHeader">
					<div>
					<?php 
					echo $this->generateManagedLogo();
					?>
					</div>
				</div>
			</div>
			<div class="7u mobFullWidth">
													<!-- Nav -->
						<nav id="nav">
						<?php
							$pages = \Ip\Menu\Helper::getZoneItems('menu1', 1, 1);
							echo $this->generateMenu('top', $pages);
						?></nav>
			</div>
		</div>
	</div>
</div>
