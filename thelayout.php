<?php
/**
 * Template Name: The Layout
 *
 * The Layout's main template file.
 *
 * @package WordPress
 * @subpackage lucasr-child
 */

get_header();?>

      <div class="row-fluid thelayout">

        <div class="span6 thelayout-intro">

          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
          <?php endwhile; ?>

        </div> <!-- span6 thelayout-intro -->

		<div class="span6 thelayout-list">

			<?php $thelayout_posts = lucasr_get_thelayout_posts(); ?>

			<?php if ( $thelayout_posts->have_posts() ) : ?>

			  <?php while ( $thelayout_posts->have_posts() ) : $thelayout_posts->the_post(); ?>
		      <div class="row-fluid entry">
		        <?php get_template_part( 'content', 'thelayout' ); ?>
		      </div>
			  <?php endwhile; ?>

			  <?php wp_reset_query(); ?>
			  <?php wp_reset_postdata(); ?>

			<?php else : ?>

			  <!-- Show no posts UI here -->

			<?php endif; // end $thelayout_posts->have_posts() check ?>

			<?php $thelayout_future_posts = lucasr_get_thelayout_future_posts(); ?>

			<?php if ( $thelayout_future_posts->have_posts() ) : ?>

			  <?php while ( $thelayout_future_posts->have_posts() ) : $thelayout_future_posts->the_post(); ?>
		      <div class="row-fluid entry">
		        <?php get_template_part( 'content', 'thelayout' ); ?>
		      </div>
			  <?php endwhile; ?>

			  <?php wp_reset_query(); ?>
			  <?php wp_reset_postdata(); ?>

			<?php else : ?>

			  <!-- Show no posts UI here -->

			<?php endif; // end $thelayout_future_posts->have_posts() check ?>

		</div> <!-- span6 thelayout-list -->

      </div> <!-- row-fluid -->

      <div id="background"></div>

<?php get_footer(); ?>
