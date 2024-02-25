<?php 

function redirect_logged_in_users_excluding_admins() {
    // Array of restricted page IDs
    $restricted_page_ids = array(133); // Replace with actual page IDs

    // URL to redirect to
    $redirect_url = 'https://my.lewdmate.com/public/'; // Replace with the actual URL

    if ( is_user_logged_in() && !current_user_can('administrator') && in_array(get_the_ID(), $restricted_page_ids) ) {
        wp_redirect($redirect_url);
        exit;
    }
}
add_action('template_redirect', 'redirect_logged_in_users_excluding_admins');

