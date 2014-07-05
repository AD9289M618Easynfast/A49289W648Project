<?php

function uplifts_setup() {
    load_theme_textdomain('Uplifts', get_template_directory() . '/languages');
    add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
    register_nav_menu('primary', __('Primary Menu', 'twentytwelve'));

    global $imagePath;
    $imagePath = get_template_directory_uri() . '/images/';

    global $imageLogoPath;
    $imageLogoPath = get_template_directory_uri() . '/images/logo/';

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(624, 9999); // Unlimited height, soft crop
}

add_action('after_setup_theme', 'uplifts_setup');

require( get_template_directory() . '/inc/custom-header.php' );

function twentytwelve_scripts_styles() {
    global $wp_styles;

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.0.min.js', null, null, true);
    wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', null, null, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('css-uplifts', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'twentytwelve_scripts_styles');

add_filter('mce_css', 'twentytwelve_mce_css');

function twentytwelve_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }
    $title .= get_bloginfo('name');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() )) {
        $title = "$title $sep $site_description";
    }

    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'twentytwelve'), max($paged, $page));
    }
    return $title;
}

add_filter('wp_title', 'twentytwelve_wp_title', 10, 2);

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_page_menu_args($args) {
    if (!isset($args['show_home'])) {
        $args['show_home'] = true;
    }
    return $args;
}

add_filter('wp_page_menu_args', 'twentytwelve_page_menu_args');

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
if (!function_exists('twentytwelve_content_nav')) :

    /**
     * Displays navigation to next/previous pages when applicable.
     *
     * @since Twenty Twelve 1.0
     */
    function twentytwelve_content_nav($html_id) {
        global $wp_query;

        $html_id = esc_attr($html_id);

        if ($wp_query->max_num_pages > 1) :
            ?>

            <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
                <h3 class="assistive-text">
                    <?php _e('Post navigation', 'twentytwelve'); ?>
                </h3>
                <div class="nav-previous">
                    <?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve')); ?>
                </div>
                <div class="nav-next">
                    <?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve')); ?>
                </div>
            </nav>
            <!-- #<?php echo $html_id; ?> .navigation -->
            <?php
        endif;
    }

endif;

if (!function_exists('twentytwelve_comment')) {
    
}

class above_signup_form extends WP_Widget {

    function __construct() {
        parent::__construct(
                // Base ID of your widget
                'widget_above_signup_form',
                // Widget name will appear in UI
                __('Widget Above Sign up Forms', 'uplifts_widget_domain'),
                // Widget description
                array('description' => __('Get A Lift In YOUR Life', 'uplifts_widget_domain'))
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        // This is where you run the code and display the output
        //echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
        echo '<div class="above-signup-form">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

    // Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

class widget_template_1_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
                // Base ID of your widget
                'widget_template_1_wrapper',
                // Widget name will appear in UI
                __('Widget Template 1 Wrapper', 'uplifts_widget_domain'),
                // Widget description
                array('description' => __('Get A Lift In YOUR Life', 'uplifts_widget_domain'))
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
        // This is where you run the code and display the output
        //echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-1-wrapper">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

    // Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = template 2 wrapper.
 *
 * @author EasynFast.net
 *
 */
class widget_template_2_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
                // Base ID of your widget
                'widget_template_2_wrapper',
                // Widget name will appear in UI
                __('Widget Template 2 Wrapper', 'uplifts_widget_domain'),
                // Widget description
                array('description' => __('2 INCHES TALLER IN 2 MINUTES', 'uplifts_widget_domain'),)
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-2-wrapper">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = template 3 wrapper.
 *
 * @author EasynFast.net
 *
 */
class widget_template_3_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
                'widget_template_3_wrapper', __('Widget Template 3 Wrapper', 'uplifts_widget_domain'), array('description' => __('Height In Tenseltown:', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-3-wrapper">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = template 4 wrapper.
 *
 * @author EasynFast.net
 *
 */
class widget_template_4_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'widget_template_4_wrapper',
                // Widget name will appear in UI
                __('Widget Template 4 Wrapper', 'uplifts_widget_domain'),
                // Widget description
                array('description' => __('Height insoles in the media', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-4-wrapper">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = template 5 wrapper.
 *
 * @author EasynFast.net
 *
 */
class widget_template_5_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'widget_template_5_wrapper',
// Widget name will appear in UI
                __('Widget Template 5 Wrapper', 'uplifts_widget_domain'),
// Widget description
                array('description' => __('Why UPLIFTS Work: The Science Behind a Secret', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-5-wrapper"><a class="smoothscroll" href="#header">&nbsp;</a>';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = template 6 wrapper.
 *
 * @author EasynFast.net
 *
 */
class widget_template_6_wrapper extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'widget_template_6_wrapper',
// Widget name will appear in UI
                __('Widget Template 6 Wrapper', 'uplifts_widget_domain'),
// Widget description
                array('description' => __('Satisfied Users OF UPLIFTS SPEAK OUT', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="template-6-wrapper">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = signup placeholder
 *
 * @author EasynFast.net
 *
 */
class widget_signup_placeholder extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'widget_signup_placeholder',
// Widget name will appear in UI
                __('Widget Signup Placeholder', 'uplifts_widget_domain'),
// Widget description
                array('description' => __('Signup Placeholder', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="signup-placeholder">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

/**
 * Define widget for div class = signup-sidebar-1
 *
 * @author EasynFast.net
 *
 */
class widget_signup_sidebar_1 extends WP_Widget {

    function __construct() {
        parent::__construct(
                // Base ID of your widget
                'widget_signup_sidebar_1',
                // Widget name will appear in UI
                __('Widget Signup Sidebar 1', 'uplifts_widget_domain'),
                // Widget description
                array('description' => __('Signup Sidebar', 'uplifts_widget_domain'),)
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $content = apply_filters('widget_content', $instance['content']);

        if (!empty($title))
// This is where you run the code and display the output
//echo __( 'Uplifts Sample Widget', 'uplifts_widget_domain' );
            echo '<div class="signup-sidebar-1">';
        echo $args['before_title'] . $title . $args['after_title'];
        echo $content;
        echo '</div>';
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'uplifts_widget_domain');
        }
        if (isset($instance['content'])) {
            $content = $instance['content'];
        } else {
            $content = __('New Content', 'uplifts_widget_domain');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php _e('Title:'); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>">
                <?php _e('Content:'); ?>
            </label>
            <textarea class="widefat" style="height:100px;" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" value="<?php echo esc_attr($content); ?>" ><?php echo esc_attr($content); ?></textarea>
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? $new_instance['title'] : '';
        $instance['content'] = (!empty($new_instance['content']) ) ? $new_instance['content'] : '';
        return $instance;
    }

}

function uplifts_widgets_init() {
    register_sidebar(array(
        'name' => __('Home_Content', 'Uplifts_1'),
        'id' => 'uplifts-sidebar-1',
        'description' => __('Appears on home page for horizontal content', 'Uplifts_1'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Home_Content 2', 'Uplifts_2'),
        'id' => 'uplifts-sidebar-2',
        'description' => __('Appears on home page for vertical content', 'Uplifts_2'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Signup_Content', 'Uplifts_3'),
        'id' => 'uplifts-sidebar-3',
        'description' => __('Appears on home page after banner', 'Uplifts_3'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Internal Page Widgets', 'widget_content'),
        'id' => 'uplifts-widget-content',
        'description' => __('Appear on internal pages above the content', 'widget_content'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'uplifts_widgets_init');

// Register and load the widget
function uplifts_load_widget() {
    register_widget('widget_template_1_wrapper');
    register_widget('widget_template_2_wrapper');
    register_widget('widget_template_3_wrapper');
    register_widget('widget_template_4_wrapper');
    register_widget('widget_template_5_wrapper');
    register_widget('widget_template_6_wrapper');
    register_widget('widget_signup_placeholder');
    register_widget('above_signup_form');
}

add_action('widgets_init', 'uplifts_load_widget');
