<?php
/**
 * DH: Link Recommendations Widget
 *
 * Inherits from DH_Super_Widget
 *
 * @see super_widget.php
 * @author Khaled.zaidan
 *
 */

class DH_Widget_Link_Recommendations extends DH_Super_Widget {
  /**
   * Constructor.
   */
  public function __construct() {
    parent::__construct( 'widget_dh_link_recommendations', __( 'DH: Link Recommendations', 'dh' ), array(
        'description' => __( 'Use this widget to display a link to view all recommendations.', 'dh' ),
    ) );
  }

  /**
   * Output the HTML for this widget.
   *
   * @access public
   *
   * @param array $args     An array of standard parameters for widgets in this theme.
   * @param array $instance An array of settings for this widget instance.
   */
  public function widget( $args, $instance ) {
    $row_width = parent::get_row_width( $instance );

    echo $args['before_widget'];
    ?>
    <div class="grid-1-<?php echo $row_width; ?>">
      <div class="block-link">
        <a href="<?php echo get_site_url(); ?>/recommendation" class="button-primary button-get-started">All recommendations</a>
      </div>
    </div>
    <?php

    echo $args['after_widget'];
  }

  /**
   * Deal with the settings when they are saved by the admin.
   *
   * Here is where any validation should happen.
   *
   * @param array $new_instance New widget instance.
   * @param array $instance     Original widget instance.
   * @return array Updated widget instance.
   */
  function update( $new_instance, $instance, $fields = Array() ) {
    return $instance;
  }

  /**
   * Display the form for this widget on the Widgets page of the Admin area.
   *
   * @param array $instance
   */
  function form( $instance, $fields = Array() ) {}
}