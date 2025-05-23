<?php
	include ('include/header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Carousel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="custom.css">
	<style>
        /* Set carousel height to 80vh */
        #carouselExampleCaptions {
            height: 90vh;
        }
        .carousel-inner, .carousel-item {
            height: 100%;
        }
        .carousel-item img {
    width: 100%; /* Full width */
    height: 100vh; /* Full height of the viewport */
    object-fit: cover; /* Ensures the image fills the entire div */
}

 .carousel-item {
    position: relative;
}

.carousel-item .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Adjust the opacity for darker effect */
    z-index: 1;
}

.carousel-item img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
}

.carousel-caption {
    position: absolute;
    z-index: 2; /* Ensures text appears above the overlay */
}



    </style>
</head>
<body>

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false" p-0 m-0>
  <div class="carousel-inner">
<!-- 	   <div class="overlay"> -->
    <div class="carousel-item active">
	    <div class="overlay"></div>
      <img src="img/img10.jpg" class="d-block w-100 mb-0" alt="Slide 1">
      <div class="carousel-caption d-md-block">
        <h3>Donate the blood, save the life</h3>
        <p>Donate the blood to help the others.</p>
      </div>
    </div>
    <div class="carousel-item">
	    <div class="overlay"></div>
      <img src="img/img12.jpg" class="d-block w-100 mb-0" alt="Slide 2">
      <div class="carousel-caption d-md-block">
        <h3>Donate the blood, save the life</h3>
        <p>Donate the blood to help the others.</p>
      </div>
    </div>
    <div class="carousel-item">
	    <div class="overlay"></div>
      <img src="img/img13.jpg" class="d-block w-100 mb-0" alt="Slide 3">
      <div class="carousel-caption d-md-block">
        <h3>Donate the blood, save the life</h3>
        <p>Donate the blood to help the others.</p>
      </div>
    </div>
  </div>
<!--   </div> -->
	 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
	
</div>



<!-- header start -->
<!-- <div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			
			<div class="header" style="
    justify-content: center; 
    align-items: center; 
    text-align: center;
    color: white;
     height: 80vh; 
">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
</div>
			
		</div>
	</div>
</div> -->
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid" style="background-color: #E74C3C; height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 30px; margin-top: 0px; padding-top: 0px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color: white; font-weight: 700; padding: 10px 0 0 0; text-transform: uppercase;">
                Donate The Blood
            </h1>
            <hr style="width: 300px; height: 4px; background-color: white; border: none; margin: 10px auto;">
            <p class="text-center" style="color: white; font-size: 18px; max-width: 900px; margin: 50px auto; line-height: 1.6;">
                Blood donation refers to a practice where people donate their blood to people so it helps them with their health problems. 
                Blood is one of the most essential fluids of our body that helps in the smooth functioning of our body. If the body loses blood in 
                excessive amounts, people get deadly diseases and even die. Whole blood donation is the most common type of blood donation. 
                During this donation, you donate about a pint (about half a liter) of whole blood. The blood is then separated into its components 
                — red cells, plasma, and sometimes platelets.
            </p>
<!--             <div style="text-align: center; margin-top: 20px;">
                <a href="donate.php" class="btn btn-default btn-lg" style="background-color: white; color: #E74C3C; font-weight: bold; padding: 10px 20px; border-radius: 50px;">
                    Become a Life Saver!
                </a>
            </div> -->
        </div>
    </div>
</div>

<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				The practice of voluntary blood donation can not only guarantee the needs of clinical blood use, ensure the safety of blood transfusion, and achieve the purpose of treating diseases and saving lives, but it is also a social mutual aid behaviour, which was an important embodiment of the humanitarian spirit and start to new life to the donate the blood 
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				Before you give blood, you will be asked questions about your medical history, including any medication you are taking, and about your current health and lifestyle. You may also be asked about recent travel; for example, if you live in a country where there is no malaria, you may be asked whether you have recently visited a tropical country. 
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				We continuously evaluate and improve our processes and outreach efforts to enhance the effectiveness of our mission. By staying responsive to the evolving needs of the community and advancements in medical technology, we can better serve both donors and recipients of donated blood.In summary, our mission is centered around promoting voluntary blood donation
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php
//include footer file
include ('include/footer.php')
?>
