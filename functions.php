add_filter('sanitize_user', 'non_strict_login', 10, 3);
function non_strict_login( $username, $raw_username, $strict ) {
if( !$strict )
return $username;
return sanitize_user(stripslashes($raw_username), false);
}


// This Code will allow your users to register on your site with non latin Characters
// TaMim AhMed <3
