<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contact Us | Study Smart</title>
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
		.bottom_section_layout{
			    padding: 35px 15px 20px 15px;
			    text-align: left;
			    border: 1px solid #f7f7f7;
			    border-radius: 10px;
			    margin-bottom: 10px;
			    background-color: #f4fcff;
			    height: auto;
			    overflow: hidden;
			    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.16);
			}
	</style>
</head>
<body>
	<?php include("../layouts/header.php"); ?>
	
	<div class="container mt-3 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center pb-2 page-heading-text">Contact Us</h2>
				<p class="page-para-text text-center pt-2 pb-2">To Get Started or for a Free Trial, please complete the form below. Our counsellors will contact you within 24 hrs for further assistance.</p>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-md-6">
				<div class="bottom_section_layout">
					<form method="POST" action="https://thirdpartyapi.extraaedge.com/api/SaveRequest" class="submit_lead_form">
						<input type="hidden" name="AuthToken" value="ARIHANTEDU-28-04-2020">
						<input type="hidden" name="Source" value="arihanteducation">
					    <input type="hidden" name="LeadSource" value="Website">
					    <input type="hidden" name="LeadType" value="Online">
					    <input type="hidden" name="LeadName" value="Contact Us Form">
					    <input type="hidden" name="Course" value="Not Known">
						<div class="row mt-3">
							<div class="col-md-12">
								<label>Name</label>
								<input type="text" class="form-control" name="FirstName"  required="" placeholder="Enter your name">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<label>Mobile Number</label>
								<input type="text" class="form-control" name="MobileNumber"  required="" placeholder="Enter your mobile number">
							</div>	
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<label>Email ID</label>		
								<input type="email" name="Email" class="form-control" required="" placeholder="Enter your email address">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<label>Location</label>		
								<input type="text" name="Location" class="form-control" required="" placeholder="Enter your area/location">
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-md-12">
								<label>Enquiry</label>
								<textarea class="form-control" name="Comment" required="" placeholder="Enter your enquiry"></textarea>
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-md-12">
								<button type="submit" name="submit_btn" value="submit_btn" class="btn btn-md btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<?php 
				$faqsArr = [
							[
								'office_title' 		=> 'Head Office',
								'office_address' 	=> 'D-62, Ground Floor, Near Dena Bank, South Extension 1, Delhi 110049',
								'office_tel' 		=> '011 4109 1184/86',
								'office_mob' 		=> '+91 9650680072',
								'office_email' 		=> 'info@studysmart.co.in',
							],
							[
								'office_title' 	=> 'Pune Office',
								'office_address' 	=> 'Office no 23, 3rd Floor, Gold Field Plaza, Opp Wadia College, 45 Sassoon Road, Pune 411001',
								'office_tel' 		=> '+91 20 40040105/06/07',
								'office_mob' 		=> '+91 9650680072',
								'office_email' 		=> 'pune@studysmart.co.in',
							],
							[
								'office_title' 	=> 'Gurgaon Office',
								'office_address' 	=> '778, Sector 43, Delhi NCR 122008',
								'office_tel' 		=> '',
								'office_mob' 		=> '+91 9650680072',
								'office_email' 		=> 'gurgaon@studysmart.co.in',
							],
							[
								'office_title' 	=> 'Thane Office',
								'office_address' 	=> 'Office No. 202, 2rd Floor, Shreeji Ashish, Lohar Ali Rd, Thane West, Thane, Maharashtra 400601',
								'office_tel' 		=> '',
								'office_mob' 		=> '+91 9650680072',
								'office_email' 		=> 'thane@studysmart.co.in',
							],
							[
								'office_title' 	=> 'Surat Office',
								'office_address' 	=> 'M - 8, Sargam Shopping Center Off. Gaurav Path, Surat - Dumas Rd, Athwalines, Surat, Gujarat 395007',
								'office_tel' 		=> '',
								'office_mob' 		=> '+91 9650680072',
								'office_email' 		=> 'surat@studysmart.co.in',
							],
							[
								'office_title' 	=> 'New Zealand Office',
								'office_address' 	=> '1052, Great North Road, Point Chevalier, Auckland 1022 New Zealand',
								'office_tel' 		=> '+64 223669091',
								'office_mob' 		=> '',
								'office_email' 		=> 'Nish@studysmart.co.in',
							],
							[
								'office_title' 	=> 'To partner with us',
								'office_address' 	=> '',
								'office_tel' 		=> '+91 20 40040108',
								'office_mob' 		=> '',
								'office_email' 		=> 'marketing@studysmart.co.in',
							],
						];
			?>

			<div id="accordion">
  						<?php foreach($faqsArr as $key => $item): ?>
  						<div class="card">
    						<div class="card-header" id="heading_<?php echo $key; ?>">
      							<h5 class="mb-0">
        							<button class="btn btn-link text-dark text-decoration-none" data-toggle="collapse" data-target="#collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>">
        								<span class="fa fa-map-marker-alt"></span>&nbsp; <?php echo $item['office_title']; ?>
    								</button>
      							</h5>
    						</div>
							<div id="collapse_<?php echo $key; ?>" class="collapse <?php if($key == 0): ?> show <?php endif; ?>" aria-labelledby="heading_<?php echo $key; ?>" data-parent="#accordion">
      							<div class="card-body">
      								<ul class="list-unstyled">
      									<?php if(!empty($item['office_address'])): ?>
      										<li class="p-1"><span class="fa fa-building"></span>&nbsp; <?php echo $item['office_address']; ?></li>
  										<?php endif; ?>
  										<?php if(!empty($item['office_tel'])): ?>
      										<li class="p-1"><span class="fa fa-phone-alt"></span>&nbsp; <?php echo $item['office_tel']; ?></li>
  										<?php endif; ?>
      									<?php if(!empty($item['office_mob'])): ?>
      										<li class="p-1"><span class="fa fa-mobile-alt"></span>&nbsp; <?php echo $item['office_mob']; ?></li>
  										<?php endif; ?>
      									<?php if(!empty($item['office_email'])): ?>
      										<li class="p-1"><a class="text-dark" href="mailto:<?php echo $item['office_email']; ?>"><span class="fa fa-envelope"></span>&nbsp; <?php echo $item['office_email']; ?></a></li>
  										<?php endif; ?>
      								</ul>
  								</div>
    						</div>
  						</div>
  					<?php endforeach; ?>
					</div>
			</div>
		</div>
	</div>

<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/common_scripts.php'; ?>
<script type="text/javascript">
    var form = $('.submit_lead_form');
    form.submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            // dataType: 'json',
       	    data: JSON.stringify(objectifyForm(form.serializeArray())),
            success: function (data) {
          		if(data == 'Success'){
          			$('#thanks_popup_call_msg').modal('show');
          		}
            },
            error: function (data) {
              	
            },
        });
    });
    function objectifyForm(formArray){
    	var returnArray = {};
  		for (var i = 0; i < formArray.length; i++){
    		returnArray[formArray[i]['name']] = formArray[i]['value'];
  		}
  		return returnArray;
	}
</script>
</body>
</html>