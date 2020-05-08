<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/c22280aa8e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="./assets/css/custom.css">
		<title>Study Smart</title>
	</head>
	<body>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-black box-shadow sticky-top">
			<h5 class="my-0 mr-md-auto font-weight-normal"><img src="./assets/img/logo_white.png" width="280" /></h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-graduation-cap"></span> About</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-university"></span> Courses</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-pen-fancy"></span> Offline Training</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-at"></span> Contact</a>
				<a class="p-2 main-menu-link" href="#"><span class="fa fa-sign-in-alt"></span> Log in / Free Trial</a>
			</nav>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 p-0">
					<video autoplay muted loop class="background_video">
						<source src="./assets/video/video.mp4" type="video/mp4" />
					</video>
					<div class="animate">
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
					</div>
				</div>
			</div>
		</div>

		<?php
			$studySmartAdv = [
								[
									'img' 	=> './assets/img/live_class.png',
									'title' => 'Live Online Classes',
									'desc' 	=> 'Our Trainers provide Live Interactive classes through Zoom where the experience is as good as an actual classroom session, Come Claim its Even Better!',
								],
								[
									'img' 	=> './assets/img/one_roof.png',
									'title' => 'Everything Under One Roof',
									'desc' 	=> 'Our Online Portal is a One-Stop Shop for all Interactive Lessons, Tips & Tricks, Study Material, Recorded Classes, Mock Tests, Learning Resources and More! ',
								],
								[
									'img' 	=> './assets/img/guidance.png',
									'title' => 'Guidance & Support from the Best Trainers',
									'desc' 	=> 'Our Trainers are Cambridge & British Council Certified, carry years of training experience & provide One to One Support and Mentoring to students',
								],
								[
									'img' 	=> './assets/img/anytime.png',
									'title' => 'Learn Anytime! Anywhere!',
									'desc' 	=> 'You can prepare for the IELTS at your own convenience through our interactive Self-Guided Skill Building Lessons, Practice Material, Fun Exercises, Quizzes & Recorded lectures through Our Online Portal.',
								],
								[
									'img' 	=> './assets/img/mock_test.png',
									'title' => 'Comprehensive Mock Tests',
									'desc' 	=> 'Get access to Module Wise and Full Length Scored Mock test with Evaluations, Personalized Feedback and Score Predictor',
								],
								[
									'img' 	=> './assets/img/improvement.png',
									'title' => 'Improvement Guaranteed',
									'desc' 	=> 'We have trained over 12,000 students with a 96% success rate. Become a part of our Success Story! ',
								],
							];
		?>

		<div class="bg-white mt-4">
			<div class="container">
				<div class="row mb-2">
					<div class="col-lg-12">
						<h2 class="text-center main_heading_text">The Study Smart Advantages</h2>
					</div>
				</div>
				<div class="row mt-3">
					<?php
						foreach($studySmartAdv as $item): ?>
							<div class="col-lg-4 mt-2 mb-2">
								<div class="study_smart_adv">
									<img src="<?php echo $item['img']; ?>" alt="" width="80">
									<h2><?php echo $item['title']; ?></h2>
									<p><?php echo $item['desc']; ?></p>
								</div>
							</div>
						<?php endforeach;
					?>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
      (function () {
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
      })();

      var animate = {};
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
        });
    </script>
	</body>
</html>