<?php




/*
* bauhaus_header_slider
*/


add_shortcode( 'bauhaus_header_slider', 'bauhaus_header_slider_func' );
function bauhaus_header_slider_func( $atts, $content ) {
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

echo 2222222222222222222;

					?>


				</ul>
			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**********New version**************/

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


	<main class="main main-white main-offset-top <?php echo esc_attr( $css_class ); ?>">
		<div class="arrow-left arrow-left-dark hidden-xs"></div>
		<div class="arrow-right arrow-right-dark hidden-xs"></div>
		<?php

		if ( $alias_slider != '' ) {
			echo do_shortcode( '[rev_slider alias="' . $alias_slider . '"][/rev_slider]' );
		} ?>
	</main>
	<?php
	return ob_get_clean();
}


/*
* bauhaus_header_video
*/


add_shortcode( 'bauhaus_header_video', 'bauhaus_header_video_func' );
function bauhaus_header_video_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'slideshow' => 0,
			'h' => esc_html__( 'Make Your Product Alive', 'bauhaus' ),
			'tb' => esc_html__( 'Get bauhaus', 'bauhaus' ),
			'video_btn' => esc_html__( 'Watch video', 'bauhaus' ),
			'url' => esc_html__( '#request', 'bauhaus' ),
			'img_src' => '',
			'poster' => '',
			'scroll_text' => esc_html__( 'Scroll Down', 'bauhaus' ),
			'v_mp4' => get_template_directory_uri() . '/video/video.mp4',
			'v_webm' => get_template_directory_uri() . '/video/video.webm',
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'video2' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
			'css' => '',

		), $atts
	);


	extract( $atts );
	if ( $img_src != '' ) {
		$poster = wp_get_attachment_image_src( $img_src, 'full' );
	}
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<main <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>  <?php if ( isset( $img_src[0] ) ) {
		$img = wp_get_attachment_image_src( $img_src, 'full' );

		?>
		style="background: url(<?php echo esc_url( $img[0] ); ?>) 50% 0 no-repeat; background-size: cover;"
		<?php
	} ?> class="main main-full main-video <?php echo esc_attr( $css_class ); ?>">

		<video class="home-video" autoplay loop
		       muted <?php if ( isset( $poster[0] ) ) { ?> poster="<?php echo esc_url( $poster[0] ); ?>" <?php } ?>>
			<source src="<?php echo esc_url( $v_mp4 ); ?>" type="video/mp4">
			<source src="<?php echo esc_url( $v_webm ); ?>" type="video/webm">
		</video>
		<div class="container">
			<div class="opener">
				<div class="row">
					<div class="col-md-6 text-left-md">
						<h1><?php echo wp_kses_post( $h ); ?></h1>
						<div class="lead-hr wow fadeInLeft"></div>
						<p class="lead wow fadeInUp" data-wow-delay="0.3s"><?php echo wp_kses_post( $desc ); ?></p>
						<a href="<?php echo esc_url( $url ); ?>" data-toggle="modal" class="btn wow fadeInUp"
						   data-wow-delay="0.5s"><?php echo esc_html( $tb ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="mouse-helper">
			<span><?php echo wp_kses_post( $scroll_text ); ?></span>
			<i class="icon ion-mouse"></i>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/*
* bauhaus_header_video
*/


add_shortcode( 'bauhaus_header_video_elegant', 'bauhaus_header_video_elegant_func' );
function bauhaus_header_video_elegant_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";

	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'desc' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quisquam repellendus ratione officiis! Voluptatibus, voluptate. Rem at, consectetur neque.', 'bauhaus' ),
			'scroll_text' => esc_html__( 'Scroll Down', 'bauhaus' ),
			'v_mp4' => get_template_directory_uri() . '/video/video2.mp4',
			'v_webm' => get_template_directory_uri() . '/video/video22.webm',
			'video2' => 'http://www.youtube.com/watch?v=ANwf8AE3_d0',
			'img_src' => '',
			'css' => '',

		), $atts
	);


	extract( $atts );
	if ( $img_src != '' ) {
		$poster = wp_get_attachment_image_src( $img_src, 'full' );
	}
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<main <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="main main-full main-video <?php echo esc_attr( $css_class ); ?>">
		<video class="home-video" autoplay loop
		       muted <?php if ( isset( $poster[0] ) ) { ?> poster="<?php echo esc_url( $poster[0] ); ?>" <?php } ?>>
			<source src="<?php echo esc_url( $v_mp4 ); ?>" type="video/mp4">
			<source src="<?php echo esc_url( $v_webm ); ?>" type="video/webm">
		</video>
		<div class="container">
			<div class="opener">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p class="lead-2 wow fadeInUp" data-wow-delay="0.3s"><?php echo wp_kses_post( $desc ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="mouse-helper">
			<span><?php echo wp_kses_post( $scroll_text ); ?></span>
			<i class="icon ion-mouse"></i>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_header
 */
add_shortcode( 'bauhaus_header', 'bauhaus_header_func' );
function bauhaus_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => wp_kses_post( 'Welcome to our <br> digital world.', 'bauhaus' ),
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'tb' => esc_html__( 'Get start now', 'bauhaus' ),
			'video' => esc_html__( 'http://www.youtube.com/watch?v=ANwf8AE3_d0', 'bauhaus' ),
			'tb_u' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
			'images' => '',
			'textb' => esc_html__( 'Watch video', 'bauhaus' ),
			'scroll_text' => esc_html__( 'scroll down' ),

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<?php if ( $type == 'video' ) { ?>

		<main <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
			class="masthead-video masked <?php echo esc_attr( $css_class ); ?>">
			<video class="video" autoplay="" loop="" muted="" poster="<?php echo esc_url( $poster ); ?>">
				<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/video.mp4" type="video/mp4">
				<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/video.webm" type="video/webm">
			</video>
			<div class="opener rel-1">
				<div class="container">
					<div class="row">
						<div class="lead col-lg-6">
							<h1 class="wow fadeInDown"><?php echo wp_kses_post( $title ); ?></h1>

							<p class="lead-text"><?php echo esc_html( $desc ); ?></p>

							<div class="lead-controls">
								<a href="<?php echo esc_url( $url ); ?>" class="btn-lead btn"
								   data-toggle="modal"><?php echo esc_html( $tb ); ?></a>
								<a href="<?php echo esc_url( $video ); ?>" class="text-white play play-home js-play">
									<i class="fa fa-play-circle"></i>
									<?php echo esc_html( $textb ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php


	} else {
		?>


		<?php
		global $bauhaus_class;
		$img_arr = wp_get_attachment_image_src( $images, 'full' );
		if ( !isset( $img_arr[0]{2} ) ) {
			$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
		}
		?>

		<main class="main main-full main-startup jarallax" data-jarallax='{"speed": 0.6}'
		      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
			<div class="container">
				<div class="opener">
					<div class="text-center">
						<h1><?php echo wp_kses_post( $title ); ?></h1>
						<div class="lead-hr wow fadeInLeft"></div>
						<p class="lead wow fadeInUp" data-wow-delay="0.3s"><?php echo esc_html( $desc ); ?></p>
						<a href="<?php echo esc_url( $video ); ?>"
						   class="icon-home-video v2 js-video-play wow fadeInRight" data-wow-delay="0.6s"><i
								class="ion-ios-play"></i></a>
					</div>
				</div>
			</div>
			<div class="mouse-helper">
				<span><?php echo esc_html( $scroll_text ); ?></span>
				<i class="icon ion-mouse"></i>
			</div>
		</main>


	<?php } ?>
	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_header
 */
add_shortcode( 'bauhaus_header_image', 'bauhaus_header_image_func' );
function bauhaus_header_image_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'Make Your Product Alive', 'bauhaus' ),
			'desc' => wp_kses_post( 'We receive result combining marketing, a creative and industry experience.' ),
			'tb' => esc_html__( 'Get start now', 'bauhaus' ),
			'video' => esc_html__( 'http://www.youtube.com/watch?v=ANwf8AE3_d0', 'bauhaus' ),
			'tb_u' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
			'images' => '',
			'textb' => esc_html__( 'Watch video', 'bauhaus' ),
			'scroll_text' => esc_html__( 'scroll down' ),

		), $atts
	);

	$contents = wpb_js_remove_wpautop( $content, true );

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<?php if ( $type == 'video' ) { ?>

		<main <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
			class="masthead-video masked <?php echo esc_attr( $css_class ); ?>">
			<video class="video" autoplay="" loop="" muted="" poster="<?php echo esc_url( $poster ); ?>">
				<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/video.mp4" type="video/mp4">
				<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/video.webm" type="video/webm">
			</video>
			<div class="opener rel-1">
				<div class="container">
					<div class="row">
						<div class="lead col-lg-6">
							<h1 class="wow fadeInDown"><?php echo wp_kses_post( $title ); ?></h1>

							<p class="lead-text"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>

							<div class="lead-controls">
								<a href="<?php echo esc_url( $url ); ?>" class="btn-lead btn"
								   data-toggle="modal"><?php echo esc_html( $tb ); ?></a>
								<a href="<?php echo esc_url( $video ); ?>" class="text-white play play-home js-play">
									<i class="fa fa-play-circle"></i>
									<?php echo esc_html( $textb ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php


	} else {
		?>


		<?php
		global $bauhaus_class;
		$img_arr = wp_get_attachment_image_src( $images, 'full' );
		if ( !isset( $img_arr[0]{2} ) ) {
			$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
		}
		?>

		<main class="main main-full main-agency jarallax" data-jarallax='{"speed": 0.6}'
		      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
			<div class="container">
				<div class="opener">
					<div class="row">
						<div class="col-md-6 text-left-md">
							<h1><?php echo wp_kses_post( $title ); ?></h1>
							<div class="lead-hr wow fadeInLeft"></div>
							<p class="lead wow fadeInUp"
							   data-wow-delay="0.3s"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
						</div>
						<div class="col-md-6 text-right-md"><a href="<?php echo esc_url( $video ); ?>"
						                                       class="icon-home-video js-video-play wow fadeInRight"
						                                       data-wow-delay="0.6s"><i class="ion-ios-play"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="mouse-helper">
				<span><?php echo esc_html( $scroll_text ); ?></span>
				<i class="icon ion-mouse"></i>
			</div>
		</main>


	<?php } ?>
	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_contact_header
 */
add_shortcode( 'bauhaus_contact_header', 'bauhaus_contact_header_func' );
function bauhaus_contact_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => "Let's contact",
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
			'images' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>

	<?php
	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
	}
	?>
	<main class="main main-inner main-contacts jarallax <?php echo esc_attr( $css_class ); ?>"
	      data-jarallax='{"speed": 0.6}'
	      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
		<div class="container">
			<div class="opener">
				<h1><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lead"><?php echo esc_html( $desc ); ?></p>
			</div>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_shortcode_header
 */
add_shortcode( 'bauhaus_shortcode_header', 'bauhaus_shortcode_header_func' );
function bauhaus_shortcode_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'Shortcodes', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>

	<main class="main main-inner jarallax <?php echo esc_attr( $css_class ); ?>" data-jarallax='{"speed": 0.6}'>
		<div class="container">
			<div class="opener"><h1><?php echo wp_kses_post( $title ); ?></h1></div>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_comming_header
 */
add_shortcode( 'bauhaus_comming_header', 'bauhaus_comming_header_func' );
function bauhaus_comming_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => "Comming Soon...",
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
			'images' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<?php
	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
	}
	?>
	<main class="main main-inner  main-comming-soon <?php echo esc_attr( $css_class ); ?>"

	      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
		<div class="container">
			<div class="opener">
				<h1><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lead"><?php echo esc_html( $desc ); ?></p>
			</div>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_about_header
 */
add_shortcode( 'bauhaus_about_header', 'bauhaus_about_header_func' );
function bauhaus_about_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => "Let’s get closer.",
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'css' => '',
			'type' => '',
			'section_id' => '',
			'images' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

	<?php
	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
	}
	?>
	<main class="main main-inner main-about jarallax <?php echo esc_attr( $css_class ); ?>"
	      data-jarallax='{"speed": 0.6}'
	      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
		<div class="container">
			<div class="opener">
				<h1><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lead"><?php echo esc_html( $desc ); ?></p>
			</div>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_404_header
 */
add_shortcode( 'bauhaus_404_header', 'bauhaus_404_header_func' );
function bauhaus_404_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => "Oops... You got lost.",
			'desc' => esc_html__( 'We receive result combining marketing, a creative and industry experience.', 'bauhaus' ),
			'css' => '',
			'link_text' => esc_html__( 'back home', 'bauhaus' ),
			'link_url' => esc_html__( '/', 'bauhaus' ),
			'type' => '',
			'section_id' => '',
			'images' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<?php
	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/masthead.jpg';
	}
	?>
	<main class="main main-inner main-404 jarallax <?php echo esc_attr( $css_class ); ?>" data-jarallax='{"speed": 0.6}'
	      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
		<div class="container">
			<div class="opener">
				<h1><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lead"><?php echo esc_html( $desc ); ?></p>
				<a href="<?php echo esc_html( $link_url ); ?>" class="btn"><?php echo esc_html( $link_text ); ?></a>
			</div>
		</div>
	</main>

	<?php
	return ob_get_clean();
}


/**
 * Partners
 */
add_shortcode( 'bauhaus_partners', 'bauhaus_partners_func' );
function bauhaus_partners_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'images' => '',
			'section_id' => '',
			'css' => '',

		), $atts
	);
	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $images );

	?>
	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="partners section-sm <?php echo esc_attr( $css_class ); ?> ">
		<div class="container">
			<div class="js-partners-carousel">


				<?php
				foreach ( $arr_img as $item ) { ?>

					<div class="partner">

						<?php

						global $bauhaus_class;
						$img_arr = wp_get_attachment_image_src( $item, 'full' );
						$img = $img_arr[0];

						?>

						<img alt="" class="img-responsive center-block" src="<?php echo esc_url( $img ); ?>">
					</div>
				<?php }
				?>

			</div>
		</div>

	</div>
	<?php
	return ob_get_clean();
}


/*
 *  banner
 */

add_shortcode( 'bauhaus_banner', 'bauhaus_banner_func' );
function bauhaus_banner_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Offer your project to Virgo team.', 'bauhaus' ),
			'tb' => esc_html__( 'Let\'s talk', 'bauhaus' ),
			't_url' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="promo bg-primary section-sm 	<?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2 class="promo-title text-white"><?php echo esc_html( $title ); ?></h2>
			<a <?php if ( $t_url{0} == "#" ) { ?> href="<?php echo esc_html( $t_url ); ?>" data-toggle="modal" <?php } else { ?>
				href="<?php echo esc_html( $t_url ); ?>" target="_blank" <?php } ?>
				class="btn btn-violet wow swing"><?php echo esc_html( $tb ); ?></a>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  banner white
 */

add_shortcode( 'bauhaus_banner_white', 'bauhaus_banner_white_func' );
function bauhaus_banner_white_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Offer your project to Virgo team.', 'bauhaus' ),
			'tb' => esc_html__( 'Let\'s talk', 'bauhaus' ),
			't_url' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="promo text-dark section-sm 	<?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2 class="promo-title text-gray"><?php echo esc_html( $title ); ?></h2>
			<a <?php if ( $t_url{0} == "#" ) { ?> href="<?php echo esc_html( $t_url ); ?>" data-toggle="modal" <?php } else { ?>
				href="<?php echo esc_html( $t_url ); ?>" target="_blank" <?php } ?>
				class="btn btn-white wow swing"><?php echo esc_html( $tb ); ?></a>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  Services
 */


add_shortcode( 'bauhaus_services', 'bauhaus_services_func' );
function bauhaus_services_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'd' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'bauhaus' ),
			'white' => '',
			'opacity' => '',
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'Functional', 'bauhaus' ),
			'ds' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae provident enim cum quidem aut corporis', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="services 	<?php echo esc_attr( $css_class ); ?> section">
		<div class="container">
			<div class="row">
				<div class="text-center col-md-8 col-md-offset-2
         		<?php echo esc_attr( $class2 ); ?> <?php echo esc_attr( $class ); ?>">
					<h2 class="section-title <?php echo esc_attr( $class2 ); ?>  "><?php echo esc_html( $t ); ?></h2>
					<p class="lead-text <?php echo esc_attr( $op ); ?> "><?php echo esc_html( $d ); ?></p>
				</div>
			</div>
			<div class="section-body">
				<div class="row row-columns">
					<?php
					$items_v = vc_param_group_parse_atts( $atts['items'] );
					if ( $items_v ) {
						foreach ( $items_v as $item ) { ?>

							<div class="column col-md-4">
								<i class="text-primary icon <?php echo( ( $item['icon'] ) ); ?>"></i>
								<h4><?php if ( isset( $item['ts'] ) ) {
										echo esc_html( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>

							</div>
						<?php }
					}
					?>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  bauhaus_projects
 */


add_shortcode( 'bauhaus_projects', 'bauhaus_projects_func' );
function bauhaus_projects_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Project Name', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'CATEGORY', 'bauhaus' ),
			'ds' => esc_html__( 'Branding Digital', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class=" project-details-info <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $t ); ?></h2>
				</header>
			</div>
			<div class="portfolio-meta">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-sm-4 col-meta">
							<i class="icon <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h5><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h5>
                            <span><?php if ( isset( $item['ds'] ) ) {
		                            echo wp_kses_post( $item['ds'] );
	                            } ?></span>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/**
 * Product
 */
add_shortcode( 'bauhaus_product', 'bauhaus_product_func' );
function bauhaus_product_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'images' => '',
			'section_id' => '',
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	global $bauhaus_class;

	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	$img = $bauhaus_class->bauhaus_trim_img_by_url( $img_arr[0], 1170, 260 );
	if ( !isset( $img{2} ) ) {
		$img = get_template_directory_uri() . '/img/product.png';
	}
	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="product bgc-light <?php echo esc_attr( $css_class ); ?>  text-center section-sm">
		<div class="container">
			<div class="row">
				<div class="text-center wow animatePhone" data-wow-duration="2s">
					<img alt="" class="img-responsive"
					     src="<?php echo esc_url( $img ); ?>"></div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  About
 */


add_shortcode( 'bauhaus_about', 'bauhaus_about_func' );
function bauhaus_about_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title1' => esc_html__( 'We create own history.', 'bauhaus' ),
			'images' => '',
			'section_id' => '',
			'css' => '',
		), $atts
	);

	$contents = wpb_js_remove_wpautop( $content, true );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	extract( $atts );

	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?>  bg-light   section">
		<div class="container">
			<div class="row">
				<div class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title-2"><?php echo esc_html( $title1 ); ?></h2>
					<div class="about-entry text-center">
						<?php echo wp_kses_post( $contents ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  About
 */


add_shortcode( 'bauhaus_about_sturtup', 'bauhaus_about_sturtup_func' );
function bauhaus_about_sturtup_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title1' => esc_html__( 'We create own history.', 'bauhaus' ),
			'images' => '',
			'section_id' => '',
			'css' => '',
		), $atts
	);

	$contents = wpb_js_remove_wpautop( $content, true );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	extract( $atts );

	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?>  section">
		<div class="container">
			<div class="row">
				<div class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title-2"><?php echo esc_html( $title1 ); ?></h2>
					<div class="about-entry text-center">
						<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  About
 */


add_shortcode( 'bauhaus_about_business', 'bauhaus_about_business_func' );
function bauhaus_about_business_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'image' => '',
			'title' => wp_kses_post( 'Investment is a key <br /> to long-term wealth' ),
			'desc' => wp_kses_post( '– Hector Bellerin <br /> CEO of Virgo', 'bauhaus' ),
			'main_title' => wp_kses_post( 'We are Virgo <br> and we solve business problems.' ),
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	extract( $atts );

	$img = wp_get_attachment_image_src( $image, 'full' );

	?>


	<!-- About -->


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="about clearfix <?php echo esc_attr( $css_class ); ?>">
		<div class="bg-about bg-left-fluid col-md-4" <?php if ( isset( $img[0]{0} ) ) { ?> style="background: url(<?php echo esc_url( $img[0] ); ?>) 50% 0 no-repeat; background-size: cover;" <?php } ?>>
			<div class="about-cite">
				<div class="about-cite-title">
					<?php echo wp_kses_post( $title ); ?>
				</div>
				<i class="author-cite"><?php echo wp_kses_post( $desc ); ?></i>
			</div>
		</div>
		<div class="col-about col-md-6 col-md-offset-4">

			<h2 class="about-title">
				<?php echo wp_kses_post( $main_title ); ?>
			</h2>
			<?php
			$arrr_str = explode( PHP_EOL, $content );
			if ( isset( $arrr_str[0] ) ) {
			foreach ( $arrr_str as $string ) {
			?><p><?php echo do_shortcode( $string ); ?>
				<?php
				}
				}
				?>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  Startup features
 */


add_shortcode( 'bauhaus_startup_features', 'bauhaus_startup_features_func' );
function bauhaus_startup_features_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Our core values.', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-light section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $t ); ?></h2>
					<p class="section-lead"><?php echo wp_kses_post( str_replace( '{br}', '<br/>', $content ) ); ?>
					</p>
				</header>

			</div>
			<div class="section-content-2">
				<div class="row-base row">
					<?php
					$items_v = vc_param_group_parse_atts( $atts['items'] );
					if ( $items_v ) {
						foreach ( $items_v as $item ) { ?>

							<div class="col-base col-feature col-sm-6 col-md-4" data-wow-delay="0.2s">
								<i class="text-primary icon <?php echo( ( $item['icon'] ) ); ?>"></i>
								<h4><?php if ( isset( $item['ts'] ) ) {
										echo esc_html( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>

							</div>
						<?php }
					}
					?>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  About features
 */


add_shortcode( 'bauhaus_about_features', 'bauhaus_about_features_func' );
function bauhaus_about_features_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php if ( isset( $t{0} ) ) { ?>
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $t ); ?></h2>
				</header>
			<?php } ?>
			<div class="row-base row">
				<div class="section-content-2">
					<div class="row-base row">
						<?php
						$items_v = vc_param_group_parse_atts( $atts['items'] );
						if ( $items_v ) {
							foreach ( $items_v as $item ) { ?>

								<div class="col-base col-feature col-sm-6 col-md-4">
									<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
									<h4><?php if ( isset( $item['ts'] ) ) {
											echo esc_html( $item['ts'] );
										} ?></h4>
									<p class="text-muted"><?php if ( isset( $item['ds'] ) ) {
											echo esc_html( $item['ds'] );
										} ?></p>

								</div>
							<?php }
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  Services features
 */


add_shortcode( 'bauhaus_services_features_new', 'bauhaus_services_features_new_func' );
function bauhaus_services_features_new_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php if ( isset( $t{0} ) ) { ?>
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $t ); ?></h2>
				</header>
			<?php } ?>
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-sm-6 col-md-4">
							<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h4><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
							<p class="text-muted"><?php if ( isset( $item['ds'] ) ) {
									echo esc_html( $item['ds'] );
								} ?></p>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  About features
 */


add_shortcode( 'bauhaus_about_features_dark', 'bauhaus_about_features_dark_func' );
function bauhaus_about_features_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php if ( isset( $t{0} ) ) { ?>
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title text-white text-center"><?php echo esc_html( $t ); ?></h2>
				</header>
			<?php } ?>
			<div class="row-base row">
				<div class="section-content-2">
					<div class="row-base row">
						<?php
						$items_v = vc_param_group_parse_atts( $atts['items'] );
						if ( $items_v ) {
							foreach ( $items_v as $item ) { ?>

								<div class="col-base col-feature col-sm-6 col-md-4">
									<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
									<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
											echo esc_html( $item['ts'] );
										} ?></h4>
									<p><?php if ( isset( $item['ds'] ) ) {
											echo esc_html( $item['ds'] );
										} ?></p>

								</div>
							<?php }
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  About features
 */


add_shortcode( 'bauhaus_agency_features_dark', 'bauhaus_agency_features_dark_func' );
function bauhaus_agency_features_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-sm-6 col-md-4">
							<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
							<p><?php if ( isset( $item['ds'] ) ) {
									echo esc_html( $item['ds'] );
								} ?></p>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  Business features
 */


add_shortcode( 'bauhaus_business_features_dark', 'bauhaus_business_features_dark_func' );
function bauhaus_business_features_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'class' => '',
			'icon' => '',
			'items' => '',
			'animation' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-sm-6 col-md-4 <?php echo esc_html( $animation ); ?> "
							<?php if ( isset( $item['anim_delay'] ) ) { ?> data-wow-delay="<?php echo esc_html( $item['anim_delay'] ); ?>s"<?php } ?>>
							<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
							<p><?php if ( isset( $item['ds'] ) ) {
									echo esc_html( $item['ds'] );
								} ?></p>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  Services features
 */


add_shortcode( 'bauhaus_services_features', 'bauhaus_services_features_func' );
function bauhaus_services_features_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'title' => esc_html__( 'Services', 'bauhaus' ),
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features section <?php echo esc_attr( $css_class ); ?>">

		<div class="container">
			<?php if ( isset( $atts['title']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title text-center"><?php echo esc_html( $atts['title'] ); ?></h2>
					</header>
				</div>
			<?php } ?>
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>
						<div class="col-base col-feature col-sm-6">

							<div class="service-inner" style="background: url('<?php
							if ( isset( $item['image'] ) ) {
								$img = wp_get_attachment_image_src( $item['image'], 'full' );
								if ( isset( $img[0]{1} ) ) {
									echo esc_url( $img[0] );
								}
							}
							?>');">
								<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
								<h4><?php if ( isset( $item['ts'] ) ) {
										echo esc_html( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>
							</div>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  Mission 2
 */


add_shortcode( 'bauhaus_mission_2', 'bauhaus_mission_2_func' );
function bauhaus_mission_2_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Our services.', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'animation' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'section_id' => '',
			'css' => '',
			'images' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="mission-2 section bg-dark <?php echo esc_attr( $css_class ); ?>">
		<div class="bg-mission-2 bg-left-fluid col-md-6 hidden-sm hidden-xs" <?php if ( isset( $atts['images'][0] ) ) {
			$img = wp_get_attachment_image_src( $atts['images'], 'full' ); ?>
			style="background: url(<?php echo esc_url( $img[0] ); ?>) 50% 0 no-repeat; background-size: cover;"
			<?php
		} ?>></div>
		<div class="right-fluid-content col-md-6 col-lg-4 col-md-offset-6">
			<header class="text-center">
				<h2 class="text-left text-white section-title-2"><?php echo esc_html( $t ); ?></h2>
			</header>
			<div class="row-service row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-service col-feature col-sm-6 col-md-6 <?php echo esc_html( $animation ); ?> "
							<?php if ( isset( $item['anim_delay'] ) ) { ?> data-wow-delay="<?php echo esc_html( $item['anim_delay'] ); ?>s"<?php } ?>>
							<i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/**
 *  Video section
 */

add_shortcode( 'bauhaus_video_section', 'bauhaus_video_section_func' );
function bauhaus_video_section_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(

			'desc' => esc_html__( 'We work on complex challenges', 'bauhaus' ),
			'video' => '',
			'title1' => esc_html__( 'Available anytime', 'bauhaus' ),
			'desc1' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi reprehenderit explicabo tenetur eos! Excepturi adipisci consequatur quisquam error, velit, pariatur', 'bauhaus' ),
			'section_id' => '',
			'images' => '',
			'css' => '',

		), $atts
	);

	extract( $atts );
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="video-section <?php echo esc_attr( $css_class ); ?> "
		style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat;">
		<div class="container">
			<header class="text-center col-md-8 col-md-offset-2">
				<h2 class="h1"><?php echo esc_html( $title1 ); ?></h2>
				<a href="<?php echo esc_url( $video ) ?>" class="icon-video-section js-video-play wow fadeInUp">
					<i class="ion-ios-play"></i>
				</a>
			</header>
			<div class="row-base row">
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/**
 * Features 1
 */

add_shortcode( 'bauhaus_features_1', 'bauhaus_features_1_func' );
function bauhaus_features_1_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => 'Features',
			'images' => '',
			'class' => '',
			'title' => esc_html__( 'Accomplish more,<br /> every day.', 'bauhaus' ),
			'description' => esc_html__( '', 'bauhaus' ),
			't' => esc_html__( 'Ionicons', 'bauhaus' ),
			'd' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi', 'bauhaus' ),
			'number' => esc_html__( '4K', 'bauhaus' ),
			'items' => '',
			'css' => '',
		), $atts
	);

	extract( $atts );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	global $bauhaus_class;


	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	// $img     = $bauhaus_class->bauhaus_trim_img_by_url( $img_arr[0], 360, 738 );


	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features <?php echo esc_attr( $css_class ); ?>   bgc-light section">
		<div class="container">
			<div class="row-columns row">
				<div class="text-center column  col-md-6">
					<img alt="" class="feature-img" src="<?php echo esc_url( $img ); ?>">
				</div>
				<div class="col-feature col-feature-content column  col-md-6">
					<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
					<p class="lead-text"><?php echo esc_html( $description ); ?></p>
					<div class="section-body">

						<?php foreach ( $tems_v as $item ) { ?>
							<div class="column">
								<div class="media-left">
									<div class="feature-number text-primary">
										<?php echo esc_attr( $item['number'] ); ?>
									</div>
								</div>
								<div class="media-right">
									<h4><?php if ( isset( $item['t'] ) ) {
											echo esc_html( $item['t'] );
										} ?></h4>
									<p><?php if ( isset( $item['d'] ) ) {
											echo esc_html( $item['d'] );
										} ?></p>
								</div>
							</div>
						<?php } ?>


					</div>
				</div>
			</div>
		</div>

	</section>

	<?php
	return ob_get_clean();
}


/**
 * Features 2
 */

add_shortcode( 'bauhaus_features_2', 'bauhaus_features_2_func' );
function bauhaus_features_2_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'images' => '',
			'class' => '',
			'title' => esc_html__( 'Key Features', 'bauhaus' ),
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas harum, hic officiis commodi reprehenderit explicabo tenetur eos! Excepturi adipisci consequatur quisquam error, velit, pariatur', 'bauhaus' ),
			't' => esc_html__( 'Bootstrap 3x', 'bauhaus' ),
			'd' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'bauhaus' ),
			'icon' => '',
			'items' => '',
			'css' => '',
		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	if ( $images != '' ) {
		$img_arr = wp_get_attachment_image_src( $images, 'full' );


	}

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features 	<?php echo esc_attr( $css_class ); ?>  section">
		<div class="container">
			<div class="row-columns row">
				<div class="text-center column col-md-5 col-md-push-7">

					<?php if ( isset( $img_arr[0] ) ) {
						?>
						<img alt="" class="feature-img" src="<?php echo esc_url( $img_arr[0] ); ?>">
						<?php

					}
					?>

				</div>
				<div class="col-feature-content column col-md-7 col-md-pull-5">
					<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
					<!-- <div class="row">
						<div class="col-md-10">
							<p><?php echo esc_html( $description ); ?></p>

						</div>
					</div> -->
					<div class="section-body">
						<div class="row row-columns">
							<?php
							$tems = vc_param_group_parse_atts( $atts['items'] );
							if ( $tems ) {
								foreach ( $tems as $item ) { ?>
									<div class="column col-md-6">
										<div class="media-left">
											<i class="text-primary icon <?php if ( isset( $item['icon'] ) )
												echo esc_attr( ( $item['icon'] ) ) ?>"></i>
										</div>
										<div class="media-right">
											<h4><?php if ( isset( $item['t'] ) ) {
													echo esc_html( $item['t'] );
												} ?></h4>
											<p><?php if ( isset( $item['d'] ) ) {
													echo esc_html( $item['d'] );
												} ?></p>
										</div>
									</div>
								<?php }
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/**
 * Features 3
 */

add_shortcode( 'bauhaus_features_3', 'bauhaus_features_3_func' );
function bauhaus_features_3_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'images' => '',
			'class' => '',
			'title' => esc_html__( 'Learn more about us.', 'bauhaus' ),
			'description' => esc_html__( 'In efforts to expand our horizons, we welcome every investment-minded individual to join us in the Condotel Investment Opportunity.
You can also freely advertise with us, exchange links with us, or be a member of our webring when you register. When you get to be a part of our webring, you get free exposure/traffic as visitors click on the other member sites of the webring. You can advertise your properties for sale or lease with us.', 'bauhaus' ),
			'items' => '',
			'css' => '',
		), $atts
	);

	extract( $atts );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	global $bauhaus_class;


	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?> section clearfix">
		<div class="left-fluid-content col-sm-12 col-md-6 col-lg-4 col-lg-offset-2">
			<header class="text-center">
				<h2 class="text-left section-title-3"><?php echo esc_html( $title ); ?></h2>
			</header>
			<div class="about-entry">
				<?php echo esc_html( $description ); ?>
			</div>
		</div>
		<div class="bg-aside-1 bg-right-fluid col-md-6 hidden-sm hidden-xs" <?php if ( isset( $atts['images'][0] ) ) {
			$img = wp_get_attachment_image_src( $atts['images'], 'full' ); ?>
			style="background: url(<?php echo esc_url( $img[0] ); ?>) 50% 0 no-repeat; background-size: cover;"
			<?php
		} ?>></div>
	</section>

	<?php
	return ob_get_clean();
}


/**
 * Mission 1
 */

add_shortcode( 'bauhaus_mission_1', 'bauhaus_mission_1_func' );
function bauhaus_mission_1_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'images' => '',
			'class' => '',
			'title' => esc_html__( 'Our mission.', 'bauhaus' ),
			'items' => '',
			'css' => '',
		), $atts
	);

	extract( $atts );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	global $bauhaus_class;

	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?> mission-1 section">
		<div class="left-fluid-content col-sm-12 col-md-6 col-lg-4 col-lg-offset-2">
			<header class="text-center">
				<h2 class="text-left section-title-3"><?php echo esc_html( $title ); ?></h2>
			</header>
			<div class="about-entry">
				<?php
				$arrr_str = explode( PHP_EOL, $content );
				if ( isset( $arrr_str[0] ) ) {
				foreach ( $arrr_str as $string ) {
				?><p><?php echo do_shortcode( $string ); ?>
					<?php
					}
					}
					?>
			</div>
		</div>
		<div class="bg-mission-1 bg-right-fluid col-md-6 hidden-sm hidden-xs" <?php if ( isset( $atts['images'][0] ) ) {
			$img = wp_get_attachment_image_src( $atts['images'], 'full' ); ?>
			style="background: url(<?php echo esc_url( $img[0] ); ?>) 50% 0 no-repeat; background-size: cover;"
			<?php
		} ?>>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 *  Resume
 */

add_shortcode( 'bauhaus_resume', 'bauhaus_resume_func' );
function bauhaus_resume_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'View my resume', 'bauhaus' ),
			'desc' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'bauhaus' ),
			'tb' => esc_html__( 'Download CV', 'bauhaus' ),
			't_url' => esc_html__( '#', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>
	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="resume text-center  bgc-light section	<?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<div class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-titler"><?php echo esc_html( $title ); ?></h2>
					<p class="lead-text">
						<?php echo esc_html( $desc ); ?>
					</p>
				</div>
			</div>
			<div class="section-buttons section-body-sm">
				<a href="<?php echo esc_html( $t_url ); ?>" class="btn"><?php echo esc_html( $tb ); ?></a>
			</div>
		</div>
		</div>
	</section>


	<?php
	return ob_get_clean();

}


/*

/*
 *  Reviews
 */


add_shortcode( 'bauhaus_review_carousel', 'bauhaus_review_carousel_func' );
function bauhaus_review_carousel_func( $atts, $content = null ) {
	ob_start();
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'items' => '',
			'images' => '',
			'desc' => esc_html__( 'Do you want to be even more successful? 
                        Learn to love learning and growth. The more effort you put into improving your skills, 
                        the bigger the payoff you will get. Realize that things will be hard at first, but rewards worth it.', 'bauhaus' ),
			'icon' => esc_html__( 'fa-quote-right', 'bauhaus' ),
			'title' => esc_html__( 'Clients about us..', 'bauhaus' ),
			'name' => esc_html__( 'Calum Chambers ', 'bauhaus' ),
			'position' => esc_html__( 'Adobe sales manager ', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	$contents = wpb_js_remove_wpautop( $content, true );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?> clients bg-light section">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php esc_html_e( $title ) ?></h2>
					<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="container-fluid">
				<div class="col-md-6 col-md-offset-3">
					<div class="clients-wrapper">
						<div class="client-carousel js-client-carousel">
							<?php
							foreach ( $tems_v as $item ) { ?>
								<div class="client">
									<span class="quote">"</span>
									<p class="client-text">
										<?php if ( isset( $item['desc'] ) ) {
											echo esc_html( $item['desc'] );
										} ?></p>
                                    <span class="h5 client-name">
	                      		<?php if ( isset( $item['name'] ) ) {
			                        echo esc_html( $item['name'] );
		                        } ?> —
							</span>
									<i><?php if ( isset( $item['position'] ) ) {
											echo esc_html( $item['position'] );
										} ?></i>
								</div>
							<?php }
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 *  Reviews
 */


add_shortcode( 'bauhaus_team', 'bauhaus_team_func' );
function bauhaus_team_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'items' => '',
			'images' => '',
			'desc' => esc_html__( 'CEO / Founder', 'bauhaus' ),
			'icon' => esc_html__( 'fa fa-facebook', 'bauhaus' ),
			'title' => esc_html__( 'Our magic team.', 'bauhaus' ),
			'name' => esc_html__( 'Jack Wilshere ', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	$contents = wpb_js_remove_wpautop( $content, true );


	?>

	<!-- Team -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="team section pb-0 <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php esc_html_e( $title ) ?></h2>
					<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="clearfix">
				<?php
				foreach ( $tems_v as $item ) { ?>
					<div class="col-team col-sm-6 col-lg-3">
						<figure class="team-profile">

							<?php

							global $bauhaus_class;
							$img_arr = wp_get_attachment_image_src( $item['images'], 'full' );


							if ( isset( $img_arr[0] ) ) {
								?>

								<img alt="" src="<?php echo esc_url( $img_arr[0] ); ?>">
								<?php

							}
							?>
							<figcaption class="team-caption">
								<div class="team-meta">
									<strong class="team-name"><?php if ( isset( $item['name'] ) ) {
											echo esc_html( $item['name'] );
										} ?></strong>
                                    <span class="team-spec"><?php if ( isset( $item['desc'] ) ) {
		                                    echo esc_html( $item['desc'] );
	                                    } ?></span>
								</div>

								<ul class="team-social social-list">
									<?php
									$itemin = vc_param_group_parse_atts( $item['itemin'] );
									foreach ( $itemin as $itemsoc ) {
										?>
										<li>
											<a href="<?php if ( isset( $itemsoc['url'] ) ) {
												echo esc_html( $itemsoc['url'] );
											} ?>" target="_blank" class="<?php if ( isset( $itemsoc['icon'] ) ) {
												echo esc_html( $itemsoc['icon'] );
											} ?>"></a>
										</li>
										<?php
									}
									?>
								</ul>
							</figcaption>
						</figure>
					</div>
				<?php }
				?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 * Prices
 */

add_shortcode( 'bauhaus_tariff_plan', 'bauhaus_tariff_plan_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_tariff_plan_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title1' => esc_html__( 'Choose your plan', 'bauhaus' ),
			'title' => esc_html__( 'Enhanced Security', 'bauhaus' ),
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'bauhaus' ),
			'css' => '',
			'class' => '',
			'items' => '',
			'separator' => '',


		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="prices jarallax <?php echo esc_attr( $css_class ); ?> masked section"
		data-jarallax='{"speed": 0.6}'>

		<div class="container rel-1">
			<!-- <div class="section-body"> -->
			<div class="row-price">
				<?php
				/*
				 * price tables
				 */


				$tems_v = vc_param_group_parse_atts( $atts['items'] );

				foreach ( $tems_v as $att ) {
					$att = shortcode_atts(
						array(

							'currency' => esc_html__( '', 'bauhaus' ),
							'h' => '',
							'price' => '',
							'period' => esc_html__( '', 'bauhaus' ),
							'tb' => esc_html__( 'Select plan', 'bauhaus' ),
							'tbh' => esc_html__( 'Get started', 'bauhaus' ),
							'pr_url' => esc_html__( '#request', 'bauhaus' ),
							'css' => '',
							'items' => '',
							'class' => '',
							'separator' => '',

						), $att
					);
					$css_class_n = '';
					$tems_text_list_ = vc_param_group_parse_atts( $att['items'] );
					extract( $att );
					if ( $att['class'] == 'ADVANCED' ) {
						$css_class_n .= ' ' . 'leading wow flipInY ';
					} elseif ( $att['class'] == 'fadeInLeft' ) {
						$css_class_n .= ' ' . '';
					} elseif ( $att['class'] == 'fadeInRight' ) {
						$css_class_n .= ' ' . '';
					}


					$css_class_f = '';
					$tems_text_list_ = vc_param_group_parse_atts( $att['items'] );
					extract( $att );
					if ( $att['class'] == 'ADVANCED' ) {
						$css_class_f .= ' ' . 'btn-b-gray';
					} elseif ( $att['class'] == 'fadeInLeft' ) {
						$css_class_f .= ' ' . 'btn-b-gray';
					} elseif ( $att['class'] == 'fadeInRight' ) {
						$css_class_f .= ' ' . 'btn-b-gray';
					}


					?>
					<div class="<?php echo esc_attr( $css_class_n ); ?> col-price ">
						<div class="price-box">
							<div class="price-body">
								<div class="price-inner">
									<header class="price-header">
										<h4 class="price-title"><?php echo esc_html( $h ); ?></h4>


										<div class="price">
											<strong
												class="price-currency"><?php echo esc_html( $currency ); ?></strong>
											<strong class="price-amount"><?php echo esc_html( $price ); ?></strong>
                                            <span
	                                            class="price-delimiter"><?php if ( isset( $separator ) ) {
		                                            echo esc_html( $separator );
	                                            } ?></span><strong
												class="price-period"><?php echo esc_html( $period ); ?></strong>
										</div>
									</header>
									<div class="price-features">
										<?php if ( $tems_text_list_ ): ?>
											<ul>
												<?php
												foreach ( $tems_text_list_ as $item ) {
													?>
													<li><?php if ( isset( $item['title'] ) ) {
															echo wp_kses_post( $item['title'] );
														} ?></li> <?php
												}
												?>


											</ul>
										<?php endif; ?>
									</div>
									<div class="price-footer">
										<a href="<?php echo esc_attr( $pr_url ); ?>"
										   class="btn <?php echo esc_attr( $css_class_f ); ?> btn-block"
										   data-toggle="modal"><?php echo esc_html( $tbh ); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>


			</div>
			<!-- </div> -->
		</div>

	</section>
	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio
 */


add_shortcode( 'bauhaus_portfolio_new_update', 'bauhaus_portfolio_new_update_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_new_update_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'menu_visibility' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="<?php if ( $atts['menu_visibility'] == '1' ) { ?> porftolio  section pb-0 <?php } elseif ( $atts['menu_visibility'] == '2' ) { ?> porftolio <?php } ?><?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>
					</header>
				</div>
			<?php } ?>


			<?php

			if ( $atts['menu_visibility'] == '1' ) {
				?>
				<ul class=" filter <?php if ( isset( $atts['filter'] ) ) {
					echo esc_attr( $atts['filter'] );
				} ?> ">
					<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
					<?php
					if ( isset ( $items  [0] ) ) {
						foreach ( $items as $v1 ) {


							?>
							<li><a href="#"
							       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
							</li>
							<?php
						}
					}
					?>

				</ul>
				<?php
			} elseif ( $atts['menu_visibility'] == '2' ) {
				echo "";
			}

			?>
		</div>
		<?php
		$container = ' ';
		$row = ' ';
		$col = $atts['col'];
		if ( $col == 'col-3' ) {
			$col = 'col-3 isotope-padding';
			$container = ' ';
			$row = ' ';
		} elseif ( $col == 'col-2 ' ) {
			$col = 'col-2  isotope-padding ';
			$container = 'container';
			$row = 'row';
		} elseif ( $col == 'padding ' ) {
			$col = 'isotope-padding';
			$container = ' ';
			$row = ' ';
		}

		?>
		<div class="isotope js-gallery">
			<?php

			if ( isset ( $items[1] ) ) {
				foreach ( $items as $t ) {


					$image_items = vc_param_group_parse_atts( $t['image_items'] );
					$slug = $t['slug'];


					if ( $image_items ) {

						foreach ( $image_items as $img ) {

							if ( isset( $img['img_src']{1} ) ) {

								$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

								?>
								<div class="isotope-item <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
									echo esc_attr( $img['size'] );
								} ?>  ">
									<a href="<?php if ( isset( $img_arr[0] ) ) {
										;
									}
									echo esc_url( $img_arr[0] ); ?>" title="<?php if ( isset( $t ['title'] ) ) {
										;
									}
									echo esc_html( $t ['title'] ); ?>">
										<figure class="showcase-item">

											<div class="showcase-item-thumbnail"><img alt=""
											                                          src="<?php if ( isset( $img_arr[0] ) ) {
												                                          echo esc_url( $img_arr[0] );
											                                          }
											                                          ?>">
											</div>


											<figcaption class="showcase-item-hover">
												<div class="showcase-item-info">
													<div
														class="showcase-item-category"><?php if ( isset( $t ['cat'] ) ) {
															;
														}
														echo esc_html( $t ['cat'] ); ?></div>
													<div
														class="showcase-item-title"><?php if ( isset( $t ['title'] ) ) {
															;
														}
														echo esc_html( $t ['title'] ); ?></div>
												</div>
											</figcaption>
										</figure>
									</a>
								</div>

								<?php
							}
						}

					}
				}
			}
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio_two
 */


add_shortcode( 'bauhaus_portfolio_two', 'bauhaus_portfolio_two_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_two_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="porftolio <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>

						<div class="spacer spacer-primary">
							<div class="line">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
						</div>
					</header>
				</div>
			<?php } ?>


			<ul class=" filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php
				if ( isset ( $items  [0] ) ) {
					foreach ( $items as $v1 ) {


						?>
						<li><a href="#"
						       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
						</li>
						<?php
					}
				}
				?>

			</ul>
			<?php
			$container = ' ';
			$row = ' ';
			$col = $atts['col'];
			if ( $col == 'col-3' ) {
				$col = 'col-3 isotope-padding';
				$container = ' ';
				$row = ' ';
			} elseif ( $col == 'col-2 ' ) {
				$col = 'col-2  isotope-padding ';
				$container = 'container';
				$row = 'row';
			} elseif ( $col == 'padding ' ) {
				$col = 'isotope-padding';
				$container = ' ';
				$row = ' ';
			}

			?>
			<div class="isotope js-gallery isotope-3 <?php echo esc_attr( $col ); ?> ">

				<?php

				if ( isset ( $items[1] ) ) {
					foreach ( $items as $t ) {


						$image_items = vc_param_group_parse_atts( $t['image_items'] );
						$slug = $t['slug'];


						if ( $image_items ) {

							foreach ( $image_items as $img ) {

								if ( isset( $img['img_src']{1} ) ) {

									$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

									?>
									<div class="isotope-item <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
										echo esc_attr( $img['size'] );
									} ?>  ">
										<a href="<?php if ( isset( $img_arr[0] ) ) {
											;
										}
										echo esc_url( $img_arr[0] ); ?>" title="<?php if ( isset( $t ['title'] ) ) {
											;
										}
										echo esc_html( $t ['title'] ); ?>">
											<figure class="showcase-item">

												<div class="showcase-item-thumbnail"><img alt=""
												                                          src="<?php if ( isset( $img_arr[0] ) ) {
													                                          echo esc_url( $img_arr[0] );
												                                          }
												                                          ?>">
												</div>


												<figcaption class="showcase-item-hover">
													<div class="showcase-item-info">
														<div
															class="showcase-item-category"><?php if ( isset( $t ['cat'] ) ) {
																;
															}
															echo esc_html( $t ['cat'] ); ?></div>
														<div
															class="showcase-item-title"><?php if ( isset( $t ['title'] ) ) {
																;
															}
															echo esc_html( $t ['title'] ); ?></div>
													</div>
												</figcaption>
											</figure>
										</a>
									</div>

									<?php
								}
							}

						}
					}
				}
				?>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio_three
 */


add_shortcode( 'bauhaus_portfolio_three', 'bauhaus_portfolio_three_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_three_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="porftolio pb-base <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>

						<div class="spacer spacer-primary">
							<div class="line">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
						</div>
					</header>
				</div>
			<?php } ?>


			<ul class=" filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php
				if ( isset ( $items  [0] ) ) {
					foreach ( $items as $v1 ) {


						?>
						<li><a href="#"
						       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
						</li>
						<?php
					}
				}
				?>

			</ul>
			<?php
			$container = ' ';
			$row = ' ';
			$col = $atts['col'];
			if ( $col == 'col-3' ) {
				$col = 'col-3 isotope-padding';
				$container = ' ';
				$row = ' ';
			} elseif ( $col == 'col-2 ' ) {
				$col = 'col-2  isotope-padding ';
				$container = 'container';
				$row = 'row';
			} elseif ( $col == 'padding ' ) {
				$col = 'isotope-padding';
				$container = ' ';
				$row = ' ';
			}

			?>
			<div class="isotope js-gallery isotope-space <?php echo esc_attr( $col ); ?> ">

				<?php

				if ( isset ( $items[1] ) ) {
					foreach ( $items as $t ) {


						$image_items = vc_param_group_parse_atts( $t['image_items'] );
						$slug = $t['slug'];


						if ( $image_items ) {

							foreach ( $image_items as $img ) {

								if ( isset( $img['img_src']{1} ) ) {

									$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

									?>
									<div class="isotope-item w50 <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
										echo esc_attr( $img['size'] );
									} ?>  ">
										<a href="<?php if ( isset( $img_arr[0] ) ) {
											;
										}
										echo esc_url( $img_arr[0] ); ?>" title="<?php if ( isset( $t ['title'] ) ) {
											;
										}
										echo esc_html( $t ['title'] ); ?>">
											<figure class="showcase-item">

												<div class="showcase-item-thumbnail"><img alt=""
												                                          src="<?php if ( isset( $img_arr[0] ) ) {
													                                          echo esc_url( $img_arr[0] );
												                                          }
												                                          ?>">
												</div>


												<figcaption class="showcase-item-hover hover-blue">
													<div class="showcase-item-info">
														<div
															class="showcase-item-category"><?php if ( isset( $t ['cat'] ) ) {
																;
															}
															echo esc_html( $t ['cat'] ); ?></div>
														<div
															class="showcase-item-title"><?php if ( isset( $t ['title'] ) ) {
																;
															}
															echo esc_html( $t ['title'] ); ?></div>
														<i class="ion-ios-plus-empty"></i>
													</div>
												</figcaption>
											</figure>
										</a>
									</div>

									<?php
								}
							}

						}
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


/*
 * bauhaus_portfolio_automat
 */

add_shortcode( 'bauhaus_portfolio_automat', 'bauhaus_portfolio_automat_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_portfolio_automat_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => '',
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1',
		'type_m' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>

		class="<?php echo esc_attr( $css_class ); ?> porftolio <?php if ( $type_m == 1 ) {
		} else {
			echo "section pb-0";
		} ?>">
		<?php if ( isset( $atts['heading']{1} ) ) { ?>
			<div class="container">
				<div class="row">
					<div class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( isset( $heading{1} ) ) {
								echo esc_html( $heading );
							} ?></h2>
						<p class="section-lead"><?php if ( isset( $description{1} ) ) {
								echo wp_kses_post( $description );
							} ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="container">
			<ul class="filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"> <?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php $terms = get_terms( 'portfolio_categories', array( 'hide_empty' => true, 'orderby' => 'id', ) );
				foreach ( $terms as $v ) {

					?>
					<li class="all "><a href="#"
					                    data-filter=".<?php echo esc_attr( $v->slug ); ?>"><?php echo esc_html( $v->name ); ?></a>
					</li>
					<?php

				}
				?>

			</ul>
		</div>
		<div class="isotope js-gallery <?php if ( $type_c == 1 ) {

		} else {
			echo "isotope-padding";
		} ?>">
			<?php

			$rentit_new_arr = array(
				'posts_per_page' => $posts,
				'order' => $order,
				'orderby' => $orderby,
				'post_status' => 'publish',
				'post_type' => 'portfolio',
			);


			if ( $portfolio_category != 'all' ) {
				$str = $portfolio_category;
				$arr = explode( ',', $str );
				$rentit_new_arr['tax_query'][] = array(
					'taxonomy' => 'portfolio_categories',
					'field' => 'slug',
					'terms' => $arr
				);
			}


			$rentit_custom_query = new WP_Query( $rentit_new_arr );
			if ( $rentit_custom_query->have_posts() ):
				while ( $rentit_custom_query->have_posts() ) {
					$rentit_custom_query->the_post();


					$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );


					?>
					<div class="<?php
					if ( !empty( $terms ) ):
						foreach ( $terms as $v ) {
							echo esc_html( $v->slug . " " );
						}
					endif; ?> isotope-item">
						<a <?php if ( $type_l == 1 ) { ?>
							class="link"
						<?php } ?>
							href="<?php if ( $type_l == 1 ) {
								echo esc_url( get_the_permalink() );
							} else {
								echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
							} ?>" title=" <?php echo the_title(); ?>">
							<figure class="showcase-item">
								<div class="showcase-item-thumbnail">
									<img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
								</div>
								<figcaption class="showcase-item-hover">
									<div class="showcase-item-info">
										<div class="showcase-item-category">
											<?php
											if ( !empty( $terms ) ):
												foreach ( $terms as $v ) {
													echo esc_html( $v->slug . " " );
												}
											endif; ?>
										</div>
										<div class="showcase-item-title">
											<?php the_title(); ?>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>

					<?php

				}
				wp_reset_postdata();


			endif;
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();

}


/*
 * bauhaus_portfolio_automat_three
 */

add_shortcode( 'bauhaus_portfolio_automat_three', 'bauhaus_portfolio_automat_three_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_portfolio_automat_three_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => '',
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>

		class="<?php echo esc_attr( $css_class ); ?> portfolio">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
						<h2 class="section-title"><?php if ( isset( $heading{1} ) ) {
								echo esc_html( $heading );
							} ?></h2>
						<p class="subtitle text-primary">
							<i><?php if ( $atts['slogan'] != '' ) {
									echo wp_kses_post( $atts['slogan'] );
								} ?></i>
						</p>
						<p class="desc"><?php if ( isset( $description{1} ) ) {
								echo wp_kses_post( $description );
							} ?></p>
					</div>
				</div>
			<?php } ?>
			<ul class="filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"> <?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php $terms = get_terms( 'portfolio_categories', array( 'hide_empty' => true, 'orderby' => 'id', ) );
				foreach ( $terms as $v ) {

					?>
					<li class="all "><a href="#"
					                    data-filter=".<?php echo esc_attr( $v->slug ); ?>"><?php echo esc_html( $v->name ); ?></a>
					</li>
					<?php

				}
				?>

			</ul>

			<div class="isotope js-gallery isotope-padding isotope-3">
				<?php

				$rentit_new_arr = array(
					'posts_per_page' => $posts,
					'order' => $order,
					'orderby' => $orderby,
					'post_status' => 'publish',
					'post_type' => 'portfolio',
				);


				if ( $portfolio_category != 'all' ) {
					$str = $portfolio_category;
					$arr = explode( ',', $str );
					$rentit_new_arr['tax_query'][] = array(
						'taxonomy' => 'portfolio_categories',
						'field' => 'slug',
						'terms' => $arr
					);
				}


				$rentit_custom_query = new WP_Query( $rentit_new_arr );
				if ( $rentit_custom_query->have_posts() ):
					while ( $rentit_custom_query->have_posts() ) {
						$rentit_custom_query->the_post();


						$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );


						?>
						<div class="<?php
						if ( !empty( $terms ) ):
							foreach ( $terms as $v ) {
								echo esc_html( $v->slug . " " );
							}
						endif; ?> isotope-item">
							<a <?php if ( $type_l == 1 ) { ?>
								class="link"
							<?php } ?>
								href="<?php if ( $type_l == 1 ) {
									echo esc_url( get_the_permalink() );
								} else {
									echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
								} ?>" title=" <?php echo the_title(); ?>">
								<figure class="showcase-item">
									<div class="showcase-item-thumbnail">
										<img alt=""
										     src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
									</div>
									<figcaption class="showcase-item-hover">
										<div class="showcase-item-info">
											<div class="showcase-item-category">
												<?php
												if ( !empty( $terms ) ):
													foreach ( $terms as $v ) {
														echo esc_html( $v->slug . " " );
													}
												endif; ?>
											</div>
											<div class="showcase-item-title">
												<?php the_title(); ?>
											</div>
										</div>
									</figcaption>
								</figure>
							</a>
						</div>

						<?php

					}
					wp_reset_postdata();


				endif;
				?>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();

}


/*
 * bauhaus_portfolio_automat_four
 */

add_shortcode( 'bauhaus_portfolio_automat_four', 'bauhaus_portfolio_automat_four_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_portfolio_automat_four_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => '',
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>

		class="<?php echo esc_attr( $css_class ); ?> portfolio">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
						<h2 class="section-title"><?php if ( isset( $heading{1} ) ) {
								echo esc_html( $heading );
							} ?></h2>
						<p class="subtitle text-primary">
							<i><?php if ( $atts['slogan'] != '' ) {
									echo wp_kses_post( $atts['slogan'] );
								} ?></i>
						</p>
						<p class="desc"><?php if ( isset( $description{1} ) ) {
								echo wp_kses_post( $description );
							} ?></p>
					</div>
				</div>
			<?php } ?>
			<ul class="filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"> <?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php $terms = get_terms( 'portfolio_categories', array( 'hide_empty' => true, 'orderby' => 'id', ) );
				foreach ( $terms as $v ) {

					?>
					<li class="all "><a href="#"
					                    data-filter=".<?php echo esc_attr( $v->slug ); ?>"><?php echo esc_html( $v->name ); ?></a>
					</li>
					<?php

				}
				?>

			</ul>

			<div class="isotope js-gallery isotope-space">
				<?php

				$rentit_new_arr = array(
					'posts_per_page' => $posts,
					'order' => $order,
					'orderby' => $orderby,
					'post_status' => 'publish',
					'post_type' => 'portfolio',
				);


				if ( $portfolio_category != 'all' ) {
					$str = $portfolio_category;
					$arr = explode( ',', $str );
					$rentit_new_arr['tax_query'][] = array(
						'taxonomy' => 'portfolio_categories',
						'field' => 'slug',
						'terms' => $arr
					);
				}


				$rentit_custom_query = new WP_Query( $rentit_new_arr );
				if ( $rentit_custom_query->have_posts() ):
					while ( $rentit_custom_query->have_posts() ) {
						$rentit_custom_query->the_post();


						$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );


						?>
						<div class="<?php
						if ( !empty( $terms ) ):
							foreach ( $terms as $v ) {
								echo esc_html( $v->slug . " " );
							}
						endif; ?> isotope-item w50">
							<a <?php if ( $type_l == 1 ) { ?>
								class="link"
							<?php } ?>
								href="<?php if ( $type_l == 1 ) {
									echo esc_url( get_the_permalink() );
								} else {
									echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
								} ?>" title=" <?php echo the_title(); ?>">
								<figure class="showcase-item">
									<div class="showcase-item-thumbnail">
										<img alt=""
										     src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
									</div>
									<figcaption class="showcase-item-hover hover-blue">
										<div class="showcase-item-info">
											<div class="showcase-item-category">
												<?php
												if ( !empty( $terms ) ):
													foreach ( $terms as $v ) {
														echo esc_html( $v->slug . " " );
													}
												endif; ?>
											</div>
											<div class="showcase-item-title">
												<?php the_title(); ?>
											</div>
											<i class="ion-ios-plus-empty"></i>
										</div>
									</figcaption>
								</figure>
							</a>
						</div>

						<?php

					}
					wp_reset_postdata();


				endif;
				?>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();

}


/*
 * bauhaus_portfolio_details
 */


add_shortcode( 'bauhaus_portfolio_details', 'bauhaus_portfolio_details_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_details_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );

	?>


	<div class="porftolio">
		<div class="container">
			<div class="isotope isotope-3 isotope-padding">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				foreach ( $items_v as $item ) {
					$css_class_n = '';
					if ( $item['class'] == '50' ) {
						$css_class_n .= ' ' . '';
					} elseif ( $item['class'] == '100' ) {
						$css_class_n .= ' ' . 'w100 ';
					}
					if ( isset( $item['image'] ) ) {
						$img = wp_get_attachment_image_src( $item['image'], 'full' );
						?>
						<div class="isotope-item branding <?php echo esc_attr( $css_class_n ); ?>">
							<figure class="showcase-item">
								<div class="showcase-item-thumbnail">
									<img alt="" src="<?php if ( isset( $img[0]{1} ) ) {
										echo esc_url( $img[0] );
									} ?>">
								</div>
							</figure>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio_details_two
 */


add_shortcode( 'bauhaus_portfolio_details_two', 'bauhaus_portfolio_details_two_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_details_two_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );

	?>


	<?php
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	foreach ( $items_v as $item ) {
		if ( isset( $item['image'] ) ) {
			$img = wp_get_attachment_image_src( $item['image'], 'full' );
			?>
			<div class="container">
				<div class="showcase-item-thumbnail">
					<img alt="" src="<?php if ( isset( $img[0]{1} ) ) {
						echo esc_url( $img[0] );
					} ?>">
				</div>
			</div>
			<div class="section-sm text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<?php if ( isset( $item['some_text'] ) ) {
								echo wp_kses_post( $item['some_text'] );
							} ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
	?>


	<?php
	return ob_get_clean();
}


/*
 * Portfolio details content
 */


add_shortcode( 'bauhaus_portfolio_details_content', 'bauhaus_portfolio_details_content_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_details_content_func( $atts, $content = null ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'class' => '',
		'images' => '',
	), $atts ) );


	$img = wp_get_attachment_image_src( $atts['images'], 'full' );
	$contents = wpb_js_remove_wpautop( $content, true );
	?>

	<div class="container">
		<div class="showcase-item-thumbnail">
			<img alt="" src="<?php if ( isset( $img[0]{1} ) ) {
				echo esc_url( $img[0] );
			} ?>">
		</div>
	</div>
	<div class="section-sm text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php echo wp_kses_post( $contents ); ?>
				</div>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();
}

/**
 *  bauhaus_subscribe
 */
add_shortcode( 'bauhaus_subscribe_form', 'bauhaus_subscribe_form_func' );
function bauhaus_subscribe_form_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'placeholder' => esc_html__( 'Email address', 'bauhaus' ),
			't' => esc_html__( 'Subscribe', 'bauhaus' ),
			'css' => '',
			'section_id' => '',
			'title' => esc_html__( 'Subscribe', 'bauhaus' ),
			'desc' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur', 'bauhaus' ),

		), $atts
	);

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="text-center section <?php echo esc_attr( $css_class ); ?> ">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $atts['title'] ); ?></h2>
					<p class="lead-text"><?php echo esc_html( $atts['desc'] ); ?></p>
				</div>
			</div>
			<div class="top-space-sm">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form id="mc-form" class="bauhaus_subscribe" novalidate="true">
							<div class="input-group">
								<input required id="mc-email" type="email" class=""
								       placeholder="<?php echo esc_attr( $atts['placeholder'] ) ?>" name="EMAIL">
                                <span class="input-group-btn">
	                      <button class="btn" type="submit"><?php echo esc_html( $atts['t'] ); ?></button>
	                    </span>
							</div>
							<p><label for="mc-email" id="mc-notification"></label></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> <?php
	return ob_get_clean();
}


/**
 * Contact
 */

add_shortcode( 'bauhaus_address_item', 'bauhaus_address_item_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_address_item_func( $atts, $content ) {

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
			'text' => '',
			'desc' => '',
			'section_id' => '',
			'map_text' => '',
			'lat' => '-45.200',
			'lng' => '-72.4310',
			'st2' => '',
			'zoom' => 12,
			'url_t' => '',
			'url' => '',
			'email' => '',
			'phone' => '',
			'items' => '',
			'icon' => '',
			't' => '',
			'css' => '',
			'map_items' => '',
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
		), $atts
	);

	extract( $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$map_items = vc_param_group_parse_atts( $atts['map_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="contacts  <?php echo esc_attr( $css_class ); ?>">
		<div class="section bg-light">
			<div class="container">
				<div class="row">
					<?php if ( $items_v ) {
						foreach ( $items_v as $item ) { ?>
							<div class="col-md-4 address-item">
								<div class="address-icon">
									<i class="<?php if ( isset( $item['icon'] ) ) {
										echo( ( $item['icon'] ) );
									} ?>"></i>
								</div>
								<div class="address-title">
									<?php if ( isset( $item['t'] ) ) {
										echo wp_kses_post( $item['t'] );
									} ?>
									<?php if ( isset( $item['content'] ) ) {
										echo wp_kses_post( $item['content'] );
									} ?>
								</div>
							</div>
						<?php }
					} ?>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php if ( isset( $content{0} ) ) { ?>
							<?php echo do_shortcode( $content ); ?>
						<?php } else { ?>
							<form class="js-ajax-form">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="" name="name" required
										       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
									</div>
									<div class="form-group col-md-6">
										<input type="email" class="" name="email" required
										       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
									</div>
									<div class="form-group col-md-12">
                                        <textarea class="" rows="3" name="message"
                                                  placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" class="btn"
										        data-text-hover="Submit"><?php echo esc_html( $atts['field_fourth'] ); ?></button>
									</div>
								</div>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php
		if ( $map_visibility != '2' ) { ?>

			<div id="map" data-lat="<?php echo esc_attr( $lat ); ?>"
			     data-lng="<?php echo esc_attr( $lng ); ?>"
			     class="map">
				<div class="map-title">
					<h3><?php echo esc_attr( $atts['map_text'] ); ?></h3>
				</div>
				<p class="map-address"></p>
				<?php if ( $map_items ) {
					foreach ( $map_items as $item ) {
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

				}


			</script>
		<?php } ?>
	</div>
	<!--oldsspdr-->

	<?php

	return ob_get_clean();
}


/**
 * Contact Style two
 */

add_shortcode( 'bauhaus_address_item_two', 'bauhaus_address_item_two_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_address_item_two_func( $atts, $content ) {

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
			'text' => '',
			'desc' => '',
			'info' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'bauhaus' ),
			'map_text' => '',
			'section_id' => '',
			'images' => '',
			'lat' => '-45.200',
			'lng' => '-72.4310',
			'st2' => '',
			'zoom' => 12,
			'url_t' => '',
			'url' => '',
			'email' => '',
			'phone' => '',
			'items' => '',
			'icon' => '',
			't' => '',
			'css' => '',
			'map_items' => '',
			'social_items' => '',
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
		), $atts
	);

	extract( $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$map_items = vc_param_group_parse_atts( $atts['map_items'] );
	$social_items = vc_param_group_parse_atts( $atts['social_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="contacts  <?php echo esc_attr( $css_class ); ?>">
		<div class="map-wrapper">
			<?php
			if ( $map_visibility != '2' ) { ?>

				<div id="map" data-lat="<?php echo esc_attr( $lat ); ?>"
				     data-lng="<?php echo esc_attr( $lng ); ?>"
				     class="map">
					<div class="map-title">
						<h3><?php echo esc_attr( $atts['map_text'] ); ?></h3>
					</div>
					<p class="map-address"></p>
					<?php if ( $map_items ) {
						foreach ( $map_items as $item ) {
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

					}


				</script>
			<?php } ?>
			<div class="col-md-5 col-lg-4 address-panel-2">
				<?php if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>
						<div class="address-item-2">
							<i class="<?php if ( isset( $item['icon'] ) ) {
								echo( ( $item['icon'] ) );
							} ?>"></i>
							<div class="address-title-2">
								<?php if ( isset( $item['t'] ) ) {
									echo esc_html( $item['t'] );
								} ?>
								<?php if ( isset( $item['content'] ) ) {
									echo wp_kses_post( $item['content'] );
								} ?>
							</div>
						</div>
					<?php }
				} ?>


				<?php if ( $social_items ) { ?>
					<ul class="social-list">
						<?php foreach ( $social_items as $item ) { ?>
							<li>
								<a href="<?php if ( isset( $item['s_url'] ) ) {
									echo wp_kses_post( $item['s_url'] );
								} ?>" class="<?php if ( isset( $item['icon'] ) ) {
									echo( ( $item['icon'] ) );
								} ?>" target="_blank"></a>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
				<i class="address-info">
					<?php echo esc_html( $atts['info'] ); ?>
				</i>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php if ( isset( $content{0} ) ) { ?>
							<?php echo do_shortcode( $content ); ?>
						<?php } else { ?>
							<form class="js-ajax-form">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="" name="name" required
										       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
									</div>
									<div class="form-group col-md-6">
										<input type="email" class="" name="email" required
										       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
									</div>
									<div class="form-group col-md-12">
                                        <textarea class="" rows="3" name="message"
                                                  placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" class="btn"
										        data-text-hover="Submit"><?php echo esc_html( $atts['field_fourth'] ); ?></button>
									</div>
								</div>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--oldsspdr-->

	<?php

	return ob_get_clean();
}


/**
 * Contact style three
 */

add_shortcode( 'bauhaus_address_item_three', 'bauhaus_address_item_three_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_address_item_three_func( $atts, $content ) {

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
			'text' => '',
			'desc' => '',
			'map_text' => '',
			'section_id' => '',
			'images' => '',
			'lat' => '-45.200',
			'lng' => '-72.4310',
			'st2' => '',
			'zoom' => 12,
			'url_t' => '',
			'url' => '',
			'email' => '',
			'phone' => '',
			'items' => '',
			'icon' => '',
			't' => '',
			'css' => '',
			'map_items' => '',
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
		), $atts
	);

	extract( $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$map_items = vc_param_group_parse_atts( $atts['map_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="contacts-3 contacts  <?php echo esc_attr( $css_class ); ?> ">
		<div class="clearfix">
			<?php if ( $items_v ) {
				foreach ( $items_v as $item ) {
					$css_class_n = '';
					if ( $item['class'] == 'bg-primary' ) {
						$css_class_n .= ' ' . 'bg-primary';
					} elseif ( $item['class'] == 'bg-light' ) {
						$css_class_n .= ' ' . 'bg-light';
					} elseif ( $item['class'] == 'bg-dark' ) {
						$css_class_n .= ' ' . 'bg-dark';
					}
					?>
					<div class="col-md-4 address-item <?php echo esc_attr( $css_class_n ); ?>">
						<div class="address-icon">
							<i class="<?php if ( isset( $item['icon'] ) ) {
								echo( ( $item['icon'] ) );
							} ?>"></i>
						</div>
						<div class="address-title">
							<?php if ( isset( $item['t'] ) ) {
								echo esc_html( $item['t'] );
							} ?>
							<?php if ( isset( $item['content'] ) ) {
								echo wp_kses_post( $item['content'] );
							} ?>
						</div>
					</div>
				<?php }
			} ?>
		</div>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php if ( isset( $content{0} ) ) { ?>
							<?php echo do_shortcode( $content ); ?>
						<?php } else { ?>
							<form class="js-ajax-form">
								<div class="row">
									<div class="form-group col-md-6">
										<input type="text" class="" name="name" required
										       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
									</div>
									<div class="form-group col-md-6">
										<input type="email" class="" name="email" required
										       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
									</div>
									<div class="form-group col-md-12">
                                        <textarea class="" rows="3" name="message"
                                                  placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" class="btn"
										        data-text-hover="Submit"><?php echo esc_html( $atts['field_fourth'] ); ?></button>
									</div>
								</div>
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<?php
		if ( $map_visibility != '2' ) { ?>

			<div id="map" data-lat="<?php echo esc_attr( $lat ); ?>"
			     data-lng="<?php echo esc_attr( $lng ); ?>"
			     class="map">
				<div class="map-title">
					<h3><?php echo esc_attr( $atts['map_text'] ); ?></h3>
				</div>
				<p class="map-address"></p>
				<?php if ( $map_items ) {
					foreach ( $map_items as $item ) {
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

				}


			</script>
		<?php } ?>
	</section>
	<!--oldsspdr-->

	<?php

	return ob_get_clean();
}


/**********End New version**************/


add_shortcode( 'bauhaus_contact_form', 'bauhaus_contact_form_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_contact_form_func( $atts, $content ) {

	ob_start();

	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'name' => esc_html__( 'Name *', 'bauhaus' ),
			'Email' => esc_html__( 'Email *', 'bauhaus' ),
			'sm' => esc_html__( 'Get start', 'bauhaus' ),
			'message' => esc_html__( 'Message ', 'bauhaus' ),
			'smh' => esc_html__( 'Submit', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>
	<form class="form-request js-ajax-form <?php echo esc_attr( $css_class ); ?>">
		<div class="form-group">
			<input type="text" class="" name="name" required
			       placeholder="<?php echo esc_attr( $name ); ?>">
		</div>
		<div class="form-group">
			<input type="email" class="" name="email" required
			       placeholder="<?php echo esc_attr( $Email ); ?>">
		</div>
		<div class="form-group">
			<textarea class="" rows="3" name="message" placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-block"><?php echo esc_html( $sm ); ?></button>
		</div>
	</form>
	<?php
	return ob_get_clean();
}


add_shortcode( 'bauhaus_contact_form_interior', 'bauhaus_contact_form_interior_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_contact_form_interior_func( $atts, $content ) {

	ob_start();

	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'name' => esc_html__( 'Name *', 'bauhaus' ),
			'Email' => esc_html__( 'Email *', 'bauhaus' ),
			'sm' => esc_html__( 'Get start', 'bauhaus' ),
			'message' => esc_html__( 'Message ', 'bauhaus' ),
			'smh' => esc_html__( 'Submit', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>
	<form class="form-request js-ajax-form <?php echo esc_attr( $css_class ); ?>">
		<div class="form-group">
			<input type="text" class="" name="name" required
			       placeholder="<?php echo esc_attr( $name ); ?>">
		</div>
		<div class="form-group">
			<input type="email" class="" name="email" required
			       placeholder="<?php echo esc_attr( $Email ); ?>">
		</div>
		<div class="form-group">
			<textarea class="" rows="3" name="message" placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-brown btn-block"><?php echo esc_html( $sm ); ?></button>
		</div>
	</form>
	<?php
	return ob_get_clean();
}


add_shortcode( 'bauhaus_contact_form_architecture', 'bauhaus_contact_form_architecture_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_contact_form_architecture_func( $atts, $content ) {

	ob_start();

	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'name' => esc_html__( 'Name *', 'bauhaus' ),
			'Email' => esc_html__( 'Email *', 'bauhaus' ),
			'sm' => esc_html__( 'Get start', 'bauhaus' ),
			'message' => esc_html__( 'Message ', 'bauhaus' ),
			'smh' => esc_html__( 'Submit', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>
	<form class="form-request js-ajax-form <?php echo esc_attr( $css_class ); ?>">
		<div class="form-group">
			<input type="text" class="" name="name" required
			       placeholder="<?php echo esc_attr( $name ); ?>">
		</div>
		<div class="form-group">
			<input type="email" class="" name="email" required
			       placeholder="<?php echo esc_attr( $Email ); ?>">
		</div>
		<div class="form-group">
			<textarea class="" rows="3" name="message" placeholder="<?php echo esc_attr( $message ); ?>"></textarea>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-dark btn-block"><?php echo esc_html( $sm ); ?></button>
		</div>
	</form>
	<?php
	return ob_get_clean();
}


/*
 * addres
 */


add_shortcode( 'bauhaus-i', 'bauhaus_i_func' );
function bauhaus_i_func( $atts, $content ) {
	echo '<i class="text-primary">' . do_shortcode( $content ) . '</i>';
}


add_shortcode( 'bauhaus_social_links', 'bauhaus_social_links_function' );

function bauhaus_social_links_function( $atts ) {
	$atts = shortcode_atts(
		array(
			'url' => '#',
			'class' => '',
		), $atts
	);
	if ( !preg_match( '#icon#', $atts['class'] ) ) {
		// $atts['class'] .= ' icon';
	}
	ob_start();
	?>
	<a href="<?php echo esc_url( $atts['url'] ); ?>" class="<?php echo esc_html( $atts['class'] ) ?>">
	</a>


	<?php
	return ob_get_clean();
}

if ( function_exists( 'vc_map' ) ) {

	class WPBakeryShortCode_bauhaus_item_menu extends WPBakeryShortCodesContainer {


		protected function content( $atts, $content = null ) {

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
					'css' => '',

				), $atts
			);


			extract( $atts );

			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


			?>

			<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
				class="  <?php echo esc_attr( $css_class ); ?>  ">
				<?php echo do_shortcode( $content ); ?>

			</section>
			<!--oldsspdr-->
			<?php
			return ob_get_clean();

		}


	}
}


/**
 *  bauhaus_dark_header
 */
add_shortcode( 'bauhaus_dark_header', 'bauhaus_dark_header_func' );
function bauhaus_dark_header_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'images' => '',
			'scroll_text' => esc_html__( 'scroll down' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/bg-freelance.jpg';
	}

	$contents = wpb_js_remove_wpautop( $content, true );
	?>
	<main data-jarallax='{"speed": 0.6}'
	      class="main jarallax main-full main-freelance <?php echo esc_attr( $css_class ); ?>"

	      style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
		<div class="container-fluid">
			<div class="opener">
				<h1>
					<?php echo strip_tags( $contents, '<br><br/><i>' ); ?>
				</h1>
			</div>
		</div>
		<div class="mouse-helper">
			<span><?php echo esc_html( $scroll_text ); ?></span>
			<i class="icon ion-mouse"></i>
		</div>
	</main>
	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio_automat
 */

add_shortcode( 'bauhaus_portfolio_automat_dark', 'bauhaus_portfolio_automat_dark_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_portfolio_automat_dark_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => '',
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type' => '',
		'type_l' => '1',
		'type_c' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>

	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>

		class="<?php echo esc_attr( $css_class ); ?> porftolio ">
		<?php if ( isset( $atts['heading']{1} ) ) { ?>
			<div class="container">
				<div class="row">
					<div class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( isset( $heading{1} ) ) {
								echo esc_html( $heading );
							} ?></h2>
						<p class="section-lead"><?php if ( isset( $description{1} ) ) {
								echo wp_kses_post( $description );
							} ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="container-fluid">
			<ul class="filter <?php if ( isset( $atts['filter'] ) ) {
				echo esc_attr( $atts['filter'] );
			} ?> ">
				<li class="active"><a href="#" data-filter="*"> <?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php $terms = get_terms( 'portfolio_categories', array( 'hide_empty' => true, 'orderby' => 'id', ) );
				foreach ( $terms as $v ) {

					?>
					<li class="all "><a href="#"
					                    data-filter=".<?php echo esc_attr( $v->slug ); ?>"><?php echo esc_html( $v->name ); ?></a>
					</li>
					<?php

				}
				?>

			</ul>
		</div>
		<div class="isotope js-gallery <?php if ( $type_c == 1 ) {

		} else {
			echo "isotope-padding";
		} ?>">
			<?php

			$rentit_new_arr = array(
				'posts_per_page' => $posts,
				'order' => $order,
				'orderby' => $orderby,
				'post_status' => 'publish',
				'post_type' => 'portfolio',
			);


			if ( $portfolio_category != 'all' ) {
				$str = $portfolio_category;
				$arr = explode( ',', $str );
				$rentit_new_arr['tax_query'][] = array(
					'taxonomy' => 'portfolio_categories',
					'field' => 'slug',
					'terms' => $arr
				);
			}


			$rentit_custom_query = new WP_Query( $rentit_new_arr );
			if ( $rentit_custom_query->have_posts() ):
				while ( $rentit_custom_query->have_posts() ) {
					$rentit_custom_query->the_post();


					$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );


					?>
					<div class=" <?php
					if ( !empty( $terms ) ):
						foreach ( $terms as $v ) {
							echo esc_html( $v->slug . " " );
						}
					endif; ?> isotope-item digital">
						<a <?php if ( $type_l == 1 ) { ?>
							class="link"
						<?php } ?>
							href="<?php if ( $type_l == 1 ) {
								echo esc_url( get_the_permalink() );
							} else {
								echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
							} ?>" title=" <?php echo the_title(); ?>">
							<figure class="showcase-item">
								<div class="showcase-item-thumbnail">
									<img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
								</div>
								<figcaption class="showcase-item-hover dark">
									<div class="showcase-item-info">
										<div class="showcase-item-category">
											<?php
											if ( !empty( $terms ) ):
												foreach ( $terms as $v ) {
													echo esc_html( $v->slug . " " );
												}
											endif; ?>
										</div>
										<div class="showcase-item-title">
											<?php the_title(); ?>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>

					<?php

				}
				wp_reset_postdata();


			endif;
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();

}


/**
 * Contact
 */

add_shortcode( 'bauhaus_dark_contact', 'bauhaus_dark_contact_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_dark_contact_func( $atts, $content ) {

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
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
			'css' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<div class="section <?php echo esc_attr( $css_class ); ?>">
		<div class="container-fluid">
			<?php if ( isset( $content{0} ) ) { ?>
				<?php echo do_shortcode( $content ); ?>
			<?php } else { ?>
				<form class="js-ajax-form">
					<div class="row">
						<div class="form-group col-md-6">
							<input type="text" class="" name="name" required
							       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="" name="email" required
							       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
						</div>
						<div class="form-group col-md-12">
                        <textarea class="" rows="3" name="message"
                                  placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-dark"
							        data-text-hover="<?php echo esc_html( $atts['field_fourth'] ); ?>"><?php echo esc_html( $atts['field_fourth'] ); ?></button>
						</div>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>


	<?php

	return ob_get_clean();
}


/*
 *  About
 */


add_shortcode( 'bauhaus_about_dark', 'bauhaus_about_dark_func' );
function bauhaus_about_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title1' => esc_html__( 'We create own history.', 'bauhaus' ),
			'images' => '',
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	extract( $atts );

	?>


	<!-- About  -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section bg-light  <?php echo esc_attr( $css_class ); ?>">
		<div class="container-fluid">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title-2"><?php echo esc_html( $title1 ); ?></h2>
					<div class="about-entry text-center">
						<?php
						$arrr_str = explode( PHP_EOL, $content );
						if ( isset( $arrr_str[0] ) ) {
						foreach ( $arrr_str as $string ) {
						?><p><?php echo do_shortcode( $string ); ?>
							<?php
							}
							}
							?>
					</div>
				</header>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();

}


/**
 * Partners
 */
add_shortcode( 'bauhaus_partners_dark', 'bauhaus_partners_dark_func' );
function bauhaus_partners_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'images' => '',
			'section_id' => '',
			'css' => '',

		), $atts
	);
	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $images );

	?>


	<!-- Partners -->

	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="partners section-sm <?php echo esc_attr( $css_class ); ?> ">
		<div class="container-fluid">
			<div class="js-partners-carousel">


				<?php
				foreach ( $arr_img as $item ) { ?>

					<div class="partner">

						<?php

						global $bauhaus_class;
						$img_arr = wp_get_attachment_image_src( $item, 'full' );
						$img = $img_arr[0];

						?>

						<img alt="" src="<?php echo esc_url( $img ); ?>">
					</div>
				<?php }
				?>

			</div>
		</div>
	</div>
	<?php
	return ob_get_clean();
}


/*
 *  Services
 */


add_shortcode( 'bauhaus_services_dark', 'bauhaus_services_dark_func' );
function bauhaus_services_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'd' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'bauhaus' ),
			'white' => '',
			'opacity' => '',
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'Functional', 'bauhaus' ),
			'ds' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quae provident enim cum quidem aut corporis', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>


	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?> features section bg-light">
		<div class="container-fluid">
			<div class="row-base">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-md-6 col-lg-4">
							<i class="icon <?php echo( ( $item['icon'] ) ); ?>"></i>
							<h4><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
							<p><?php if ( isset( $item['ds'] ) ) {
									echo esc_html( $item['ds'] );
								} ?></p>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/**
 * Contact
 */

add_shortcode( 'bauhaus_address_item_dark', 'bauhaus_address_item_dark_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_address_item_dark_func( $atts, $content ) {

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
			'text' => '',
			'desc' => '',
			'section_id' => '',
			'map_text' => '',
			'lat' => '-45.200',
			'lng' => '-72.4310',
			'st2' => '',
			'zoom' => 12,
			'url_t' => '',
			'url' => '',
			'email' => '',
			'phone' => '',
			'items' => '',
			'icon' => '',
			't' => '',
			'css' => '',
			'map_items' => '',
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
		), $atts
	);

	extract( $atts );
	$items_v = vc_param_group_parse_atts( $atts['items'] );
	$map_items = vc_param_group_parse_atts( $atts['map_items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>

	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="contacts  <?php echo esc_attr( $css_class ); ?>">
		<?php
		if ( $map_visibility != '2' ) { ?>

			<div id="map" data-lat="<?php echo esc_attr( $lat ); ?>"
			     data-lng="<?php echo esc_attr( $lng ); ?>"
			     class="map">
				<div class="map-title">
					<h3><?php echo esc_attr( $atts['map_text'] ); ?></h3>
				</div>
				<p class="map-address"></p>
				<?php if ( $items_v ) {
					foreach ( $items_v as $item ) {
						?>
						<div class="map-address-row">
							<?php if ( isset( $item['icon'] ) && $item['icon'] != '' ): ?>
								<i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
							<?php endif; ?>
							<?php if ( isset( $item['t'] ) && $item['t'] != '' ): ?>

								<span class="text"><?php echo wp_kses_post( $item['t'] ); ?></span>

							<?php endif; ?>
						</div>
						<?php
					}

				} ?>

				<?php if ( $atts['url'] && $atts['url_t'] ) { ?>
					<p class="gmap-open">
						<a href="<?php echo esc_url( $atts['url'] ); ?>"
						   target="_blank"><?php echo wp_kses_post( $atts['url_t'] ); ?></a>
					</p>

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

				}


			</script>
		<?php } ?>

		<div class="section bg-light">
			<div class="container-fluid">
				<div class="row row-base">
					<?php if ( $map_items ) {
						foreach ( $map_items as $item ) { ?>
							<div class="col-md-4 col-base address-item address-fl-item">
								<i class="<?php if ( isset( $item['icon'] ) ) {
									echo( ( $item['icon'] ) );
								} ?>"></i>
								<div class="address-title">
									<?php if ( isset( $item['description'] ) ) {
										echo wp_kses_post( $item['description'] );
									} ?>
								</div>
							</div>
						<?php }
					} ?>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container-fluid">
				<?php if ( isset( $content{0} ) ) { ?>
					<?php echo do_shortcode( $content ); ?>
				<?php } else { ?>
					<form class="js-ajax-form">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" class="" name="name" required
								       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="" name="email" required
								       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
							</div>
							<div class="form-group col-md-12">
	                        <textarea class="" rows="3" name="message"
	                                  placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
							</div>
							<div class="col-md-12 text-right">
								<button type="submit" class="btn btn-dark"
								        data-text-hover="<?php echo esc_html( $atts['field_fourth'] ); ?>"><?php echo esc_html( $atts['field_fourth'] ); ?></button>
							</div>
						</div>
					</form>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--oldsspdr-->

	<?php

	return ob_get_clean();
}


/*   Freelance Light   */


/**
 *  bauhaus_light_header
 */
add_shortcode( 'bauhaus_light_header', 'bauhaus_light_header_func' );
function bauhaus_light_header_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'scroll_text' => esc_html__( 'scroll down' ),
			'images' => '',
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	global $bauhaus_class;
	$img_arr = wp_get_attachment_image_src( $images, 'full' );
	if ( !isset( $img_arr[0]{2} ) ) {
		$img_arr[0] = get_template_directory_uri() . '/img/bg/bg-freelance.jpg';
	}


	$contents = wpb_js_remove_wpautop( $content, true );

	?>
	<!-- Home -->

	<main class="main main-full <?php echo esc_attr( $css_class ); ?>">
		<div class="container-fluid">
			<div class="opener">
				<div class="hr hr-top wow fadeInDown"></div>
				<h1><?php echo strip_tags( $contents, '<br><br/><i>' ); ?></h1>
				<div class="hr hr-bottom wow fadeInUp"></div>
			</div>
		</div>
		<div class="mouse-helper mouse2">
			<span><?php echo esc_html( $scroll_text ); ?></span>
			<i class="icon ion-mouse" style="background: url(<?php echo esc_url( $img_arr[0] ); ?>);"></i>
		</div>
	</main>
	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio
 */


add_shortcode( 'bauhaus_portfolio_new_dark_update', 'bauhaus_portfolio_new_dark_update_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_new_dark_update_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'menu_visibility' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="porftolio <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>

						<div class="spacer spacer-primary">
							<div class="line">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
						</div>
					</header>
				</div>
			<?php } ?>


			<?php

			if ( $atts['menu_visibility'] == '1' ) {
				?>
				<ul class=" filter <?php if ( isset( $atts['filter'] ) ) {
					echo esc_attr( $atts['filter'] );
				} ?> ">
					<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
					<?php
					if ( isset ( $items  [0] ) ) {
						foreach ( $items as $v1 ) {


							?>
							<li><a href="#"
							       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
							</li>
							<?php
						}
					}
					?>

				</ul>
				<?php
			} elseif ( $atts['menu_visibility'] == '2' ) {
				echo "";
			}

			?>
		</div>
		<?php
		$container = ' ';
		$row = ' ';
		$col = $atts['col'];
		if ( $col == 'col-3' ) {
			$col = 'col-3 isotope-padding';
			$container = ' ';
			$row = ' ';
		} elseif ( $col == 'col-2 ' ) {
			$col = 'col-2  isotope-padding ';
			$container = 'container';
			$row = 'row';
		} elseif ( $col == 'padding ' ) {
			$col = 'isotope-padding';
			$container = ' ';
			$row = ' ';
		}

		?>
		<div class="isotope js-gallery <?php echo esc_attr( $col ); ?> ">

			<?php

			if ( isset ( $items[1] ) ) {
				foreach ( $items as $t ) {


					$image_items = vc_param_group_parse_atts( $t['image_items'] );
					$slug = $t['slug'];


					if ( $image_items ) {

						foreach ( $image_items as $img ) {

							if ( isset( $img['img_src']{1} ) ) {

								$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

								?>
								<div class="isotope-item <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
									echo esc_attr( $img['size'] );
								} ?>  ">
									<a href="<?php if ( isset( $img_arr[0] ) ) {
										;
									}
									echo esc_url( $img_arr[0] ); ?>" title="<?php if ( isset( $t ['title'] ) ) {
										;
									}
									echo esc_html( $t ['title'] ); ?>">
										<figure class="showcase-item">

											<div class="showcase-item-thumbnail"><img alt=""
											                                          src="<?php if ( isset( $img_arr[0] ) ) {
												                                          echo esc_url( $img_arr[0] );
											                                          }
											                                          ?>">
											</div>


											<figcaption class="showcase-item-hover dark">
												<div class="showcase-item-info">
													<div
														class="showcase-item-category"><?php if ( isset( $t ['cat'] ) ) {
															;
														}
														echo esc_html( $t ['cat'] ); ?></div>
													<div
														class="showcase-item-title"><?php if ( isset( $t ['title'] ) ) {
															;
														}
														echo esc_html( $t ['title'] ); ?></div>
												</div>
											</figcaption>
										</figure>
									</a>
								</div>

								<?php
							}
						}

					}
				}
			}
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*   Agency features */


/*
 *  About features
 */


add_shortcode( 'bauhaus_agency_features', 'bauhaus_agency_features_func' );
function bauhaus_agency_features_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'banner' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<!-- Features -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section-banner section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-sm-6 col-md-4">
							<div class="media-left"><i class="text-primary <?php echo( ( $item['icon'] ) ); ?>"></i>
							</div>
							<div class="media-right">
								<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
										echo wp_kses_post( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>
							</div>
						</div>
					<?php }
				}
				?>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 wow fadeInUp">
					<?php
					$banners_v = vc_param_group_parse_atts( $atts['banner'] );
					if ( $banners_v ) {
						foreach ( $banners_v as $banners ) {
							$img_arr = wp_get_attachment_image_src( $banners['image'], 'full' );
							if ( !isset( $img_arr[0]{1} ) ) {
								$img_arr[0] = get_template_directory_uri() . '/img/bg/promo.jpg';
							}
							?>

							<div class="banner-in-section banner banner-blue"
							     style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
								<div class="banner-content">
									<h2 class="banner-title"><?php echo wp_kses_post( $banners['title'] ); ?></h2>
									<a href="<?php echo esc_html( $banners['t_url'] ); ?>" data-toggle="modal"
									   class="btn btn-light wow swing"><?php echo esc_html( $banners['tb'] ); ?></a>
								</div>
							</div>
						<?php }
					}
					?>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  About agency
 */


add_shortcode( 'bauhaus_about_agency', 'bauhaus_about_agency_func' );
function bauhaus_about_agency_func( $atts, $content = null ) {
	ob_start();
	$atts = shortcode_atts(
		array(
			'desc1' => esc_html__( 'We are  —', 'bauhaus' ),
			'descBg' => esc_html__( 'We are ', 'bauhaus' ),
			'desc3' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi', 'bauhaus' ),
			'desc4' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat', 'bauhaus' ),
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$contents = wpb_js_remove_wpautop( $content, true );
	extract( $atts );

	?>

	<!-- About -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="about section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2 class="section-title text-left text-dark wow fadeInLeft"><?php echo esc_html( $desc1 ); ?><span
					class="fade-title"><?php echo esc_html( $descBg ); ?></span></h2>
			<div class="row-about row">
				<div class="col-md-10 col-md-offset-2 wow fadeInDown">
					<h3 class="text-dark"><?php echo strip_tags( $contents, '<br><br/>' ); ?></h3>
				</div>
			</div>
			<div class="row-about row">
				<div class="col-md-4 col-md-offset-3">
					<p><?php echo esc_html( $desc3 ); ?></p>
				</div>
				<div class="col-md-4">
					<p><?php echo esc_html( $desc4 ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  Statisticts
 */


add_shortcode( 'bauhaus_statistics', 'bauhaus_statistics_func' );
function bauhaus_statistics_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'People', 'larry' ),
			'number' => esc_html__( '30', 'larry' ),
			'items' => '',
			'title1' => esc_html__( 'Meet Virgo', 'larry' ),
			'description' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'bauhaus' ),
			'desc' => esc_html__( 'We love what we do, and we strive to provide the best services for our clients. The aim is to become part of your team, and with the help of our developers and designers create meaningful digital experiences.', 'bauhaus' ),
			't_btn' => esc_html__( 'Get bauhaus', 'bauhaus' ),
			'b_url' => esc_html__( '#request', 'bauhaus' ),
			'section_id' => '',
			'css' => '',
			'class' => '1',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$tems_v = vc_param_group_parse_atts( $atts['items'] );

	extract( $atts );

	?>


	<!-- Statisticts -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="statistics  <?php if ( $class == 1 ): ?> bg-light <?php endif; ?> section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $title1 ); ?></h2>
					<p class="section-lead"><?php echo esc_html( $description ); ?></p>
				</header>
			</div>
			<div class="section-content">
				<div class="row-base row">
					<?php foreach ( $tems_v as $item ): ?>
						<div class="col-stat col-base col-sm-6 col-md-3">
							<div class="stat-number" data-value="<?php if ( isset( $item['number'] ) ) {
								echo esc_html( $item['number'] );
							} ?>"><?php if ( isset( $item['number'] ) ) {
									echo esc_html( $item['number'] );
								} ?></div>
							<?php if ( isset( $item['title'] ) ) {
								echo esc_html( $item['title'] );
							} ?>
						</div>
					<?php endforeach; ?>
				</div>
				<?php if ( isset( $desc{1} ) ): ?>
					<div class="row">
						<div class="stat-descr col-md-10 col-md-offset-1">
							<?php echo esc_html( $desc ); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( isset( $t_btn{1} ) ) { ?>
					<a href="<?php echo esc_html( $b_url ); ?>" data-toggle="modal" class="btn btn-violet"
					   target="_blank"><?php echo esc_html( $t_btn ); ?></a>
				<?php } ?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 * bauhaus_portfolio_agency
 */


add_shortcode( 'bauhaus_portfolio_agency', 'bauhaus_portfolio_agency_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_agency_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'heading' => esc_html__( 'Look what we do best.', 'bauhaus' ),
		'desc' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'bauhaus' ),
		't_btn' => esc_html__( 'See all projects', 'bauhaus' ),
		'b_url' => esc_html__( '#', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section
		class="porftolio section <?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>

						<p class="section-lead">
							<?php if ( $atts['desc'] ) {
								echo esc_html( $atts['desc'] );
							} ?>
						</p>
					</header>
				</div>
			<?php } ?>

			<?php
			$container = ' ';
			$row = ' ';
			$col = $atts['col'];
			if ( $col == 'col-3' ) {
				$col = 'col-3 isotope-padding';
				$container = ' ';
				$row = ' ';
			} elseif ( $col == 'col-2 ' ) {
				$col = 'col-2  isotope-padding ';
				$container = 'container';
				$row = 'row';
			} elseif ( $col == 'padding ' ) {
				$col = 'isotope-padding';
				$container = ' ';
				$row = ' ';
			}

			?>
			<div class="isotope js-gallery isotope-space <?php echo esc_attr( $col ); ?> ">

				<?php

				if ( isset ( $items[1] ) ) {
					foreach ( $items as $t ) {


						$image_items = vc_param_group_parse_atts( $t['image_items'] );
						$slug = $t['slug'];


						if ( $image_items ) {

							foreach ( $image_items as $img ) {

								if ( isset( $img['img_src']{1} ) ) {

									$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

									?>
									<div class="isotope-item w50 <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
										echo esc_attr( $img['size'] );
									} ?>  ">
										<a href="<?php if ( isset( $img_arr[0] ) ) {
											;
										}
										echo esc_url( $img_arr[0] ); ?>" title="<?php if ( isset( $t ['title'] ) ) {
											;
										}
										echo esc_html( $t ['title'] ); ?>">
											<figure class="showcase-item">

												<div class="showcase-item-thumbnail"><img alt=""
												                                          src="<?php if ( isset( $img_arr[0] ) ) {
													                                          echo esc_url( $img_arr[0] );
												                                          }
												                                          ?>">
												</div>


												<figcaption class="showcase-item-hover hover-blue">
													<div class="showcase-item-info">
														<div
															class="showcase-item-category"><?php if ( isset( $t ['cat'] ) ) {
																;
															}
															echo esc_html( $t ['cat'] ); ?></div>
														<div
															class="showcase-item-title"><?php if ( isset( $t ['title'] ) ) {
																;
															}
															echo esc_html( $t ['title'] ); ?></div>
														<i class="ion-ios-plus-empty"></i>
													</div>
												</figcaption>
											</figure>
										</a>
									</div>

									<?php
								}
							}

						}
					}
				}
				?>
			</div>
		</div>
		<div class="text-center section-content"><a href="<?php if ( $atts['b_url'] ) {
				echo esc_html( $atts['b_url'] );
			} ?>" class="btn btn-violet"><?php if ( $atts['t_btn'] ) {
					echo esc_html( $atts['t_btn'] );
				} ?></a>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 *  Upcoming events
 */

add_shortcode( 'bauhaus_events', 'bauhaus_events_func' );
function bauhaus_events_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Upcoming events', 'bauhaus' ),
			'items' => '',
			'css' => '',
		), $atts
	);

	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

	<!-- Events -->

	<section class="events section bg-light <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $atts['title'] ); ?></h2>
				</header>
			</div>
		</div>
		<div class="section-content-2">
			<div class="container">
				<div class="row-base row">
					<?php foreach ( $tems_v as $item ):

						$css_class_n = '';
						if ( $item['class'] == 'bg-violet' ) {
							$css_class_n .= ' ' . '';
						} elseif ( $item['class'] == 'bg-dark-blue' ) {
							$css_class_n .= ' ' . '0.3s';
						} elseif ( $item['class'] == 'bg-yellow' ) {
							$css_class_n .= ' ' . '0.6s';
						}


						?>

						<div class="col-event col-base col-md-4 wow fadeInLeft"
						     data-wow-delay="<?php echo esc_attr( $css_class_n ); ?>">
							<a href="<?php echo esc_html( $item['url'] ); ?> ">
								<div class="event <?php echo esc_html( $item['class'] ); ?>">
									<div class="event-content">
										<h4 class="event-title"><?php echo wp_kses_post( $item['e_title'] ); ?></h4>
										<div class="event-date"><?php echo esc_html( $item['date'] ); ?></div>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();

}


/*
 *  banner
 */

add_shortcode( 'bauhaus_banner_agency', 'bauhaus_banner_agency_func' );
function bauhaus_banner_agency_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'image' => '',
			'title_main' => esc_html__( 'Banners', 'bauhaus' ),
			'tb' => esc_html__( 'Let\'s talk', 'bauhaus' ),
			't_url' => esc_html__( '#request', 'bauhaus' ),
			'class' => '',
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$contents = wpb_js_remove_wpautop( $content, true );

	?>

	<section class="section">
		<?php if ( isset( $atts['title_main']{0} ) ) { ?>
			<div class="container short">
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title-2"><?php echo esc_html( $atts['title_main'] ); ?></h2>
					</header>
				</div>
			</div>
		<?php } ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 wow fadeInUp">
					<?php
					$img_arr = wp_get_attachment_image_src( $atts['image'], 'full' );
					if ( !isset( $img_arr[0]{1} ) ) {
						$img_arr[0] = get_template_directory_uri() . '/img/bg/promo.jpg';
					}
					?>
					<div class="banner <?php echo esc_html( $atts['class'] ); ?>"
					     style="background: url(<?php echo esc_url( $img_arr[0] ); ?>) 50% 0 no-repeat; background-size: cover;">
						<div class="banner-content">
							<h2 class="banner-title"><?php echo strip_tags( $contents, '<br><br/>' ); ?></h2>
							<a href="<?php echo esc_html( $atts['t_url'] ); ?>" data-toggle="modal"
							   class="btn btn-light wow swing"
							   target="_blank"><?php echo esc_html( $atts['tb'] ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 * bauhaus_blog_recent
 */

add_shortcode( 'bauhaus_blog_recent', 'bauhaus_blog_recent_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_blog_recent_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => esc_html__( 'Latest from blog.', 'bauhaus' ),
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1',
		'type_m' => '1',
		'class' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<!-- Blog -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section <?php if ( $type_m == 1 ) {
			echo "section pb-0";
		} elseif($type_m == 2) {
			echo "section pt-0";
		}  else {
			echo "section";
		}?> <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $heading ); ?></h2>
				</header>
			</div>
		</div>
		<div class="section-content-2">
			<div class="container">
				<div class="row-base row">
					<?php

					$rentit_new_arr = array(
						'posts_per_page' => $posts,
						'order' => $order,
						'orderby' => $orderby,
						'post_status' => 'publish',
						'post_type' => 'post',
					);


					if ( $portfolio_category != 'all' ) {
						$str = $portfolio_category;
						$arr = explode( ',', $str );
						$rentit_new_arr['tax_query'][] = array(
							'taxonomy' => 'portfolio_categories',
							'field' => 'slug',
							'terms' => $arr
						);
					}


					$rentit_custom_query = new WP_Query( $rentit_new_arr );
					if ( $rentit_custom_query->have_posts() ):
						while ( $rentit_custom_query->have_posts() ) {
							$rentit_custom_query->the_post();

							$bauhaus_cat = 0;
							$bauhaus_category = get_category( get_query_var( 'cat' ) );
							if ( isset( $bauhaus_category->cat_ID ) ) {
								$bauhaus_cat = $bauhaus_category->cat_ID;
							} else {
								$bauhaus_cat = 0;
							}

							$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );
							?>
							<div class="col-blog col-blog-home col-base col-md-4 col-none">
								<article class="blog">
									<div class="blog-thumbnail">
										<a href="<?php echo esc_url( get_the_permalink() ); ?>">
											<div class="blog-thumbnail-img">
												<img src="<?php the_post_thumbnail_url(); ?>" alt=""
												     class="img-responsive">
											</div>
										</a>
									</div>
									<div class="blog-info">
										<?php bauhaus_get_list_cats_blog(); ?>
										<h3 class="blog-title">
											<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
										</h3>
										<div class="blog-meta">
											<div class="pull-left">
												<?php esc_html_e( 'by ', 'bauhaus' ); ?><a
													href="<?php echo esc_url( get_the_author_link() ); ?>"
													class="author"><?php echo esc_html( get_the_author() ); ?></a>
											</div>
											<div class="pull-right">
												<div class="time"><?php echo esc_html( get_the_time( 'M , j ' ) ); ?></div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<?php
						}
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/**
 *  bauhaus_shortcode_tags
 */
add_shortcode( 'bauhaus_shortcode_tags', 'bauhaus_shortcode_tags_func' );
function bauhaus_shortcode_tags_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'css' => '',
			'section_id' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php
			$arrr_str = explode( PHP_EOL, $content );
			if ( isset( $arrr_str[0] ) ) {
				foreach ( $arrr_str as $string ) {
					?><?php echo do_shortcode( $string ); ?>
					<?php
				}
			}
			?>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/**
 *  bauhaus_shortcode_buttons
 */
add_shortcode( 'bauhaus_shortcode_buttons', 'bauhaus_shortcode_buttons_func' );
function bauhaus_shortcode_buttons_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Buttons', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="text-center bg-light section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2><?php echo esc_html( $title ); ?></h2>
			<div class="section-content">
				<?php
				$arrr_str = explode( PHP_EOL, $content );
				if ( isset( $arrr_str[0] ) ) {
				foreach ( $arrr_str as $string ) {
				?><p><?php echo do_shortcode( $string ); ?>
					<?php
					}
					}
					?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 * bauhaus_blog_recent
 */

add_shortcode( 'bauhaus_blog_recent_rows', 'bauhaus_blog_recent_rows_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_blog_recent_rows_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => esc_html__( 'Blog rows', 'bauhaus' ),
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'blog',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<!-- Blog -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section bg-light <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $heading ); ?></h2>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row-base row">
					<?php

					$rentit_new_arr = array(
						'posts_per_page' => $posts,
						'order' => $order,
						'orderby' => $orderby,
						'post_status' => 'publish',
						'category_name' => $portfolio_category,
					);


					$rentit_custom_query = new WP_Query( $rentit_new_arr );
					if ( $rentit_custom_query->have_posts() ):
						while ( $rentit_custom_query->have_posts() ) {
							$rentit_custom_query->the_post();

							$bauhaus_cat = 0;
							$bauhaus_category = get_category( get_query_var( 'cat' ) );
							if ( isset( $bauhaus_category->cat_ID ) ) {
								$bauhaus_cat = $bauhaus_category->cat_ID;
							} else {
								$bauhaus_cat = 0;
							}

							$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );
							?>
							<div class="col-blog col-blog-home col-base">
								<article class="blog">
									<div class="row">
										<div class="blog-thumbnail col-lg-5">
											<a href="<?php echo esc_url( get_the_permalink() ); ?>">
												<div class="blog-thumbnail-bg col-lg-5 visible-lg"
												     style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												</div>
											</a>
											<a href="<?php echo esc_url( get_the_permalink() ); ?>">
												<div class="blog-thumbnail-img">
													<img src="<?php the_post_thumbnail_url(); ?>" alt=""
													     class="img-responsive">
												</div>
											</a>
										</div>
										<div class="blog-info col-lg-7">
											<?php bauhaus_get_list_cats_blog(); ?>
											<h3 class="blog-title">
												<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
											</h3>
											<p class="text-muted"><?php echo bauhaus_limit_excerpt( bauhaus_words_limit() ); ?></p>
											<div class="blog-meta">
												<div class="pull-left">
													<?php esc_html_e( 'by ', 'bauhaus' ); ?><a
														href="<?php echo esc_url( get_the_author_link() ); ?>"
														class="author"><?php echo esc_html( get_the_author() ); ?></a>
												</div>
												<div class="pull-right">
													<div class="time"><?php echo esc_html( get_the_time( 'M , j ' ) ); ?></div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<?php
						}
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  Statisticts shprtcodes
 */


add_shortcode( 'bauhaus_statistics_shortcodes', 'bauhaus_statistics_shortcodes_func' );
function bauhaus_statistics_shortcodes_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'People', 'larry' ),
			'number' => esc_html__( '30', 'larry' ),
			'items' => '',
			'title1' => esc_html__( 'Statistics white', 'larry' ),
			'class' => '',
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$tems_v = vc_param_group_parse_atts( $atts['items'] );

	extract( $atts );

	?>


	<!-- Statisticts -->

	<?php

	$css_class_n = '';
	if ( $class !== '' ) {
		$css_class_n .= ' ' . 'text-white';
	}

	?>
	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="statistics section <?php echo esc_attr( $css_class ); ?> <?php echo esc_html( $class ); ?>">
		<div class="container">
			<h2 class="section-title <?php echo esc_html( $css_class_n ); ?>"><?php echo esc_html( $title1 ); ?></h2>
			<div class="section-content">
				<div class="row-base row">
					<?php foreach ( $tems_v as $item ): ?>
						<div class="col-stat col-base col-sm-6 col-md-3">
							<div class="stat-number" data-value="<?php if ( isset( $item['number'] ) ) {
								echo esc_html( $item['number'] );
							} ?>"><?php if ( isset( $item['number'] ) ) {
									echo esc_html( $item['number'] );
								} ?></div>
							<?php if ( isset( $item['title'] ) ) {
								echo esc_html( $item['title'] );
							} ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();

}


/*
 *  Statisticts shortcodes
 */


add_shortcode( 'bauhaus_shortcodes_title', 'bauhaus_shortcodes_title_func' );
function bauhaus_shortcodes_title_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'Section  title', 'larry' ),
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	extract( $atts );

	?>

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section-sm <?php echo esc_attr( $css_class ); ?>">
		<div class="container"><h2 class="text-center"><?php echo esc_html( $title ); ?></h2></div>
	</section>
	<?php
	return ob_get_clean();

}


/*
 *  Statisticts shortcodes
 */


add_shortcode( 'bauhaus_shortcodes_footer', 'bauhaus_shortcodes_footer_func' );
function bauhaus_shortcodes_footer_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'title' => esc_html__( 'Section  title', 'larry' ),
			'section_id' => '',
			'css' => '',
		), $atts
	);


	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	extract( $atts );

	?>

	<footer <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="footer footer-2 bg-light  <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php dynamic_sidebar( 'bauhaus_footer_sidebar' ); ?>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyrights">
					<?php
					echo wp_kses_post(
						do_shortcode( ( get_theme_mod( 'footer_copyright', ' &copy; ' . esc_html__( 'Virgo ', 'bauhaus' ) . date( 'Y' ) . esc_html__( '. All rights reserved ', 'bauhaus' ) . ' ' ) ) ) ); ?>
				</div>
				<ul class="social-list">
					<?php
					if ( strlen( get_theme_mod( 'sotial_networks_control_social_shortcode' ) ) > 8 ):
						echo do_shortcode( get_theme_mod( 'sotial_networks_control_social_shortcode' ) );
					endif; ?>
					<?php if ( strlen( get_theme_mod( 'sotial_networks_control_facebook' ) ) > 8 ): ?>
						<li><a href="<?php echo esc_url( get_theme_mod( 'sotial_networks_control_facebook' ) ); ?>"
						       class="fa fa-facebook">

							</a></li>
					<?php endif; ?>
					<?php if ( strlen( get_theme_mod( 'sotial_networks_control_twitter' ) ) > 8 ): ?>
						<li><a class="fa fa-twitter"
						       href="<?php echo esc_url( get_theme_mod( 'sotial_networks_control_twitter' ) ); ?>">

							</a></li>
					<?php endif; ?>
					<?php if ( strlen( get_theme_mod( 'sotial_networks_control_behance' ) ) > 8 ): ?>
						<li><a class="fa fa-linkedin"
						       href="<?php echo esc_url( get_theme_mod( 'sotial_networks_control_behance' ) ); ?>">

							</a></li>
					<?php endif; ?>
					<?php if ( strlen( get_theme_mod( 'sotial_networks_control_instagram' ) ) > 8 ): ?>
						<li><a class="fa fa-instagram"
						       href="<?php echo esc_url( get_theme_mod( 'sotial_networks_control_instagram' ) ); ?>">

							</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>
	<?php
	return ob_get_clean();

}


/*  Virgo project */


/*
 * bauhaus_project_automat
 */

add_shortcode( 'bauhaus_project_automat', 'bauhaus_project_automat_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_project_automat_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => '',
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'project_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<div id="projects" class="<?php echo esc_attr( $css_class ); ?> porftolio">
		<?php if ( isset( $atts['heading']{1} ) ) { ?>
			<div class="container">
				<div class="row">
					<div class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( isset( $heading{1} ) ) {
								echo esc_html( $heading );
							} ?></h2>
						<p class="section-lead"><?php if ( isset( $description{1} ) ) {
								echo wp_kses_post( $description );
							} ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="isotope js-gallery <?php if ( $type_c == 1 ) {

		} else {
			echo "isotope-padding";
		} ?>">
			<?php

			$rentit_new_arr = array(
				'posts_per_page' => $posts,
				'order' => $order,
				'orderby' => $orderby,
				'post_status' => 'publish',
				'post_type' => 'projects',
			);


			if ( $project_category != 'all' ) {
				$str = $project_category;
				$arr = explode( ',', $str );
				$rentit_new_arr['tax_query'][] = array(
					'taxonomy' => 'projects_categories',
					'field' => 'slug',
					'terms' => $arr
				);
			}


			$rentit_custom_query = new WP_Query( $rentit_new_arr );
			if ( $rentit_custom_query->have_posts() ):
				while ( $rentit_custom_query->have_posts() ) {
					$rentit_custom_query->the_post();


					$terms = get_the_terms( get_the_ID(), 'projects_categories' );


					?>
					<div class="<?php
					if ( !empty( $terms ) ):
						foreach ( $terms as $v ) {
							echo esc_html( $v->slug . " " );
						}
					endif; ?> isotope-item">
						<a <?php if ( $type_l == 1 ) { ?>
							class="link"
						<?php } ?>
							href="<?php if ( $type_l == 1 ) {
								echo esc_url( get_the_permalink() );
							} else {
								echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
							} ?>" title=" <?php echo the_title(); ?>">
							<figure class="showcase-item">
								<div class="showcase-item-thumbnail">
									<img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
								</div>
								<figcaption class="showcase-item-hover dark">
									<div class="showcase-item-info">
										<div class="showcase-item-category">
											<?php
											if ( !empty( $terms ) ):
												foreach ( $terms as $v ) {
													echo esc_html( $v->slug . " " );
												}
											endif; ?>
										</div>
										<div class="showcase-item-title">
											<?php the_title(); ?>
										</div>
									</div>
								</figcaption>
							</figure>
						</a>
					</div>

					<?php

				}
				wp_reset_postdata();


			endif;
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();

}


/**
 * Partners
 */
add_shortcode( 'bauhaus_partners_style_two', 'bauhaus_partners_two_func' );
function bauhaus_partners_two_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'images' => '',
			'section_id' => '',
			'css' => '',

		), $atts
	);
	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $images );

	?>
	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="partners section <?php echo esc_attr( $css_class ); ?> ">
		<div class="container">
			<div class="js-partners-carousel">


				<?php
				foreach ( $arr_img as $item ) { ?>

					<div class="partner">

						<?php

						global $bauhaus_class;
						$img_arr = wp_get_attachment_image_src( $item, 'full' );
						$img = $img_arr[0];

						?>

						<img alt="" class="img-responsive center-block" src="<?php echo esc_url( $img ); ?>">
					</div>
				<?php }
				?>

			</div>
		</div>

	</div>
	<?php
	return ob_get_clean();
}


/*
 *  About features
 */


add_shortcode( 'bauhaus_elegant_features_dark', 'bauhaus_elegant_features_dark_func' );
function bauhaus_elegant_features_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			't' => esc_html__( 'Services', 'bauhaus' ),
			'class' => '',
			'icon' => '',
			'items' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>
						<div class="col-base col-feature col-sm-6 col-md-4">
							<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
									echo esc_html( $item['ts'] );
								} ?></h4>
							<p><?php if ( isset( $item['ds'] ) ) {
									echo esc_html( $item['ds'] );
								} ?></p>

						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
}


/*
 *  About features
 */


add_shortcode( 'bauhaus_architecture_features_dark', 'bauhaus_architecture_features_dark_func' );
function bauhaus_architecture_features_dark_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'class' => '',
			'icon' => '',
			'items' => '',
			'animation' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<!-- Features -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>
						<div class="col-base col-feature col-sm-6 col-md-4 <?php echo esc_html( $animation ); ?>" <?php if ( isset( $item['anim_delay'] ) ) { ?> data-wow-delay="<?php echo esc_html( $item['anim_delay'] ); ?>s"<?php } ?>>
							<div class="media-left"><i class="<?php echo( ( $item['icon'] ) ); ?>"></i></div>
							<div class="media-right">
								<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
										echo esc_html( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 * bauhaus_portfolio_architecture
 */


add_shortcode( 'bauhaus_portfolio_architecture', 'bauhaus_portfolio_architecture_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_architecture_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'class' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'filter' => '',
		'menu_visibility' => '',
		'heading' => esc_html__( 'Recent works', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="<?php if ( $atts['menu_visibility'] == '1' ) { ?> porftolio  section pb-0 <?php } elseif ( $atts['menu_visibility'] == '2' ) { ?> porftolio <?php } ?><?php echo esc_attr( $atts['class'] ); ?> <?php echo esc_attr( $css_class ); ?>  ">
		<div class="container">
			<?php if ( isset( $atts['heading']{1} ) ) { ?>
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>
					</header>
				</div>
			<?php } ?>


			<?php

			if ( $atts['menu_visibility'] == '1' ) {
				?>
				<ul class=" filter <?php if ( isset( $atts['filter'] ) ) {
					echo esc_attr( $atts['filter'] );
				} ?> ">
					<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
					<?php
					if ( isset ( $items  [0] ) ) {
						foreach ( $items as $v1 ) {


							?>
							<li><a href="#"
							       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
							</li>
							<?php
						}
					}
					?>

				</ul>
				<?php
			} elseif ( $atts['menu_visibility'] == '2' ) {
				echo "";
			}

			?>
		</div>
		<?php
		$container = ' ';
		$row = ' ';
		$col = $atts['col'];
		if ( $col == 'col-3' ) {
			$col = 'col-3 isotope-padding';
			$container = ' ';
			$row = ' ';
		} elseif ( $col == 'col-2 ' ) {
			$col = 'col-2  isotope-padding ';
			$container = 'container';
			$row = 'row';
		} elseif ( $col == 'padding ' ) {
			$col = 'isotope-padding';
			$container = ' ';
			$row = ' ';
		}

		?>
		<div class="isotope js-gallery">
			<?php

			if ( isset ( $items[1] ) ) {
				foreach ( $items as $t ) {


					$image_items = vc_param_group_parse_atts( $t['image_items'] );
					$slug = $t['slug'];


					if ( $image_items ) {

						foreach ( $image_items as $img ) {

							if ( isset( $img['img_src']{1} ) ) {

								$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

								?>
								<div class="isotope-item <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
									echo esc_attr( $img['size'] );
								} ?>  ">
									<a href="<?php echo esc_url( $img_arr[0] ); ?>"
									   title="<?php echo esc_html( $t ['title'] ); ?>">
										<figure class="showcase-item">
											<div class="showcase-item-thumbnail">
												<img alt="" src="<?php if ( isset( $img_arr[0] ) ) {
													echo esc_url( $img_arr[0] );
												} ?>">
											</div>
											<figcaption class="showcase-item-hover hover-dark">
												<div class="showcase-item-info">
													<div class="showcase-item-category"><?php echo esc_html( $t ['cat'] ); ?></div>
													<div class="showcase-item-title"><?php echo esc_html( $t ['title'] ); ?></div>
													<i class="ion-ios-plus-empty"></i>
												</div>
											</figcaption>
										</figure>
									</a>
								</div>

								<?php
							}
						}

					}
				}
			}
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*
 *  Reviews
 */


add_shortcode( 'bauhaus_team_architect', 'bauhaus_team_architect_func' );
function bauhaus_team_architect_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'items' => '',
			'images' => '',
			'desc' => esc_html__( 'CEO / Founder', 'bauhaus' ),
			'icon' => esc_html__( 'fa fa-facebook', 'bauhaus' ),
			'title' => esc_html__( 'Our magic team.', 'bauhaus' ),
			'name' => esc_html__( 'Jack Wilshere ', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	$contents = wpb_js_remove_wpautop( $content, true );


	?>

	<!-- Team -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="team section pb-0 <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php esc_html_e( $title ) ?></h2>
					<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="clearfix">
				<?php
				foreach ( $tems_v as $item ) { ?>
					<div class="col-team col-md-6 col-lg-3">
						<figure class="team-profile">

							<?php

							global $bauhaus_class;
							$img_arr = wp_get_attachment_image_src( $item['images'], 'full' );


							if ( isset( $img_arr[0] ) ) {
								?>

								<img alt="" src="<?php echo esc_url( $img_arr[0] ); ?>">
								<?php

							}
							?>
							<figcaption class="team-caption white">
								<div class="team-meta">
									<strong class="team-name"><?php if ( isset( $item['name'] ) ) {
											echo esc_html( $item['name'] );
										} ?></strong>
                                    <span class="team-spec"><?php if ( isset( $item['desc'] ) ) {
		                                    echo esc_html( $item['desc'] );
	                                    } ?></span>
								</div>

								<ul class="team-social social-list">
									<?php
									$itemin = vc_param_group_parse_atts( $item['itemin'] );
									foreach ( $itemin as $itemsoc ) {
										?>
										<li>
											<a href="<?php if ( isset( $itemsoc['url'] ) ) {
												echo esc_html( $itemsoc['url'] );
											} ?>" target="_blank" class="<?php if ( isset( $itemsoc['icon'] ) ) {
												echo esc_html( $itemsoc['icon'] );
											} ?>"></a>
										</li>
										<?php
									}
									?>
								</ul>
							</figcaption>
						</figure>
					</div>
				<?php }
				?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 *  Architect
 */


add_shortcode( 'bauhaus_review_architect', 'bauhaus_review_architect_func' );
function bauhaus_review_architect_func( $atts, $content = null ) {
	ob_start();
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'items' => '',
			'images' => '',
			'desc' => esc_html__( 'Do you want to be even more successful? 
                        Learn to love learning and growth. The more effort you put into improving your skills, 
                        the bigger the payoff you will get. Realize that things will be hard at first, but rewards worth it.', 'bauhaus' ),
			'icon' => esc_html__( 'fa-quote-right', 'bauhaus' ),
			'title' => esc_html__( 'Clients about us..', 'bauhaus' ),
			'name' => esc_html__( 'Calum Chambers ', 'bauhaus' ),
			'position' => esc_html__( 'Adobe sales manager ', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	$contents = wpb_js_remove_wpautop( $content, true );

	?>

	<!-- Clients -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="<?php echo esc_attr( $css_class ); ?> clients section">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php esc_html_e( $title ) ?></h2>
					<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="container-fluid">
				<div class="col-md-6 col-md-offset-3">
					<div class="clients-wrapper">
						<div class="client-carousel js-client-carousel">
							<?php
							foreach ( $tems_v as $item ) { ?>
								<div class="client">
									<span class="quote">"</span>
									<p class="client-text">
										<?php if ( isset( $item['desc'] ) ) {
											echo esc_html( $item['desc'] );
										} ?></p>
                                    <span class="h5 client-name">
	                      		<?php if ( isset( $item['name'] ) ) {
			                        echo esc_html( $item['name'] );
		                        } ?> —
							</span>
									<i><?php if ( isset( $item['position'] ) ) {
											echo esc_html( $item['position'] );
										} ?></i>
								</div>
							<?php }
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/**
 * Partners
 */
add_shortcode( 'bauhaus_partners_architect', 'bauhaus_partners_architect_func' );
function bauhaus_partners_architect_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'items' => '',
			'images' => '',
			'section_id' => '',
			'css' => '',

		), $atts
	);
	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	$arr_img = explode( ',', $images );

	?>

	<!-- Partners -->


	<div <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="partners section-sm bg-black <?php echo esc_attr( $css_class ); ?> ">
		<div class="container">
			<div class="js-partners-carousel">


				<?php
				foreach ( $arr_img as $item ) { ?>

					<div class="partner">

						<?php

						global $bauhaus_class;
						$img_arr = wp_get_attachment_image_src( $item, 'full' );
						$img = $img_arr[0];

						?>

						<img alt="" class="img-responsive center-block" src="<?php echo esc_url( $img ); ?>">
					</div>
				<?php }
				?>

			</div>
		</div>

	</div>
	<?php
	return ob_get_clean();
}


/*
 *  banner
 */

add_shortcode( 'bauhaus_banner_architect', 'bauhaus_banner_architect_func' );
function bauhaus_banner_architect_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Offer your project to Virgo team.', 'bauhaus' ),
			'tb' => esc_html__( 'Let\'s talk', 'bauhaus' ),
			't_url' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

	<!-- Banner -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="promo section-sm <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2 class="promo-title text-white"><?php echo esc_html( $title ); ?></h2>
			<a <?php if ( $t_url{0} == "#" ) { ?> href="<?php echo esc_html( $t_url ); ?>" data-toggle="modal" <?php } else { ?>
				href="<?php echo esc_html( $t_url ); ?>" target="_blank" <?php } ?>
				class="btn btn-dark wow swing"><?php echo esc_html( $tb ); ?></a>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 * bauhaus_portfolio_architecture
 */


add_shortcode( 'bauhaus_portfolio_interior', 'bauhaus_portfolio_interior_func' );
/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_portfolio_interior_func( $atts, $content ) {
	ob_start();

	( $atts = shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'cat' => '',
		'items' => '',
		'img_src' => '',
		'title' => '',
		'image_items' => '',
		'slug' => '',
		'col' => '',
		'size' => '',
		'heading' => esc_html__( 'Look what we do best.', 'bauhaus' ),
		'description' => esc_html__( 'Look at our projects. We presented just a part of works. Our team of experts has competences of different branches and specializations.', 'bauhaus' ),

	), $atts ) );


	$items = vc_param_group_parse_atts( $atts['items'] );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<div class="porftolio section pb-0">
		<?php if ( isset( $atts['heading']{1} ) ) { ?>
			<div class="container">
				<div class="row">
					<header class="text-center col-md-8 col-md-offset-2">
						<h2 class="section-title"><?php if ( $atts['heading'] ) {
								echo esc_html( $atts['heading'] );
							} ?></h2>
						<p class="section-lead">
							<?php echo esc_html( $atts['description'] ); ?>
						</p>
					</header>
				</div>
			</div>
		<?php } ?>

		<div class="container">
			<ul class=" filter filter-brown">
				<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All', 'bauhaus' ); ?></a></li>
				<?php
				if ( isset ( $items  [0] ) ) {
					foreach ( $items as $v1 ) {


						?>
						<li><a href="#"
						       data-filter=".<?php echo esc_attr( $v1['slug'] ); ?>"><?php echo esc_html( $v1['cat'] ); ?></a>
						</li>
						<?php
					}
				}
				?>

			</ul>
		</div>
		<div class="isotope js-gallery">
			<?php

			if ( isset ( $items[1] ) ) {
				foreach ( $items as $t ) {


					$image_items = vc_param_group_parse_atts( $t['image_items'] );
					$slug = $t['slug'];


					if ( $image_items ) {

						foreach ( $image_items as $img ) {

							if ( isset( $img['img_src']{1} ) ) {

								$img_arr = wp_get_attachment_image_src( $img['img_src'], 'full' );

								?>
								<div class="isotope-item <?php echo esc_attr( $slug ); ?> <?php if ( isset( $img['size']{0} ) ) {
									echo esc_attr( $img['size'] );
								} ?>  ">
									<a href="<?php echo esc_url( $img_arr[0] ); ?>"
									   title="<?php echo esc_html( $t ['title'] ); ?>">
										<figure class="showcase-item">
											<div class="showcase-item-thumbnail">
												<img alt="" src="<?php if ( isset( $img_arr[0] ) ) {
													echo esc_url( $img_arr[0] );
												} ?>">
											</div>
											<figcaption class="showcase-item-hover hover-dark">
												<div class="showcase-item-info">
													<div class="showcase-item-category"><?php echo esc_html( $t ['cat'] ); ?></div>
													<div class="showcase-item-title"><?php echo esc_html( $t ['title'] ); ?></div>
													<i class="ion-ios-plus-empty"></i>
												</div>
											</figcaption>
										</figure>
									</a>
								</div>

								<?php
							}
						}

					}
				}
			}
			?>
		</div>
	</div>


	<?php
	return ob_get_clean();
}


/*
 *  Reviews
 */


add_shortcode( 'bauhaus_team_interior', 'bauhaus_team_interior_func' );
function bauhaus_team_interior_func( $atts, $content = null ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'items' => '',
			'images' => '',
			'desc' => esc_html__( 'CEO / Founder', 'bauhaus' ),
			'icon' => esc_html__( 'fa fa-facebook', 'bauhaus' ),
			'title' => esc_html__( 'Our magic team.', 'bauhaus' ),
			'name' => esc_html__( 'Jack Wilshere ', 'bauhaus' ),
			'css' => '',

		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );
	$tems_v = vc_param_group_parse_atts( $atts['items'] );
	$contents = wpb_js_remove_wpautop( $content, true );


	?>

	<!-- Team -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="team section pb-0 <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php esc_html_e( $title ) ?></h2>
					<p class="section-lead"><?php echo strip_tags( $contents, '<br><br/>' ); ?></p>
				</header>
			</div>
		</div>
		<div class="section-content">
			<div class="clearfix">
				<?php
				foreach ( $tems_v as $item ) { ?>
					<div class="col-team col-md-6 col-lg-3">
						<figure class="team-profile">

							<?php

							global $bauhaus_class;
							$img_arr = wp_get_attachment_image_src( $item['images'], 'full' );


							if ( isset( $img_arr[0] ) ) {
								?>

								<img alt="" src="<?php echo esc_url( $img_arr[0] ); ?>">
								<?php

							}
							?>
							<figcaption class="team-caption brown">
								<div class="team-meta">
									<strong class="team-name"><?php if ( isset( $item['name'] ) ) {
											echo esc_html( $item['name'] );
										} ?></strong>
                                    <span class="team-spec"><?php if ( isset( $item['desc'] ) ) {
		                                    echo esc_html( $item['desc'] );
	                                    } ?></span>
								</div>

								<ul class="team-social social-list">
									<?php
									$itemin = vc_param_group_parse_atts( $item['itemin'] );
									foreach ( $itemin as $itemsoc ) {
										?>
										<li>
											<a href="<?php if ( isset( $itemsoc['url'] ) ) {
												echo esc_html( $itemsoc['url'] );
											} ?>" target="_blank" class="<?php if ( isset( $itemsoc['icon'] ) ) {
												echo esc_html( $itemsoc['icon'] );
											} ?>"></a>
										</li>
										<?php
									}
									?>
								</ul>
							</figcaption>
						</figure>
					</div>
				<?php }
				?>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();
}


/*
 *  Interior features
 */


add_shortcode( 'bauhaus_interior_features', 'bauhaus_interior_features_func' );
function bauhaus_interior_features_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'class' => '',
			'icon' => '',
			'items' => '',
			'animation' => '',
			'ts' => esc_html__( 'WEB DESIGN', 'bauhaus' ),
			'ds' => esc_html__( 'Ever wondered how some graphic designers always manage to produce beautiful looking designs for their brochures, website designs.', 'bauhaus' ),
			'section_id' => '',
			'css' => '',

		), $atts

	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>


	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="features bg-dark section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php if ( isset( $t{0} ) ) { ?>
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title text-white text-center"><?php echo esc_html( $t ); ?></h2>
				</header>
			<?php } ?>
			<div class="row-base row">
				<?php
				$items_v = vc_param_group_parse_atts( $atts['items'] );
				if ( $items_v ) {
					foreach ( $items_v as $item ) { ?>

						<div class="col-base col-feature col-sm-6 col-md-4 <?php echo esc_html( $animation ); ?> "
							<?php if ( isset( $item['anim_delay'] ) ) { ?> data-wow-delay="<?php echo esc_html( $item['anim_delay'] ); ?>s"<?php } ?>>
							<div class="media-left"><i class="<?php echo( ( $item['icon'] ) ); ?>"></i></div>
							<div class="media-right">
								<h4 class="text-white"><?php if ( isset( $item['ts'] ) ) {
										echo esc_html( $item['ts'] );
									} ?></h4>
								<p><?php if ( isset( $item['ds'] ) ) {
										echo esc_html( $item['ds'] );
									} ?></p>
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
	</section>


	<?php
	return ob_get_clean();
}


/*
 * bauhaus_blog_recent
 */

add_shortcode( 'bauhaus_blog_recent_interior', 'bauhaus_blog_recent_interior_func' );
/**
 * @param $atts
 * @param $content
 * @return string
 */
function bauhaus_blog_recent_interior_func( $atts, $content ) {
	global $Virgo_class;
	ob_start();
	extract( shortcode_atts( array(
		'section_id' => '',
		'css' => '',
		'heading' => esc_html__( 'Latest from blog.', 'bauhaus' ),
		'hidepoint' => 'show',
		'hidepointimg' => 'show',
		'slogan' => '',
		'description' => '',
		'headingcolor' => '',
		'posts' => 0,
		'order' => 'DESC',
		'orderby' => 'date',
		'portfolio_category' => 'all',
		'col' => '',
		'descriptioncolor' => '',
		'aftercolor' => '',
		'iconcolor' => '',
		'filtercolor' => '',
		'filterpointcolor' => '',
		'filterhovercolor' => '',
		'worktitlecolor' => '',
		'workdes' => '',
		'workmaskcolor' => '',
		'type_l' => '1',
		'type_c' => '1',
		'type_m' => '1'
	), $atts ) );

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $atts );


	?>


	<!-- Blog -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="section bg-light <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<div class="row">
				<header class="text-center col-md-8 col-md-offset-2">
					<h2 class="section-title"><?php echo esc_html( $heading ); ?></h2>
				</header>
			</div>
		</div>
		<div class="section-content-2">
			<div class="container">
				<div class="row-base row">
					<?php

					$rentit_new_arr = array(
						'posts_per_page' => $posts,
						'order' => $order,
						'orderby' => $orderby,
						'post_status' => 'publish',
						'category_name' => $portfolio_category,
					);


					$rentit_custom_query = new WP_Query( $rentit_new_arr );
					if ( $rentit_custom_query->have_posts() ):
						while ( $rentit_custom_query->have_posts() ) {
							$rentit_custom_query->the_post();

							$bauhaus_cat = 0;
							$bauhaus_category = get_category( get_query_var( 'cat' ) );
							if ( isset( $bauhaus_category->cat_ID ) ) {
								$bauhaus_cat = $bauhaus_category->cat_ID;
							} else {
								$bauhaus_cat = 0;
							}

							$terms = get_the_terms( get_the_ID(), 'portfolio_categories' );
							?>
							<div class="col-blog col-blog-home col-base col-md-4 col-none">
								<article class="blog">
									<div class="blog-thumbnail">
										<a href="<?php echo esc_url( get_the_permalink() ); ?>">
											<div class="blog-thumbnail-img grayscale">
												<img src="<?php the_post_thumbnail_url(); ?>" alt=""
												     class="img-responsive">
											</div>
										</a>
									</div>
									<div class="blog-info">
										<?php bauhaus_get_list_cats_blog(); ?>
										<h3 class="blog-title">
											<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
										</h3>
										<div class="blog-meta">
											<div class="pull-left">
												<?php esc_html_e( 'by ', 'bauhaus' ); ?><a
													href="<?php echo esc_url( get_the_author_link() ); ?>"
													class="author"><?php echo esc_html( get_the_author() ); ?></a>
											</div>
											<div class="pull-right">
												<div class="time"><?php echo esc_html( get_the_time( 'M , j ' ) ); ?></div>
											</div>
										</div>
									</div>
								</article>
							</div>
							<?php
						}
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/*
 *  banner
 */

add_shortcode( 'bauhaus_banner_interior', 'bauhaus_banner_interior_func' );
function bauhaus_banner_interior_func( $atts, $content ) {
	ob_start();
	$content = !empty( $content ) ? $content : "";
	$atts = shortcode_atts(
		array(
			'section_id' => '',
			'title' => esc_html__( 'Offer your project to Virgo team.', 'bauhaus' ),
			'tb' => esc_html__( 'Let\'s talk', 'bauhaus' ),
			't_url' => esc_html__( '#request', 'bauhaus' ),
			'css' => '',
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );

	?>

	<!-- Banner -->

	<section <?php if ( isset( $section_id{0} ) ) { ?> id="<?php echo esc_attr( $section_id ); ?>"  <?php } ?>
		class="promo bg-brown section-sm <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<h2 class="promo-title text-white"><?php echo esc_html( $title ); ?></h2>
			<a <?php if ( $t_url{0} == "#" ) { ?> href="<?php echo esc_html( $t_url ); ?>" data-toggle="modal" <?php } else { ?>
				href="<?php echo esc_html( $t_url ); ?>" target="_blank" <?php } ?>
				class="btn btn-trans-2 wow swing"><?php echo esc_html( $tb ); ?></a>
		</div>
	</section>

	<?php
	return ob_get_clean();

}


/**
 * Contact
 */

add_shortcode( 'bauhaus_interior_contact', 'bauhaus_interior_contact_func' );

/**
 * @param $atts
 * @param $content
 *
 * @return string
 */
function bauhaus_interior_contact_func( $atts, $content ) {

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
			'map_visibility' => '1',
			'field_first' => esc_html__( 'Name ', 'bauhaus' ),
			'field_second' => esc_html__( 'Email ', 'bauhaus' ),
			'field_three' => esc_html__( 'Message ', 'bauhaus' ),
			'field_fourth' => esc_html__( 'Submit ', 'bauhaus' ),
			'css' => ''
		), $atts
	);

	extract( $atts );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $atts['css'], ' ' ), '', $atts );


	?>
	<div class="section <?php echo esc_attr( $css_class ); ?>">
		<div class="container">
			<?php if ( isset( $content{0} ) ) { ?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php echo do_shortcode( $content ); ?>
					</div>
				</div>
			<?php } else { ?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form class="js-ajax-form">
							<div class="form-group col-md-6">
								<input type="text" class="" name="name" required
								       placeholder="<?php echo esc_html( $atts['field_first'] ); ?> *">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="" name="email" required
								       placeholder="<?php echo esc_html( $atts['field_second'] ); ?> *">
							</div>
							<div class="form-group col-md-12">
		                    <textarea class="" rows="3" name="message"
		                              placeholder="<?php echo esc_html( $atts['field_three'] ); ?>"></textarea>
							</div>
							<div class="col-md-12 text-right">
								<button type="submit" class="btn btn-brown"
								        data-text-hover="<?php echo esc_html( $atts['field_fourth'] ); ?>"><?php echo esc_html( $atts['field_fourth'] ); ?>
								</button>
							</div>
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>


	<?php

	return ob_get_clean();
}