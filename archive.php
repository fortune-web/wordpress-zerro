<?php
/* 
Template Name: Archive
*/
get_header(); ?>
 
<div class="content">


<?php
if ( have_posts() ) {
	echo 
	"<h1>", 
	the_title(),
	"<div class='right'><a href='", bloginfo('rss2_url'), "'>RSS</a></div>", 
	"</h1>";
}
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li>
        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        	<div class="right"><?php echo get_the_date('j/n/Y'); ?></div>
        </li>
    <?php endwhile; ?> 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
 
</div><!-- #content -->
 
<?php get_footer(); ?>