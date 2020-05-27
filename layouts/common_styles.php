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
<meta name="author" content="IELTS Preparation">
<link rel="canonical" href="<?php echo $port.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
<link rel="stylesheet" href="https://www.studysmart.co.in/ielts/assets/css/bootstrap.min.css" >
<script src="https://www.studysmart.co.in/ielts/assets/js/c22280aa8e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo (COMMON_CALL_URL.'/assets/css/custom.css'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="shortcut icon" href="https://studysmart.co.in/ielts/assets/img/favicon.jpg">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-45525368-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-45525368-2');
</script>