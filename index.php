
<?php
	//generate a random text for image
	session_start();
	
	if(!isset($_POST['securetext'])){
		$_SESSION['secure'] = rand('1000', '9999');
	}else{
		if(strlen($_POST['securetext']) == 4 ){
					
			
			if($_SESSION['secure'] == $_POST['securetext']){
				echo "A match <br>";
			}else{
				echo "Did Not match Try Again <br>";
				$_SESSION['secure'] = rand('1000', '9999');
			}
		}else{
			echo "Please enter only 4 digits from an image.<br>";
		}
	}
?>
<html>
<head>
	<title>Captcha system in php - HackerRahul</title>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3641343196914554",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<hr>
<img src="generate.php" alt="Captcha image">
<br>
<form action="" method="post">
	Type the no. in image:
	<input type="text" name="securetext">
	<input type="submit" name="submit">
</form>
<hr>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<center>
<b>A <a href="http://hackerrahul.com"> HackerRahul</a> Product</b>
</center>
</body>
<html>
