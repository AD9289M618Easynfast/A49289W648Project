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

function twentytwelve_scripts_styles() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.0.min.js', null, null, true);
    wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', null, null, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('css-uplifts', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'twentytwelve_scripts_styles');

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

function twentytwelve_page_menu_args($args) {
    if (!isset($args['show_home'])) {
        $args['show_home'] = true;
    }
    return $args;
}

add_filter('wp_page_menu_args', 'twentytwelve_page_menu_args');

if (!function_exists('twentytwelve_content_nav')) :

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
                            <!-- #<?php echo $html_id; ?>  .navigation -->
            <?php
            endif;
            }

            endif;

            function uplifts_widgets_init() {
            register_sidebar(array(
        'name' => __(

    'Home Template (Above Signup)'),
    'id' => 'home-widget',
            'description' => __('Widget used above signup form on Home Page'),
            'before_title' => '<h2>',
            'after_title' => '</h2>'
            ));
            register_sidebar(array (
        'name' => __('Home Signup Form'),
        'id' => 'signup-widget',
    'description' => __('Widget use for Sign up form'),
            'before_title' => '<h2>',
            'after_title' => '</h2>'
            ));
            register_sidebar(array (
        'name' => __('Internal Page Widgets'),
        'id' => 'internal-widget',
            'description' => __('Appear on internal pages above the content'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            ));
            }

            add_action('widgets_init', 'uplifts_widgets_init');
                          