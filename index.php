<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Places</title>
		<link rel="stylesheet" href="_files/css/styles.css" />
	</head>
	<body id="index">
		<div class="page_margins">
			<div class="thumbnail" id="content">
			<?
			//define the path as relative
			$path = "./";
			//using the opendir function
			$dir_handle = @opendir($path) or die("Unable to open $path");
			echo "<h1>In Progress</h1><h2>Places</h2>";
			//running the while loop
			echo "<ul>";
			while ($file = readdir($dir_handle)) 
			{
				 if($file!="." && $file!=".." && $file!=".htaccess" && $file!="index.php" && $file!="index2.php" && $file!="finished")
						echo "<li id='$file'><a href='$file'><img src='http://www.bitpixels.com/getthumbnail?code=58600&url=http://status.agencyrevolution.com/$file/'></a><br />
			<a class='bevel' href='$file'>$file</a></li>";
			}
			//closing the directory
			closedir($dir_handle);
			?>
			</ul>
			<div class="clearfix">&nbsp;</div>
			<?
			//define the path as relative
			$path = "./finished/";
			//using the opendir function
			$dir_handle = @opendir($path) or die("Unable to open $path");
			echo "<h1 id='finished'>Live Sites</h1><div class='clearfix'>&nbsp;</div>";
			//running the while loop
			echo "<ul id='extra'>";
			while ($file = readdir($dir_handle)) 
			{
				 if($file!="." && $file!=".." && $file!=".htaccess" && $file!="index.php")
						echo "<li id='$file'><a href='./finished/$file'><img src='http://www.bitpixels.com/getthumbnail?code=58600&url=http://status.agencyrevolution.com/finished/$file/'></a><br />
			<a class='bevel' href='./finished/$file'>$file</a></li>";
			}
			//closing the directory
			closedir($dir_handle);
			?>
			</ul>
			<div id="footer">
			<p>Send an <a href="mailto: info@domain.tld">email</a> or follow us on <a	 class="tweet ex" href="http://www.twitter.com/username">twitter</a>.</p>
			</div>
		</div>
		</div>
		<a id="backlink" href='http://www.bitpixels.com/'>Website thumbnails provided by BitPixels</a>
		<script>
			$(function(){
				$('a.ex').click(function(){
					window.open(this.href);
					return false;
				});
				$('div.page_margins').fadeIn('slow');
			});
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</body>
</html>