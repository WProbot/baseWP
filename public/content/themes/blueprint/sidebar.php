<div id="sidebar">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar1')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>
</div>
