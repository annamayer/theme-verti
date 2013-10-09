<!-- Main Wrapper -->
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="4u">
				<!-- Sidebar -->
				<div id="sidebar">

					<section>
						<?php echo $this->generateBlock('side1'); ?>
					</section>
				</div>
			</div>
			<div class="8u skel-cell-mainContent">
				<!-- Content -->
				<div id="content">
					<article class="last">
						<?php echo $this->generateBlock('main'); ?>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>