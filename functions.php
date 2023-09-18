<?php
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'archive'; //URLとして使いたい文字列
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_theme_support('post-thumbnails');

function display_custom_posts_with_template($post_type, $posts_per_page, $template_path)
{
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            if ($template_path) {
                get_template_part($template_path);
            }
        endwhile;
        // wp_reset_postdata(); // クエリをリセット
    else :
        echo '投稿が見つかりません。';
    endif;
}
