<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="generator" content="Adobe GoLive 5" />
		<meta name="description" content="Dies ist der offizielle Internetauftritt des JRK Krähenwinkel" />
		<meta name="keywords" content="jrk, jugendrotkreuz, kraehenwinkel, erste hilfe, rnd, rud, kinderschminken, ssd, crows, squirrels, a-hoernchen, b-hoernchen, stufe 0, stufe 1, stufe 2, stufe 3" />
		<title>Willkommen beim JRK-Krähenwinkel</title>
	</head>

	<body>
		<?php
		$news=1;
		?>
		<p align="center"></p>
		<?php
		if (isset($sent) and $set=1) {
			echo '<div id="mail_feedback" align="center">Email erfolgreich versendet</div>';
		}

		if($news==1){
		echo '<table width="100%">';
		echo '	<tr>';
		echo '		<td class="news_space"></td>';
		echo '		<td id="news">';
	     				include('news.html');
	    echo ' 			</td>';
		echo '		<td class="news_space"></td>';
		echo '	</tr>';
		echo '</table>';
	} else {
		include('wir.html');
	}
	?>
	</body>
</html>
