<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Offline Training | Study Smart</title>
		<?php include '../layouts/common_styles.php'; ?>
		<style type="text/css">
			.offline_training_bg{
			    height: 85vh;
			    background-repeat: no-repeat;
			    background-size: cover;
			    background-position: center;
			    width: 100%;
			}
			.video_text_block{
			    z-index:1;
			    text-align: left;
			    position: absolute;
			    left: 10px; 
			    right: 10px;
			    width: 670px;
			    top:160px;
			}
			.animate_main_head{
			    color: #1a202e;
		        text-shadow: 4px 4px 3px rgba(152, 152, 152, 0.6);
			}
			.page-heading-text:after{
			    content: "";
			    display: block;
			    width: 65px;
			    height: 3px;
			    background-color: #2aa1cb;
			    margin-top: 8px;
			    margin: 3px 0px 0px 0px;
			}
			.study_smart_adv{
				height: 250px;
			}
			.bottom_blue_bar:after{
			    margin: 0 auto !important;
			}

			@media only screen and (max-width: 763px) {
				.offline_training_bg{
					height: 40vh;
				}
				.video_text_block{
				    width: unset;
				    top: 80px;
				}
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
		<?php include '../layouts/header.php'; ?>
		
		<div class="offline_training_bg" style="background-image: url('<?php echo (COMMON_CALL_URL.'/assets/img/offline_training.jpeg'); ?>')">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="video_text_block">
							<h2 class="animate_main_head">Crack the IELTS Exam with our Cambridge Certified Trainers.</h2>
							<p class="pt-4">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#call_popup_send_leads" class="animate_main_tag_link">Get Started</a>
							</p>
						</div>
					</div>
				</div>
			</div>			
		</div>


		<?php
			$studySmartAdv = [
								[
									'img' 	=> 'state-art-infrastructure.png',
									'title' => 'State of the Art Infrastructure',
									'desc' 	=> 'Our Centers are equipped with high tech classrooms with Smart Boards, Library and facilities for students.',
								],
								[
									'img' 	=> 'certified_trainer.png',
									'title' => 'Certified & Experience Trainers',
									'desc' 	=> 'Our Trainers are Cambridge & British Council Certified, carry Years of Experience & provide One to One Support & Mentoring to students',
								],
								[
									'img' 	=> 'one_roof.png',
									'title' => 'Everything Under One Roof',
									'desc' 	=> 'Our Online Portal is a One-Stop Shop for Interactive Lessons, Tips, Study Material, Recorded Classes, Mock Tests, Learning Resources & More!',
								],
								[
									'img' 	=> 'mock_test.png',
									'title' => 'Comprehensive Mock Tests',
									'desc' 	=> 'Get access to Module Wise and Full Length Scored Mock test with Evaluations, Personalized Feedback & Score Predictor',
								],
								[
									'img' 	=> 'anytime.png',
									'title' => 'Flexible Batches',
									'desc' 	=> 'We have multiple Weekday Batches and choice of Taking Weekend and Fast Track batches as per your convenience.',
								],
								[
									'img' 	=> 'improvement.png',
									'title' => 'Improvement Guaranteed',
									'desc' 	=> 'Having trained over 12,000 Students with a 96% Success Rate, We Guarantee an Improvement. Become a part of our Success Story!',
								],
							];
		?>

		<div class="bg-white pt-4 pb-3">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center pb-2 main_heading_text">Get The Study Smart Advantage</h2>
					</div>
				</div>
				<div class="row mt-1">
					<?php
						foreach($studySmartAdv as $item): ?>
							<div class="col-lg-4 mt-2 mb-2">
								<div class="study_smart_adv">
									<img src="<?php echo (COMMON_CALL_URL.'/assets/img/'.$item['img']); ?>" alt="" width="60">
									<h2><?php echo $item['title']; ?></h2>
									<p><?php echo $item['desc']; ?></p>
								</div>
							</div>
						<?php endforeach;
					?>
				</div>
			</div>
		</div>



		<div class="container">
			<hr>
			<div class="row mt-4">
				<div class="col-md-8">
					<h2 class="text-left pb-2 page-heading-text">IELTS Offline Course Offering</h2>
					<ul class="list-unstyled">
						<li class="pb-2"><span class="fa fa-check"></span> 32 - 60 hours of classes</li>
						<li class="pb-2"><span class="fa fa-check"></span> 120 + hours of self guided personal training through our skill building lessons on the online portal </li>
						<li class="pb-2"><span class="fa fa-check"></span> 200+ practice exercises and quizzes </li>
						<li class="pb-2"><span class="fa fa-check"></span> 10 mock tests for each module </li>
						<li class="pb-2"><span class="fa fa-check"></span> 5 Full Length Mock tests, 3 with Evaluation, Personalized Feedback & Score Predictor</li>
						<li class="pb-2"><span class="fa fa-check"></span> 24 X 7 access to online portal for 6 months </li>
						<li class="pb-2"><span class="fa fa-check"></span> One to One Support from our Cambridge Certified Trainers</li>
						<li class="pb-2"><span class="fa fa-check"></span> Customized IELTS work book designed by Study Smart for all students</li>
						<li class="pb-2"><span class="fa fa-check"></span> Latest and most updated course curriculum</li>
						<li class="pb-2"><span class="fa fa-check"></span> Regular feedback, performance assessment & personalized attention</li>
						<li class="pb-2"><span class="fa fa-check"></span> Free Diagnostic Mock Test and Demo Class</li>
						<li class="pb-2"><span class="fa fa-check"></span> Choice of taking training on Individual Modules</li>
						<li class="pb-2"><span class="fa fa-check"></span> New batches Starting Every week </li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center page-heading-text bottom_blue_bar">Class Schedule</h2>
				</div>
			</div>

			<div class="row mt-4 mb-5">
				<div class="col-md-6">
					<div class="courses_block">
						<div>
							<p class="font-weight-bold">IELTS Coaching in Delhi, Pune & Thane- Batch Timings</p>
							<p class="font-weight-bold">Regular IELTS Training Batch</p>
							<p><span class="font-weight-bold">Duration</span>: Monday to Thursday for 4 weeks</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 10:00 AM to 12:00 PM</li>
								<li><span class="fa fa-clock"></span> 04:00 AM to 06:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Weekend IELTS Training Batch</p>
							<p><span class="font-weight-bold">Duration</span>: Saturday to Sunday for 4 weeks</p>								
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 10:00 AM to 02:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Fast Track IELTS Training Batch</p>
							<p><span class="font-weight-bold">Duration</span>: Monday to Thursday for 2 weeks</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 10:00 AM to 12:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Fast Track IELTS Training Batch</p>
							<p class=""><span class="font-weight-bold">Duration</span>: Saturday to Sunday for 2 weeks</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 10:00 AM to 02:00 PM</li>
							</ul>
						</div>
						<hr>
						<div class="mt-4">
							<a class="btn btn-outline-primary btn-block font-weight-bold" href="javascript:void(0);" data-toggle="modal" data-target="#call_popup_send_leads">Pricing : Rs. <?php echo number_format(9500, 2); ?> + taxes</a>
						</div>
						<div class="mt-3">
							<a class="btn btn-primary btn-block" href="javascript:void(0);" data-toggle="modal" data-target="#call_popup_send_leads">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="courses_block">
						<div>
							<p class="font-weight-bold">IELTS Coaching in Surat - Batch Timings</p>
							<p class="font-weight-bold">Regular IELTS Training Batch</p>
							<p class=""><span class="font-weight-bold">Duration</span>: Monday to Friday</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 09:00 AM to 11:00 AM</li>
								<li><span class="fa fa-clock"></span> 07:00 PM to 09:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Weekend IELTS Training Batch</p>
							<p class=""><span class="font-weight-bold">Duration</span>: Saturday and Sunday</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 10:00 AM to 02:00 PM & 04:00 PM to 08:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Intensive IELTS Training Batch</p>
							<p class=""><span class="font-weight-bold">Duration</span>: Monday to Friday</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 04:00 PM  to 07:00 PM</li>
							</ul>
						</div>
						<hr>
						<div>
							<p class="font-weight-bold">Spoken English Training Batch</p>
							<p class=""><span class="font-weight-bold">Duration</span>: Monday to Friday for 4 weeks</p>
							<p class="font-weight-bold">Timings:</p>
							<ul class="list-unstyled">
								<li><span class="fa fa-clock"></span> 12:00 PM to 02:00 PM</li>
							</ul>
						</div>
						<hr>
						<div class="mt-4">
							<a class="btn btn-outline-primary btn-block font-weight-bold" href="javascript:void(0);" data-toggle="modal" data-target="#call_popup_send_leads">Pricing : Rs. <?php echo number_format(12500, 2); ?> + taxes</a>
						</div>
						<div class="mt-3">
							<a class="btn btn-primary btn-block" href="javascript:void(0);" data-toggle="modal" data-target="#call_popup_send_leads">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/common_scripts.php'; ?>
</body>
</html>