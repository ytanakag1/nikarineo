<?php get_header(); ?>

<div class="container">


	<div class="contents">


	<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>

	<article <?php post_class(); ?>>


	<div class="postinfo">
		<time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
		<i class="fa fa-clock-o"></i>
		<?php echo get_the_date(); ?>
		</time>

		<span class="postcat">
		<i class="fa fa-folder-open"></i>
		<?php the_category( ', ' ); ?>
		</span>

		<span class="postcom">
		<i class="fa fa-comment"></i>
		<a href="<?php comments_link(); ?>">
		<?php comments_number(
			'コメント', 
			'コメント（1件）', 
			'コメント（%件）'
		); ?>
		</a>
		</span>
	</div>

	<?php the_content(); ?>


	<?php if( is_single() ): ?>
	<div class="pagenav">
		<span class="old">
		<?php previous_post_link( 
		'%link', 
		'<i class="fa fa-chevron-circle-left"></i> %title' 
		); ?>
		</span>

		<span class="new">
		<?php next_post_link( 
		'%link', 
		'%title <i class="fa fa-chevron-circle-right"></i>' 
		); ?>
		</span>
	</div>
	<?php endif; ?>


	<?php comments_template(); ?>
	</article>

	<?php endwhile; endif; ?>


	<?php if( $wp_query->max_num_pages > 1 ): ?>
	<div class="pagenav">
		<span class="old">
		<?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i> 古い記事' ); ?>
		</span>

		<span class="new">
		<?php previous_posts_link( '新しい記事 <i class="fa fa-chevron-circle-right"></i>' ); ?>
		</span>
	</div>
	<?php endif; ?>

	</div> <!-- contents -->



	<?php get_sidebar() ?>



</div> <!-- container -->

<?php get_footer(); ?>
