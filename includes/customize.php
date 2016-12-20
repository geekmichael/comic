<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
	return NULL;

class Comic_Customize_Textarea_Control extends WP_Customize_Control {

	/**
	 * @access public
	 * @var    string
	 */
	public $type = 'textarea';

	/**
	 * @access public
	 * @var    array
	 */
	public $statuses;

	/**
	 * Constructor.
	 *
	 * If $args['settings'] is not defined, use the $id as the setting ID.
	 *
	 * @since   10/16/2012
	 * @uses    WP_Customize_Control::__construct()
	 * @param   WP_Customize_Manager $manager
	 * @param   string $id
	 * @param   array $args
	 * @return  void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		$this->statuses = array( '' => __( 'Default' ) );
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the control's content.
	 * 
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 * 
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea class="large-text" cols="20" rows="5" <?php $this->link(); ?>>
				<?php echo esc_textarea( $this->value() ); ?>
			</textarea>
		</label>
		<?php
	}

}
/**
 * Customize register
 */
add_action( 'customize_register', function ( $wp_customize ) {
	/** @var WP_Customize_Manager $wp_customize */

	// logotypes section
	$wp_customize->add_section( THEME_NAME . '_logotypes', array(
			'title'    => __( '网站Logo', THEME_NAME ),
			'priority' => 130,
		) );
	// header logotype
	$wp_customize->add_setting( THEME_NAME . '_options[header_logotype]', array(
			'capability' => 'edit_theme_options',
			'type'       => 'option',
		) );
	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, THEME_NAME . '_header_logotype', array(
			'label'    => __( '如果需要使用其它Logo文件，请注意图片尺寸为180x60', THEME_NAME ),
			'section'  => THEME_NAME . '_logotypes',
			'settings' => THEME_NAME . '_options[header_logotype]',
		) ) );

	// Copyright in footer section
	$wp_customize->add_section( THEME_NAME . '_companyinfo', array(
			'title'     => __( '网站底部信息', THEME_NAME ),
			'priority'  => 150,
		) );
	// company information
	$wp_customize->add_setting( THEME_NAME . '_options[footer_company]', array(
			'capability' => 'edit_theme_options',
			'type'       => 'option',
		) );
	$wp_customize->add_control( new Comic_Customize_Textarea_Control( $wp_customize, THEME_NAME . '_footer_company', array(
			'label'   => __('页面底部信息（版权，ICP备案号等信息）', THEME_NAME ),
			'section' => THEME_NAME . '_companyinfo',
			'settings'=> THEME_NAME . '_options[footer_company]'
		) ) );

} );
