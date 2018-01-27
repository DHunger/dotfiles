<html>
	<body>
		<div id="error" align="center">
			<h1 id="title">E R R O R!</h1>
			<p id="description">
				<?php
					/*if(!isset($_POST['error'])){
						$error = 0;
					} else {
						$error = $_POST['error'];
					}*/
					
					if ($err_code === "file_not_found"){
						echo("Die angeforderte Seite existiert nicht.");
					} else if ($err_code === "mail_send_error"){
						echo("Fehler beim versenden der E-Mail, bitte erneut versuchen.");
					} else {
						echo("Unbekannter Fehler");
					}

					if(isset($err_info)){
						if (isset($err_page)){
							echo("<br /><br />Bitte den Folgenden Fehlercode an den Webmaster <a href='?page=inc_form&form=webmaster&subject=Fehler+auf+" . str_replace("&", "-", $err_page) . "&content=%0D%0A%0D%0A%0D%0A" . str_replace(" ", "+", $err_info) . "%0D%0A'>senden</a>:<br />");
						} else {
							echo("<br /><br />Bitte den Folgenden Fehlercode an den Webmaster <a href='?page=inc_form&form=webmaster&subject=Fehlerhafter+Link&content=%0D%0A%0D%0A%0D%0A" . str_replace(" ", "+", $err_info) . "%0D%0A'>senden</a>:<br />");
						}
						
						echo($err_info);
					}
				?>
			</p>
			<p id="link">
				<?php
					if(isset($err_page)){
						echo("<a href='index.php?page=" . $err_page . "'>Zur&uuml;ck</a>");
					} else {
						echo("<a href='index.php'>Zur&uuml;ck</a>");
					}
				?>
			</p>
		</div>
	</body>
</html>