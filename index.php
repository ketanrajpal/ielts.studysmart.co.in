<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/c22280aa8e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/assets/css/custom.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
		<title>Study Smart</title>
	</head>
	<body>

		<div class="p-2 px-md-4 bg-black box-shadow sticky-top">
		<nav class="navbar navbar-expand-lg">
		  	<a class="navbar-brand" href="#">
		  		<img src="/assets/img/logo_white.png" width="240" />
		  	</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
			    	<li class="nav-item active">
			        	<a class="p-3 main-menu-link" href="#"><span class="fa fa-graduation-cap"></span> About</a>
			      	</li>
					<li class="nav-item"><a class="p-3 main-menu-link" href="#"><span class="fa fa-university"></span> Courses</a></li>
					<li class="nav-item"><a class="p-3 main-menu-link" href="#"><span class="fa fa-pen-fancy"></span> Offline Training</a></li>
					<li class="nav-item"><a class="p-3 main-menu-link" href="#"><span class="fa fa-at"></span> Contact</a></li>
			    </ul>
			    <form class="my-2 my-lg-0">
			    	<div class="btn-group" role="group" aria-label="Basic example">
  						<a class="p-2 main-menu-link btn btn-danger btn-xs my-2 my-sm-0" href="http://portal.studysmart.co.in/"><span class="fa fa-sign-in-alt"></span> Log in</a>
			    		<a class="p-2 main-menu-link btn btn-success btn-xs my-2 my-sm-0" href="http://portal.studysmart.co.in/register">Free Trial</a>
					</div>
			    </form>
		  	</div>
		</nav>
		</div>

		<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-black box-shadow sticky-top">
			<h5 class="my-0 mr-md-auto font-weight-normal"><img src="/assets/img/logo_white.png" width="280" /></h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-graduation-cap"></span> About</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-university"></span> Courses</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-pen-fancy"></span> Offline Training</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-at"></span> Contact</a>
				<a class="p-2 main-menu-link" href="http://portal.studysmart.co.in/"><span class="fa fa-sign-in-alt"></span> Log in</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-sign-in-alt"></span> </a>
			</nav>
		</div> -->

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<video autoplay muted loop class="background_video">
						<source src="/assets/video/new_video.mp4" type="video/mp4" />
					</video>
					<div class="video_text_block"> 
						<h2 class="animate_main_head">Train with One of India’s Best IELTS Training Provider</h2>
						<h4 class="animate_main_sub_head">Get that 8+ Band Score in the First attempt</h4>
						<p class="pt-4">
							<a href="#" class="animate_main_tag_link">Get Started</a>
						</p>
					</div>
					<!-- <div class="animate">
						<div class="animate-1 animate_white_head">
							Train with One of India’s Best IELTS Training Provider
						</div>
						<div class="animate-2 animate_blue_head">The Study Smart Advantage</div>
						<div class="animate-3 animate_white_head">
							Get that 8+ Band Score in the First attempt
						</div>
						<div class="animate-4 animate_white_head">Live Online Classes</div>
						<div class="animate-5 animate_white_head">Everything Under One Roof</div>
						<div class="animate-6 animate_white_head">Learn Anytime! Anywhere!</div>
						<div class="animate-7 animate_white_head">Learn with the Best Trainers</div>
						<div class="animate-8 animate_white_head">Comprehensive Mock Tests</div>
						<div class="animate-9 animate_white_head">Improvement Guaranteed</div>
					</div> -->
				</div>
			</div>
		</div>

		<?php
			$studySmartAdv = [
								[
									'img' 	=> '/assets/img/live_class.png',
									'title' => 'Live Online Classes',
									'desc' 	=> 'Our Trainers provide Live Interactive classes through Zoom where the experience is as good as an actual classroom session, Come Claim its Even Better!',
								],
								[
									'img' 	=> '/assets/img/one_roof.png',
									'title' => 'Everything Under One Roof',
									'desc' 	=> 'Our Online Portal is a One-Stop Shop for all Interactive Lessons, Tips & Tricks, Study Material, Recorded Classes, Mock Tests, Learning Resources and More! ',
								],
								[
									'img' 	=> '/assets/img/guidance.png',
									'title' => 'Certified & Experience Trainers',
									'desc' 	=> 'Our Trainers are Cambridge & British Council Certified, carry years of training experience & provide One to One Support and Mentoring to students',
								],
								[
									'img' 	=> '/assets/img/anytime.png',
									'title' => 'Learn Anytime! Anywhere!',
									'desc' 	=> 'You can prepare for the IELTS at your own convenience through our interactive Self-Guided Skill Building Lessons, Practice Material, Fun Exercises, Quizzes & Recorded lectures through Our Online Portal.',
								],
								[
									'img' 	=> '/assets/img/mock_test.png',
									'title' => 'Comprehensive Mock Tests',
									'desc' 	=> 'Get access to Module Wise and Full Length Scored Mock test with Evaluations, Personalized Feedback and Score Predictor',
								],
								[
									'img' 	=> '/assets/img/improvement.png',
									'title' => 'Improvement Guaranteed',
									'desc' 	=> 'We have trained over 12,000 students with a 96% success rate. Become a part of our Success Story! ',
								],
							];
		?>

		<div class="bg-white pt-4 pb-5">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-6">
						<h2 class="text-left main_heading_text">The Study Smart Advantages</h2>
					</div>
					<div class="col-lg-6">
						<h2 class="text-right main_heading_text">
							<a href="tel:+919650680072" class="text-dark text-decoration-none">
							+91 965-068-0072
							</a>
						</h2>
					</div>
				</div>
				<div class="row mt-3">
					<?php
						foreach($studySmartAdv as $item): ?>
							<div class="col-lg-4 mt-2 mb-2">
								<div class="study_smart_adv">
									<img src="<?php echo $item['img']; ?>" alt="" width="60">
									<h2><?php echo $item['title']; ?></h2>
									<p><?php echo $item['desc']; ?></p>
								</div>
							</div>
						<?php endforeach;
					?>
				</div>
			</div>
		</div>
		
		<?php
			$successStoriesArr = [
									[
										'user_name' => 'Daksh Gupta',
										'comments' 	=> 'Study Smart\'s online training is great for IELTS preparation, with a very dedicated and talented team. Kanika ma\'am helped me achieve 8 bands score in my first attempt. Would definitely recommend to anyone looking for preparation for IELTS.',
										'user_pic' 	=> '/assets/img/daksh-gupta.jpeg',
										'user_score' => 8,
									],
									[
										'user_name' => 'Twinkle Chotaliya',
										'comments' 	=> 'Study Smart provided a great deal of help and guidance in the entire process of preparing for IELTS. A very approachable staff and an expert trainer make for a winning team which produces winners. so can my IELTS marksheet! Securing an overall score of 8.5.',
										'user_pic' 	=> '/assets/img/twinkle-chotaliya.jpeg',
										'user_score' => 9,
									],
									[
										'user_name' => 'Vaibhav Thorat',
										'comments' 	=> 'Study Smart encompasses all aspects of IELTS exams in a very comprehensive manner. I got a score of 8, thanks to the Study Smart.',
										'user_pic' 	=> '/assets/img/vaibhav-thorat.jpg',
										'user_score' => 8,
									],
									[
										'user_name' => 'Anuja Bhandari',
										'comments' 	=> 'The trainers at Study Smart have excellent subject matter expertise and with their guidance clearing the IELTS exam was a walk in the park. I have joined online IELTS Course and Scored 8 bands in IELTS.',
										'user_pic' 	=> '/assets/img/anuja-bhandari.jpg',
										'user_score' => 9,
									],
									[
										'user_name' => 'Prashant Pareek',
										'comments' 	=> 'I would highly recommend Study Smart. The trainers and counsellors are very helpful and knowledgeable. As a result, I got 8 band in IELTS Academic.',
										'user_pic' 	=> '/assets/img/prashant-pareek.jpg',
										'user_score' => 9,
									],
									[
										'user_name' => 'Akruta Juware',
										'comments' 	=> ' I took Online IELTS training and scored 7.5 in first attempt. It was a great experience being associated with the Study Smart in this journey. I would definitely recommend students to avail their excellent service.',
										'user_pic' 	=> '/assets/img/akruta-juware.png',
										'user_score' => 9,
									],
								];
		?>

		<div class="bg-light pt-4 pb-5">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center mt-4 main_heading_text">Success Stories</h2>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div class="owl-carousel success_stories_carousel owl-theme">
							<?php foreach($successStoriesArr as $item): ?>
								<div class="item pl-2 pr-2">
									<div class="success_stories">
										<div class="row">
											<div class="col-lg-12">
												<h2><?php echo $item['comments']; ?></h2>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-lg-2 pr-0">
												<img class="img-thumbnail" src="<?php echo $item['user_pic']; ?>">
											</div>
											<div class="col-lg-10">
												<h4><?php echo $item['user_name']; ?></h4>
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

		<?php
			$achievementsArr = [
									[
										'title' => '10+',
										'desc' 	=> 'Years of Experience',
									],
									[
										'title' => '20+',
										'desc' 	=> 'Expert Trainers',
									],
									[
										'title' => '12,000+',
										'desc' 	=> 'Students Trained',
									],
									[
										'title' => '23+',
										'desc' 	=> 'Countries',
									],
									[
										'title' => '85,000+',
										'desc' 	=> 'Evaluations',
									],
									[
										'title' => '96%',
										'desc' 	=> 'Success rate',
									],
								];
		?>
		<div class="bg-light-grey pt-4 pb-4">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center mt-4 main_heading_text">Achievements</h2>
					</div>
				</div>
				<div class="row mt-3">
					<?php foreach($achievementsArr as $item): ?>
						<div class="col-lg-2">
							<div class="text-center mileStones pt-3 pb-3">
								<h2 class="text-dark"><?php echo  $item['title']; ?></h2>
								<p><?php echo  $item['desc']; ?></p>
							</div>
						</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>

		<?php
			$ourTeamArr = [
									[
										'user_name' => 'Chetan Jain ',
										'comments' 	=> 'Our organization is working under the leadership of Chetan Jain, who has over 12 years of experience in the Overseas Education Industry. He is an MBA Graduate from a Prestigious UK University and has worked as the International Admissions Manager with various British Universities like the LSC Group of Colleges, University of Chester & Anglia Ruskin University. It has been his vision, to help Indian students across the country achieve their Dream of Studying Abroad. Knowing very well that IELTS is the first step towards realizing this dream, he started off Study Smart with a small Training Centre in South Delhi, which soon scaled up to multiple centers across India and eventually one of the best Online IELTS Training platforms in India.',
										'user_pic' 	=> '/assets/img/user_1.png',
										'designation' => 'Managing Director',
									],
									[
										'user_name' => 'Lucy Mears',
										'comments' 	=> 'Lucy Mears is a British national with over 15 years experience in the education sector.  She is an MBA Graduate from a top British University and a CELTA certified trainer. She has been teaching English across the globe for a number of years and has been instrumental in the development of Pre-Sessional English & Degree Foundation courses at many universities such as LSC & the University of Chester. She has also worked as an International Recruitment Manager for Oxford Brookes University and Regents University London.',
										'user_pic' 	=> '/assets/img/user_2.png',
										'designation' => 'Chief Mentor - Course Development ',
									],
									[
										'user_name' => 'Phill Biggerton ',
										'comments' 	=> 'He is an IELTS teacher, a trainer to teachers, an IELTS Examiner for the British Council, content creator, a proofreader, and the author of “IELTS – The Complete Guide to Reading.” He has been teaching English in Europe and Asia since 1992. In the last 10 years he has specialized in IELTS and has been instrumental in the development of our online portal for IELTS Training.',
										'user_pic' 	=> '/assets/img/user_3.png',
										'designation' => 'Chief Mentor – Mock Test & Evaluations ',
									],
									[
										'user_name' => 'Jecinta Mathews ',
										'comments' 	=> 'Jecinta is a passionate person my nature and virtue, her 19 years of rich training experience has groomed and crafted her with the required skill sets to connect with any age group of students. She has completed various certifications like the British Council, Trinity College London & Pearson Test of English. In addition she also has other International certifications from Dale Carnegie, DDI and Steven Covey for skills training. She has worked with top MNCs like Hallmark Cards and Wipro Technologies and has utilized all her technical & training expertise to deliver the best in class Online IELTS Trainings.',
										'user_pic' 	=> '/assets/img/user_4.png',
										'designation' => 'Master Trainer & Project Lead ',
									],
									[
										'user_name' => 'Krisha Porwal ',
										'comments' 	=> 'Krisha has been a successful IELTS trainer for over 8 years, being technology savvy she believes in constantly upgrading her self and is known for her exceptional skills to research on the most latest trends & techniques for the IELTS exam. She has completed her certification with the British Council and Pearson Test of English. Students appreciate her in depth knowledge of IELTS, which has also played a vital role in thousands of students achieving a high band IELTS Score. 	',
										'user_pic' 	=> '/assets/img/user_4.png',
										'designation' => 'Lead Trainer ',
									],
									[
										'user_name' => 'Tassim Tiwari ',
										'comments' 	=> 'Taasim has been teaching English Language and IELTS to adults since 8 years. She is a certified IELTS Trainer from the British Council. She is extremely passionate about training and has trained students from diverse backgrounds. The immense experience she has gained gives her the ability to be mold her teaching style according to the student’s caliber to bring out the best of their ability.',
										'user_pic' 	=> '/assets/img/user_3.png',
										'designation' => 'Lead Trainer ',
									],
									[
										'user_name' => 'Sylvia Thomas',
										'comments' 	=> 'Sylvia has 9+ years of experience as a trainer for English Language & IELTS. Having trained in a multilingual and diverse city like Mumbai, she has the skills to train students from various backgrounds, including international students. She excels at adapting new techniques and training tools and believes that learning of any kind should be fun so that it can be retained for a long time. She is also a British Council certified trainer for IELTS. Students appreciate her friendly and caring nature. ',
										'user_pic' 	=> '/assets/img/user_4.png',
										'designation' => 'Lead Trainer',
									],
									[
										'user_name' => 'Kanika Singh',
										'comments' 	=> 'Kanika has been working as an IELTS trainer since 2009. Her calm and pleasing persona helps her deliver high quality training to a large group of students. She has completed her certification with the British Council and Pearson Test of English. She has an exceptional high track record of helping students achieve their target score.',
										'user_pic' 	=> '/assets/img/user_4.png',
										'designation' => 'Lead Trainer ',
									],
								];
		?>

		<div class="bg-light pt-4 pb-5">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center mt-4 main_heading_text">Our Team</h2>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-12">
						<div class="owl-carousel our_team_carousel owl-theme">
							<?php foreach($ourTeamArr as $item): ?>
								<div class="item pl-2 pr-2">
									<div class="our-teams text-center">
										<div class="row">
											<div class="col-lg-12">
												<img src="<?php echo $item['user_pic']; ?>">
												<h2><?php echo $item['user_name']; ?></h2>
												<p><?php echo $item['designation']; ?></p>
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

		<footer class="main_footer_block">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-4 margin-top10">
		                <div class="margin-bottom15">
		                    <img src="/assets/img/logo_white.png" class="img-responsive" width="200">
		                </div>
		                <p class="text-white footer_para mt-2">As Rightly Quoted by an Ancient Greek Philosopher “The direction in which education starts will determine a man’s future in life”.</p>
		            </div>
		            <div class="col-xs-4 col-md-2">
		                <div class="margin-bottom20">
		                    <h2 class="text-white footer_head">Links</h2>                    
		                </div>
		                <ul class="list-unstyled footer_ul_li_a">
		                    <li class="margin-top5 margin-bottom5"><a class="text-white" href="">About</a></li>
		                    <li class="margin-top5 margin-bottom5"><a class="text-white" href="">Courses</a></li>
		                    <li class="margin-top5 margin-bottom5"><a class="text-white" href="">Offline Training</a></li>
		                    <li class="margin-top5 margin-bottom5"><a class="text-white" href="">Contact</a></li>
		                    <li class="margin-top5 margin-bottom5"><a class="text-white" href="">Log In / Free Trial</a></li>
		                </ul>
		            </div>
		            
		            <div class="col-md-3">
		                <div class="margin-bottom30">
		                    <h2 class="text-white footer_head">Have a Question</h2>                    
		                </div>
		                <ul class="list-unstyled footer_ul_li_a">
		                    <li class="margin-top10 margin-bottom10"><a class="text-white" href="tel:+919650680072"><span class="fa fa-phone"></span> +91 965-068-0072</a></li>
		                    <li class="margin-top10 margin-bottom10"><a class="text-white" href="mailto:info@studysmart.co.in"><span class="fa fa-envelope"></span> info@studysmart.co.in</a></li>
		                    <li class="margin-top10 margin-bottom10"><a class="text-white" href=""><span class="fa fa-map-marker"></span> D-62, Ground Floor, Near Dena Bank, South Extension 1, Delhi 110049</a></li>
		                </ul>
		            </div>
		            <div class="col-md-3">  
		                <div class="margin-bottom20">
		                    <h2 class="text-white footer_head">Connect With Us</h2>                    
		                </div>
		                <div>
		                    <ul class="list-inline footer_ul_li_social">
		                        <li class="list-inline-item margin-right20"><a class="text-white" target="_blank"><i class="fa fa-facebook"></i></a></li>
		                        <li class="list-inline-item margin-right20"><a class="text-white" target="_blank"><i class="fa fa-twitter"></i></a></li>
		                        <li class="list-inline-item margin-right20"><a class="text-white" target="_blank"><i class="fa fa-instagram"></i></a></li>
		                        <li class="list-inline-item margin-right20"><a class="text-white" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
		                        <li class="list-inline-item margin-right20"><a class="text-white" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		        <hr class="footer_hr">
		        <div class="row">
		            <div class="col-xs-12 col-md-12 margin-top10">
		                <p class="text-right footer_para text-white padding-top5">Copyright 2018 - 2020 all rights reserved planmeal.com</p>
		            </div>
		        </div>
		    </div>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script>
			/* (function () {
				function id(v) {
					return document.getElementById(v);
				}
				function loadbar() {
					var ovrl = id("overlay"),
						prog = id("progress"),
						stat = id("progstat"),
						img = document.images,
						c = 0;
					tot = img.length;

					function imgLoaded() {
						c += 1;
						var perc = (((100 / tot) * c) << 0) + "%";
						prog.style.width = perc;
						stat.innerHTML = "Loading " + perc;
						if (c === tot) return doneLoading();
					}
					function doneLoading() {
						ovrl.style.opacity = 0;
						setTimeout(function () {
							ovrl.style.display = "none";
						}, 1200);
					}
					for (var i = 0; i < tot; i++) {
						var tImg = new Image();
						tImg.onload = imgLoaded;
						tImg.onerror = imgLoaded;
						tImg.src = img[i].src;
					}
				}
				document.addEventListener("DOMContentLoaded", loadbar, false);
			})(); */

			/*var animate = {};
			animate.opacityIn = [0, 1];
			animate.scaleIn = [0.2, 1];
			animate.scaleOut = 3;
			animate.durationIn = 1000;
			animate.durationOut = 800;
			animate.delay = 1000;

			anime
				.timeline({ loop: true })
				.add({
					targets: ".animate-1",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-1",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-2",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-3",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-3",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-4",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-4",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-5",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-5",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-6",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-6",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-7",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-7",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-8",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-8",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-9",
					opacity: animate.opacityIn,
					scale: animate.scaleIn,
					duration: animate.durationIn,
				})
				.add({
					targets: ".animate-9",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate-2",
					opacity: 0,
					scale: animate.scaleOut,
					duration: animate.durationOut,
					easing: "easeInExpo",
					delay: animate.delay,
				})
				.add({
					targets: ".animate",
					opacity: 0,
					duration: 500,
					delay: 500,
				});*/
		</script>
		<script>
			$('.success_stories_carousel').owlCarousel({
				loop:true,	
				margin:10,
				nav:false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					1000:{
						items:2
					}
				}
			});
			$('.our_team_carousel').owlCarousel({
				loop:true,	
				margin:10,
				nav:false,
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