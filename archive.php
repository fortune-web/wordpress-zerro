<?php
/* 
Template Name: Archive
*/
get_header(); ?>
 
<div class="content">


<?php
if ( have_posts() ) {
	echo "<h1>", the_title(), "</h1>";
}

$params = array(
	array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1),
	'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-aside',
                'post-format-audio',
                'post-format-chat',
                'post-format-gallery',
                'post-format-image',
                'post-format-link',
                'post-format-quote',
                'post-format-status',
                'post-format-video'
            ),
            'operator' => 'NOT IN'
        )
    )
);

$wpb_all_query = new WP_Query($params); ?>
 
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