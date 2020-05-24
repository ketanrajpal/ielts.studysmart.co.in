<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>About Us | Study Smart</title>
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
					<h2 class="text-center pb-2 page-heading-text">About Study Smart</h2>
					<p class="page-para-text text-justify pt-2 pb-2">At Study Smart we aim at getting every student fully prepared to crack the IELTS exam. Study Smart is India’s leading IELTS Test Preparation and training institute with 10+ years of experience in teaching students from various backgrounds who primarily aim at Studying or Migrating Abroad. In our continuous efforts to reinvent ourselves, we started with Online IELTS Training to provide our students with a convenient option of taking the training from their home or office. Our experienced Cambridge Certified trainers make use of various multimedia tools, technology and proprietary training material to deliver the best in its class Online IELTS Training. We have trained 12000+ students on IELTS and 2000+ through our Online IELTS Classes. We have our offices and training centres in Pune, Delhi, Gurgaon, Thane and Surat. Study Smart is a British Council and Pearson Certified Training Centre.</p>
					<p class="page-para-text text-justify pt-2 pb-2">Study Smart also provides guidance and counseling to students who wish to Study Abroad. Study Smart is the official representative for a number of Universities in UK, Ireland, Australia, Singapore, Malaysia, New Zealand & Canada. Our student recruitment offices are located in Delhi, Gurgaon, Pune, Surat and Thane with a Liaison office in London & Auckland for onsite student support. We have years of experience working with students from diverse cultural backgrounds and our team of highly skilled and professional counselors ensure that you are given the most appropriate & accurate advice, providing you with an end-to-end solution for your educational needs.</p>
					<p class="page-para-text text-justify pt-2 pb-4">Most members of the Study Smart Team have studied, lived or worked abroad; hence they are in an ideal position to guide students with realities of studying abroad. Our team of counselors has extensively rich knowledge in the field of overseas education that has been gained over years of industry experience. In addition all our counselors have gone through extensive training and are certified for student counseling by NBCC, UK</p>
				</div>
			</div>

			<?php
				$aboutLogoArr = [
										[
											'logo' 	=> 'about_logo_1.png',
										],
										[
											'logo' 	=> 'about_logo_2.png',
										],
										[
											'logo' 	=> 'about_logo_3.png',
										],
										[
											'logo' 	=> 'about_logo_4.png',
										],
									];
			?>

			<div class="pt-4 pb-5">
				<div class="">
					<div class="row mt-3">
						<div class="col-lg-12">
							<div class="owl-carousel logo_bottom owl-theme">
								<?php foreach($aboutLogoArr as $item): ?>
									<div class="item pl-2 pr-2">
										<div class="">
											<div class="row mt-2">
												<div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-0 pb-0 pl-5 pr-5">
													<img class="" data-src="<?php echo (COMMON_CALL_URL.'/assets/img/'.$item['logo']); ?>" src="<?php echo (COMMON_CALL_URL.'/assets/img/'.$item['logo']); ?>">
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<?php include("../layouts/footer.php"); ?>
		<?php include '../layouts/common_scripts.php'; ?>

<script type="text/javascript">
$('.logo_bottom').owlCarousel({
	loop:true,	
	margin:10,
	nav:false,
	autoplay: true,
	lazyLoad: true,
	autoplayTimeout: 4000,
	autoplayHoverPause: true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
		}
	}
});
</script>

</body>
</html>