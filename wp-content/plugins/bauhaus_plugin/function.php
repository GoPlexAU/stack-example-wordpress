<?php


/**
 * function extract colors from style.css
 * @return array
 */
function bauhaus_get_style_color() {


	global $wp_filesystem;
	$colors = array();
	//the existence check
	if ( empty( $wp_filesystem ) ) {
		require_once( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
	}

	$con = $wp_filesystem->get_contents( get_template_directory() . "/css/style.css" );


	preg_match_all( "/#([A-z0-9]{6,6}?)/", $con, $arr );
	$colors = $arr[1];
	foreach ( $colors as $k => $v ) {
		$colors[$k] = strtoupper( $v );
	}

	$colors = array_unique( $colors );

	return $colors;

}

/**
 * return url base style or false
 * @return bool|string
 */
function bauhaus_enqueue_url_base_style() {
	global $wp_filesystem;
	if ( empty( $wp_filesystem ) ) {
		require_once( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
	}
	$bauhaus_upload_dir = wp_upload_dir();
	if(bauhaus_get_tememe_color() ==  'light') {
		$prefix =   "style_light.css";
	} else {
		$prefix  =  "style_dark.css";
	}

	$bauhaus_filename = trailingslashit( $bauhaus_upload_dir['basedir'] ) . $prefix;

	if ( $wp_filesystem->exists( $bauhaus_filename ) ) {
		$url = $bauhaus_upload_dir["baseurl"];

		if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ) { //HTTPS
			$url = str_replace( 'http', 'https', $url );
			$url = str_replace( 'httpss', 'https', $url );
		}

		return $url . "/$prefix";
		$url = str_replace(get_home_url('/'),'',$url);

	} else {
		return false;
	}

}


// widget

add_action( 'widgets_init', 'bauhaus_widgets_int_plugin' );


function bauhaus_widgets_int_plugin() {

	//sidibar widget
	register_widget( 'bauhaus_twiter_Wigdet' );


}

/**
 * Class bauhaus_twiter_Wigdet
 */
class bauhaus_twiter_Wigdet extends WP_Widget {
	function __construct() {
		$args = array(
			'name' => esc_html__( 'bauhaus  Tweets', 'bauhaus' ),
			'description' => esc_html__( 'It displays a list of tweets', 'bauhaus' ),
			'classname' => 'bauhaus_twiter'
		);
		parent::__construct( 'bauhaus_twiter', esc_html__( 'bauhaus Tweets', 'bauhaus' ), $args );

	}

	/**
	 * method to display in the admin
	 *
	 * @param $instance
	 */
	function form( $instance ) {

		extract( $instance );


		?>
        <p>
            <label for="<?php echo esc_attr( ( $this->get_field_id( 'title' ) ) ); ?>"> <?php esc_html_e( 'Title:',
					'bauhaus' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( ( $this->get_field_id( 'title' ) ) ); ?>"
                   name="<?php echo esc_attr( ( $this->get_field_name( 'title' ) ) ); ?>" type="text"
                   value="<?php if ( isset( $title ) ) {
				       echo esc_attr( $title );
			       } ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"> <?php esc_html_e( 'Name:',
					'bauhaus' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'Name' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'Name' ) ); ?>" type="text"
                   value="<?php if ( isset( $Name ) ) {
				       echo esc_attr( $Name );
			       } ?>">
        </p>

        <p>
            <label
                    for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"> <?php esc_html_e( 'How many show Tweets?',
					'bauhaus' ); ?></label>

            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text"
                   value="<?php
			       if ( isset( $text ) ) {
				       echo esc_attr( $text );
			       }
			       ?>">

        </p>


		<?php
	}

	/**
	 * frontend for the site
	 *
	 * @param $args
	 * @param $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );


		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => esc_html__( 'TWEETS', 'bauhaus' ), // Legacy.
				'Name' => '',
				'text' => 3


			)
		);
		extract( $instance );
		// Create a filter to the other plug-ins can change them
		$title = sanitize_text_field( apply_filters( 'widget_title', $title ) );
		$before_widget = str_replace( 'class="', 'class=" widget shadow widget-twitter ', $before_widget );
		echo wp_kses_post( $before_widget . "" );

		echo wp_kses_post( $before_title ) . esc_attr( $title ) . wp_kses_post( $after_title );


		global $wp_filesystem;

		//the existence check
		if ( empty( $wp_filesystem ) ) {
			require_once( ABSPATH . '/wp-admin/includes/file.php' );
			WP_Filesystem();
		}


		$fmr_upload_dir = wp_upload_dir();
		//We get the correct path to the file
		$fmr_filename = trailingslashit( $fmr_upload_dir['basedir'] ) . $title . "twitcache.XML";

		//if it took more than an hour the update cache
		if ( get_option( $title . "last_twitupdate" ) < time() - 3600 ) {
			$file = $wp_filesystem->get_contents( 'http://twitrss.me/twitter_user_to_rss/?user=' . $Name );
			update_option( $title . "last_twitupdate", time() );
			$wp_filesystem->put_contents( $fmr_filename, $file, FS_CHMOD_FILE );

		} else {

			$file = $wp_filesystem->get_contents( $fmr_filename );

		}

		?>
        <div class="widget-content">
            <div class="recent-tweets">
				<?php


				if ( strlen( $file ) > 10 ) {
					$movies = new SimpleXMLElement( $file );


					for ( $i = 0; $i < $text; $i ++ ) {
						?>
                        <div class="media">
                            <div class="media-body">
                                <p><i class="fa fa-twitter"></i>
                                    <a href="<?php echo esc_url( $movies->channel->item[$i]->link ); ?>"
                                       class="tweets_a">@ <?php echo esc_attr( $Name ); ?></a>
									<?php echo esc_html( $movies->channel->item[$i]->title ); ?>
                                    <small><?php
										$d1 = strtotime( $movies->channel->item[$i]->pubDate );
										$date2 = date( "U", $d1 );
										$human_time = human_time_diff( $date2, current_time( 'timestamp' ) );
										printf( '%s ' . esc_html__( 'ago', 'bauhaus' ), esc_html( $human_time ) );
										?>
                                    </small>
                            </div>
                        </div>

						<?php
					}
				}


				?>      </div>
        </div>


		<?php
		echo wp_kses_post( $after_widget );
	}

	function update( $new_instance, $old_instance ) {
		$new_instance['title'] = !empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) :
			"";
		$new_instance['text'] = ( (int) $new_instance['text'] ) ? sanitize_text_field( $new_instance['text'] ) : 2;

		return $new_instance;
	}


}

if ( !function_exists( 'bauhaus_get_youtube_id' ) ) {

	/**
	 * @param $value
	 * @return mixed|null
	 */
	function bauhaus_get_youtube_id( $value ) {
		$id = null;
		if ( preg_match( '/youtu.be\/(.*)/', $value, $math ) ) {
			$id = $math[1];
		} elseif ( preg_match( '/youtube.com.*?v=(.*)/', $value, $math ) ) {
			$id = $math[1];
		} else {
			$id = $value;
		}

		$id = str_replace( "http://", '', $id );
		$id = str_replace( "https://", '', $id );
		return $id;
	}
}


