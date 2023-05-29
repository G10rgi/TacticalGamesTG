<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>TacticalGamesGe</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css"
			integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>

		<link rel="stylesheet" href="{{asset('styles/app.css')}}" />

		<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
	</head>
	<body>
		<header>
			<a href="#" class="logo">TacticalGames</a>
			<div class="bx bx-menu" id="menu-icon"></div>

			<ul class="navbar">
				<li><a href="#home">მთავარი</a></li>
				<div class="gamesDropdown">
					<h3 class="dropdown">თამაშები <i class="lni lni-chevron-down"></i></h3>
					<ul class="gameslist">
						<a href="/game/age-of-mythology"><li>Age of Mythology</li></a>
						<a href="/game/empire-earth"><li>Empire Earth</li></a>
						<a href="/game/command-and-conquer-generals"><li>C&C Generals</li></a>
					</ul>
				</div>
				<li><a href="#contact">კონტაქტი</a></li>
			</ul>
		</header>

		<section class="home" id="home">
			<div class="home-text">
				<h1>TacticalGames</h1>
				<p>
					საუკეთესო თამაშები უფასოდ, <br />
					გაერთეთ ჩვენთან ერთად.
				</p>
			</div>
		</section>

		<section class="games" id="games">
			<div class="title">
				<h2>პოპულარული თამაშები!</h2>
			</div>

			<div class="games-content">
				<a href="/game/age-of-mythology">
					<div class="col-content">
						<img src={{asset("images/AoM.jpg")}} />
					</div>
				</a>

				<a href="/game/empire-earth">
					<div class="col-content">
						<img src={{asset("images/EE_Art_of_Conquest.jpg")}} />
					</div>
				</a>

				<a href="/game/command-and-conquer-generals">
					<div class="col-content">
						<img src={{asset("images/caq.jpg")}} />
					</div>
				</a>
			</div>
		</section>

		<section class="games popular" id="games">
			<div class="title">
				<h2>მალე დაემატება!</h2>
			</div>

			<div class="games-content">
				<div class="col-content">
					<img src={{asset("images/AOEII.jpg")}} />
				</div>

				<div class="col-content">
					<img src={{asset("images/MBWarband.jpg")}} />
				</div>

				<div class="col-content">
					<img src={{asset("images/SCII.jpg")}} />
				</div>
			</div>
		</section>

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
							<a href="https://www.facebook.com/" target="_blank"><i class="bx bxl-facebook"></i></a>
							<a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram-alt"></i></a>
							<a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
							<a href="https://www.linkedin.com/" target="_blank"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="end-text">
				<p>Copyright ©2023 All rights reserved | Made by Giorgi Korganashvili |</p>
			</div>
		</section>

		<script src="{{asset('js/script.js')}}"></script>
	</body>
</html>
