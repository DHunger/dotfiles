<html>
    <head>
        <title>JRK-Kr&auml;henwinkel</title>
        <?php
            global $page, $err_code, $err_page, $err_info;
            if(isset($_GET['page'])){$page = $_GET['page'];}
            else {$page = 'start';}
            $dates = array();
            
            $dates['start'] = '13.09.2017';
            $dates['fotos_2010'] = '05.01.2017';
            $dates['fotos_2011'] = '05.01.2017';
            $dates['fotos_2012'] = '05.01.2017';
            $dates['fotos_2013'] = '05.01.2017';
            $dates['fotos_2014'] = '05.01.2017';
            $dates['fotos_2015'] = '05.01.2017';
            $dates['fotos_2016'] = '05.01.2017';
            $dates['wir_geschichte'] = '13.09.2017';
            $dates['wir_stunden'] = '05.01.2017';
            $dates['wir_leitung'] = '05.01.2017';
            $dates['aktuelles'] = '18.06.2017';
            $dates['links'] = '05.01.2017';
            $dates['impressum'] = '05.01.2017';
            
            $dates['leitung_petra'] = '06.01.2017';
            $dates['leitung_roni'] = '06.01.2017';
            $dates['leitung_dominik'] = '06.01.2017';
            
            $dates['form'] = '06.01.2017';

	    $dateall = '08.01.2018' 
         ?>
    </head>
    
    <body>
        <link href="styles/style.css" rel="stylesheet" />
        <?php
        $date = $dateall;
        echo "<div id='header'>";
        include('inc/menue.php');
        echo "</div>";
        echo "<div id='main'>";
        $path = str_replace("_", "/", $page);
        if(file_exists($path . ".html")){
            include($path . ".html");
        } elseif(file_exists($path . ".php")) {
            include($path . ".php");
        } else {
            $err_code = "file_not_found";
            $err_info = "Die verlinkte Seite existiert auf diesem Server nicht: " . $page . ".";
            include("inc/error.php");
        }
        if(strpos($path,"fotos")!==false){echo "<br /><a href='#top'>Zum Seitenanfang</a><br />";}
        echo "</div>";
        ?>

	<br />
    </body>
</html>
