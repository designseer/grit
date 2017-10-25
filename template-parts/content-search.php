<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

?>

<article class="col-md-4 col-sm-12 col-xs-12 eq-blocks">
   <header class="entry-header">        
    <?php
		if  ( get_the_post_thumbnail()!='')
		{
			the_post_thumbnail('grit_post_preview'); 
		}else{?>
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/04-screenshot.jpg"  alt="image 1" >
		<?php }?>       
			<!--  <img src="img/04-screenshot.jpg" alt="image 1">--> 
		<a href="<?php the_permalink();?>">
			<h6><?php the_title();?></h6>
        </a> 
		<?php
		$args = array(
			'orderby' => 'name',
			'parent' => 0
		);
		$categories = get_categories( $args );
		if($categories!='')
		{
			foreach ( $categories as $category ) {
				echo '<a rel="tag" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . $category->name . '</a> ';
			}
		}
	?>
    </header>
 </article>