<html>
    <head>
        <title>JRK-Kr&auml;henwinkel</title>
        <?php
            if(isset($_GET['page'])){
                if(isset($_GET['spage'])){$fpage = $_GET['page'] . '_' . $_GET['spage'];}
                else{$fpage = $_GET['page'];} 
            } else {
                $fpage = 'start'
            }
            $dates = array();
            $dates['start'] = '22.02.2002';
            $dates['aktuelles'] = '23.02.2002';
            $dates['links'] = '24.02.2002'; 
         ?>
    </head>
    
    <body>
        <?php
            $date = $dates[$fpage];
            include('inc/menue.php');
            include($fpage . '.html'); 
         ?>
    </body>
</html>