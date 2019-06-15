<?php
// Register and load the widget
function Fcpwater_load_widget() {
        register_widget( 'Fcpwater_widget' );
        register_widget( 'Fcpprotein_widget' );
        register_widget( 'Fcpbmi_widget' );
        register_widget( 'Fcpbfc_widget' );        
        
}
add_action( 'widgets_init', 'Fcpwater_load_widget' );
 
// water intake calculaltor
class Fcpwater_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(        
        'Fcpwater_widget',         
        __('Water intake calculator', 'Fcpwater_widget_domain'),         
        array( 'description' => __( 'Water intake calculator', 'Fcpwater_widget_domain' ), ) 
        );
    }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];        
        echo do_shortcode('[fcp-water-intake-calculator]');
        echo $args['after_widget'];
    }
         
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
            }
            else {
            $title = __( 'Water intake calculator', 'wpb_widget_domain' );
            }
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
    <?php 
    }
     
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}

// protein intake calculator
class Fcpprotein_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(        
        'Fcpprotein_widget',         
        __('Protein intake calculator', 'Fcpprotein_widget_domain'),         
        array( 'description' => __( 'Protein intake calculator', 'Fcpprotein_widget_domain' ), ) 
        );
    }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];        
        echo do_shortcode('[fcp-protein-intake-calculator]');
        echo $args['after_widget'];
    }
         
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
            }
            else {
            $title = __( 'Protein intake calculator', 'wpb_widget_domain' );
            }
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
    <?php 
    }
     
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}

// bmi calculator
class Fcpbmi_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(        
        'Fcpbmi_widget',         
        __('BMI intake calculator', 'Fcpbmi_widget_domain'),         
        array( 'description' => __( 'BMI calculator', 'Fcpbmi_widget_domain' ), ) 
        );
    }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];        
        echo do_shortcode('[fcp-bmi-calculator]');
        echo $args['after_widget'];
    }
         
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
            }
            else {
            $title = __( 'BMI calculator', 'wpb_widget_domain' );
            }
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
    <?php 
    }
     
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}


// Body Fat calculator
class Fcpbfc_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(        
        'Fcpbfc_widget',         
        __('Body Fat calculator', 'Fcpbfc_widget_domain'),         
        array( 'description' => __( 'Body Fat calculator', 'Fcpbfc_widget_domain' ), ) 
        );
    }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];        
        echo do_shortcode('[fcp-bfc-calculator]');
        echo $args['after_widget'];
    }
         
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
            }
            else {
            $title = __( 'Body Fat calculator', 'wpb_widget_domain' );
            }
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
    <?php 
    }
     
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}


?>
