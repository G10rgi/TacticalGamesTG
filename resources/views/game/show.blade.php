<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FreeGamesGe</title>

	
	<link rel="stylesheet" type="text/css" href="{{asset('styles/app.css')}}">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>
<body>
	<header>
		<a href="/" class="logo">TacticalGames</a>
	</header>

	
	<section style="background-image:url({{$game->image}})" class="card-background">
	</section>

	<div class="wrapper">
        <div class="GameInfo">
            <p>{{$game->description}}</p>
        </div>

        
        <div class="slideshow-container">   
            @foreach ($game->additional_images as $key=>$image)   
                <x-slider-card :image="$image" :number="$loop->iteration.' / '.count($game->additional_images)"/>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </>
        <br>
        
        <div style="text-align:center">
            @foreach ($game->additional_images as $image)
                <span class="dot" onclick="currentSlide($loop->iteration)"></span>
            @endforeach
        </div>

        <div class="GameReq">
            <h3>Minimum</h3>
                <ul>
                    <li>OS: {{$game->requirements->os}} </li>
                    <li>CPU: {{$game->requirements->cpu}}</li>
                    <li>Ram: {{$game->requirements->ram}}</li>
                    <li>GPU: {{$game->requirements->gpu}}</li>
                </ul>
        </div>

        <a href="{{$game->download_link}}" target = "_blank" class="downloadBtn">
            <button>გადმოწერა</button>
        </a>
    
    </div>
	
    <!-- footer -->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>საკონტაქტო ინფორმაცია</h4>
					<ul>
						<li>შარლ დეგოლის გამზირი</li>
						<li>თბილისი</li>
						<li>+995 577-964-904-340</li>
						<li>FreeGamesGe@gmail.com</li>
						<li>+995 511-222-734-345</li>
					</ul>
				</div>

				<div class="list">
					<h4>შემოგვიერთდით</h4>
					<div class="social">
						<a href="https://www.facebook.com/" target = "_blank"><i class='bx bxl-facebook' ></i></a>
						<a href="https://www.instagram.com/" target = "_blank"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="https://twitter.com/" target = "_blank"><i class='bx bxl-twitter' ></i></a>
						<a href="https://www.linkedin.com/" target = "_blank"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2023 All rights reserved | Made by Giorgi Korganashvili | </p>
		</div>
	</section>
     <!-- footer -->

    <script> 
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }
        
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }
        
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>    

</body>
</html>