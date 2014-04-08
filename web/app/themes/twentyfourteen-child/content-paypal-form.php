<?php
/**
 * The template used for displaying page content
 *
 * @package Not Here
 * @author  Matt Robitaille <matt@anchour.com>
 */

?>

<?php if (false !== $paypal) : ?>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<?php the_field( 'paypal_form' ); ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>