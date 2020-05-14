<?php 
	$url 			= $_SERVER['REQUEST_URI'];
	$path 			= parse_url($url, PHP_URL_PATH);
	$firstSubDir 	= explode('/', $path)[1]; // [0] is the domain [1] is the first subdirectory, etc.
	$port 			= 'http://';
	if( $_SERVER['SERVER_PORT'] == 443):
		$port 		= 'https://';
	endif;
	$finalResourceUrl = $port.$_SERVER['HTTP_HOST'].'/'.$firstSubDir;
	define(COMMON_CALL_URL, $finalResourceUrl);
?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c22280aa8e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo (COMMON_CALL_URL.'/assets/css/custom.css'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="shortcut icon" href="https://studysmart.co.in/ieltstesting/assets/img/favicon.jpg">
