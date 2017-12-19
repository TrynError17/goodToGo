<?php
	include('header.php');
?>


							<!-- Header -->
								<header id="header">
									<div class="logo"><strong>WELCOME TO FIRSTHITSOLUTIONS.COM</strong></div>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

								<div class="w3-content w3-section" style="max-width:500px;max-width: 500px;border-style: solid;border-width: 1px;border-color: black;">
								  	<img class="mySlides" src="images/Capture.png" style="width:100%">
								  	<img class="mySlides" src="images/Capture1.png" style="width:100%">
								  	<img class="mySlides" src="images/Capture2.png" style="width:100%">
								  	<img class="mySlides" src="images/Capture3.png" style="width:100%">
								  	<img class="mySlides" src="images/Capture4.png" style="width:100%">
								</div>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<p>COMPANY BACKGROUND</p>
										</header>
										<p>
											FirstHit Solutions Sdn. Bhd. was established in 2016. Our objective is to provide the best quality service to our customers and to ensure they recover as much value as possible from their non-performing, delinquent debts. 
										</p>
										<p>
											The fundamental principle of FirstHit is to provide service to the clients in the best and most professional way. FirstHit engages specialized and skilled personnel to recover debts for clients such as Government Agencies, Banks, Public Listed Companies, large Private Companies and Property Management Agencies. We maintain client loyalty through our effective tracking methods with emphasis on result-oriented business philosophy.  For us to achieve our fundamental objectives, we have learnt that we must have diligent, creative and resourceful personnel.
										</p>
										<p>
											FirstHit Solutions Sdn Bhd is located at No 23C, Jalan Kenari 4, Bandar Puchong Jaya, 47100 Puchong, Selangor Darul Ehsan.
										</p>
									</div>
								</section>
						
								<section id="banner">
									<div class="content">
										<header>
											<p>VISION, MISSION AND OBJECTIVES</p>
										</header>
										<p>
											Vision of First Hit 
										</p>
										<p>
											To develop and establish FirstHit as a premier credit tracking agency and a recognized institution with the ability to reduce the financial debt in corporations through ethical and professional practices and by facilitating the achievement of sound credit payment among the borrower sand defaulters.
										</p>
										<p>
											Mission Statement of First Hit
										</p>
										<ul>
											<li>
												To be recognized as a leading institution in credit tracking, establishing effective and professional practices in credit collection. 
											</li>
											<li>
												To provide clients and community at large with the highest level of service, quality and professionalism. 
											</li>
											<li>
												To ensure growth in the loan / credit business in Malaysia. 
											</li>
										</ul>


										<p>
											Principles and Objectives
										</p>
										<ul>
											<li>
												Dedicated to help companies and businesses overcome their debt collection problems.  
											</li>
											<li>
												To promote greater understanding and education on borrowers to practice repaying debt on a gradual but definite manner. 
											</li>
											<li>
												To minimize financial risk for clients or borrowers by undertaking a steady cash flow from loan repayment by defaulters  
											</li>
										</ul>										
									</div>									
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
<?php
	include('footer.php');
?>

							

<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 4000); // Change image every 4 seconds
	}
</script>

