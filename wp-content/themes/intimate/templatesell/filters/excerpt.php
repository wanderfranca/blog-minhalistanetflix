<?php
/**
 * Remove ... From Excerpt
 *
 * @since 1.0.0
 */
if (!function_exists('intimate_excerpt_more')) :
    function intimate_excerpt_more($more)
    {
        if (!is_admin()) {
            return '';
        }
    }
endif;
add_filter('excerpt_more', 'intimate_excerpt_more');

/**
 * Filter to change excerpt lenght size
 *
 * @since 1.0.0
 */
if (!function_exists('intimate_alter_excerpt')) :
    function intimate_alter_excerpt($length)
    {
        if (is_admin()) {
            return $length;
        }
        global $intimate_theme_options;
        $excerpt_length = absint($intimate_theme_options['intimate-excerpt-length']);
        if (!empty($excerpt_length)) {
            return $excerpt_length;
        }
        return 50;
    }
endif;
add_filter('excerpt_length', 'intimate_alter_excerpt');

/**
 * Exclude category in blog page
 *
 * @since Intimate 1.0.0
 *
 * @param null
 * @return int
 */
if (!function_exists('intimate_exclude_category_in_blog_page')) :
    function intimate_exclude_category_in_blog_page($query)
    {
        if ($query->is_home && $query->is_main_query()) {
            $GLOBALS['intimate_theme_options'] = intimate_get_options_value();
            global $intimate_theme_options;
            $blog_catid = esc_attr($intimate_theme_options['intimate-blog-exclude-category']);
            $exclude_categories = $blog_catid;
            if (!empty($exclude_categories)) {
                $cats = explode(',', $exclude_categories);
                $cats = array_filter($cats, 'is_numeric');
                $string_exclude = '';
                echo $string_exclude;
                if (!empty($cats)) {
                    $string_exclude = '-' . implode(',-', $cats);
                    $query->set('cat', $string_exclude);
                }
            }
        }
        return $query;
    }
endif;
add_filter('pre_get_posts', 'intimate_exclude_category_in_blog_page');