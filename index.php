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
			<a id="visitorInfoBtn">Visitor Info</a>
  			<a id="findUsBtn">Find Us</a>
  			<a id="floorplanBtn">Floorplan</a>
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
        <!-- Visitor Info -->
        <div id="visitorInfo" class="modal">
            <!-- content -->
            <div class="modal-content">
                <span class="close closeVisitorInfo">&times;</span>
                <IMG src="images/RA-Summer-Exhibition-2018-550.jpg" style="margin-left: auto; margin-right: auto;" />
                <h1 style="text-align: center; padding-top: 20px;">Visitor Information</h1>
                <h3>Address:</h3>
                <p>Burlington House, Piccadilly, London W1J 0BD</p>
                <p>6 Burlington Gardens, London W1S 3ET</p>
                <h3>Opening Hours:</h3>
                <p>Daily 10am-6pm</p>
                <p>Friday 10am-10pm</p>
                <h3>Admission Fees:</h3>
                <p>Adults £20.00</p>
                <p>Children £7.50</p>
            </div>
        </div>
        <!-- Find Us -->
        <div id="findUs" class="modal">
            <!-- content -->
            <div class="modal-content">
                <span class="close closeFindUs">&times;</span>
                <h1 style="text-align: center; padding-bottom: 20px;">Find Us</h1>
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.2056732684005!2d-0.14205728506362827!3d51.50944257963544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d66d119133%3A0xf9136ba8e70e4316!2sRoyal+Academy+of+Arts!5e0!3m2!1sen!2sau!4v1540968307021" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <h3 style=" padding-top: 20px;">Address:</h3>
                <p>Burlington House, Piccadilly, London W1J 0BD</p>
                <p>6 Burlington Gardens, London W1S 3ET</p>
                <h3>Getting Here:</h3>
                <h3>By Bus:</h3>
                <p>Our nearest bus stops are served by several routes…</p>
                <p>12, 88, 94, 453, N3 or N15</p>
                <p>Get off at Regent Street / St. James’s –</p>
                <p>stop Y.  6,14, 19, 38, N19, N38 or N97</p>
                <p> Get off at ‘Old Bond Street (Royal Academy)’ – stop L.</p>
                <h3>By tube</h3>
                <p>Our nearest stations are…</p>
                <p>Piccadilly Circus</p>
                <p>Green Park</p>
                <p>Oxford Circus</p>
                <p>Bond Street</p>
            </div>
        </div>
        <!-- Floorplan -->
        <div id="floorplan" class="modal">
            <!-- content -->
            <div class="modal-content">
                <span class="close closefloorplan">&times;</span>
                <h1 style="text-align: center; padding-bottom: 20px;">Explore the Royal Academy of Arts</h1>
                <div class="google-maps">
                    <iframe src="https://map.royalacademy.org.uk/?zoom=14.047497457067173&lon=-0.1399236665142264&lat=51.50951187235754&overlay=&interest=&interestTypes=&floor=2&gid=&location=true&controls=true&popups=true&newwindow=true&menu=true&search=true&topbar=true&showtopbar=true&interestmenu=true&screenType=#" width="600" height="600" frameborder="0" allowfullscreen sandbox="allow-same-origin allow-scripts allow-popups allow-forms"></iframe>
                </div>
            </div>
        </div>
	</main>
	<footer id="footer">
        <a target="_blank" href="https://twitter.com/royalacademy" class="fa fa-twitter-square w3-left-align"></a>
        <a target="_blank" href="https://www.instagram.com/royalacademyarts/" class="fa fa-instagram w3-left-align"></a>
        <a target="_blank" href="https://www.facebook.com/royalacademy" class="fa fa-facebook-official w3-left-align"></a>
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

    // Get the visitor modal
    var visitormodal = document.getElementById('visitorInfo');

    // Get the button that opens the modal
    var btn = document.getElementById("visitorInfoBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeVisitorInfo")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        visitormodal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        visitormodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == visitormodal) {
            visitormodal.style.display = "none";
        }
    }

    // Get the find us modal
    var findusmodal = document.getElementById('findUs');

    // Get the button that opens the modal
    var btn = document.getElementById("findUsBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeFindUs")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        findusmodal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        findusmodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == findusmodal) {
            findusmodal.style.display = "none";
        }
    }

    // Get the floorplan modal
    var floorplanmodal = document.getElementById('floorplan');

    // Get the button that opens the modal
    var btn = document.getElementById("floorplanBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closefloorplan")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        floorplanmodal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        floorplanmodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == floorplanmodal) {
            floorplanmodal.style.display = "none";
        }
    }
</script>
</body>
</html>
