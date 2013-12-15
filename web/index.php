<html>
	<title>ReCubed Files</title>

	<font size="6">ReCubed Files</font><br>
	<a href="http://www.minecraftforum.net/topic/2205628-">ReCubed Thread</a><br>
	<a href="http://vazkii.us">Back to vazkii.us</a>
	<br><hr><br>
	
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /> ReCubed by Vazkii is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_GB">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.<br>
	This webpage and ReCubed itself are open source. Contribute to the project on <a href="https://github.com/Vazkii/ReCubed">GitHub</a>!
	<br><hr><br>
	
	<body link="#111111" vlink="#444466" alink="#000099">
	
	<?php

	$file_url = 'https://raw.github.com/Vazkii/ReCubed/master/web/urls.txt';
	$file_contents = file_get_contents($file_url);
	$file_contents_array = array_reverse(explode(PHP_EOL, $file_contents));

	foreach($file_contents_array as $line) {
		$line_props = explode('=', $line);
		$version = $line_props[0];
		$url = $line_props[1];
		
		print("<a href=\"$url\">ReCubed <b>$version</b></a><br>");
	}
	?>
	
</body>
</html>