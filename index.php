<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Study Abroad, Overseas Education Consultants | Study Smart</title>
		<?php include './layouts/common_styles.php'; ?>
	</head>
	<body>
		<?php include './layouts/header.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<video autoplay muted loop class="background_video">
						<source src="./assets/video/new_video.mp4" type="video/mp4" />
					</video>
					<div class="video_text_block"> 
						<h2 class="animate_main_head">Train with One of India’s Best IELTS Training Provider</h2>
						<h4 class="animate_main_sub_head">Get that 8+ Band Score in the First attempt</h4>
						<p class="pt-4">
							<a href="#" class="animate_main_tag_link">Get Started</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<?php
			$studySmartAdv = [
								[
									'img' 	=> './assets/img/live_class.png',
									'title' => 'Live Online Classes',
									'desc' 	=> 'Our Trainers provide Live Interactive Classes via Zoom, The experience is As Good as an Actual Classroom Session, Some Claim its Even Better!',
								],
								[
									'img' 	=> './assets/img/one_roof.png',
									'title' => 'Everything Under One Roof',
									'desc' 	=> 'Our Online Portal is a One-Stop Shop for Interactive Lessons, Tips, Study Material, Recorded Classes, Mock Tests, Learning Resources & More!',
								],
								[
									'img' 	=> './assets/img/certified_trainer.png',
									'title' => 'Certified & Experience Trainers',
									'desc' 	=> 'Our Trainers are Cambridge & British Council Certified, carry Years of Experience & provide One to One Support & Mentoring to students',
								],
								[
									'img' 	=> './assets/img/anytime.png',
									'title' => 'Learn Anytime! Anywhere!',
									'desc' 	=> 'Prepare for IELTS at your own convenience with our Self-Guided Skill Building Lessons, Practice Material, Fun Exercises, Quizzes & More',
								],
								[
									'img' 	=> './assets/img/mock_test.png',
									'title' => 'Comprehensive Mock Tests',
									'desc' 	=> 'Get access to Module Wise and Full Length Scored Mock test with Evaluations, Personalized Feedback & Score Predictor',
								],
								[
									'img' 	=> './assets/img/improvement.png',
									'title' => 'Improvement Guaranteed',
									'desc' 	=> 'Having trained over 12,000 Students with a 96% Success Rate, We Guarantee an Improvement. Become a part of our Success Story!',
								],
							];
		?>

		<div class="bg-white pt-4 pb-5">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-6">
						<h2 class="text-center text-sm-left text-md-left text-lg-left text-xl-left main_heading_text pb-4">Get The Study Smart Advantage</h2>
					</div>
					<div class="col-lg-6">
						<h2 class="text-center text-sm-right text-md-right text-lg-right text-xl-right main_heading_text pb-4">
							<a href="tel:+919650680072" class="text-dark text-decoration-none">
							<span class="fa fa-phone-alt"></span> +91 965-068-0072
							</a>
						</h2>
					</div>
				</div>
				<div class="row mt-1">
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
										'user_pic' 	=> './assets/img/daksh-gupta-circle.png',
										'user_score' => 8,
									],
									[
										'user_name' => 'Twinkle Chotaliya',
										'comments' 	=> 'Study Smart provided a great deal of help and guidance in the entire process of preparing for IELTS. A very approachable staff and an expert trainer make for a winning team which produces winners. so can my IELTS marksheet! Securing an overall score of 8.5.',
										'user_pic' 	=> './assets/img/twinkle-chotaliya-circle.png',
										'user_score' => 9,
									],
									[
										'user_name' => 'Vaibhav Thorat',
										'comments' 	=> 'Study Smart encompasses all aspects of IELTS exams in a very comprehensive manner. I got a score of 8, thanks to the Study Smart.',
										'user_pic' 	=> './assets/img/vaibhav-thorat-circle.png',
										'user_score' => 8,
									],
									[
										'user_name' => 'Anuja Bhandari',
										'comments' 	=> 'The trainers at Study Smart have excellent subject matter expertise and with their guidance clearing the IELTS exam was a walk in the park. I have joined online IELTS Course and Scored 8 bands in IELTS.',
										'user_pic' 	=> './assets/img/anuja-bhandari-circle.png',
										'user_score' => 9,
									],
									[
										'user_name' => 'Prashant Pareek',
										'comments' 	=> 'I would highly recommend Study Smart. The trainers and counsellors are very helpful and knowledgeable. As a result, I got 8 band in IELTS Academic.',
										'user_pic' 	=> './assets/img/prashant-pareek-circle.png',
										'user_score' => 9,
									],
									[
										'user_name' => 'Akruta Juware',
										'comments' 	=> ' I took Online IELTS training and scored 7.5 in first attempt. It was a great experience being associated with the Study Smart in this journey. I would definitely recommend students to avail their excellent service.',
										'user_pic' 	=> './assets/img/akruta-juware-circle.png',
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
					<div class="col-lg-6">
						<div class="owl-carousel success_stories_carousel owl-theme">
							<?php foreach($successStoriesArr as $item): ?>
								<div class="item pl-2 pr-2">
									<div class="success_stories">
										<div class="row mt-2">
											<div class="col-3 col-sm-3 col-md-3 col-lg-2 pr-0">
												<img class="" data-src="<?php echo $item['user_pic']; ?>" src="<?php echo $item['user_pic']; ?>">
											</div>
											<div class="col-9 col-sm-9 col-md-9 col-lg-10">
												<h4><?php echo $item['user_name']; ?></h4>
												<h2><?php echo $item['comments']; ?></h2>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nXJ6uEGa9HQ"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			$achievementsArr = [
									[
										'title' => '10',
										'mark_symbol' => '+',
										'counter_speed' => '2',
										'desc' 	=> 'Years of Experience',
									],
									[
										'title' => '20',
										'mark_symbol' => '+',
										'counter_speed' => '2',
										'desc' 	=> 'Expert Trainers',
									],
									[
										'title' => '12000',
										'mark_symbol' => '+',
										'counter_speed' => '100',
										'desc' 	=> 'Students Trained',
									],
									[
										'title' => '23',
										'mark_symbol' => '+',
										'counter_speed' => '5',
										'desc' 	=> 'Countries',
									],
									[
										'title' => '85000',
										'mark_symbol' => '+',
										'counter_speed' => '100',
										'desc' 	=> 'Evaluations',
									],
									[
										'title' => '96',
										'mark_symbol' => '%',
										'counter_speed' => '10',
										'desc' 	=> 'Success rate',
									],
								];
		?>
		<div class="bg-light-grey pt-4 pb-4">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center mt-4 main_heading_text">Milestones</h2>
					</div>
				</div>
				<div class="row mt-3">
					<?php foreach($achievementsArr as $item): ?>
						<div class="col-6 col-sm-6 col-md-6 col-lg-2">
							<div class="text-center mileStones pt-3 pb-3">
								<h2 class="text-dark"><span class="numscroller" data-min="1" data-max="<?php echo  $item['title']; ?>" data-delay="5" data-increment="<?php echo $item['counter_speed']; ?>"><?php echo  $item['title']; ?></span> <?php echo  $item['mark_symbol']; ?></h2>
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
										'user_pic' 	=> './assets/img/chetan-jain-circle.png',
										'designation' => 'Managing Director',
									],
									[
										'user_name' => 'Lucy Mears',
										'comments' 	=> 'Lucy Mears is a British national with over 15 years experience in the education sector.  She is an MBA Graduate from a top British University and a CELTA certified trainer. She has been teaching English across the globe for a number of years and has been instrumental in the development of Pre-Sessional English & Degree Foundation courses at many universities such as LSC & the University of Chester. She has also worked as an International Recruitment Manager for Oxford Brookes University and Regents University London.',
										'user_pic' 	=> './assets/img/lucy-mears-circle.png',
										'designation' => 'Chief Mentor - Course Development ',
									],
									[
										'user_name' => 'Phill Biggerton ',
										'comments' 	=> 'He is an IELTS teacher, a trainer to teachers, an IELTS Examiner for the British Council, content creator, a proofreader, and the author of “IELTS – The Complete Guide to Reading.” He has been teaching English in Europe and Asia since 1992. In the last 10 years he has specialized in IELTS and has been instrumental in the development of our online portal for IELTS Training.',
										'user_pic' 	=> './assets/img/phill-biggerton-circle.png',
										'designation' => 'Chief Mentor – Mock Test & Evaluations ',
									],
									[
										'user_name' => 'Jecinta Mathews ',
										'comments' 	=> 'Jecinta is a passionate person my nature and virtue, her 19 years of rich training experience has groomed and crafted her with the required skill sets to connect with any age group of students. She has completed various certifications like the British Council, Trinity College London & Pearson Test of English. In addition she also has other International certifications from Dale Carnegie, DDI and Steven Covey for skills training. She has worked with top MNCs like Hallmark Cards and Wipro Technologies and has utilized all her technical & training expertise to deliver the best in class Online IELTS Trainings.',
										'user_pic' 	=> './assets/img/jecinta-mathews-circle.png',
										'designation' => 'Master Trainer & Project Lead ',
									],
									[
										'user_name' => 'Krisha Porwal ',
										'comments' 	=> 'Krisha has been a successful IELTS trainer for over 8 years, being technology savvy she believes in constantly upgrading her self and is known for her exceptional skills to research on the most latest trends & techniques for the IELTS exam. She has completed her certification with the British Council and Pearson Test of English. Students appreciate her in depth knowledge of IELTS, which has also played a vital role in thousands of students achieving a high band IELTS Score. 	',
										'user_pic' 	=> './assets/img/krisha-porwal-circle.png',
										'designation' => 'Lead Trainer ',
									],
									[
										'user_name' => 'Tassim Tiwari ',
										'comments' 	=> 'Taasim has been teaching English Language and IELTS to adults since 8 years. She is a certified IELTS Trainer from the British Council. She is extremely passionate about training and has trained students from diverse backgrounds. The immense experience she has gained gives her the ability to be mold her teaching style according to the student’s caliber to bring out the best of their ability.',
										'user_pic' 	=> './assets/img/taasim-circle.png',
										'designation' => 'Lead Trainer ',
									],
									[
										'user_name' => 'Sylvia Thomas',
										'comments' 	=> 'Sylvia has 9+ years of experience as a trainer for English Language & IELTS. Having trained in a multilingual and diverse city like Mumbai, she has the skills to train students from various backgrounds, including international students. She excels at adapting new techniques and training tools and believes that learning of any kind should be fun so that it can be retained for a long time. She is also a British Council certified trainer for IELTS. Students appreciate her friendly and caring nature. ',
										'user_pic' 	=> './assets/img/sylvia-circle.png',
										'designation' => 'Lead Trainer',
									],
									[
										'user_name' => 'Kanika Singh',
										'comments' 	=> 'Kanika has been working as an IELTS trainer since 2009. Her calm and pleasing persona helps her deliver high quality training to a large group of students. She has completed her certification with the British Council and Pearson Test of English. She has an exceptional high track record of helping students achieve their target score.',
										'user_pic' 	=> './assets/img/kanika-circle.png',
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
				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="owl-carousel our_team_carousel owl-theme">
							<?php foreach($ourTeamArr as $item): ?>
								<div class="item pl-2 pr-2">
									<div class="our-teams text-center">
										<a href="javascript:void(0);" class="text-decoration-none" onclick="callOurTeamModal('<?php echo $item['user_pic']; ?>', '<?php echo $item['user_name']; ?>', '<?php echo $item['designation']; ?>', '<?php echo $item['comments']; ?>');">
											<div class="row">
												<div class="col-lg-12">
													<img src="<?php echo $item['user_pic']; ?>">
													<!-- <div class="profile_pic" data-src="<?php echo $item['user_pic']; ?>" style="background-image: url(<?php echo $item['user_pic']; ?>);"></div> -->
													<h2><?php echo $item['user_name']; ?></h2>
													<p><?php echo $item['designation']; ?></p>
												</div>
											</div>
										</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-light pt-4 pb-5">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-4">
						<a href="<?php echo (COMMON_CALL_URL.'/tips-and-strategies'); ?>" class="text-decoration-none">
							<h2 class="text-center mt-4 main_heading_text">IELTS Tips and Strategies</h2>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="<?php echo (COMMON_CALL_URL.'/faqs'); ?>" class="text-decoration-none">
							<h2 class="text-center mt-4 main_heading_text">IELTS Classes FAQs</h2>
						</a>
					</div>
					<div class="col-lg-4">
						<a href="<?php echo (COMMON_CALL_URL.'/faqs'); ?>" class="text-decoration-none">
							<h2 class="text-center mt-4 main_heading_text">IELTS Test FAQs</h2>
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php include './layouts/footer.php'; ?>		

		

<div class="modal fade" id="our_team_modal_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLongTitle">Our Team</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
        		<div class="row">
        			<div class="col-md-12 text-center">
        				<h2 id="team_member_name"></h2>
        				<h4 id="team_member_desination"></h4>
    				</div>
				</div>
				<div class="row">
        			<div class="col-md-3">
        				<div class="mt-2" id="team_profile_picture"></div>
        			</div>
        			<div class="col-md-9">
        				<p id="team_member_comments"></p>
        			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</div>


<?php include './layouts/common_scripts.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.numscroller-1.0.js"></script>
<script type="text/javascript">
$('.success_stories_carousel').owlCarousel({
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
			items:1
		},
		1000:{
			items:1
		}
	}
});
$('.our_team_carousel').owlCarousel({
	loop:true,	
	margin:10,
	nav:false,
	autoplay: true,
	lazyLoad: true,
	autoplayTimeout: 8000,
	autoplayHoverPause: true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:4
		}
	}
});
function callOurTeamModal(user_image, user_name, designation, comments){
	console.log(user_image);
	console.log(user_name);
	console.log(designation);
	console.log(comments);
	$('#team_profile_picture').html('<img src='+user_image+'>');
	$('#team_member_name').text(user_name);
	$('#team_member_desination').text(designation);
	$('#team_member_comments').text(comments);
	$('#our_team_modal_popup').modal('show');
}
</script>
</body>
</html>