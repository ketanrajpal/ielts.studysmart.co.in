<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tips and Strategies | Study Smart</title>
	<?php include '../layouts/common_styles.php'; ?>
	<style type="text/css">
		.page-heading-text:after{
		    content: "";
		    display: block;
		    width: 65px;
		    height: 3px;
		    background-color: #2aa1cb;
		    margin-top: 8px;
		    margin: 3px auto 0px auto;
		}
		.study_smart_adv {
		    padding: 25px 15px 20px 15px;
		    max-height: 180px;
		    height: 150px;
		}
		.collapse_bg_screen{
			padding: 20px 15px 20px 15px;
		    border: 1px solid #f7f7f7;
		    border-radius: 10px;
		    margin-bottom: 30px;
		    overflow: hidden;
		    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.16);
		}
	</style>
	<script type="application/ld+json">
        
        {
        "@context" : "http://schema.org",
        "@type" : "EducationalOrganization",
        "name" : "Study Smart | Online IELTS Training Provider | Study Abroad Consultants ",
        "image" : "https://www.studysmart.co.in/image/logo.jpg",
        "telephone" : "+91 9650680072",
        "email" : "delhi@studysmart.co.in",
        "address" : {
        "@type" : "PostalAddress",
        "streetAddress" : "D-62, Ground Floor, Near Dena Bank, South Extension 1, Delhi 110049",
        "addressLocality" : "South Extension 1",
        "addressRegion" : "Delhi",
        "addressCountry" : "India", 
        "postalCode" : "110049"
        },
        "url" : "https://www.studysmart.co.in/"
        }
        </script>
        <meta itemprop="name" content="Monday to Saturday">
</head>
<body>
	<?php include("../layouts/header.php"); ?>
	
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center pb-2 page-heading-text">Tips and Strategies</h2>
			</div>
		</div>

		<?php
			$tipsStrategiesArr = [
									[
										'click_icon' 		=> 'reading.png',
										'link' 				=> 'first_tab',
										'title' 			=> 'IELTS Reading',
										'file_link' 		=> 'ielts_reading.php',
										'show_class' 		=> 'show',
										'first_state' 		=> 'true',
									],
									[
										'click_icon' 		=> 'speaking.png',
										'link' 				=> 'second_tab',
										'title' 			=> 'IELTS Speaking',
										'file_link' 		=> 'ielts_speaking.php',
										'show_class' 		=> '',
										'first_state' 		=> 'false',
									],
									[
										'click_icon' 		=> 'writing.png',
										'link' 				=> 'third_tab',
										'title' 			=> 'IELTS Writing',
										'file_link' 		=> 'ielts_writing.php',
										'show_class' 		=> '',
										'first_state' 		=> 'false',
									],
									[
										'click_icon' 		=> 'listening.png',
										'link' 				=> 'fourth_tab',
										'title' 			=> 'IELTS Listening',
										'file_link' 		=> 'ielts_listening.php',
										'show_class' 		=> '',
										'first_state' 		=> 'false',
									],
								];
		?>

		<div id="tips_strategies_block">
			<div class="row">
				<?php foreach($tipsStrategiesArr as $item): ?>
				<div class="col-md-3">
					<a class="text-decoration-none" data-toggle="collapse" href="#<?php echo $item['link']; ?>" role="button" aria-expanded="<?php echo $item['first_state']; ?>" aria-controls="<?php echo $item['link']; ?>">
						<div class="study_smart_adv">
							<img src="<?php echo (COMMON_CALL_URL.'/assets/img/'.$item['click_icon']); ?>" alt="" width="60">
							<h2><?php echo $item['title']; ?></h2>
						</div>
					</a>
				</div>	
				<?php endforeach; ?>
			</div>
			<?php foreach($tipsStrategiesArr as $item): ?>
			<div class="mt-3 collapse <?php echo $item['show_class']; ?> collapse_bg_screen" id="<?php echo $item['link']; ?>" data-parent="#tips_strategies_block">
  				<?php include ($item['file_link']); ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php include("../layouts/footer.php"); ?>
	<?php include '../layouts/common_scripts.php'; ?>
</body>
</html>