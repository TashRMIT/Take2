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
	<link href="css/w3.css" rel="stylesheet">
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
		<h3>Art lovers can <a href="#" class="browseButton">Browse all artworks</a></h3>
		<br />
		<h3>Or refine your search</h3>
		<table>
			<form>
				<tr>
					<td colspan="5"><input type="text" class="searchBox" name="nameOfArtwork" placeholder="Explore by artist, artwork or medium" /></td>
					<td><a href="#" class="browseButton">Search</a></td>
				</tr>
			</form>
			<form>
				<tr>
					<td>Size</td>
					<td>Type</td>
					<td>Gallery</td>
					<td>Price Min.</td>
					<td>Price Max.</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select>
							<option>Any</option>
						</select>
					</td>
					<td>
						<select>
							<option>All</option>
						</select>
					</td>
					<td>
						<select>
							<option>All</option>
						</select>
					</td>
					<td>
						<select>
							<option>No Min.</option>
						</select>
					</td>
					<td>
						<select>
							<option>No Max.</option>
						</select>
					</td>
					<td><a href="#" class="browseButton">Search</a></td>
				</tr>
				<tr>
					<td colspan="6"><input type="checkbox" name="saleOnly" /> Only show me works available for sale</td>
				</tr>
			</form>
		</table>
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