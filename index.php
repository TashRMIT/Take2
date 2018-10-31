<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Royal Academy of Arts Summer Exhibition 2018">
<meta name="author" content="Brought to you by Take 2">
<title>Royal Academy of Arts - Summer Exhibition</title>

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">

<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<!-- Custom fonts for this template -->
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- RA Styles -->
	<!--<link rel="stylesheet" href="css/racss.css" />-->
	<link href="css/w3.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/styles.css" />
	

</head>

<body>
	<header>
		<nav class="topnav" id="myTopnav">
  			<a href="index.php"><img id="headerImg" src="images/RA_Art-Fund-logo_news-story.jpg" alt="home button" /></a>
			<a href="#">Visitor Info</a>
  			<a href="#">Find Us</a>
  			<a href="#">Floorplan</a>
  			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			<i class="fa fa-bars"></i>
  			</a>
		</nav>
	</header>
	<main id="mainArea">
		<h1>Summer Exhibition 2018</h1>
		<p>Held without interruption since 1769, the Summer Exhibition is the world's oldest open submission exhibtion, displaying works in a variety of mediums and genres by emerging and established artists. In this 250th year, the exhibition will be the biggest in its history.</p>
		<br />
		<h3>Art lovers can <button href="#" class="searchButton">Browse all artworks</button></h3>
		<br />
		<h3>Or refine your search</h3>
		<div id="searchArea">
			<form class="new_search" id="new_search" action="" accept-charset="UTF-8" method="get">
				<div class='form-inline searchBox'>
					<input name="utf8" type="hidden" value="&#x2713;" />
					<input class="search_form-input filter-search_form-input" placeholder="Search by artist, artwork, medium, catalogue no." type="search" name="search[query]" id="search_query" />
					<button name="button" type="submit" class="searchButton">Search</button>
				</div>
				
				<div class="form-inline">
					<label for="search_size" class="sizeLabel">Size</label>
					<label for="search_type" class="typeLabel">Type</label>
					<label for="search_gallery" class="galleryLabel">Gallery</label>
					<label for="search_price_min" class="minLabel">Price min</label>
					<label for="search_price_max" class="maxLabel">Price max</label>
				</div>
				
				<div class="form-inline">
					<select name="search[size]" id="search_size">
						<option value="Any">Any</option>
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="L">L</option>
						<option value="XL">XL</option>
					</select>

					<select name="search[type]" id="search_type" class="searchFields">
						<option value="All">All</option>
						<option value="Print">Print</option>
						<option value="Painting">Painting</option>
						<option value="Architecture">Architecture</option>
						<option value="Drawing">Drawing</option>
						<option value="Film">Film</option>
						<option value="Photography">Photography</option>
						<option value="Sculpture">Sculpture</option>
						<option value="Other">Other</option>
					</select>

					<select name="search[gallery]" id="search_gallery" class="galleryField">
						<option value="All">All</option>
						<option value="courtyard-and-staircase">Courtyard and Staircase, Vestibule and Sackler Stairs</option>
						<option value="wohl-central-hall">Wohl Central Hall</option>
						<option value="gallery-iii">Gallery III</option>
						<option value="gallery-iv">Gallery IV</option>
						<option value="gallery-v">Gallery V</option>
						<option value="gallery-vi">Gallery VI</option>
						<option value="gallery-vii">Gallery VII</option>
						<option value="gallery-viii">Gallery VIII</option>
						<option value="gallery-ix">Gallery IX</option>
						<option value="lecture-room">Lecture Room</option>
						<option value="north-sackler-gallery">North Sackler Gallery</option>
						<option value="south-sackler-gallery">South Sackler Gallery</option>
						<option value="west-sackler-gallery">West Sackler Gallery</option>
						<option value="mcaulay-gallery">Wohl Entrance Hall and McAulay Gallery</option>
					</select>

					<select name="search[price_min]" id="search_price_min">
						<option value="No min">No min</option>
						<option value="£100">£100</option>
						<option value="£300">£300</option>
						<option value="£500">£500</option>
						<option value="£1,000">£1,000</option>
						<option value="£2,000">£2,000</option>
						<option value="£3,000">£3,000</option>
						<option value="£5,000">£5,000</option>
						<option value="£10,000">£10,000</option>
						<option value="£50,000">£50,000</option>
						<option value="£80,000">£80,000</option>
					</select>	

					<select name="search[price_max]" id="search_price_max">
						<option value="No max">No max</option>
						<option value="£100">£100</option>
						<option value="£300">£300</option>
						<option value="£500">£500</option>
						<option value="£1,000">£1,000</option>
						<option value="£2,000">£2,000</option>
						<option value="£3,000">£3,000</option>
						<option value="£5,000">£5,000</option>
						<option value="£10,000">£10,000</option>
						<option value="£50,000">£50,000</option>
						<option value="£80,000">£80,000</option>
						<option value="£2,000,000">£2,000,000</option>
						<option value="£350,000,000">£350,000,000</option>
					</select>
					<button name="button" type="submit" class="searchButton">Search</button>
				</div>
				<div class="form-inline">
					<input name="search[online_only]" type="hidden" value="0" />
					<input class="icheck" type="checkbox" value="1" name="search[online_only]" id="search_online_only" />
					<label for="search_online_only">Only show me works available for sale online</label>
				</div>
			</form>
		</div>
	</main>
	<footer id="footer">
        <a href="https://twitter.com/RL_Genius" class="fa fa-twitter-square w3-left-align"></a>
        <a href="https://www.instagram.com/rocklegendgenius" class="fa fa-instagram w3-left-align"></a>
        <a href="https://www.facebook.com/TeamCrankyPanda/" class="fa fa-facebook-official w3-left-align"></a>
        <a href="admin-home.php" class="fa fa-lock pull-right"></a>
	</footer>
	
<script>
	function myFunction() {
   		var x = document.getElementById("myTopnav");
   		if (x.className === "topnav") {
       		x.className += " responsive";
   		} else {
       		x.className = "topnav";
   		}
	}
</script>
</body>
</html>
