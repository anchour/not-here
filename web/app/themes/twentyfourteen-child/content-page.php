<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

$sections = get_field('sections');
?>

<?php if (false !== $sections) : foreach($sections as $key => $section) :?>

	<div class="section <?php echo $section['theme']; ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
					<h2 class="section-title">
						<?php echo $section['title']; ?>
					</h2>
					<div class="section-content">
						<?php echo $section['content']; ?>
					</div>
				</div>
			</div>

			<?php if (isset($section['columns'])): ?>

				<div class="row speakers">
					<?php foreach($section['columns'] as $key => $col): ?>
						<div class="speaker col-xs-12 col-sm-4 col-md-3">
							<?php echo wp_get_attachment_image( $col['image'], 'speaker-image' ); ?>
							<h3><?php echo $col['name']; ?></h3>
						</div>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>
		</div>
	</div>

<?php endforeach; endif; ?>