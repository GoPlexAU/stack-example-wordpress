<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package bauhaus
 */
/* HEADER ------------------------------------------- */
function bauhaus_custom_styling() { ?>
	<?php if ( function_exists( 'ot_get_option' ) ) : ?>

        <style>
            <?php if ( ot_get_option( 'bauhaus_logowidth' ) !='' & ot_get_option( 'bauhaus_logowidth' ) !='33' ): ?>
            .brand img {
                width: <?php echo esc_attr( ot_get_option( 'bauhaus_logowidth' ) ); ?>px;
            }
            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_navbar_height' ) !='' ): ?>
            .navbar {
                height: <?php echo esc_attr( ot_get_option( 'bauhaus_navbar_height' ) ); ?>rem ;
            }
            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_logoheight' ) !='' &  ot_get_option( 'bauhaus_logoheight' ) != '33'): ?>
            .brand img {
                height: <?php echo esc_attr( ot_get_option( 'bauhaus_logoheight' ) ); ?>px;
            }
            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_font_size' ) !='' &&  ot_get_option( 'bauhaus_font_size' ) != '14'): ?>
            .brand {
                font-size: <?php echo esc_attr( ot_get_option( 'bauhaus_font_size' ) ); ?>px;
            }

            <?php endif; ?>
            <?php if( is_customize_preview('administrator')): ?>
            .logged-in .navbar.affix, .logged-in .navbar {
                top: 0px;
            }

            <?php endif; ?>



            <?php if ( ot_get_option( 'bauhaus_header_bg' ) !='' ): ?>
            .navbar {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_header_bg' ) ); ?>;
            }

            <?php endif; ?>	<?php if ( ot_get_option( 'bauhaus_header_afix_bg' ) !='' ): ?>
            .navbar.affix {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_header_afix_bg' ) ); ?>;
            }

            <?php endif; ?>

            <?php if ( ot_get_option( 'bauhaus_navigationbg' ) !='' ): ?>
            .menu {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_navigationbg' ) ); ?>;
            }

            <?php endif; ?>


            <?php if ( ot_get_option( 'bauhaus_navitem' ) !='' ): ?>
            .menu-list  > li > a {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_navitem' ) ); ?>;
            }



            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_navitemhover' ) !='' ): ?>
            .menu-list .active>a, .menu-list li a:hover {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_navitemhover' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_navitem_social' ) !='' ): ?>
            .menu-footer .social-list a  , .social-list a{
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_navitem_social' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_navitem_copy' ) !='' ): ?>
            .menu-footer .copy {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_navitem_copy' ) ); ?>;
            }



            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_sidebarwidgettitlecolor' ) !='' ): ?>
            .widget-title {

                color: <?php echo esc_attr( ot_get_option( 'bauhaus_sidebarwidgettitlecolor' ) ); ?>;
            }



            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_sidebarlinkcolor' ) !='' ): ?>
            .widget ul li a {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_sidebarlinkcolor' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_sidebarlinkhovercolor' ) !='' ): ?>
            .widget ul li a:hover {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_sidebarlinkhovercolor' ) ); ?>;
            }



            <?php endif; ?>

            <?php if ( ot_get_option( 'bauhaus_blogheaderpaddingtop' ) !='' && ot_get_option( 'bauhaus_blogheaderpaddingtop' ) !='17'): ?>

            .category .page-header {

                padding-top: <?php echo esc_attr( ot_get_option( 'bauhaus_blogheaderpaddingtop' ) ); ?>em !important;
                padding-bottom: <?php echo esc_attr( ot_get_option( 'bauhaus_blogheaderpaddingbottom' ) ); ?>em !important;
                padding-left: 0em;
                padding-right: 0em;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_blogheadingcolor' ) !='' ): ?>
            .page .main-blog h1, .category .main-blog h1, .page .main-blog p.lead, .category .main-blog p.lead {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_blogheadingcolor' ) ); ?>;
            }
            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_blogsubtitlecolor' ) !='' ): ?>
            .category .blog-list h3.post-title {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_blogsubtitlecolor' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_m_c' ) !='' ): ?>
            .team-hover {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_m_c' ) ); ?> !important;
            }

            .post-type-archive-projects .project-item:hover .project-hover  {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_m_c' ) ); ?> !important;
            }

            .project-item:hover .project-hover-2  , .project-item:hover .project-hover {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_m_c' ) ); ?> !important;
            }



            <?php endif; ?>
            <?php if ( ot_get_option('bauhaus_mask') == 'off') : ?>
            .team-hover , .project-item:hover .project-hover {
                background-color: transparent;
            }
            <?php endif; ?>
            <?php if ( ot_get_option('bauhaus_mask') == 'off') : ?>
            .post-type-archive-projects .project-item:hover .project-hover  {
                background-color: transparent;
            }
            <?php endif; ?>

            <?php if ( ot_get_option('bauhaus_mask') == 'off') : ?>
            .project-item:hover .project-hover-2  {
                background-color: transparent !important;
            }





            <?php endif; ?>

            <?php if ( ot_get_option( 'bauhaus_frontpage_header_slogan_color' ) !='' ): ?>
            .home p {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_frontpage_header_slogan_color' ) ); ?>;
            }

            <?php endif; ?>

            <?php if ( ot_get_option( 'bauhaus_frontpage_slider_dotes_active' ) !='' ): ?>
            #rev_slider_1_1 .post-gallery .tp-bullet.selected, #rev_slider_1_1 .post-gallery .tp-bullet:hover {
                background: <?php echo esc_attr( ot_get_option( 'bauhaus_frontpage_slider_dotes_active' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_frontpage_slider_dotes' ) !='' ): ?>
            #rev_slider_1_1 .post-gallery .tp-bullet {
                background: <?php echo esc_attr( ot_get_option( 'bauhaus_frontpage_slider_dotes' ) ); ?>;
            }

            <?php endif; ?>			<?php if ( ot_get_option( 'bauhaus_frontpage_hamburg' ) !='' ): ?>
            .navbar-toggle .icon-bar {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_frontpage_hamburg' ) ); ?>;
            }

            <?php endif; ?>



            <?php if ( ot_get_option( 'bauhaus_errorpageheadbg' ) !='' ): ?>
            .main-404 {
                background: url( <?php echo esc_attr( ot_get_option( 'bauhaus_errorpageheadbg' ) ); ?>);
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_errorheaderbgcolor' ) !='' ): ?>
            .main-404 {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_errorheaderbgcolor' ) ); ?>;
            }

            <?php endif; ?>
            <?php $bauhaus_errorheadingcolor = ot_get_option( 'bauhaus_errorheadingcolor', array() ); ?>
            <?php if($bauhaus_errorheadingcolor) { ?>
            .error404 .page-header-2 h1 {
                color: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_errorheadingcolor['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_errorheadingcolor['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_errorheadingcolor['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_errorheadingcolor['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_errorheadingcolor['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php if ( ot_get_option( 'bauhaus_errorheadingcolor' ) !='' ): ?>
            .error404 h1 {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_errorheadingcolor' ) ); ?>;
            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_errorheaderparagraphcolor' ) !='' ): ?>
            .error404 .title-info  {
                color: <?php echo esc_attr( ot_get_option( 'bauhaus_errorheaderparagraphcolor' ) ); ?>;
            }

            <?php endif; ?>

            <?php $bauhaus_errorheaderparagraphcolor = ot_get_option( 'bauhaus_errorheaderparagraphcolor', array() ); ?>
            <?php if($bauhaus_errorheaderparagraphcolor) { ?>
            .error404 .title-info {
                color: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_errorheaderparagraphcolor['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php if ((ot_get_option( 'bauhaus_errorheaderpaddingtop' ) !=''  &&   ot_get_option( 'bauhaus_errorheaderpaddingtop' ) != '17')||( ot_get_option( 'bauhaus_errorheaderpaddingbottom' ) !='' && ot_get_option( 'bauhaus_errorheaderpaddingbottom' )  !='14' )): ?>

            .main-404  {
                padding-top: <?php echo esc_attr( ot_get_option( 'bauhaus_errorheaderpaddingtop' ) ); ?>em !important;
                padding-bottom: <?php echo esc_attr( ot_get_option( 'bauhaus_errorheaderpaddingbottom' ) ); ?>em !important;
                padding-left: 0em;
                padding-right: 0em;
            }

            <?php endif; ?>

            <?php if ( ot_get_option( 'bauhaus_searchpageheadbg' ) !='' ): ?>
            .search {
                background: url( <?php echo esc_attr( ot_get_option( 'bauhaus_searchpageheadbg' ) ); ?>) no-repeat scroll center top / cover !important;
            }

            <?php endif; ?>



            <?php $bauhaus_searchheaderbgcolor = ot_get_option( 'bauhaus_searchheaderbgcolor', array() ); ?>
            <?php if($bauhaus_searchheaderbgcolor) { ?>
            .search  .display-1 {
                color: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_searchheaderbgcolor['text-transform'] ) ; ?>;
            }

            <?php } ?>







            <?php if ( ot_get_option( 'bauhaus_searchheaderpaddingtop' ) !='' && ot_get_option( 'bauhaus_searchheaderpaddingtop' ) !='17' ): ?>

            .search .page-header-2 {

                padding-top: <?php echo esc_attr( ot_get_option( 'bauhaus_searchheaderpaddingtop' ) ); ?>em !important;
                padding-bottom: <?php echo esc_attr( ot_get_option( 'bauhaus_searchheaderpaddingbottom' ) ); ?>em !important;
                padding-left: 0em;
                padding-right: 0em;
            }

            <?php endif; ?>



            <?php
			  /*
			 * Typography
			 */
			 $bauhaus_tipigrof = ot_get_option( 'bauhaus_tipigrof', array() ); ?>
            <?php if($bauhaus_tipigrof) { ?>
            body {
                color: <?php echo esc_attr( $bauhaus_tipigrof['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof['text-transform'] ) ; ?>;
            }

            <?php } ?>
            <?php if ( ot_get_option( 'bauhaus_blogheaderbgcolor' ) !='' ): ?>
            .page .main, .single .main, 	.category .main {
                background-color: <?php echo esc_attr( ot_get_option( 'bauhaus_blogheaderbgcolor' ) ); ?> !important;

            }

            <?php endif; ?>
            <?php if ( ot_get_option( 'bauhaus_blogheaderbgcolor_mask' ) !='' ): ?>
            .category .card-row:hover {
                background: <?php echo esc_attr( ot_get_option( 'bauhaus_blogheaderbgcolor_mask' ) ); ?> !important;

            }

            <?php endif; ?>
            <?php

			 $bauhaus_tipigrof1 = ot_get_option( 'bauhaus_tipigrof1', array() ); ?>
            <?php if( $bauhaus_tipigrof1 ) { ?>
            h1 , h1.display-2{{
                color: <?php echo esc_attr( $bauhaus_tipigrof1['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof1['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof1['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof1['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof1['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof1['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof1['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof1['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof1['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof1['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php $bauhaus_tipigrof2 = ot_get_option( 'bauhaus_tipigrof2', array() ); ?>
            <?php if($bauhaus_tipigrof2) { ?>
            h2 {
                color: <?php echo esc_attr( $bauhaus_tipigrof2['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof2['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof2['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof2['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof2['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof2['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof2['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof2['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof2['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof2['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php $bauhaus_tipigrof3 = ot_get_option( 'bauhaus_tipigrof3', array() ); ?>
            <?php if($bauhaus_tipigrof3) { ?>
            h3 {
                color: <?php echo esc_attr( $bauhaus_tipigrof3['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof3['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof3['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof3['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof3['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof3['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof3['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof3['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof3['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof3['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php $bauhaus_tipigrof4 = ot_get_option( 'bauhaus_tipigrof4', array() ); ?>
            <?php if($bauhaus_tipigrof4) { ?>
            h4 {
                color: <?php echo esc_attr( $bauhaus_tipigrof4['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof4['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof4['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof4['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof4['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof4['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof4['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof4['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof4['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof4['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php $bauhaus_tipigrof5 = ot_get_option( 'bauhaus_tipigrof5', array() ); ?>
            <?php if($bauhaus_tipigrof5) { ?>
            h5 {
                color: <?php echo esc_attr( $bauhaus_tipigrof5['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof5['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof5['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof5['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof5['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof5['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof5['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof5['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof5['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof5['text-transform'] ) ; ?>;
            }

            <?php } ?>

            <?php $bauhaus_tipigrof6 = ot_get_option( 'bauhaus_tipigrof6', array() ); ?>
            <?php if($bauhaus_tipigrof6) { ?>
            h6 {
                color: <?php echo esc_attr( $bauhaus_tipigrof6['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_tipigrof6['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_tipigrof6['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_tipigrof6['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_tipigrof6['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_tipigrof6['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_tipigrof6['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_tipigrof6['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_tipigrof6['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_tipigrof6['text-transform'] ) ; ?>;
            }

            <?php } ?>


            <?php $bauhaus_blockquote_typography = ot_get_option( 'bauhaus_blockquote_typography', array() ); ?>
            <?php if($bauhaus_blockquote_typography) { ?>
            blockquote p , blockquote {
                color: <?php echo esc_attr( $bauhaus_blockquote_typography['font-color'] ) ; ?>;
                font-family: <?php echo esc_attr( $bauhaus_blockquote_typography['font-family'] ) ; ?> !important;
                font-size: <?php echo esc_attr( $bauhaus_blockquote_typography['font-size'] ) ; ?>;
                font-style: <?php echo esc_attr( $bauhaus_blockquote_typography['font-style'] ) ; ?>;
                font-variant: <?php echo esc_attr( $bauhaus_blockquote_typography['font-variant'] ) ; ?>;
                font-weight: <?php echo esc_attr( $bauhaus_blockquote_typography['font-weight'] ) ; ?>;
                letter-spacing: <?php echo esc_attr( $bauhaus_blockquote_typography['letter-spacing'] ) ; ?>;
                line-height: <?php echo esc_attr( $bauhaus_blockquote_typography['line-height'] ) ; ?>;
                text-decoration: <?php echo esc_attr( $bauhaus_blockquote_typography['text-decoration'] ) ; ?>;
                text-transform: <?php echo esc_attr( $bauhaus_blockquote_typography['text-transform'] ) ; ?>;
            }

            <?php } ?>



            <?php if (ot_get_option('additionalcss') != '') {
				echo wp_kses_post(ot_get_option('additionalcss'));
			} ?>


        </style>

		<?php if ( ot_get_option( 'additionaljs' ) != '' ): ?>
            <script type="text/javascript">
				<?php if ( ot_get_option( 'additionaljs' ) ) {
					echo wp_kses_post( ot_get_option( 'additionaljs' ) );
				} ?>
            </script>
		<?php endif; ?>

	<?php endif; ?>
<?php }

add_action( 'wp_head', 'bauhaus_custom_styling' );