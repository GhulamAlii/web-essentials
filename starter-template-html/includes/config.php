<?php
// include('function.php');

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
// $url_components = parse_url($url);

//  $actual_link = "http://localhost/brand/techigator.ae/";
$actual_link = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/starter-template-html/';

define('ADMIN_EMAIL', 'info@techigator.ae');
define('PHONE', '+971 56 600 7598');
define('PHONE_HREF', 'tel:+971566007598');
define('PHONE02', '(786) 438-3297');
define('PHONE_HREF02', 'tel:7864383297');
define('EMAIL', 'info@techigator.ae');
define('EMAIL_HREF', 'mailto:info@techigator.ae');
define('CONTACT_EMAIL', 'info@techigator.ae');
define('CONTACT_EMAIL_HREF', 'mailto:info@techigator.ae');
define('ADDRESS', 'Tower, Ithraa Plaza - Office #805 8th - Dubai - United Arab Emirates');
// define('ADDRESS_HREF', 'https://goo.gl/maps/u8eoXL99pw7bfwhN7');
define('WEBSITE_NAME', 'Starter Template PHP');
// define('WEBSITE_NAME_PLURAL', "Designs Cube's");
define('WEBSITE_LOGO', 'https://www.techigator.ae/assets/images/logo.webp');

// echo '<pre>';
// print_r();
// exit;

// if($_SERVER['HTTP_HOST'] != 'localhost')
// {
// 	///------ Get Client IP & Address --------
// 	$get_client_ip  =   get_client_ip();    
// 	/// ------ End Code ----------------------------
// }
// else{
// 	///------ Get Client IP & Address --------
// 	$get_client_ip  =   '103.217.177.174';
// }


// $regionDetail   =   get_region($get_client_ip);

// $country        =   $regionDetail['country'];
// $city           =   $regionDetail['city'];
// $state          =   $regionDetail['state'];
// $address        =   $city.', '.$country;


function minifyHTML($html)
{
    // Remove extra white spaces and new lines
    $search = [
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    ];
    $replace = [
        '>',
        '<',
        '\\1'
    ];
    $html = preg_replace($search, $replace, $html);

    // Remove HTML comments except for IE conditional comments
    $html = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $html);

    return $html;
}


if (!ob_start("ob_gzhandler")) {
    ob_start();
}
