<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>FAQs | Study Smart</title>
		<?php include '../layouts/common_styles.php'; ?>
		<style type="text/css">
			.page-heading-text:after{
			    content: "";
			    display: block;
			    width: 65px;
			    height: 3px;
			    background-color: #2aa1cb;
			    margin-top: 8px;
			    margin: 3px auto;
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
		
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center pb-2 page-heading-text">FAQs</h2>
				</div>
			</div>

			<?php 
				$faqsArr = [
							[
								'question' 	=> 'When does the new batch for the Online IELTS Training start?',
								'answer' 	=> 'We start a new batch of Online IELTS Training on every Monday, Friday and Saturday. This provides the flexibility of joining as per your convenience. We also have flexible time slots through out the day, so you can choose a batch that suits you the most.',
							],
							[
								'question' 	=> 'How do I pay the fees for Online IELTS Training course?',
								'answer' 	=> 'We accept payments via cash, cheque, bank transfer, UPI, and Paytm. Our counselors will guide you with the payment options for the Online IELTS Training course.',
							],
							[
								'question' 	=> 'Can I pay the IELTS Class fees in installments?',
								'answer' 	=> 'Yes, the fees can be paid in a maximum of two equal installments. For more flexibility on payment plans you can connect with our counselors.',
							],
							[
								'question' 	=> 'When will I receive access to the Online Portal for IELTS?',
								'answer' 	=> 'You will receive access to all the training material and the online portal for IELTS after you have paid 50% or more of your course fees.',
							],
							[
								'question' 	=> 'Is there any validity of the Online IELTS Portal?',
								'answer' 	=> 'Your access to the online IELTS portal is valid for 6 months.',
							],
							[
								'question' 	=> 'What other IELTS material do I get from your side besides the portal?',
								'answer' 	=> 'Our Online IELTS Portal has the most comprehensive content with multiple Self Guided Lessons on all four modules of IELTS. Ideally students do not require more material for IELTS Test Preparation, however, Study Smart will provide you a the soft copy of IELTS Student Work Book curated by Study Smart and soft copy of a variety of IELTS books from Cambridge and Barrons.',
							],
							[
								'question' 	=> 'How many IELTS mock test will I have access to?',
								'answer' 	=> 'You will have access to 5 full length IELTS Mock Tests and 10 sectional mock tests for each module.',
							],
							[
								'question' 	=> 'How many IELTS mock test will your IELTS trainers evaluate and give feedback for?',
								'answer' 	=> 'There will be a full evaluation with analysis and feedback provided for 3 full length mock tests. A predicted IELTS score will also be provided with focus on your areas of improvement.',
							],
							[
								'question' 	=> 'How will the practice for IELTS Speaking tests be conducted?',
								'answer' 	=> 'The sectional and mock tests on the portal will give you a feel of the real testing environment in the form of a video interview. In addition, our trainers conduct one to one speaking practice sessions for IELTS with all students via ZOOM.',
							],
							[
								'question' 	=> 'How will I practice on IELTS writing in case I am preparing for Non Computer Based IELTS Exam?',
								'answer' 	=> 'You will be able to gain and enhance the skills required to perform well in theIELTS writing section using the IELTS Writing mock tests available on the Portal. Our IELTS trainers will also provide you with Offline mock tests, which you can attempt, scan and email to our trainer for feedback.',
							],
							[
								'question' 	=> 'When and how will I get feedback on my IELTS practice assignments?',
								'answer' 	=> 'You will receive feedback on your assignments within 48 hours via portal or email.',
							],
							[
								'question' 	=> 'What is the minimum duration of the IELTS classes?',
								'answer' 	=> 'Minimum duration of the IELTS training is 4 weeks, there are fast track IELTS preparation courses available which can be completed in 2 weeks.',
							],
							[
								'question' 	=> 'Can I extend my Online IELTS Training course?',
								'answer' 	=> 'Yes, the training duration can be extended, however Study Smart reserves the right to charge fees for extended period of IELTS training.',
							],
							[
								'question' 	=> 'Can I finish the Online IELTS Training in 2 weeks?',
								'answer' 	=> 'Yes, training can be finished in 2 weeks by opting for our special fast track Online IELTS training course.',
							],
							[
								'question' 	=> 'What happens if I miss any of my IELTS class?',
								'answer' 	=> 'In case you miss any class please inform your IELTS Trainer or counselor and we will be happy to compensate for a limited number of your missed IELTS classes. Terms and conditions apply. We encourage you to discuss this with your counselors and trainers, and we will do our best to accommodate you on a case to case basis.',
							],
							[
								'question' 	=> 'Do I get any guarantee on IELTS Exam scores?',
								'answer' 	=> 'We can guarantee an improvement in the skills you require to crack the IELTS Exam, however, we cannot give you any guarantee on your score. Through our IELTS Portal you can track your own improvement with our Band Predictor and performance analytic reports.',
							],
							[
								'question' 	=> 'What if I do not get desired score on IELTS Exam?',
								'answer' 	=> 'We recommend you to extend your training course if you do not get a desired score, so you are better prepared for your next attempt. Our trainers thrive to ensure that every student has attempted at least 3 full mock tests before they appear for the actual IELTS Exam.',
							],
							[
								'question' 	=> 'Do you provide post Online IELTS Training support?',
								'answer' 	=> 'Yes, we do provide support to all our students after they are done with their training. Students also continue to retain access to the Online IELTS Portal for 6 months.',
							],
							[
								'question' 	=> 'Do you provide in person support for Online IELTS class students?',
								'answer' 	=> 'Yes, if required, we do provide in person support to all our students at our training centres in Delhi, Pune, Surat& Thane. If students require personal support, they can book a doubt session with the trainer at any of our centres.',
							],
							[
								'question' 	=> 'How many in person doubt session can I attend?',
								'answer' 	=> 'Depends on the level of your doubts, usually 1-2 doubt sessions.',
							],
							[
								'question' 	=> 'Do I need any specific skills before taking this Online IELTS Training?',
								'answer' 	=> 'You should have Basic English Language Proficiency with decent understanding of grammar. Don’t worry every student can attempt our Free Diagnostic test to self evaluate the level of English proficiency required for this course. Having basic computer operating skills will be an added advantage.',
							],
							[
								'question' 	=> 'How do you conduct the Online IELTS classes?',
								'answer' 	=> 'Our classes are conducted on ZOOM, which is a very advanced video conferencing platform with facilities like whiteboard and screen sharing.It is used for providing online training by top universities and institutes across the globe.',
							],
							[
								'question' 	=> 'What if I face any technical issue?',
								'answer' 	=> 'You ideally would not face any issues if you have a computer / laptop with a good and stable Internet connection. If you still face difficulty our trainers and counselors will assist you to ensure your training experience is good.',
							],
							[
								'question' 	=> 'Are these One to One IELTS classes?',
								'answer' 	=> 'No, these are group IELTS classes. Group sizes vary from 3-8 students for every batch.',
							],
							[
								'question' 	=> 'What is the maximum batch size of the Online IELTS Training course?',
								'answer' 	=> 'Batch sizes are restricted to a maximum 8 to provide better experience to our students.',
							],
							[
								'question' 	=> 'Are these recorded IELTS classes?',
								'answer' 	=> 'No, these are live and interactive classes with our highly qualified and experienced IELTS trainers. You do have access to your recorded classes as well, in case you want to revisit any part of your class.',
							],
							[
								'question' 	=> 'Will I get personal attention from the IELTS trainer?',
								'answer' 	=> 'Yes, all our students get personal attention from theIELTS trainers. The sessions are very interactive and our trainers encourage participation and contribution from every student.',
							],
							[
								'question' 	=> 'How will I know my progress in the course?',
								'answer' 	=> 'We monitor the performance of our students with the mock test results and these will be shared with you time to time. Trainers will also share regular feedback and suggest on areas of performance improvement. Through our portal you also have access to detailed report, which will help you to self-analyze your performance and track your progress.',
							],
							[
								'question' 	=> 'We are two or more people, is there any discount on the IELTS course fees?',
								'answer' 	=> 'Yes, we offer group discount for 2 or more students. Please speak to your counselor or call us on our helpline number or more details.',
							],
							[
								'question' 	=> 'Do you offer refunds?',
								'answer' 	=> 'All the payments made for the training are non-refundable in all circumstances.',
							],
							[
								'question' 	=> 'If I change my plans, can I allow someone else to take training on my behalf?',
								'answer' 	=> 'No payments made for training are non-transferable. However such request could be looked at one case to case basis at the sole discretion of Study Smart.',
							],
							[
								'question' 	=> 'Do you provide support in Grammar?',
								'answer' 	=> 'Yes, trainers will provide you with basic support and tutorials on grammar. On our portal we also provide in-depth Self Guided Lessons on Grammar and Vocabulary.',
							],
							[
								'question' 	=> 'What other services you offer?',
								'answer' 	=> 'We provide other test preparation services for exams like PTE and TOEFL. We also provide consultation and guidance to students looking to Study Abroad. You can visit our main website www.studysmart.co.in for more details.',
							],
							[
								'question' 	=> 'How do I trust Study Smart?',
								'answer' 	=> 'Study Smart has built its reputation in the market by working with ethics and honesty. Study Smart is proud of helping over 12,000 students achieve their desired IELTS score. We provide unprejudiced services without compromising on quality. We never shy away from going extra mile to support our students. You can check reviews of our services on various social media platforms.',
							],
							[
								'question' 	=> 'How do I contact Study Smart?',
								'answer' 	=> 'You can visit us in person, call us or email us for any query.',
							],
							[
								'question' 	=> 'What escalation channels are available incase I have issues with the IELTS Trainers?',
								'answer' 	=> 'You can email your concerns to the management team of the company on management@studysmart.co.in. All you concerns will be addressed on priority within 24-48 hours.',
							],
							[
								'question' 	=> 'What kind of Internet connection I need for the Online IELTS Training?',
								'answer' 	=> 'You should have good stable internet connection with at least 2 MBPS of bandwidth.',
							],
							[
								'question' 	=> 'Do I need any special software to be installed to use the IELTS Online Portal?',
								'answer' 	=> 'No there is no specific software that is needed to be installed before training. The portal works on all popular internet browsers like Chrome, Safari etc.',
							],
							[
								'question' 	=> 'Can I use the IELTS Online portal on a Mobile device?',
								'answer' 	=> 'We recommend using a computer/laptop to have better learning experience.',
							],
							[
								'question' 	=> 'Can I attend the liveOnline IELTS classes from a mobile device?',
								'answer' 	=> 'Yes, you can but we recommend using a computer/laptop to have better learning experience.',
							],
							[
								'question' 	=> 'Do I need to take any computer training to be able to attend the Online IELTS Training?',
								'answer' 	=> 'No computer training is required? However, having a basic knowledge of operating a computer will be an added advantage.',
							],
							[
								'question' 	=> 'Can I get a Demo/trial Class before I enroll?',
								'answer' 	=> 'Yes, you can take a full demo trial class before you enroll. To book your Free Trial class you call us on our helpline number or submit an enquiry online.',
							],
							[
								'question' 	=> 'Can I get a Demo log in for the IELTS Online Portal before I enroll?',
								'answer' 	=> 'Yes, you can get a demo login for online portal to explore and understand the features of our comprehensive Online portal. The demo log in will be valid for 2 days only.',
							],
						];
			?>

			<div class="row mt-3 mb-5">
				<div class="col-md-12">
					<div id="accordion">
  						<?php foreach($faqsArr as $key => $item): ?>
  						<div class="card">
    						<div class="card-header" id="heading_<?php echo $key; ?>">
      							<h5 class="mb-0">
        							<button class="btn btn-link text-dark text-decoration-none" data-toggle="collapse" data-target="#collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>"><?php echo $item['question']; ?></button>
      							</h5>
    						</div>
							<div id="collapse_<?php echo $key; ?>" class="collapse" aria-labelledby="heading_<?php echo $key; ?>" data-parent="#accordion">
      							<div class="card-body"><?php echo $item['answer']; ?></div>
    						</div>
  						</div>
  					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/common_scripts.php'; ?>
</body>
</html>