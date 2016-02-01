<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (et_get_option('divi_integration_single_top') <> '' && et_get_option('divi_integrate_singletop_enable') == 'on') echo(et_get_option('divi_integration_single_top')); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
                        <?php
                            $debug = true;
                            $song_id = get_post_meta( get_the_ID(), 'tomate_lesson_song_id', true );
                            $song = get_post($song_id);

                            $band_id = get_post_meta($song_id, 'tomate_song_band_id', true);
                            $band = get_post($band_id);

                            if( $debug ) {
                                var_dump($song);
                                var_dump($band);
                            }

                        ?>
                        <span class="lesson-song-name"><?php echo $band->post_title ?></span>|
                        <span class="lesson-title"><?php echo $song->post_title ?></span>



                        <div class="entry-content">
                            <div class="et_pb_section style-section et_section_regular" style="background-color:#ffffff;">



                                <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_1_3">
                                        <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left">
                                            <strong><span style="color: #ff6600;">&nbsp;Style:<span style="color: #000000;">&nbsp;</span></span></strong><span style="color: #ff6600;"><span style="color: #000000;">
                                                    <?php
                                                        $args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
                                                        $terms = wp_get_post_terms( $song_id, 'Style', $args );
                                                        $styles = array();
                                                        foreach ($terms as $style_object)
                                                            array_push($styles,$style_object->name);

                                                        $comma_list = implode(', ', $styles);
                                                        echo $comma_list;
                                                    ?>
                                            </span></span> &nbsp; &nbsp;
                                        </div> <!-- .et_pb_text -->
                                    </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_empty">

                                    </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_empty">

                                    </div> <!-- .et_pb_column -->
                                </div> <!-- .et_pb_row -->

                            </div> <!-- .et_pb_section --><div class="et_pb_section et_section_regular">



                                <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_4_4">
                                        <!-- .et_pb_text -->
                                    </div> <!-- .et_pb_column -->
                                </div> <!-- .et_pb_row -->

                            </div> <!-- .et_pb_section --><div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left tab-container">


                            </div><div class="et_pb_section video-section et_section_regular" style="background-color:#ffffff;">



                                <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_3_4">
                                        <!-- the player --><div id="flowplayer" class="flowplayer functional is-splash is-paused is-mouseout" data-swf="flowplayer.swf" data-ratio="0.4167" style="z-index: 9; background-size: cover;">  <div class="buttons"><span>0.5x</span><span>0.6x</span><span>0.7x</span><span>0.8x</span><span>0.9x</span>	<span class="active">1x</span></div>      <div class="fp-ratio"></div>      <div class="fp-ui">         <div class="fp-waiting"><em></em><em></em><em></em></div>         <a class="fp-fullscreen"></a>         <a class="fp-unload"></a>         <p class="fp-speed"></p>         <div class="fp-controls">            <a class="fp-play"></a>            <div class="fp-timeline">               <div class="fp-buffer"></div>               <div class="fp-progress"></div>            </div>            <div class="fp-volume">               <a class="fp-mute"></a>               <div class="fp-volumeslider">                  <div class="fp-volumelevel"></div>               </div>            </div>         </div>         <div class="fp-time">            <em class="fp-elapsed">00:00</em>            <em class="fp-remaining"></em>            <em class="fp-duration">00:00</em>         </div>         <div class="fp-message"><h2></h2><p></p></div>      </div>      <div class="fp-help">         <a class="fp-close"></a>         <div class="fp-help-section fp-help-basics">            <p><em>space</em>play / pause</p>            <p><em>esc</em>stop</p>            <p><em>f</em>fullscreen</p>            <p><em>shift</em> + <em>←</em><em>→</em>slower / faster <small>(latest Chrome and Safari)</small></p>         </div>         <div class="fp-help-section">            <p><em>↑</em><em>↓</em>volume</p>            <p><em>m</em>mute</p>         </div>         <div class="fp-help-section">            <p><em>←</em><em>→</em>seek</p>            <p><em>&nbsp;. </em>seek to previous            </p><p><em>1</em><em>2</em>…<em>6</em> seek to 10%, 20%, …60% </p>         </div>      </div>   <a href="http://flowplayer.org" style="display: none;"></a></div>
                                    </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4">
                                        <div class="et_pb_blurb et_pb_bg_layout_light et_pb_text_align_center et_pb_blurb_position_left">
                                            <div class="et_pb_blurb_content">
                                                <div class="et_pb_main_blurb_image"><a href="http://farhatguitar.com/?p=2171" target="_blank"><span class="et-pb-icon et-waypoint et_pb_animation_top et-animated" style="color: #000000;"></span></a></div>
                                                <h4><a href="http://farhatguitar.com/?p=2171" target="_blank">BUY THIS SONG VIDEO LESSONS</a></h4>

                                            </div> <!-- .et_pb_blurb_content -->
                                        </div> <!-- .et_pb_blurb --><div class="et_pb_blurb et_pb_bg_layout_light et_pb_text_align_center et_pb_blurb_position_left">
                                            <div class="et_pb_blurb_content">
                                                <div class="et_pb_main_blurb_image"><a href="http://www.farhatguitar.com/paginasiframes/canciones%20videos/ACDC/Jailbreak/PDF/Jailbreak_tab.pdf" target="_blank"><span class="et-pb-icon et-waypoint et_pb_animation_top et-animated" style="color: #000000;"></span></a></div>
                                                <h4><a href="http://www.farhatguitar.com/paginasiframes/canciones%20videos/ACDC/Jailbreak/PDF/Jailbreak_tab.pdf" target="_blank">DOWNLOAD TABS (PDF)</a></h4>

                                            </div> <!-- .et_pb_blurb_content -->
                                        </div> <!-- .et_pb_blurb --><div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left part-songs-list">
                                            <ul class="lcp_catlist" id="lcp_instance_0"><li><a href="http://farhatguitar.com/lessons/jailbreak-lesson-1/" title="Lesson 1">Lesson 1</a>  </li><li><a href="http://farhatguitar.com/lessons/jailbreak-lesson-2/" title="Lesson 2">Lesson 2</a>  </li><li><a href="http://farhatguitar.com/lessons/jailbreak-lesson-3/" title="Lesson 3">Lesson 3</a>  </li><li><a href="http://farhatguitar.com/lessons/jailbreak-lesson-4/" title="Lesson 4 – Completed">Lesson 4 – Completed</a>  </li></ul>
                                        </div> <!-- .et_pb_text -->
                                    </div> <!-- .et_pb_column -->
                                </div> <!-- .et_pb_row -->

                            </div> <!-- .et_pb_section --><div class="et_pb_section et_section_regular">



                                <div class="et_pb_row">
                                    <div class="et_pb_column et_pb_column_4_4">
                                        <div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left section-title">

                                            <h3><span style="color: #ff6600;">&nbsp;Related songs</span></h3>
                                            <hr>

                                        </div> <!-- .et_pb_text --><div class="et_pb_text et_pb_bg_layout_light et_pb_text_align_left related-songs">

                                            <div><ul class="lcp_catlist" id="lcp_instance_0"><li class="current"><a href="http://farhatguitar.com/lessons/jailbreak/" title="Jailbreak">Jailbreak</a>  <a href="http://farhatguitar.com/lessons/jailbreak/" title="Jailbreak"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/01/ACDC_jailbreak_140_95-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="AC:DC_jailbreak_140_95"></a></li><li><a href="http://farhatguitar.com/lessons/back-in-black/" title="Back In Black">Back In Black</a>  <a href="http://farhatguitar.com/lessons/back-in-black/" title="Back In Black"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/01/220px-ACDC_Back_in_Black_Single_Cover-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="220px-ACDC_Back_in_Black_Single_Cover"></a></li><li><a href="http://farhatguitar.com/lessons/you-shook-me-all-night-long/" title="You Shook Me All Night Long">You Shook Me All Night Long</a>  <a href="http://farhatguitar.com/lessons/you-shook-me-all-night-long/" title="You Shook Me All Night Long"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/01/220px-YouShookMeAllNightLong-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="220px-YouShookMeAllNightLong"></a></li><li><a href="http://farhatguitar.com/lessons/my-michelle/" title="My Michelle">My Michelle</a>  <a href="http://farhatguitar.com/lessons/my-michelle/" title="My Michelle"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/04/My_Michelle_Promo_Cover-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="My_Michelle_Promo_Cover"></a></li><li><a href="http://farhatguitar.com/lessons/november-rain/" title="November Rain">November Rain</a>  <a href="http://farhatguitar.com/lessons/november-rain/" title="November Rain"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/04/220px-Novemberrain-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="220px-Novemberrain"></a></li><li><a href="http://farhatguitar.com/lessons/paradise-city/" title="Paradise City">Paradise City</a>  <a href="http://farhatguitar.com/lessons/paradise-city/" title="Paradise City"><img width="150" height="150" src="http://farhatguitar.com/wp-content/uploads/2015/04/220px-Paradisecity-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="220px-Paradisecity"></a></li></ul></div>

                                        </div> <!-- .et_pb_text -->
                                    </div> <!-- .et_pb_column -->
                                </div> <!-- .et_pb_row -->

                            </div> <!-- .et_pb_section -->
                        </div> <!-- .entry-content -->


                    </article>



<!-- content ends -->
				<?php
					if ( ! post_password_required() ) :

						et_divi_post_meta();

						$thumb = '';

						$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

						$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
						$classtext = 'et_featured_image';
						$titletext = get_the_title();
						$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
						$thumb = $thumbnail["thumb"];

						$post_format = get_post_format();

						if ( 'video' === $post_format && false !== ( $first_video = et_get_first_video() ) ) {
							printf(
								'<div class="et_main_video_container">
									%1$s
								</div>',
								$first_video
							);
						} else if ( ! in_array( $post_format, array( 'gallery', 'link', 'quote' ) ) && 'on' === et_get_option( 'divi_thumbnails', 'on' ) && '' !== $thumb ) {
							print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height );
						} else if ( 'gallery' === $post_format ) {
							et_gallery_images();
						}
					?>

					<?php
						$text_color_class = et_divi_get_post_text_color();

						$inline_style = et_divi_get_post_bg_inline_style();

						switch ( $post_format ) {
							case 'audio' :
								printf(
									'<div class="et_audio_content%1$s"%2$s>
										%3$s
									</div>',
									esc_attr( $text_color_class ),
									$inline_style,
									et_pb_get_audio_player()
								);

								break;
							case 'quote' :
								printf(
									'<div class="et_quote_content%2$s"%3$s>
										%1$s
									</div> <!-- .et_quote_content -->',
									et_get_blockquote_in_content(),
									esc_attr( $text_color_class ),
									$inline_style
								);

								break;
							case 'link' :
								printf(
									'<div class="et_link_content%3$s"%4$s>
										<a href="%1$s" class="et_link_main_url">%2$s</a>
									</div> <!-- .et_link_content -->',
									esc_url( et_get_link_url() ),
									esc_html( et_get_link_url() ),
									esc_attr( $text_color_class ),
									$inline_style
								);

								break;
						}

					endif;
				?>

					<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

					<?php
					if ( et_get_option('divi_468_enable') == 'on' ){
						echo '<div class="et-single-post-ad">';
						if ( et_get_option('divi_468_adsense') <> '' ) echo( et_get_option('divi_468_adsense') );
						else { ?>
							<a href="<?php echo esc_url(et_get_option('divi_468_url')); ?>"><img src="<?php echo esc_attr(et_get_option('divi_468_image')); ?>" alt="468" class="foursixeight" /></a>
				<?php 	}
						echo '</div> <!-- .et-single-post-ad -->';
					}
				?>

					<?php
						if ( ( comments_open() || get_comments_number() ) && 'on' == et_get_option( 'divi_show_postcomments', 'on' ) )
							comments_template( '', true );
					?>
				</article> <!-- .et_pb_post -->

				<?php if (et_get_option('divi_integration_single_bottom') <> '' && et_get_option('divi_integrate_singlebottom_enable') == 'on') echo(et_get_option('divi_integration_single_bottom')); ?>
			<?php endwhile; ?>
			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>