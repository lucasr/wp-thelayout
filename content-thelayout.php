<?php
/**
* The default template for displaying posts in the UI engineering series.
*
* @package WordPress
* @subpackage thelayout
*/
?>

<hgroup>
  <?php if ( get_post_status( get_the_ID() ) != 'draft' ) : ?>
  <h1 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'lucasr' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
  </h1>

  <h2 class="entry-date"><?php the_time( _x( 'F j, Y', 'post date format', 'lucasr' ) ); ?></h2>

  <?php else : ?>

  <h1 class="entry-title draft">
    <?php the_title(); ?>
  </h1>

  <h2 class="entry-date draft"><?php _e( 'Soon', 'lucasr-child' ); ?></h2>

  <?php endif; // end have_posts() check ?>

</hgroup>
