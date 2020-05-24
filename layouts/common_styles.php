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
<meta name="description" content="Get the best IELTS training from the experts and achieve your aim of study abroad. Study Smart is one of the best Online IELTS training provider and consultation.">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://www.studysmart.co.in/ieltstesting/assets/css/bootstrap.min.css" >
<script src="https://www.studysmart.co.in/ieltstesting/assets/js/c22280aa8e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo (COMMON_CALL_URL.'/assets/css/custom.css'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="shortcut icon" href="https://studysmart.co.in/ieltstesting/assets/img/favicon.jpg">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45525368-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45525368-2');
</script>
