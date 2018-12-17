<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>

  

<div class="row">

    <!-- Main Content -->
  <div class="large-12 columns">  
  <div>
   <style type="text/css">

#marqueecontainer{
position: relative;
width: auto; /*marquee width */
height: 950px; /*marquee height */
background-color: white;
overflow: hidden;
border: 0px solid black;
padding: 0px;
padding-left: 0px;
}

</style>




<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<?php $custom_query = new WP_Query('cat=-9'); // exclude category 9
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>


	</div>
  </div>
</div>
</div>






    <!-- End Main Content -->

<?php get_footer(); ?>
