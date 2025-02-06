<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
	$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
$url_components = parse_url($url);

//  $actual_link = "http://localhost/brand/virtualassistantandmarketingpartners.com/";
$actual_link = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/';

define('ADMIN_EMAIL', 'info@virtualassistantandmarketingpartners.com');
define('PHONE', '+1 (000) 000 0000');
define('PHONE_HREF', '#');
// define('PHONE02', '(786) 438-3297');
// define('PHONE_HREF02', 'tel:7864383297');
define('EMAIL', 'info@virtualassistantandmarketingpartners.com');
define('EMAIL_HREF', 'mailto:info@virtualassistantandmarketingpartners.com');
// define('CONTACT_EMAIL', 'info@virtualassistantandmarketingpartners.com');
// define('CONTACT_EMAIL_HREF', 'mailto:info@virtualassistantandmarketingpartners.com');
define('ADDRESS', 'New York, USA');
// define('ADDRESS_HREF', 'https://goo.gl/maps/u8eoXL99pw7bfwhN7');
define('WEBSITE_NAME', 'Virtual Assistant and Marketing Partners');
// define('WEBSITE_NAME_PLURAL', "Designs Cube's");
define('WEBSITE_LOGO', $actual_link . 'assets/images/logo.webp');

// Minify CSS file
// X============X============X
function minifyCSS($css)
{
	// Remove comments
	$css = preg_replace('/\/\*.*?\*\//s', '', $css);
	// Remove whitespace
	$css = preg_replace('/\s+/', ' ', $css);
	$css = str_replace([' {', '{', ' }', '}'], ['{', '{', '}', '}'], $css);
	// Remove semicolons before closing braces
	$css = preg_replace('/;}/', '}', $css);
	return trim($css);
}

$cssContent = file_get_contents(__DIR__ . '../../assets/css/custom.css');
$minifiedCSS = minifyCSS($cssContent);
file_put_contents(__DIR__ . '../../assets/css/custom.min.css', $minifiedCSS);
// X============X============X
// Minify CSS file


// X============X============X============X============X


// Minify JS file
// X============X============X
function minifyJS($js)
{
	$js = preg_replace('/\/\*.*?\*\//s', '', $js);
	$js = preg_replace('/\/\/[^\n]*\n/', '', $js);

	$js = preg_replace('/\s+/', ' ', $js);
	$js = preg_replace('/\s?([{};:,+])\s?/', '$1', $js);

	$js = rtrim($js, ';');
	return $js;
}

$jsContent = file_get_contents(__DIR__ . '../../assets/js/custom.js');
$minifiedJS = minifyJS($jsContent);
file_put_contents(__DIR__ . '../../assets/js/custom.min.js', $minifiedJS);
// X============X============X
// Minify JS file

// X============X============X============X============X

// Minify HTML file
// X============X============X
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
// X============X============X
// Minify HTML file