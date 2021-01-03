<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="animsition">
    <header class="navbar navbar-2 navbar-white boxed">



        <!-- Content CLick Capture-->
		<?php if ( has_nav_menu( 'bauhaus_topmenu' ) ) { ?>
            <div class="click-capture"></div>

            <!-- Sidebar Menu-->

            <div class="menu">
                <span class="close-menu icon-cross2 right-boxed"></span>


				<?php do_action( 'bauhaus-before-menu' ); ?>

				<?php


				$bauhaus_defaults = array(
					'theme_location' => 'bauhaus_topmenu',
					'menu' => '',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => '',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => '',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class=" menu-list right-boxed   %2$s">%3$s</ul>',
					'depth' => 0,

				);


				wp_nav_menu( $bauhaus_defaults );


				?>

				<?php if ( is_active_sidebar( 'bauhaus_menu_sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'bauhaus_menu_sidebar' ); ?>

				<?php endif; ?>


                <div class="menu-footer right-boxed">
                    <div class="social-list">
						<?php
						if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_social_shortcode' ) ) > 8 ):
							echo do_shortcode( get_theme_mod( 'bauhaus_social_networks_control_social_shortcode' ) );
						endif; ?>

						<?php if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_twitter' ) ) > 8 ): ?>

                            <a href="<?php echo esc_url( get_theme_mod( 'bauhaus_social_networks_control_twitter' ) ); ?>"
                               class="icon ion-social-twitter"></a>
						<?php endif; ?>

						<?php if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_facebook' ) ) > 8 ): ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'bauhaus_social_networks_control_facebook' ) ); ?>"
                               class="icon ion-social-facebook"></a>


						<?php endif; ?>

						<?php if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_googleplus' ) ) > 8 ): ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'bauhaus_social_networks_control_googleplus' ) ); ?>"
                               class="icon ion-social-googleplus"></a>


						<?php endif; ?>

						<?php if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_linkedin' ) ) > 8 ): ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'bauhaus_social_networks_control_linkedin' ) ); ?>"
                               class="icon ion-social-linkedin"></a>


						<?php endif; ?>
						<?php if ( strlen( get_theme_mod( 'bauhaus_social_networks_control_dribbble' ) ) > 8 ): ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'bauhaus_social_networks_control_dribbble' ) ); ?>"
                               class="icon ion-social-dribbble-outline"></a>


						<?php endif; ?>
                    </div>
                    <div class="copy">

						<?php
						echo wp_kses_post(
							do_shortcode( ( get_theme_mod( 'footer_copyright', ' &copy; ' . esc_html__( 'Bauhaus ', 'bauhaus' ) . date( 'Y' ) . '<br/>' . esc_html__( 'All Rights Resevered ', 'bauhaus' ) . ' ' ) ) ) ); ?>


                    </div>
                </div>
            </div>

		<?php } ?>

		<?php if ( has_nav_menu( 'bauhaus_topmenu' ) ) { ?>

            <button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
		<?php } ?>


        <a class="brand" href="<?php
	    echo esc_url( home_url( '/' ) ); ?>">

		    <?php
		    $logo = get_theme_mod( 'bauhaus_logo_small' );
		    $logo_white = get_theme_mod( 'bauhaus_logo_white' );
		    $logo_text = get_theme_mod( 'bauhaus_logo_text' );
		    $logo_name = get_theme_mod( 'bauhaus_logo_name' );
		    if ( isset( $logo{2} ) ) {
			    ?>
                <img class="brand-img" alt="" src="<?php echo esc_url( $logo ); ?>">

			    <?php if ( isset( $logo_white{1} ) ): ?>
                    <img class="brand-img-white" alt="" src="<?php  echo esc_url($logo_white); ?>">
			    <?php endif; ?>
                <div class="brand-info">
                    <div class="brand-name"><?php if ( isset( $logo_name{0} ) ) {
						    echo wp_kses_post( $logo_name );
					    } ?></div>
                    <div class="brand-text"><?php if ( isset( $logo_text{0} ) ) {
						    echo wp_kses_post( $logo_text );
					    } ?></div>
                </div>

			    <?php


		    } else {
			    echo esc_html( get_option( 'blogname' ) );
		    }
		    ?>

        </a>
		<?php  ///////////////////////////////////// ?>
        <!-- Navigation Desctop -->

        <nav class="nav-desctop hidden-xs hidden-sm">

			<?php $bauhaus_defaults = array(
				'theme_location' => 'bauhaus_header_top',
				'menu' => '',
				'container' => false,
				'container_class' => '',
				'container_id' => '',
				'menu_class' => '',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul id="%1$s" class="nav-desctop-list %2$s">%3$s</ul>',
				'depth' => 0
			);


			if ( has_nav_menu( 'bauhaus_header_top' ) ) {
				wp_nav_menu( $bauhaus_defaults );
			}
			?>
        </nav>


        <!-- Navigation Mobile -->



        <div class="visible-lg">

			<?php   if ( strlen( get_theme_mod( 'bauhaus_header_phone' ) ) > 1 || strlen( get_theme_mod( 'bauhaus_header_text' ) ) > 1 )  : ?>

                <div class="navbar-spacer hidden-sm hidden-xs"></div>
                <address
                        class="navbar-address hidden-sm hidden-xs"> <?php echo esc_html( get_theme_mod( 'bauhaus_header_text' ) ); ?>
                    <span
                            class="text-dark"><?php echo esc_html( get_theme_mod( 'bauhaus_header_phone' ) ); ?></span>
                </address>

			<?php endif;   ?>
        </div>
    </header>

