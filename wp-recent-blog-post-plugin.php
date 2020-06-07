<?php

/*
Plugin Name:       Wordpress Recent Blog Post 
Plugin URI:        https://devles.com/
Description:       Wordpress Recent Blog Post show on any page or section by shorcode
Version:           1.0.0
Requires at least: 5.2
Requires PHP:      7.2
Author:            Rezwan Shiblu
Author URI:        https://devles.com/
Text Domain:       woocommerce-latest-product
License:           GPL v2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

Wordpress Recent Blog Post is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Wordpress Recent Blog Post is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Wordpress Recent Blog Post. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/


add_shortcode( 'rz_wordpress_recent_post', 'rz_recent_post' );

function rz_recent_post() {	

$the_query = new WP_Query( array( 
	'post_type'      => 'post',
	'posts_per_page' => '4'
) ); ?>
 

<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

		<h4 style="list-style: none;"><a style="text-decoration: none;" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

		<?php the_post_thumbnail(); ?>

		<p><?php the_excerpt(__('(more…)')); ?></p>
<?php 
      endwhile;

wp_reset_postdata();

}