<?php

get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
		<?php
			if ( have_posts() ) : ?>

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

		<?php		while ( have_posts() ) : the_post();
					$post_format = get_post_format(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>

				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_pb_post_main_image';
					$titletext = get_the_title();
					$songID = get_post_meta($post->ID,"new_lesson_song_id",true);
					$thumbnail = get_the_post_thumbnail_url($post->ID, 'medium');

					if(get_post_type() == "new_lesson"){
						$thumbnail =	get_the_post_thumbnail_url(get_the_ID(), 'medium');
					}


					et_divi_post_format_content(); ?>
					
					<div class="search-result-block">
							<a href="<?php the_permalink(); ?>">
						<div class="image-block" style="background-image:url('<?php echo $thumbnail?>')">
						</div>
						</a>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>


					</article> <!-- .et_pb_post -->
			<?php
					endwhile;

					if ( function_exists( 'wp_pagenavi' ) )
						wp_pagenavi();
					else
						get_template_part( 'includes/navigation', 'index' );
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
			?>
			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
