<?php


/*
* bauhaus_header_slider
*/



add_shortcode( 'bauhaus_header_section_full', 'bauhaus_header_section_full_fun' );
function bauhaus_header_section_full_fun( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'alias_slider' => '',
			'css' => '',


		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


<!--    <div   class="intro --><?php //echo esc_attr( $css_class ); ?><!--  " --><?php //if ( isset( $atts['section_id']{0} ) ) { ?><!-- id="--><?php //echo esc_attr( $atts['section_id'] ); ?><!--"  --><?php //} ?><!-- >-->
<!--        <div class="row ">-->
    <div
            class="pp-scrollable section section-20 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?> >
        <div class="scroll-wrap ">


            <?php  echo do_shortcode($content); ?>


        </div>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'bauhaus_header_slider_section', 'bauhaus_header_slider_section_fun' );
function bauhaus_header_slider_section_fun( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'alias_slider' => '',
			'css' => '',


		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <div
            class="pp-scrollable section section-20 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?> >
        <div class="scroll-wrap ">


            <!-- Start revolution slider -->

            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">


					<?php

					if ( $alias_slider != '' ) {
						echo do_shortcode( '[rev_slider alias="' . $alias_slider . '"][/rev_slider]' );
					} ?>
                </div>
            </div>

        </div>
    </div>
	<?php
	return ob_get_clean();
}


add_shortcode( 'bauhaus_post_header_slider', 'bauhaus_post_header_slider_func' );
function bauhaus_post_header_slider_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'alias_slider' => '',
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


    <div class="post-gallery <?php echo esc_attr( $css_class ); ?>  ">
        <div class="slider-prev icon-chevron-left hidden-xs"></div>
        <div class="slider-next icon-chevron-right hidden-xs"></div>
        <div class="rev_slider_wrapper">
            <div id="rev_slider3" class="rev_slider tp-overflow-hidden fullscreenbanner">
                <ul>

					<?php
					if ( $alias_slider != '' ) {
						echo do_shortcode( '[rev_slider alias="' . $alias_slider . '"][/rev_slider]' );
					}


					?>


                </ul>
            </div>
        </div>
    </div>
	<?php
	return ob_get_clean();
}


/*
* bauhaus_masonry_projects
*/


add_shortcode( 'bauhaus_masonry_projects', 'bauhaus_masonry_projects_func' );
function bauhaus_masonry_projects_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'posts' => - 1,
			'order' => 'DESC',
			'orderby' => 'date',
			'projects_category' => '',
			'projects_id' => '',

			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


    <div class="projects <?php echo esc_attr( $css_class ); ?> ">
        <div class="grid-items js-isotope js-grid-items">

			<?php
			$bauhaus_new_arr = array(
				'posts_per_page' => $posts,
				'order' => $order,

				'post_status' => 'publish',
				'post_type' => 'projects',
				'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


			);

			if ( isset( $projects_category{0} ) ) {
				$str = $projects_category;
				$arr = explode( ',', $str );
				$bauhaus_new_arr['tax_query'][] = array(
					'taxonomy' => 'projects_categories',
					'field' => 'term_id',
					'terms' => $arr
				);


			}

			if ( isset( $projects_id{1} ) ) {
				$myarray2 = explode( ',', $projects_id );
				$bauhaus_new_arr['post__in'] = $myarray2;
				$bauhaus_new_arr['orderby'] = 'post__in';

			} else {
				$bauhaus_new_arr['orderby'] = $orderby;
			}


			$custom_query = new WP_Query( $bauhaus_new_arr );

			if ( $custom_query->have_posts() ):
				while ( $custom_query->have_posts() ):
					$custom_query->the_post();


					?>

                    <div class="grid-item building js-isotope-item js-grid-item">
                        <div class="project-item">
                            <img alt="" class="img-responsive" src="<?php the_post_thumbnail_url( 'full' ); ?>">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="project-hover-2">
                                <i class="icon-plus"></i>
                                <div class="project-hover-content">
                                    <h3 class="project-title"><?php echo the_title(); ?></h3>
                                </div>
                            </a>
                        </div>
                    </div>


				<?php


				endwhile;

				wp_reset_postdata();
				unset( $custom_query );
			endif;
			?>
        </div>
    </div>


	<?php
	return ob_get_clean();
}


/*
 *  bauhaus_project_detail
 */


add_shortcode( 'bauhaus_project_detail', 'bauhaus_project_detail_func' );
function bauhaus_project_detail_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'alias_slider' => '',
			'css' => '',
			'items' => '',
			'items2' => '',
			't_social' => esc_html__( 'Share:', 'bauhaus' ),
			'hide_info' => esc_html__( 'hide information', 'bauhaus' ),
			'show_info' => esc_html__( 'show information', 'bauhaus' ),
			't' => esc_html__( 'The Luxury Residence In Forest', 'bauhaus' ),

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$items_v2 = vc_param_group_parse_atts( $atts['items2'] );

	?>

    <div
            class="project-detail <?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?> >
        <div class="slider-prev icon-chevron-left hidden-xs"></div>
        <div class="slider-next icon-chevron-right hidden-xs"></div>

        <div class="rev_slider_wrapper">
            <div id="rev_slider2" class="rev_slider tp-overflow-hidden fullscreenbanner">

				<?php
				if ( $alias_slider != '' ) {
					echo do_shortcode( '[rev_slider alias="' . $alias_slider . '"][/rev_slider]' );
				}


				?>


            </div>
        </div>

        <div class="project-detail-info">
            <div class="project-detail-control"><span class="hide-info"><?php if ( isset( $atts['hide_info'] ) ) {
						echo esc_html( $atts['hide_info'] );
					} ?></span><span class="show-info"><?php if ( isset( $atts['show_info'] ) ) {
						echo esc_html( $atts['show_info'] );
					} ?></span>
            </div>
            <div class="project-detail-content">
                <h3 class="project-detail-title"><?php if ( isset( $atts['t'] ) ) {
						echo wp_kses_post( $atts['t'] );
					} ?></h3>
                <p class="project-detail-text"><?php echo do_shortcode( $content ); ?></p>
                <ul class="project-detail-list text-dark">
					<?php
					if ( $items_v ) {
						foreach ( $items_v as $item ) { ?>

                            <li>
											<span class="left"><?php if ( isset( $item['left_text']{1} ) ) {
													echo wp_kses_post( $item['left_text'] );
												} ?></span>
                                <span class="right"><?php if ( isset( $item['right_text']{1} ) ) {
										echo wp_kses_post( $item['right_text'] );
									} ?></span>
                            </li>
							<?php
						}
					}
					?>
                </ul>
                <div class="project-detail-meta">
					<span class="left text-dark hidden-xs pull-sm-left"><?php if ( isset( $atts['t_social'] ) ) {
							echo esc_html( $atts['t_social'] );
						} ?></span>
                    <div class="social-list pull-sm-right">
						<?php
						if ( $items_v2 ) {
							foreach ( $items_v2 as $item2 ) { ?>

                                <a target="_blank" href="<?php echo esc_url( $item2['url'] ); ?>"
                                   class="<?php echo esc_attr( $item2['icon'] ); ?> "></a>
								<?php
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>


    </div>


	<?php
	return ob_get_clean();
}


/*
* bauhaus_header_slider_white
*/


add_shortcode( 'bauhaus_header_slider_white', 'bauhaus_header_slider_white_func' );
function bauhaus_header_slider_white_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'alias_slider' => '',
			'css' => '',


		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <main class="jumbotron <?php echo esc_attr( $css_class ); ?>  ">

        <!-- Start revolution slider -->

        <div class="rev_slider_wrapper">
            <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">


				<?php

				if ( $alias_slider != '' ) {
					echo do_shortcode( '[rev_slider alias="' . $alias_slider . '"][/rev_slider]' );
				} ?>
            </div>
        </div>
    </main>
	<?php
	return ob_get_clean();
}


/*
* Section About
*/


add_shortcode( 'bauhaus_section_about', 'bauhaus_section_about_func' );
function bauhaus_section_about_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'img_src' => '',
			'css' => '',
			'subtitle' => esc_html__( 'ABOUT US', 'bauhaus' ),
			'title' => esc_html__( 'We Are The Leader In The Architectural', 'bauhaus' ),
			'number' => esc_html__( '26', 'bauhaus' ),
			'experience_info' => '',


		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <section <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?>
            class="section-about <?php echo esc_attr( $css_class ); ?> ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <strong class="section-subtitle"><?php if ( isset( $atts['subtitle']{1} ) ) {
							echo esc_html( $atts['subtitle'] );
						} ?></strong>
                    <h2 class="section-title section-about-title"><?php if ( isset( $atts['title']{1} ) ) {
							echo esc_html( $atts['title'] );
						} ?></h2>
                    <p><?php echo do_shortcode( $content ); ?></p>
                    <div class="experience-box">
                        <div class="experience-border"></div>
                        <div class="experience-content">
                            <div class="experience-number"><?php if ( isset( $atts['number']{1} ) ) {
									echo esc_html( $atts['number'] );
								} ?></div>
                            <div
                                    class="experience-info wow fadeInDown"><?php if ( isset( $atts['experience_info']{1} ) ) {
									echo wp_kses_post( $atts['experience_info'] );
								} ?></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="dots-image">

						<?php if ( isset( $atts['img_src']{1} ) ) {
							$poster = wp_get_attachment_image_src( $atts['img_src'], 'full' );

							?>
                            <img alt="" class="about-img img-responsive" src="<?php echo esc_url( $poster[0] ); ?>">
							<?php
						} ?>


                        <div class="dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<?php
	return ob_get_clean();
}


/*********bauhaus_section_projects***********/


add_shortcode( 'bauhaus_section_projects', 'bauhaus_section_projects_func' );
function bauhaus_section_projects_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'Latest Projects', "bauhaus" ),
			'section_id' => '',

			'posts' => 0,
			'show_link_div' => false,
			'order' => 'DESC',
			'orderby' => 'date',
			'view_projects_url' => esc_html__( '#', 'bauhaus' ),
			'more' => esc_html__( 'See project', 'bauhaus' ),
			'btn_url' => esc_html__( '#', 'bauhaus' ),
			'project_category' => '',
			'all' => esc_html__( 'All', 'bauhaus' ),
			'view_projects' => esc_html__( 'View All Projects', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <!-- Section Projects -->

    <section <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?>
            class="section-projects section <?php echo esc_attr( $css_class ); ?> ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="section-title"><?php if ( isset( $atts['heading']{1} ) ) {
							echo esc_html( $atts['heading'] );
						} ?></h2>
                </div>
                <div class="col-lg-7">
                    <div class="filter-content">
						<?php
						$arr_cats_id = explode( ',', $atts['project_category'] );


						?>

                        <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                            <li class="active"><a href="#" class="all"
                                                  data-filter="*"><?php if ( isset( $atts['all']{1} ) ) {
										echo esc_html( $atts['all'] );
									} ?></a></li>

							<?php


							if ( isset( $atts['project_category']{0} ) ) {


								foreach ( $arr_cats_id as $cat_id ) {
									$cat = get_term_by( 'id', $cat_id, 'projects_categories' );

									if ( !isset( $cat->name ) ) {
										continue;
									}

									?>

                                    <li><a href="#"
                                           data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                                    </li>
									<?php


								}


							} elseif ( !isset( $atts['project_category']{0} ) ) {


								$args = array(

									'hide_empty' => true,
									'taxonomy' => 'projects_categories',


								);

								$cats = get_categories( $args );


								foreach ( $cats as $cat ) {

									if ( !isset( $cat->name ) ) {
										continue;
									}

									?>
                                    <li><a href="#"
                                           data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                                    </li>
									<?php
								}
							}
							?>


                        </ul>
                        <a href="<?php echo( $atts['view_projects_url'] ); ?>"
                           class="view-projects"><?php if ( isset( $atts['view_projects']{1} ) ) {
								echo esc_html( $atts['view_projects'] );
							} ?></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="project-carousel owl-carousel">

			<?php


			if ( isset( $atts['project_category']{0} ) ) {

				$arr_cats_id = explode( ',', $atts['project_category'] );


				foreach ( $arr_cats_id as $cat_id ) {
					$cat = get_term_by( 'id', $cat_id, 'projects_categories' );


					$bauhaus_new_arr = array(
						'posts_per_page' => $atts['posts'],
						'order' => $atts['order'],
						'orderby' => $atts['orderby'],
						'post_status' => 'publish',
						'post_type' => 'projects',
						'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


					);

					if ( isset( $atts['project_category']{0} ) ) {


						$bauhaus_new_arr['tax_query'][] = array(
							'taxonomy' => 'projects_categories',
							'field' => 'id',
							'terms' => $cat->term_taxonomy_id,
						);
					}


					$custom_query = new WP_Query( $bauhaus_new_arr );

					if ( $custom_query->have_posts() ):
						while ( $custom_query->have_posts() ):
							$custom_query->the_post();


							$terms = wp_get_post_terms( get_the_ID(), 'projects_categories' );


							?>

                            <div <?php if ( $atts['show_link_div'] == true ) { ?>
                                style="cursor: pointer;" onclick="window.location = '<?php the_permalink(); ?>'"
							<?php } ?>

                                    class="project-item item-shadow <?php echo esc_attr( $cat->slug ); ?>   ">
                                <img alt="" class="img-responsive"
                                     src="<?php the_post_thumbnail_url( "bauhaus-image-425x573-croped" ); ?>">
                                <div class="project-hover">
                                    <div class="project-hover-content">
                                        <h3 class="project-title"><?php the_title(); ?></h3>
                                        <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                   class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
										echo esc_html( $atts['more'] );
									} ?> <i class="icon ion-ios-arrow-right"></i></a>
                            </div>

						<?php


						endwhile;

						wp_reset_postdata();
						unset( $custom_query );
					endif;

				}
			} else {

				$bauhaus_new_arr = array(
					'posts_per_page' => $atts['posts'],
					'order' => $atts['order'],
					'orderby' => $atts['orderby'],
					'post_status' => 'publish',
					'post_type' => 'projects',
					'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


				);


				$custom_query = new WP_Query( $bauhaus_new_arr );

				if ( $custom_query->have_posts() ):
					while ( $custom_query->have_posts() ):
						$custom_query->the_post();
						$terms2 = get_the_terms( get_the_ID(), 'projects_categories' );
						//foreach ( $terms2 as $v2 ) {

						$terms = wp_get_post_terms( get_the_ID(), 'projects_categories' );
						$term_slug_arr = array();
						foreach ( $terms as $item ) {

							$term_slug_arr[] = $item->slug;
						}


						?>


                        <div class="project-item item-shadow <?php echo esc_attr( implode( ' ', $term_slug_arr ) ); ?>   ">
                            <img alt="" class="img-responsive"
                                 src="<?php the_post_thumbnail_url( "bauhaus-image-425x573-croped" ); ?>">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title"><?php the_title(); ?></h3>
                                    <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                </div>
                            </div>
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                               class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
									echo esc_html( $atts['more'] );
								} ?> <i class="icon ion-ios-arrow-right"></i></a>
                        </div>

					<?php
						//}

					endwhile;

					wp_reset_postdata();
					unset( $custom_query );
				endif;

			}

			?>

        </div>
    </section>

	<?php

	return ob_get_clean();
}

/*********bauhaus_section_clients***********/


add_shortcode( 'bauhaus_section_clients', 'bauhaus_section_clients_func' );
function bauhaus_section_clients_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'css' => '',
			't' => esc_html__( 'From Great Our Clients', "bauhaus" ),
			'items' => '',
			'section_id' => '',
			'items2' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <section
            class="section-clients section bg-dots <?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <h2 class="section-title"><?php if ( isset( $atts['t']{1} ) ) {
					echo esc_html( $atts['t'] );
				} ?></h2>
            <div class="client-carousel owl-carousel">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

                        <div class="client-carousel-item">
							<?php
							$img_src = wp_get_attachment_image_src( $item['img_src'], 'full' );
							if ( $img_src{2} ) {

								?>
                                <img alt="" class="client-img" src="<?php echo esc_url( $img_src[0] ); ?>">

								<?php
							} ?>
                            <div class="client-box">
								<?php
								$img_src2 = wp_get_attachment_image_src( $item['img_icon'], 'full' );
								if ( $img_src2{2} ) {

									?>
                                    <img alt="" class="image-quote" src="<?php echo esc_url( $img_src2[0] ); ?>">
									<?php
								} ?>
                                <div class="client-title">
									<?php if ( isset( $item['name']{1} ) ) {

										?>
                                        <span class="client-name"><?php echo wp_kses_post( $item['name'] ); ?></span>
										<?php
									} ?>
									<?php if ( isset( $item['company']{1} ) ) {

										?>
                                        <span
                                                class="client-company"><?php echo wp_kses_post( $item['company'] ); ?></span>
										<?php
									} ?>
                                </div>
                                <p class="client-description"><?php if ( isset( $item['content']{1} ) ) {
										echo wp_kses_post( $item['content'] );
									} ?></p>
                            </div>
                        </div>
					<?php }
				}
				?>
            </div>
            <div class="partner-carousel owl-carousel">
				<?php
				$items_v2 = vc_param_group_parse_atts( $atts['items2'] );
				if ( $items_v2 ) {
					foreach ( $items_v2 as $item2 ) { ?>
                        <div class="partner-carousel-item">

						<?php
						$img_src2 = wp_get_attachment_image_src( $item2['img_src'], 'full' );
						if ( $img_src2{2} ) {

							?>
                            <img alt="" src="<?php echo esc_url( $img_src2[0] ); ?>">
                            </div>
						<?php }
					}
				}

				?>
            </div>
        </div>
    </section>

	<?php

	return ob_get_clean();
}


/*********bauhaus_section_news***********/


add_shortcode( 'bauhaus_section_news', 'bauhaus_section_news_func' );
function bauhaus_section_news_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'Latest News', "bauhaus" ),
			'section_id' => '',

			'posts' => 3,
			'order' => 'DESC',
			'orderby' => 'date',
			'limit' => 20,

			'more' => esc_html__( 'Continue', 'bauhaus' ),
			'url' => esc_html__( '#', 'bauhaus' ),
			'post_category' => '',
			'all' => esc_html__( 'All Articles', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <section <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?>
            class="section-news section <?php echo esc_attr( $css_class ); ?> ">
        <div class="container">
            <h2 class="section-title"><?php if ( isset( $atts['heading']{1} ) ) {
					echo esc_html( $atts['heading'] );
				} ?> <a href="<?php if ( isset( $atts['url']{1} ) ) {
					echo esc_url( $atts['url'] );
				} ?>" class="link-arrow-2 pull-right"><?php if ( isset( $atts['all']{1} ) ) {
						echo esc_html( $atts['all'] );
					} ?><i class="icon ion-ios-arrow-right"></i></a>
            </h2>
            <div class="news-carousel owl-carousel">

				<?php

				$bauhaus_new_arr = array(
					'showposts' => $atts['posts'],
					'order' => $atts['order'],
					'orderby' => $atts['orderby'],
					'post_status' => 'publish',
					'post_type' => 'post',
					'category_name' => $atts['post_category'],
					'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


				);

				$custom_query = new WP_Query( $bauhaus_new_arr );

				if ( $custom_query->have_posts() ):
					while ( $custom_query->have_posts() ):
						$custom_query->the_post();


						?>


                        <div class="news-item">
							<?php if ( has_post_thumbnail() ) : ?>
                                <img alt="" src="<?php the_post_thumbnail_url( 'bauhaus-image-370x370-croped' ); ?>">
							<?php endif; ?>
                            <div class="news-hover">
                                <div class="hover-border">
                                    <div></div>
                                </div>
                                <div class="content">
                                    <div class="time"><?php echo esc_html( get_the_date() ); ?></div>
                                    <h3 class="news-title"><?php the_title(); ?></h3>
                                    <p class="news-description"><?php echo bauhaus_limit_excerpt( $atts['limit'] );
										?></p>
                                </div>
                                <a class="read-more"
                                   href="<?php echo esc_url( get_the_permalink() ); ?>"><?php if ( isset( $atts['more']{1} ) ) {
										echo esc_html( $atts['more'] );
									} ?></a>
                            </div>
                        </div>
					<?php


					endwhile;

					wp_reset_postdata();
					unset( $custom_query );
				endif;
				?>

            </div>
        </div>
    </section>
	<?php

	return ob_get_clean();
}


/**************** home fullpage*************/


add_shortcode( 'bauhaus_section_header', 'bauhaus_section_header_func' );
function bauhaus_section_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'title' => esc_html__( 'IS key to more  creative', "bauhaus" ),
			'section_id' => '',
			'img_src' => '',
			'vertical_title' => esc_html__( 'Introduce', 'bauhaus' ),
			'subtitle' => '',
			'title_primary' => esc_html__( 'Imagining', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <div
            class="pp-scrollable text-white section section-1 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="scroll-wrap">

			<?php if ( isset( $atts['img_src']{1} ) ) {
				$img_src = wp_get_attachment_image_src( $atts['img_src'], 'full' );

				?>
                <div class="section-bg" style="background-image:url(<?php echo esc_url( $img_src[0] ); ?>);"></div>
				<?php
			} ?>

            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div
                                class="vertical-title hidden-xs hidden-sm"><span><?php if ( isset( $atts['vertical_title']{0} ) ) {
									echo esc_html( $atts['vertical_title'] );
								} ?></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-6">
                                            <p class="subtitle-top"><?php if ( isset( $atts['subtitle']{0} ) ) {
													echo wp_kses_post( $atts['subtitle'] );
												}


												?></p>
                                            <h1 class="display-2 text-white"><?php echo do_shortcode( wpautop( $content ) ); ?></h1>
                                            <div class="hr-bottom"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php

	return ob_get_clean();
}


/*
* Section  Specialization
*/


add_shortcode( 'bauhaus_section_specialization', 'bauhaus_section_specialization_func' );
function bauhaus_section_specialization_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'img_src' => '',
			'css' => '',
			'items' => '',
			'vertical_title' => esc_html__( 'what we do', 'bauhaus' ),
			'subtitle' => esc_html__( 'Our Specialization', 'bauhaus' ),
			'title' => esc_html__( 'subtitle', 'bauhaus' ),
			'number' => esc_html__( '24', 'bauhaus' ),
			'experience_info' => '',


		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <div
            class="pp-scrollable section section-2 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?> >
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div
                                class="vertical-title text-dark hidden-xs hidden-sm"><span><?php if ( isset( $atts['vertical_title']{0} ) ) {
									echo esc_html( $atts['vertical_title'] );
								} ?></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5">
                                            <p class="subtitle-top text-dark"><?php if ( isset( $atts['subtitle']{1} ) ) {
													echo esc_html( $atts['subtitle'] );
												} ?></p>
                                            <h2 class="title-uppercase"><?php echo do_shortcode( $content ); ?></h2>
                                            <ul class="service-list">
												<?php
												$items_v = vc_param_group_parse_atts( $atts['items'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) { ?>
                                                        <li><a href="<?php if ( isset( $item['url'] ) ) {
																echo esc_url( $item['url'] );
															} ?>"><?php if ( isset( $item['text'] ) ) {
																	echo esc_html( $item['text'] );
																} ?></a></li>

													<?php }
												}
												?>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                                            <div class="dots-image-2">

												<?php if ( isset( $atts['img_src']{1} ) ) {
													$poster = wp_get_attachment_image_src( $atts['img_src'], 'full' );

													?>
                                                    <img alt="" class="img-responsive"
                                                         src="<?php echo esc_url( $poster[0] ); ?>">
													<?php
												} ?>

                                                <div class="dots"></div>
                                                <div class="experience-info">
                                                    <div class="number"><?php if ( isset( $atts['number']{1} ) ) {
															echo esc_html( $atts['number'] );
														} ?></div>
                                                    <div
                                                            class="text"><?php if ( isset( $atts['experience_info']{1} ) ) {
															echo wp_kses_post( $atts['experience_info'] );
														} ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php
	return ob_get_clean();
}


/*
* Section  Work
*/


add_shortcode( 'bauhaus_section_work', 'bauhaus_section_work_func' );
function bauhaus_section_work_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'img_src' => '',
			'css' => '',
			'items' => '',
			'items2' => '',
			'vertical_title' => esc_html__( 'our works', 'bauhaus' ),
			'title' => esc_html__( 'LATEST PROJECTS', 'bauhaus' ),
			'all' => esc_html__( 'view all projects ', 'bauhaus' ),
			'url' => esc_html__( '#', 'bauhaus' ),


		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );

	?>
<div class="pp-scrollable text-white section section-3 <?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?> >
    <div class="scroll-wrap">
    <div class="bg-changer">
	<?php

	if ( $items_v ) {
		foreach ( $items_v as $item ) {


			if ( isset( $item['img_src']{1} ) ) {
				$poster = wp_get_attachment_image_src( $item['img_src'], 'full' );

				?>

                <div class="section-bg" style="background-image:url(<?php echo esc_url( $poster[0] ); ?>);"></div>
			<?php }
		}
		?>
        </div>
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title hidden-xs hidden-sm"><span><?php if ( isset( $atts['vertical_title']{0} ) ) {
								echo esc_html( $atts['vertical_title'] );
							}
							?></span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title-uppercase text-white"><?php if ( isset( $atts['title']{0} ) ) {
												echo esc_html( $atts['title'] );
											}
											?></h2>
                                        <div class="row-project-box row">
											<?php
											$items_v2 = vc_param_group_parse_atts( $atts['items2'] );
											if ( $items_v2 ) {
												foreach ( $items_v2 as $item2 ) {


													?>

                                                    <div class="col-project-box col-sm-6 col-md-4 col-lg-3">
                                                        <a href="<?php if ( isset( $item2['url']{1} ) ) {
															echo esc_html( $item2['url'] );
														}
														?>" class="project-box">
                                                            <div class="project-box-inner">
                                                                <h5><?php if ( isset( $item2['title']{1} ) ) {
																		echo esc_html( $item2['title'] );
																	}
																	?></h5>
                                                                <div
                                                                        class="project-category"><?php if ( isset( $item2['cat']{1} ) ) {
																		echo esc_html( $item2['cat'] );
																	}
																	?></div>
                                                            </div>
                                                        </a>
                                                    </div>

												<?php }
											}
											?>
                                        </div>
                                        <a href="<?php if ( isset( $atts['url']{0} ) ) {
											echo esc_url( $atts['url'] );
										}
										?> " class="h5 link-arrow text-white"><?php if ( isset( $atts['all']{0} ) ) {
												echo esc_html( $atts['all'] );
											}
											?> <i class="icon icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

		<?php

	}
	return ob_get_clean();
}


/*********bauhaus_section_partners***********/


add_shortcode( 'bauhaus_section_partners', 'bauhaus_section_partners_func' );
function bauhaus_section_partners_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',

			't' => esc_html__( 'our partners', "bauhaus" ),
			'section_id' => '',
			'items2' => '',
			'vertical_title' => esc_html__( 'partners', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <div class="pp-scrollable section section-4 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="vertical-title text-dark hidden-xs hidden-sm">
							<span><?php if ( isset( $atts['vertical_title']{1} ) ) {
									echo esc_html( $atts['vertical_title'] );
								} ?></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title-uppercase"><?php if ( isset( $atts['t']{1} ) ) {
													echo esc_html( $atts['t'] );
												} ?></h2>
                                            <div class="row-partners">
												<?php
												$items_v = vc_param_group_parse_atts( $atts['items2'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) {
														$img_src2 = wp_get_attachment_image_src( $item['img_src'], 'full' );
														if ( $img_src2{2} ) {


															?>


                                                            <div class="col-partner">
                                                                <div class="partner-inner"><img alt=""
                                                                                                src="<?php echo esc_url( $img_src2[0] ); ?>">
                                                                </div>
                                                            </div>
														<?php }
													}

												}
												?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php

	return ob_get_clean();
}


/*********bauhaus_section_testimonials***********/


add_shortcode( 'bauhaus_section_testimonials', 'bauhaus_section_testimonials_func' );
function bauhaus_section_testimonials_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'CREATIVE & DEDICATED IS THINGS THAT BAUHAUS STUDIO BRINGS FOR YOUR HOUSE', "bauhaus" ),
			'img_src' => '',
			'section_id' => '',
			'items' => '',
			'vertical_title' => esc_html__( 'testimonials', 'bauhaus' ),
			'title' => esc_html__( 'creative &amp; dedicated is things that bauhaus studio brings for your house', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

    <div class="pp-scrollable text-white section section-5 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="scroll-wrap">
			<?php

			$img_src2 = wp_get_attachment_image_src( $atts['img_src'], 'full' );
			if ( $img_src2{2} ) {
				?>
                <div class="section-bg" style="background-image:url(<?php echo esc_url( $img_src2[0] ); ?>);"></div>
				<?php
			}
			?>

            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div class="vertical-title hidden-xs hidden-sm">
							<span><?php if ( isset( $atts['vertical_title']{1} ) ) {
									echo esc_html( $atts['vertical_title'] );
								} ?></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5">
                                            <span class="icon-quote ion-quote"></span>
                                            <h2 class="title-uppercase text-white"><?php if ( isset( $atts['title']{1} ) ) {
													echo esc_html( $atts['title'] );
												} ?></h2>
                                        </div>
                                        <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                                            <div class="review-carousel owl-carousel">
												<?php
												$items_v = vc_param_group_parse_atts( $atts['items'] );
												if ( $items_v ) {
													foreach ( $items_v as $item ) {
														{


															?>
                                                            <div class="review-carousel-item">
                                                                <div class="text">
																	<?php if ( isset( $item['text']{1} ) ) {
																		echo wp_kses_post( $item['text'] );
																	} ?>
                                                                </div>
                                                                <div class="review-author">
                                                                    <div
                                                                            class="author-name"><?php if ( isset( $item['author']{1} ) ) {
																			echo wp_kses_post( $item['author'] );
																		} ?></div>
                                                                    <i><?php if ( isset( $item['text_i']{1} ) ) {
																			echo wp_kses_post( $item['text_i'] );
																		} ?></i>
                                                                </div>
                                                            </div>
														<?php }
													}

												}
												?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php

	return ob_get_clean();
}


/*********bauhaus_section_map***********/


add_shortcode( 'bauhaus_map_section', 'bauhaus_map_section_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_map_section_func( $atts, $content ) {

	ob_start();


	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'text' => '',
			'desc' => '',
			'section_id' => '',
			'map_text' => esc_html__( 'bauhaus', 'bauhaus' ),
			'lat' => '',
			'lng' => '',
			'st2' => '',
			'zoom' => 14,
			'url_t' => '',
			'url' => '',

			'items' => '',

			't' => '',
			'css' => '',
			'map_items' => '',
			'map_visibility' => '',
			'info_items' => '1',
			'contact_visibility' => '',
			'title' => esc_html__( 'ENJOY COFFEE WITH US', 'bauhaus' ),
			'vertical_title' => esc_html__( 'contact', 'bauhaus' ),
			'img_src' => '',
			'map_info_visibility' => '',
			'map_brand_text' => esc_html__( 'architecture', 'bauhaus' ),
		), $atts
	);

	extract( $atts );

	$info_items2 = vc_param_group_parse_atts( $atts['info_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$map_items2 = vc_param_group_parse_atts( $atts['map_items'] );

	?>


    <div class="pp-scrollable section section-6 <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?> >
        <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred">
                    <div class="boxed boxed-inner">
                        <div
                                class="vertical-title text-dark hidden-xs hidden-sm"><span><?php if ( isset( $atts['vertical_title']{0} ) ) {
									echo esc_html( $atts['vertical_title'] );
								}
								?></span></div>
                        <div class="boxed">
                            <div class="container">
                                <div class="intro overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="title-uppercase"><?php if ( isset( $atts['title']{0} ) ) {
													echo esc_html( $atts['title'] );
												}
												?></h2>

											<?php if ( $atts['map_visibility'] != '2' ) { ?>


                                                <div id="map" data-lat="<?php if ( isset( $lat{1} ) ) {

													echo esc_attr( $lat );
												} ?>"
                                                     data-lng="<?php if ( isset( $lng{1} ) ) {
													     echo esc_attr( $lng );
												     } ?>"
                                                     class="map-2">
													<?php if ( $atts['map_info_visibility'] != '2' ) { ?>
                                                        <div class="map-title">

                                                            <div class="brand" href="#">
																<?php
																$poster = wp_get_attachment_image_src( $atts['img_src'], 'full' );
																if ( isset( $poster{1} ) ) {
																	?>
                                                                    <img alt=""
                                                                         src="<?php echo esc_url( $poster[0] ); ?>">

																<?php } ?>
                                                                <div class="brand-info">
                                                                    <div
                                                                            class="brand-name"><?php echo esc_attr( $atts['map_text'] ); ?></div>
                                                                    <div
                                                                            class="brand-text"><?php echo esc_attr( $atts['map_brand_text'] ); ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="map-address"></p>
														<?php if ( $map_items2 ) {
															foreach ( $map_items2 as $item ) {
																?>
                                                                <div class="map-address-row">
																	<?php if ( isset( $item['icon'] ) && $item['icon'] != '' ): ?>
                                                                        <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
																	<?php endif; ?>
																	<?php if ( isset( $item['content'] ) && $item['content'] != '' ): ?>

                                                                        <span
                                                                                class="text"><?php echo wp_kses_post( $item['content'] ); ?></span>

																	<?php endif; ?>
                                                                </div>
																<?php
															}

														} ?>

														<?php if ( isset( $url{1} ) && isset( $url_t{1} ) ) { ?>
                                                            <p class="gmap-open">
                                                                <a
                                                                        href="<?php echo esc_url( $url ); ?>"
                                                                        target="_blank"><?php echo wp_kses_post( $url_t ); ?></a>
                                                            </p>

														<?php } ?>

													<?php } ?>
                                                </div>


											<?php $map_style = get_theme_mod( 'bauhaus_map_stylemap_json', '[]' );


											if ( strlen( str_replace( ' ', '', $map_style ) ) < 5 ) {
												$map_style = '[]';
											}

											?>
                                                <script>


                                                    function initialize() {

                                                        var contentString = '<div class="map-info">'
                                                            + jQuery("#map").html() +
                                                            '</div>';


                                                        var mapOptions = {
                                                            zoom: <?php echo (int) $zoom; ?>, // Change zoom here
                                                            center: mapLocation,
                                                            scrollwheel: false,

                                                            styles: <?php echo wp_kses_post( $map_style ); ?>

                                                        };

                                                        map = new google.maps.Map(document.getElementById('map'),
                                                            mapOptions);
                                                        var infowindow = new google.maps.InfoWindow({
                                                            content: contentString,
                                                        });

														<?php if ( $atts['map_info_visibility'] != '2' ) { ?>
                                                        marker = new google.maps.Marker({
                                                            map: map,
                                                            draggable: true,
                                                            title: 'bauhaus', //change title here
                                                            animation: google.maps.Animation.DROP,
                                                            position: mapLocation
                                                        });

                                                        google.maps.event.addListener(marker, 'click', function () {
                                                            infowindow.open(map, marker);
                                                        });


                                                        infowindow.open(map, marker);
														<?php } ?>

                                                    }


                                                </script>

											<?php } ?>


											<?php if ( $contact_visibility = '1' ) { ?>
                                                <div class="contact-info">

                                                    <div class="row-contact-info row">
														<?php if ( $info_items2 ) {
															foreach ( $info_items2 as $item ) {

																?>


                                                                <div class="col-contact-info col-md-6 col-lg-4">
                                                                    <div class="row">
                                                                        <h3 class="col-sm-3 col-md-4">    <?php if ( isset( $item['t'] ) ) {
																				echo wp_kses_post( $item['t'] );
																			} ?></h3>
                                                                        <div
                                                                                class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">

																			<?php
																			$t_items2 = vc_param_group_parse_atts( $item['items'] );

																			if ( $t_items2 ) {
																				foreach ( $t_items2 as $item2 ) {


																					?>

                                                                                    <div
                                                                                            class="contact-info-row col-sm-6 col-md-12">

																						<?php if ( isset( $item2['t']{1} ) ) { ?>
                                                                                            <strong
                                                                                                    class="text-dark"><?php
																								echo wp_kses_post( $item2['t'] );
																								?></strong><br>
																						<?php } ?>

																						<?php if ( isset( $item2['content'] ) ) {
																							echo wp_kses_post( $item2['content'] );
																						} ?>
                                                                                    </div>

																				<?php }
																			} ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

															<?php }
														} ?>

                                                    </div>

                                                </div>
											<?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php

	return ob_get_clean();
}


/*********bauhaus_heading_section***********/


add_shortcode( 'bauhaus_heading_section', 'bauhaus_heading_section_func' );
function bauhaus_heading_section_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			't' => esc_html__( 'We Do Great Design For Creative Folks.', "bauhaus" ),

			'section_id' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <main
            class="page-header-3 <?php echo esc_attr( $css_class ); ?>" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="title-hr"></div>
                </div>
                <div class="col-md-8 col-lg-6"><h1><?php if ( isset( $atts['t']{1} ) ) {
							echo esc_html( $atts['t'] );
						} ?></h1></div>
            </div>
        </div>
    </main>
	<?php

	return ob_get_clean();
}


/*********bauhaus_section_image***********/


add_shortcode( 'bauhaus_section_image', 'bauhaus_section_image_func' );
function bauhaus_section_image_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'css' => '',


		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <div class="content-entry-image<?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> ></div>

	<?php
	return ob_get_clean();
}

/*********bauhaus_section_image***********/

add_shortcode( 'bauhaus_about_information', 'bauhaus_about_information_func' );
function bauhaus_about_information_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'css' => '',
			'title' => esc_html__( 'Brief About Us.', 'bauhaus' ),


		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <section
            class="section about-info <?php echo esc_attr( $css_class ); ?>  " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>"  <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title"><?php if ( isset( $atts['title']{1} ) ) {
								echo esc_html( $atts['title'] );
							}
							?></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="text-display-1">
                        <p>
							<?php echo do_shortcode( $content ); ?>


                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
	return ob_get_clean();
}


/*********bauhaus_section_dots***********/


add_shortcode( 'bauhaus_section_dots', 'bauhaus_section_dots_func' );
function bauhaus_section_dots_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'our partners', "bauhaus" ),

			'section_id' => '',
			'items2' => '',
			'items' => '',
			't' => esc_html__( 'What We Do', 'bauhaus' ),
			't2' => esc_html__( 'GREAT OUR CLIENT', 'bauhaus' ),
			'partners_visibility' => '',

		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <section
            class="section bg-dots <?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title"><?php if ( isset( $atts['t']{1} ) ) {
								echo esc_html( $atts['t'] );
							}
							?></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row-services row">
						<?php
						$items_v = vc_param_group_parse_atts( $atts['items'] );
						if ( $items_v ) {
							foreach ( $items_v as $item ) {

								?>

                                <div class="col-service col-sm-6 col-lg-4">
									<span class="text-dark icon-medium <?php if ( isset( $item['icon']{1} ) ) {
										echo esc_attr( $item['icon'] );
									}
									?>  "></span>
                                    <h4><?php if ( isset( $item ['t']{1} ) ) {
											echo esc_html( $item ['t'] );
										}
										?></h4>
                                    <p><?php if ( isset( $item ['desc']{1} ) ) {
											echo wp_kses_post( $item ['desc'] );
										}
										?></p>
                                </div>

							<?php }


						}
						?>


                    </div>
                </div>
            </div>
            <section class="section pb-0">
                <div class="row">
					<?php if ( $atts['partners_visibility'] != '2' ) { ?>
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title"><?php if ( isset( $atts['t2']{1} ) ) {
										echo esc_html( $atts['t2'] );
									}
									?></div>
                            </div>
                        </div>


                        <div class="col-md-9">
                            <div class="row-partners">

								<?php
								$items_v2 = vc_param_group_parse_atts( $atts['items2'] );
								if ( $items_v2 ) {
									foreach ( $items_v2 as $item2 ) {
										$img_src2 = wp_get_attachment_image_src( $item2['img_src'], 'full' );
										if ( $img_src2{2} ) {


											?>
                                            <div class="col-partner">
                                                <img alt="" src="<?php echo esc_url( $img_src2[0] ); ?>">
                                            </div>
										<?php }
									}

								}
								?>
                            </div>
                        </div>

					<?php } ?>
                </div>
            </section>
        </div>
    </section>
	<?php

	return ob_get_clean();
}


/*********'bauhaus Section team***********/


add_shortcode( 'bauhaus_section_team', 'bauhaus_section_team_func' );
function bauhaus_section_team_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',


			'section_id' => '',
			'items2' => '',
			'items' => '',
			't' => esc_html__( 'MEET OUR TEAM', 'bauhaus' ),
			't2' => esc_html__( 'GREAT OUR CLIENT', 'bauhaus' ),
			'partners_visibility' => '',
			'resume' => '',

		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <section
            class="section <?php echo esc_attr( $css_class ); ?> " <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title"><?php if ( isset( $atts['t']{1} ) ) {
								echo esc_html( $atts['t'] );
							}
							?></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row-team row">
						<?php
						$items_v = vc_param_group_parse_atts( $atts['items'] );
						if ( $items_v ) {
							foreach ( $items_v as $item ) {

								$img_src2 = wp_get_attachment_image_src( $item['img_src'], 'full' );
								$items_v2 = vc_param_group_parse_atts( $item['items2'] );
								?>
                                <div class="col-team col-xs-6 col-md-4">
                                    <div class="team-profile">
										<?php if ( $img_src2{2} ) { ?>    <img alt=""
                                                                               src="<?php echo esc_url( $img_src2[0] ); ?>"> <?php } ?>
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6><?php if ( isset( $item['name']{1} ) ) {
															echo esc_html( $item['name'] );
														}
														?></h6>
                                                    <div class="team-spec"><?php if ( isset( $item['spec']{1} ) ) {
															echo esc_html( $item['spec'] );
														}

														?>

														<?php


														if ( isset( $item['email']{2} ) ) {
															?>
                                                            <br>
                                                            <a style="color: black; text-decoration: underline;"
                                                               href="mailto:<?php echo antispambot( $item['email'] ); ?>"><?php echo antispambot( $item['email'] ); ?></a>
														<?php } ?>
                                                    </div>
                                                </div>
                                                <div class="team-social">
													<?php

													if ( $items_v2 ) {
														foreach ( $items_v2 as $item2 ) {

															?>
                                                            <a href="<?php if ( isset( $item2['url']{1} ) ) {
																echo esc_url( $item2['url'] );
															}
															?>" class="icon <?php if ( isset( $item2['icon']{1} ) ) {
																echo esc_attr( $item2['icon'] );
															}
															?>"></a>
														<?php }


													}
													?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php }


						}
						?>

                        <div class="col-team col-xs-6 col-md-4">
                            <div class="add-new-team">
                                <div class="add-new-text">
                                    <div class="inner">

										<?php echo do_shortcode( $atts['resume'] ); ?>

                                    </div>


                                </div>

                                <form method="post" enctype="multipart/form-data">
                                    <input class="bauhaus_upload_file" type="file">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php

	return ob_get_clean();
}


/*********bauhaus_section_map***********/


add_shortcode( 'bauhaus_map_section2', 'bauhaus_map_section2_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_map_section2_func( $atts, $content ) {

	ob_start();


	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'text' => '',
			'desc' => '',
			'section_id' => '',
			'map_text' => esc_html__( 'bauhaus', 'bauhaus' ),
			'lat' => '',
			'lng' => '',
			'st2' => '',
			'zoom' => 14,
			'url_t' => '',
			'url' => '',

			'items' => '',
			'map_brand_text' => esc_html__( 'architecture', 'bauhaus' ),

			't' => '',
			'css' => '',
			'map_items' => '',
			'map_visibility' => '',
			'info_items' => '1',
			'contact_visibility' => '',
			'title' => esc_html__( 'ENJOY COFFEE WITH US', 'bauhaus' ),
			'vertical_title' => esc_html__( 'contact', 'bauhaus' ),
			'img_src' => '',
			'map_info_visibility' => '',

		), $atts
	);

	extract( $atts );

	$info_items2 = vc_param_group_parse_atts( $atts['info_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$map_items2 = vc_param_group_parse_atts( $atts['map_items'] );

	?>


    <div data-lat="
	<?php if ( isset( $lat{1} ) ) {

		echo esc_attr( $lat );
	} ?>"
         data-lng="<?php if ( isset( $lng{1} ) ) {
		     echo esc_attr( $lng );
	     } ?>" id="map<?php if ( isset( $section_id{0} ) ) {
		echo esc_attr( $section_id );
	} ?>" class="map<?php echo esc_attr( $css_class ); ?>">

		<?php if ( $atts['map_info_visibility'] != '2' ) { ?>
            <div class="map-title">

                <div class="brand" href="#">
					<?php
					$poster = wp_get_attachment_image_src( $atts['img_src'], 'full' );
					if ( isset( $poster{1} ) ) {
						?>
                        <img alt="" src="<?php echo esc_url( $poster[0] ); ?>">

					<?php } ?>
                    <div class="brand-info">
                        <div class="brand-name"><?php echo esc_attr( $atts['map_text'] ); ?></div>
                        <div class="brand-text"><?php echo esc_attr( $atts['map_brand_text'] ); ?></div>
                    </div>
                </div>
            </div>
            <p class="map-address"></p>
			<?php if ( $map_items2 ) {
				foreach ( $map_items2 as $item ) {
					?>
                    <div class="map-address-row">
						<?php if ( isset( $item['icon'] ) && $item['icon'] != '' ): ?>
                            <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
						<?php endif; ?>
						<?php if ( isset( $item['content'] ) && $item['content'] != '' ): ?>

                            <span class="text"><?php echo wp_kses_post( $item['content'] ); ?></span>

						<?php endif; ?>
                    </div>
					<?php
				}

			} ?>

			<?php if ( $url && $url_t ) { ?>
                <p class="gmap-open">
                    <a
                            href="<?php echo esc_url( $url ); ?>"
                            target="_blank"><?php echo wp_kses_post( $url_t ); ?></a></p>

			<?php } ?>

		<?php } ?>

    </div>

	<?php $map_style = get_theme_mod( 'bauhaus_map_stylemap_json', '[]' );

	if ( strlen( str_replace( ' ', '', $map_style ) ) < 5 ) {
		$map_style = '[]';
	}


	?>

    <script>


        function initialize() {

            var contentString = '<div class="map-info">'
                + jQuery("#map").html() +
                '</div>';


            var mapOptions = {
                zoom: <?php echo (int) $zoom; ?>, // Change zoom here
                center: mapLocation,
                scrollwheel: false,

                styles: <?php echo wp_kses_post( $map_style ); ?>

            };

            map = new google.maps.Map(document.getElementById('map'),
                mapOptions);
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
            });

			<?php if ( $atts['map_info_visibility'] != '2' ) { ?>
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                title: 'bauhaus', //change title here
                animation: google.maps.Animation.DROP,
                position: mapLocation
            });
			<?php } ?>
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });


            infowindow.open(map, marker);

        }


    </script>

	<?php

	return ob_get_clean();
}


/*********' bauhaus Section contacts***********/


add_shortcode( 'bauhaus_section_contacts', 'bauhaus_section_contacts_func' );
function bauhaus_section_contacts_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',


			'section_id' => '',
			'items2' => '',
			'items' => '',
			't' => esc_html__( 'Keep in touch', 'bauhaus' ),
			't2' => '',
			'text' => '',
			'right_heading' => esc_html__( 'Call directly:', 'bauhaus' ),
			'number' => esc_html__( '+99 (0) 344 956 4050', 'bauhaus' ),
			'w_title' => esc_html__( 'Work Hours', 'bauhaus' ),
			'w_desc' => esc_html__( 'Monday - Friday : 08h00 - 17h30 Saturday: 08h00 - 12h00, Sunday off work', 'bauhaus' ),
			'soc_title' => esc_html__( 'Follow us', 'bauhaus' ),

		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$items_v2 = vc_param_group_parse_atts( $atts['items2'] );
	?>


    <section <?php echo esc_attr( $css_class ); ?>  <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title"><?php if ( isset( $atts['t']{1} ) ) {
								echo esc_html( $atts['t'] );
							}
							?></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row-contact row">
                        <div class="col-contact col-lg-6">
                            <h3 class="contact-title contact-top"><?php if ( isset( $atts['t2']{1} ) ) {
									echo wp_kses_post( $atts['t2'] );
								}
								?></h3>
                            <p class="contact-address text-muted"><strong><?php if ( isset( $atts['text']{1} ) ) {
										echo wp_kses_post( $atts['text'] );
									}
									?></strong></p>
							<?php

							if ( $items_v ) {
								foreach ( $items_v as $item ) {


									?>
                                    <p class="contact-row"><?php if ( isset( $item['text']{1} ) ) {
											echo wp_kses_post( $item['text'] );
										}
										?></p>
								<?php }


							}
							?>
                        </div>
                        <div class="col-contact col-lg-6">
                            <p class="contact-top"><strong
                                        class="text-muted"><?php if ( isset( $atts['right_heading']{1} ) ) {
										echo esc_html( $atts['right_heading'] );
									}
									?></strong></p>
                            <p class="phone-lg text-dark"><?php if ( isset( $atts['number']{1} ) ) {
									echo esc_html( $atts['number'] );
								}
								?></p>
                            <p class="text-muted"><strong class="text-dark"><?php if ( isset( $atts['w_title']{1} ) ) {
										echo esc_html( $atts['w_title'] );
									}
									?></strong><br>
								<?php if ( isset( $atts['w_desc']{1} ) ) {
									echo wp_kses_post( $atts['w_desc'] );
								}
								?></p>
                            <div class="text-muted"><strong
                                        class="text-dark"><?php if ( isset( $atts['soc_title']{1} ) ) {
										echo wp_kses_post( $atts['soc_title'] );
									}
									?></strong><br>
                                <div class="contact-social social-list">

									<?php

									if ( $items_v2 ) {
										foreach ( $items_v2 as $item2 ) {


											?>
                                            <a href="<?php if ( isset( $item2['soc_url']{1} ) ) {
												echo esc_url( $item2['soc_url'] );
											}
											?>" class="icon <?php if ( isset( $item2['icon']{1} ) ) {
												echo esc_attr( $item2['icon'] );
											}
											?>"></a>
										<?php }


									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<?php

	return ob_get_clean();
}


add_shortcode( 'bauhaus_form_section', 'bauhaus_form_section_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_form_section_func( $atts, $content ) {

	ob_start();

	if ( isset( $atts['images']{0} ) ) {
		$img_arr = wp_get_attachment_image_src( $atts['images'], 'full' );
		if ( isset( $img_arr[0] ) ) {
			$atts['images'] = $img_arr[0];
		}

	}
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			't' => esc_html__( 'YOU NEED HELP', 'bauhaus' ),
			'field_first' => esc_html__( 'Name* ', 'virgo' ),
			'field_second' => esc_html__( 'Email ', 'virgo' ),
			'field_three' => esc_html__( 'Message ', 'virgo' ),
			'field_fourth' => esc_html__( 'Send Message ', 'virgo' ),
			'subject' => esc_html__( 'Subject (Optinal)', 'bauhaus' ),
			'css' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
    <section
            class="section-message section <?php echo esc_attr( $css_class ); ?>" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title"><?php echo esc_html( $atts['t'] ); ?></div>
                    </div>
                </div>
                <div class="col-md-9">
					<?php

					if ( isset( $content{0} ) ) { ?>

						<?php echo do_shortcode( $content ); ?>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>


	<?php

	return ob_get_clean();
}


/*********bauhaus_section_projects***********/


add_shortcode( 'bauhaus_listing_projects', 'bauhaus_listing_projects_func' );
function bauhaus_listing_projects_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',

			'section_id' => '',

			'posts' => 0,
			'order' => 'DESC',
			'orderby' => 'date',
			'view_projects_url' => esc_html__( '#', 'bauhaus' ),
			'more' => esc_html__( 'Continue', 'bauhaus' ),
			'btn_url' => esc_html__( '#', 'bauhaus' ),
			'project_category' => '',
			'all' => esc_html__( 'All', 'bauhaus' ),
			'view_projects' => esc_html__( 'View All Projects', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <div class="content <?php echo esc_attr( $css_class ); ?> ">
        <div class="container">

			<?php
			$arr_cats_id = explode( ',', $atts['project_category'] );


			?>
            <div class="filter-content-4">
                <ul class="filter js-filter">
                    <li class="active"><a href="#" data-filter="*"><?php if ( isset( $atts['all']{1} ) ) {
								echo esc_html( $atts['all'] );
							} ?></a></li>

					<?php


					if ( isset( $atts['project_category']{0} ) ) {


						foreach ( $arr_cats_id as $cat_id ) {
							$cat = get_term_by( 'id', $cat_id, 'category' );

							if ( !isset( $cat->name ) ) {
								continue;
							}

							?>
                            <li><a href="#"
                                   data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                            </li>

							<?php


						}


					} elseif ( !isset( $atts['category']{0} ) ) {


						$args = array(

							'hide_empty' => true,
							'taxonomy' => 'category',


						);

						$cats = get_categories( $args );


						foreach ( $cats as $cat ) {

							if ( !isset( $cat->name ) ) {
								continue;
							}

							?>

                            <li><a href="#"
                                   data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                            </li>


							<?php
						}
					}
					?>


                </ul>
            </div>


            <div class="js-isotope">
				<?php


				if ( isset( $atts['project_category']{0} ) ) {

					$arr_cats_id = explode( ',', $atts['project_category'] );


					foreach ( $arr_cats_id as $cat_id ) {
						$cat = get_term_by( 'id', $cat_id, 'category' );


						$bauhaus_new_arr = array(
							'posts_per_page' => $atts['posts'],
							'order' => $atts['order'],
							'orderby' => $atts['orderby'],
							'post_status' => 'publish',
							'post_type' => 'post',
							'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


						);

						if ( isset( $atts['project_category']{0} ) ) {
							$str = $atts['project_category'];
							$arr = explode( ',', $str );
							$bauhaus_new_arr['tax_query'][] = array(
								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => $cat->term_taxonomy_id,
							);
						}


						$custom_query1 = new WP_Query( $bauhaus_new_arr );

						if ( $custom_query1->have_posts() ):
							while ( $custom_query1->have_posts() ):
								$custom_query1->the_post();


								?>


                                <div class="<?php echo esc_attr( $cat->slug ); ?> card-row js-isotope-item">
                                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs"
                                         style="background-image:url(<?php the_post_thumbnail_url( '' ); ?>)"></div>
                                    <img class="visible-sm visible-xs img-responsive" alt=""
                                         src="<?php the_post_thumbnail_url( "bauhaus-image-770x555-croped" ); ?>">
                                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                                        <div class="card-posted"><a
                                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a><?php esc_html_e( ' on ', 'bauhaus' );
											echo esc_html( get_the_date() ); ?></div>
                                        <h4 class="card-title"><?php the_title(); ?></h4>
                                        <div
                                                class="card-text"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></div>
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                           class="card-read-more"><?php if ( isset( $atts['more']{1} ) ) {
												echo esc_html( $atts['more'] );
											} ?></a>
                                    </div>
                                </div>


							<?php


							endwhile;

							wp_reset_postdata();
							unset( $custom_query1 );
						endif;

					}
				} else {

					$bauhaus_new_arr = array(
						'posts_per_page' => $atts['posts'],
						'order' => $atts['order'],
						'orderby' => $atts['orderby'],
						'post_status' => 'publish',
						'post_type' => 'post',
						'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


					);


					$custom_query = new WP_Query( $bauhaus_new_arr );

					if ( $custom_query->have_posts() ):
						while ( $custom_query->have_posts() ):
							$custom_query->the_post();
							$terms2 = get_the_terms( get_the_ID(), 'category' );
							foreach ( $terms2 as $v2 ) {


								?>
                                <div class="<?php echo esc_attr( $v2->slug ); ?> card-row js-isotope-item">
                                    <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs"
                                         style="background-image:url(<?php the_post_thumbnail_url( '' ); ?>)"></div>
                                    <img class="visible-sm visible-xs img-responsive" alt=""
                                         src="<?php the_post_thumbnail_url( "bauhaus-image-425x573-croped" ); ?>">
                                    <div class="card-block col-md-offset-7 col-lg-offset-8">
                                        <div class="card-posted"><a
                                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a><?php esc_html_e( 'on ', 'bauhaus' );
											echo esc_html( get_the_date() ); ?></div>
                                        <h4 class="card-title"><?php the_title(); ?></h4>
                                        <div
                                                class="card-text"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></div>
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                           class="card-read-more"><?php if ( isset( $atts['more']{1} ) ) {
												echo esc_html( $atts['more'] );
											} ?></a>
                                    </div>
                                </div>

								<?php
							}

						endwhile;

						wp_reset_postdata();
						unset( $custom_query );
					endif;

				}

				?>

            </div>
        </div>
    </div>
	<?php

	return ob_get_clean();
}


/*********bauhaus_section_projects***********/

add_shortcode( 'bauhaus_grid_news', 'bauhaus_grid_news_func' );
function bauhaus_grid_news_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',


			'posts' => 0,
			'order' => 'DESC',
			'orderby' => 'date',
			'view_projects_url' => esc_html__( '#', 'bauhaus' ),
			'more' => esc_html__( 'Continue', 'bauhaus' ),
			'btn_url' => esc_html__( '#', 'bauhaus' ),
			'project_category' => '',
			'all' => esc_html__( 'All', 'bauhaus' ),
			'view_projects' => esc_html__( 'View All Projects', 'bauhaus' ),
			'h' => esc_html__( 'Latest Thoughts, Ideas & Plans.', 'bauhaus' ),
			'limit' => esc_html__( '20', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <main class="page-header">
        <div class="container"><h1><?php if ( isset( $atts['h']{1} ) ) {
					echo esc_html( $atts['h'] );
				} ?></h1></div>
    </main>

    <div class="content <?php echo esc_attr( $css_class ); ?>">
        <div class="projects">
            <div class="container">
                <div class="filter-content-3">
                    <ul class="filter js-filter">
                        <li class="active"><a href="#" data-filter="*"><?php if ( isset( $atts['all']{1} ) ) {
									echo esc_html( $atts['all'] );
								} ?></a></li>

						<?php


						if ( isset( $atts['project_category']{0} ) ) {
							$arr_cats_id = explode( ',', $atts['project_category'] );

							foreach ( $arr_cats_id as $cat_id ) {
								$cat = get_term_by( 'id', $cat_id, 'category' );

								if ( !isset( $cat->name ) ) {
									continue;
								}

								?>
                                <li><a href="#"
                                       data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                                </li>

								<?php


							}


						} elseif ( !isset( $atts['category']{0} ) ) {


							$args = array(

								'hide_empty' => true,
								'taxonomy' => 'category',


							);

							$cats = get_categories( $args );


							foreach ( $cats as $cat ) {

								if ( !isset( $cat->name ) ) {
									continue;
								}

								?>

                                <li><a href="#"
                                       data-filter=".<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?> </a>
                                </li>


								<?php
							}
						}
						?>


                    </ul>
                </div>
                <div class="grid-items js-isotope js-grid-items">

					<?php


					if ( isset( $atts['project_category']{0} ) ) {

						$arr_cats_id = explode( ',', $atts['project_category'] );


						foreach ( $arr_cats_id as $cat_id ) {
							$cat = get_term_by( 'id', $cat_id, 'category' );


							$bauhaus_new_arr = array(
								'posts_per_page' => $atts['posts'],
								'order' => $atts['order'],
								'orderby' => $atts['orderby'],
								'post_status' => 'publish',
								'post_type' => 'post',
								'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


							);

							if ( isset( $atts['project_category']{0} ) ) {

								$bauhaus_new_arr['tax_query'][] = array(
									'taxonomy' => 'category',
									'field' => 'id',
									'terms' => $cat->term_taxonomy_id,
								);
							}


							$custom_query1 = new WP_Query( $bauhaus_new_arr );

							if ( $custom_query1->have_posts() ):
								while ( $custom_query1->have_posts() ):
									$custom_query1->the_post();


									?>

                                    <div
                                            class="grid-item <?php echo esc_attr( $cat->slug ); ?> js-isotope-item js-grid-item">
                                        <div class="news-item">
                                            <img alt=""
                                                 src="<?php the_post_thumbnail_url( 'bauhaus-image-370x370-croped' ); ?>">
                                            <div class="news-hover">
                                                <div class="hover-border">
                                                    <div></div>
                                                </div>
                                                <div class="content">
                                                    <div class="time"><?php esc_html_e( 'on ', 'bauhaus' );
														echo esc_html( get_the_date() ); ?></div>
                                                    <h3 class="news-title"><?php the_title(); ?></h3>
                                                    <p class="news-description"><?php echo bauhaus_limit_excerpt( $atts['limit'] ); ?></p>
                                                </div>
                                                <a class="read-more"
                                                   href="<?php echo esc_url( get_the_permalink() ); ?>"><?php if ( isset( $atts['more']{1} ) ) {
														echo esc_html( $atts['more'] );
													} ?></a>
                                            </div>
                                        </div>
                                    </div>

								<?php


								endwhile;

								wp_reset_postdata();
								unset( $custom_query1 );
							endif;

						}
					} else {

						$args = array(

							'hide_empty' => true,
							'taxonomy' => 'category',


						);

						$cats = get_categories( $args );
						foreach ( $cats as $cat ) {


							if ( !isset( $cat->name ) ) {
								continue;
							}

							$bauhaus_new_arr = array(
								'posts_per_page' => $atts['posts'],
								'order' => $atts['order'],
								'orderby' => $atts['orderby'],
								'post_status' => 'publish',
								'post_type' => 'post',
								'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


							);

							$bauhaus_new_arr['tax_query'][] = array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => array( $cat->slug )
							);

							$custom_query = new WP_Query( $bauhaus_new_arr );

							if ( $custom_query->have_posts() ):
								while ( $custom_query->have_posts() ):
									$custom_query->the_post();
									$terms2 = get_the_terms( get_the_ID(), 'category' );
									foreach ( $terms2 as $v2 ) {


										?>


                                        <div
                                                class="grid-item <?php echo esc_attr( $v2->slug ); ?> js-isotope-item js-grid-item">
                                            <div class="news-item">
                                                <img alt=""
                                                     src="<?php the_post_thumbnail_url( 'bauhaus-image-370x370-croped' ); ?>">
                                                <div class="news-hover">
                                                    <div class="hover-border">
                                                        <div></div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="time"><?php esc_html_e( 'on ', 'bauhaus' );
															echo esc_html( get_the_date() ); ?></div>
                                                        <h3 class="news-title"><?php the_title(); ?></h3>
                                                        <p class="news-description"><?php echo bauhaus_limit_excerpt( $atts['limit'] ); ?></p>
                                                    </div>
                                                    <a class="read-more"
                                                       href="<?php echo esc_url( get_the_permalink() ); ?>"><?php if ( isset( $atts['more']{1} ) ) {
															echo esc_html( $atts['more'] );
														} ?></a>
                                                </div>
                                            </div>
                                        </div>


										<?php
									}

								endwhile;

								wp_reset_postdata();
								unset( $custom_query );
							endif;

						}
					}

					?>
                </div>
            </div>
        </div>
    </div>


	<?php

	return ob_get_clean();
}


/*********bauhaus_header_video**********/


add_shortcode( 'bauhaus_header_video', 'bauhaus_header_video_func' );
function bauhaus_header_video_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',

			'section_id' => '',

			'url' => esc_html__( 'https://player.vimeo.com/video/34741214', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


    <div class="header-space <?php echo esc_attr( $css_class ); ?> ">
        <div class="post-video">
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php if ( isset( $atts['url']{1} ) ) {
						echo esc_url( $atts['url'] );
					}
					?>?color=ffffff&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>


	<?php

	return ob_get_clean();
}


/*********' bauhaus_post_content***********/


add_shortcode( 'bauhaus_post_content', 'bauhaus_post_content_func' );
function bauhaus_post_content_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'section_id' => '',
			'items' => '',
			'post' => '',
			'hide_title' => '',
			'hide_date' => '',
			't' => esc_html__( 'Keep in touch', 'bauhaus' ),
			'text' => ' <h3 class="entry-description">To mark the first UK show of artist<br> Henri Barande, graphic designer <strong>Pavel Murren</strong> and German studio Schultzschultz have created<br> The Lodge Wooden</h3>
                <p>This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too far, and keep us too safe. In fact it can trigger self-censoring.</p>
                <p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection or ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the most common of all: making mistakes. </p>
               ',

		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );

	?>


	<?php
	$position_sidebar = bauhaus_get_single_sidebar();

	$pos_sidebar = get_post_meta( get_the_ID(), '_bauhaus_sidebar_pos', 1 );

	if ( isset( $pos_sidebar{1} ) ) {
		$position_sidebar = $pos_sidebar;
	}

	if ( $position_sidebar !== 'none' ) {
		?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
	}


	?>


	<?php


	if ( $position_sidebar == 'none' ) {
		?>
        <div class="row">
            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <div class="posted-on">
                    <a class="url fn n"
                       href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
					<?php esc_html_e( ' on ', 'bauhaus' );
					echo esc_html( get_the_date() ); ?>
                </div>
            </div>
        </div>
		<?php
	} else {
		?>
        <div class="posted-on">
            <a class="url fn n"
               href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
			<?php esc_html_e( ' on ', 'bauhaus' );
			echo esc_html( get_the_date() ); ?>
        </div>
		<?php
	}

	?>


    <div class="entry-content <?php echo esc_attr( $css_class ); ?>  ">
		<?php


		if ( $position_sidebar == 'none' ) {
			?>

            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">

					<?php if ( isset( $atts['text']{1} ) ) {
						echo wp_kses_post( $atts['text'] );
					}


					?>
                </div>
            </div>
		<?php } else {
			if ( isset( $atts['text']{1} ) ) {
				if ( preg_match( '/\=/', $atts['text'] ) ) {
					echo wp_kses_post( urldecode( base64_decode( $atts['text'] ) ) );
				} else {
					echo wp_kses_post( $atts['text'] );
				}
			}
		}


		?>

        <div class="row-images row">

			<?php
			if ( $items_v ) {
				foreach ( $items_v as $item ) {

					if ( isset( $item['img_src']{1} ) ) {
						$poster = wp_get_attachment_image_src( $item['img_src'], 'full' );


						?>

                        <div class="col-image <?php echo esc_attr( $item['img_size'] ); ?>   "><img
                                    src="<?php echo esc_url( $poster[0] ); ?>"></div>

						<?php
					}
				}
			} ?>


        </div>

		<?php echo do_shortcode( $content ); ?>


    </div>


	<?php

	return ob_get_clean();
}


/*********bauhaus_section_projects***********/


add_shortcode( 'bauhaus_projects_grid', 'bauhaus_projects_grid_func' );
function bauhaus_projects_grid_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'Architecture Is A Visual Art And The Building Speak For Themselves', "bauhaus" ),
			'section_id' => '',

			'posts' => 100,
			'order' => 'DESC',
			'orderby' => 'date',
			'view_projects_url' => esc_html__( '#', 'bauhaus' ),
			'more' => esc_html__( 'See project', 'bauhaus' ),
			'btn_url' => esc_html__( '#', 'bauhaus' ),
			'project_category' => '',
			'all' => esc_html__( 'All', 'bauhaus' ),
			'view_projects' => esc_html__( 'View All Projects', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>
    <div class=" <?php echo esc_attr( $css_class ); ?> ">
        <main class="page-header">
            <div class="container"><h1><?php if ( isset( $atts['heading']{1} ) ) {
						echo wp_kses_post( $atts['heading'] );
					} ?></h1></div>
        </main>

        <div class="content  ">
            <div class="projects">
                <div class="container">
                    <div class="filter-content-2">
                        <ul class="filter js-filter">
                            <li class="active"><a href="#"
                                                  data-filter="*"><?php if ( isset( $atts['all']{1} ) ) {
										echo  ( $atts['all'] );
									} ?></a></li>

							<?php


							if ( isset( $atts['project_category']{0} ) ) {
								$arr_cats_id = explode( ',', $atts['project_category'] );

								foreach ( $arr_cats_id as $cat_id ) {
									$cat = get_term_by( 'id', $cat_id, 'projects_categories' );

									if ( !isset( $cat->name ) ) {
										continue;
									}

									?>

                                    <li><a href="#"
                                           data-filter=".<?php echo ( $cat->slug ); ?>"><?php echo ( $cat->name ); ?> </a>
                                    </li>
									<?php


								}


							} elseif ( !isset( $atts['project_category']{0} ) ) {


								$args = array(

									'hide_empty' => true,
									'taxonomy' => 'projects_categories',


								);

								$cats = get_categories( $args );


								foreach ( $cats as $cat ) {

									if ( !isset( $cat->name ) ) {
										continue;
									}

									?>
                                    <li><a href="#"
                                           data-filter=".<?php echo ( $cat->slug ); ?>"><?php echo ( $cat->name ); ?> </a>
                                    </li>
									<?php
								}
							}
							?>
                        </ul>
                    </div>
                </div>
                <div class="grid-items js-isotope js-grid-items">

					<?php


					if ( isset( $atts['project_category']{1} ) ) {
					
						$arr_cats_id = explode( ',', $atts['project_category'] );


						$bauhaus_new_arr = array(
							'posts_per_page' => $atts['posts'],
							'order' => $atts['order'],
							'orderby' => $atts['orderby'],
							'post_status' => 'publish',
							'post_type' => 'projects',
							'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


						);

						if ( isset( $atts['project_category']{0} ) ) {
							$str = $atts['project_category'];
							$arr = explode( ',', $str );
							$bauhaus_new_arr['tax_query'][] = array(
								'taxonomy' => 'projects_categories',
								'field' => 'id',
								'terms' => ( $arr ), //$arr_cats_id,
								/*'operator' => 'IN',
								'relation' => 'AND'*/
							);
						}


						$custom_query = new WP_Query( $bauhaus_new_arr );

						if ( $custom_query->have_posts() ):
							while ( $custom_query->have_posts() ):
								$custom_query->the_post();
								$terms = wp_get_post_terms( get_the_ID(), 'projects_categories' );

								$terms_slug = array();
								foreach ( $terms as $term ) {
									$terms_slug[] = $term->slug;


								}
								$terms_slug = implode( ' ', $terms_slug );
								//var_dump( $terms );


								?>


                                <div
                                        style="cursor: pointer;" onclick="window.location = '<?php the_permalink(); ?>'"
                                        class="grid-item <?php echo ( $terms_slug ); ?> js-isotope-item js-grid-item">
                                    <div class="project-item item-shadow">
                                        <img alt="" class="img-responsive"
                                             src="<?php the_post_thumbnail_url( "bauhaus-image-425x573-croped" ); ?>">
                                        <div class="project-hover">
                                            <div class="project-hover-content">
                                                <h3 class="project-title"><?php the_title(); ?></h3>
                                                <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                           class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
												echo esc_html( $atts['more'] );
											} ?> <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div>

							<?php


							endwhile;

							wp_reset_postdata();
							unset( $custom_query );
						endif;


					} else {



						$terms = get_terms( array(
							'taxonomy' => 'projects_categories',
							'hide_empty' => false,
						) );

						$terms_arr = array();

						foreach ( $terms as $term ) {
							$terms_arr[] = $term->term_taxonomy_id;
						}


						$bauhaus_new_arr = array(
							'posts_per_page' => $atts['posts'],
							'order' => $atts['order'],
							'orderby' => $atts['orderby'],
							'post_status' => 'publish',
							'post_type' => 'projects',
							'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


						);

						$bauhaus_new_arr['tax_query'][] = array(
							'taxonomy' => 'projects_categories',
							'field' => 'id',
							'terms' => ($terms_arr), //$arr_cats_id,

						);

						//var_dump($bauhaus_new_arr);
						$custom_query = new WP_Query( $bauhaus_new_arr );

						if ( $custom_query->have_posts() ):
							while ( $custom_query->have_posts() ):
								$custom_query->the_post();
								$terms2 = get_the_terms( get_the_ID(), 'projects_categories' );

								$terms = wp_get_post_terms( get_the_ID(), 'projects_categories' );

								$terms_slug = array();
								foreach ( $terms as $term ) {
									$terms_slug[] = $term->slug;


								}
								$terms_slug = implode( ' ', $terms_slug );

								?>

                                <div style="cursor: pointer;"
                                     onclick="window.location = '<?php the_permalink(); ?>'"
                                     class="grid-item <?php echo ( $terms_slug ); ?> js-isotope-item js-grid-item">
                                    <div class="project-item item-shadow">
                                        <img alt="" class="img-responsive"
                                             src="<?php the_post_thumbnail_url( "bauhaus-image-425x573-croped" ); ?>">
                                        <div class="project-hover">
                                            <div class="project-hover-content">
                                                <h3 class="project-title"><?php the_title(); ?></h3>
                                                <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                           class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
												echo esc_html( $atts['more'] );
											} ?> <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div>


							<?php


							endwhile;

							wp_reset_postdata();
							unset( $custom_query );
						endif;

					}


					?>

                </div>
            </div>
        </div>
    </div>

	<?php

	return ob_get_clean();
}

/*********' bauhaus_post_content***********/


add_shortcode( 'bauhaus_project_detail_content', 'bauhaus_project_detail_content_func' );
function bauhaus_project_detail_content_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'items2' => '',
			'items' => '',
			't_social' => esc_html__( 'Share:', 'bauhaus' ),
			'hide_info' => esc_html__( 'hide information', 'bauhaus' ),
			'show_info' => esc_html__( 'show information', 'bauhaus' ),
			't' => esc_html__( 'The Luxury Residence In Forest', 'bauhaus' ),


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$items_v2 = vc_param_group_parse_atts( $atts['items2'] );
	?>


    <div class="project-detail-thumbnail masked <?php echo esc_attr( $css_class ); ?>  ">
        <div class="opener">
            <div class="container">

                <div class="project-detail-info col-sm-7 col-md-6 col-lg-5">
                    <div class="project-detail-control"><span
                                class="hide-info"><?php if ( isset( $atts['hide_info'] ) ) {
								echo esc_html( $atts['hide_info'] );
							} ?></span><span class="show-info"><?php if ( isset( $atts['show_info'] ) ) {
								echo esc_html( $atts['show_info'] );
							} ?></span></div>
                    <div class="project-detail-content">
                        <h3 class="project-detail-title"><?php if ( isset( $atts['t'] ) ) {
								echo esc_html( $atts['t'] );
							} ?></h3>
                        <p class="project-detail-text"><?php echo do_shortcode( $content ); ?></p>
                        <ul class="project-detail-list text-dark">
							<?php
							if ( $items_v ) {
								foreach ( $items_v as $item ) { ?>

                                    <li>
											<span class="left"><?php if ( isset( $item['left_text']{1} ) ) {
													echo wp_kses_post( $item['left_text'] );
												} ?></span>
                                        <span class="right"><?php if ( isset( $item['right_text']{1} ) ) {
												echo wp_kses_post( $item['right_text'] );
											} ?></span>
                                    </li>
									<?php
								}
							}
							?>
                        </ul>
                        <div class="project-detail-meta">
								<span
                                        class="left text-dark hidden-xs pull-sm-left"><?php if ( isset( $atts['t_social'] ) ) {
										echo esc_html( $atts['t_social'] );
									} ?></span>
                            <div class="social-list pull-sm-right">
								<?php
								if ( $items_v2 ) {
									foreach ( $items_v2 as $item2 ) { ?>

                                        <a target="_blank" href="<?php echo esc_url( $item2['url'] ); ?>"
                                           class="<?php echo esc_attr( $item2['icon'] ); ?> "></a>
										<?php
									}
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

	<?php

	return ob_get_clean();
}


/*********bauhaus_section_projects_carousel***********/


add_shortcode( 'bauhaus_section_projects_carousel', 'bauhaus_section_projects_carousel_func' );
function bauhaus_section_projects_carousel_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'heading' => esc_html__( 'Latest Projects', "bauhaus" ),
			'section_id' => '',

			'posts' => 0,
			'order' => 'DESC',
			'orderby' => 'date',
			'view_projects_url' => esc_html__( '#', 'bauhaus' ),
			'more' => esc_html__( 'See project', 'bauhaus' ),

			'project_category' => '',


		), $atts

	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

    <div class="content <?php echo esc_attr( $css_class ); ?>" <?php if ( isset( $atts['section_id']{0} ) ) { ?> id="<?php echo esc_attr( $atts['section_id'] ); ?>" <?php } ?> >
        <div class="projects">
            <div class="sly">
                <ul class="slidee">
					<?php


					if ( isset( $atts['project_category']{0} ) ) {

						$arr_cats_id = explode( ',', $atts['project_category'] );


						foreach ( $arr_cats_id as $cat_id ) {
							$cat = get_term_by( 'id', $cat_id, 'projects_categories' );


							$bauhaus_new_arr = array(
								'posts_per_page' => $atts['posts'],
								'order' => $atts['order'],
								'orderby' => $atts['orderby'],
								'post_status' => 'publish',
								'post_type' => 'projects',
								'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


							);


							if ( isset( $atts['project_category']{0} ) ) {


								$bauhaus_new_arr['tax_query'][] = array(
									'taxonomy' => 'projects_categories',
									'field' => 'id',
									'terms' => $cat->term_taxonomy_id,
								);
							}


							$custom_query = new WP_Query( $bauhaus_new_arr );

							if ( $custom_query->have_posts() ):
								while ( $custom_query->have_posts() ):
									$custom_query->the_post();

									?>


                                    <li>
                                        <div class="project-item item-shadow">
											<?php if ( has_post_thumbnail() ) { ?>
                                                <img alt="" class="img-responsive"
                                                     src="<?php the_post_thumbnail_url( 'bauhaus-image-685x685-croped' ); ?>">
											<?php } ?>
                                            <div class="project-hover">
                                                <div class="project-hover-content">
                                                    <h3 class="project-title"><?php echo the_title(); ?></h3>
                                                    <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                                </div>
                                            </div>
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                               class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
													echo esc_html( $atts['more'] );
												} ?> <i class="icon ion-ios-arrow-right"></i></a>
                                        </div>
                                    </li>

								<?php

								endwhile;

								wp_reset_postdata();
								unset( $custom_query );

							endif;


						}
					} else {

						$bauhaus_new_arr = array(
							'posts_per_page' => $atts['posts'],
							'order' => $atts['order'],
							'orderby' => $atts['orderby'],
							'post_status' => 'publish',
							'post_type' => 'projects',
							'meta_query' => array( array( 'key' => '_thumbnail_id' ) ),


						);


						$custom_query = new WP_Query( $bauhaus_new_arr );

						if ( $custom_query->have_posts() ):
							while ( $custom_query->have_posts() ):
								$custom_query->the_post();

								?>

                                <li>
                                    <div class="project-item item-shadow">
										<?php if ( has_post_thumbnail() ) { ?>
                                            <img alt="" class="img-responsive"
                                                 src="<?php the_post_thumbnail_url( 'bauhaus-image-685x685-croped' ); ?>">
										<?php } ?>
                                        <div class="project-hover">
                                            <div class="project-hover-content">
                                                <h3 class="project-title"><?php echo the_title(); ?></h3>
                                                <p class="project-description"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                           class="link-arrow"><?php if ( isset( $atts['more']{1} ) ) {
												echo esc_html( $atts['more'] );
											} ?> <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </li>

							<?php


							endwhile;

							wp_reset_postdata();
							unset( $custom_query );
						endif;

					}
					?>

                </ul>
                <span class="prev icon-chevron-left"></span>
                <span class="next icon-chevron-right"></span>
            </div>
            <div class="scrollbar">
                <div class="handle"></div>
            </div>
        </div>
    </div>


	<?php

	return ob_get_clean();
}

