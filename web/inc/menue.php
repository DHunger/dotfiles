<table width="100%" cellpadding="0" cellspacing="0">
    <tr id="title">
        <td>
            <table width="100%">
                <tr>
                    <td><img src="pics/JRK_Logo_bunt_edt2.jpg" width="110" height="111" alt="logo" id="logo" /></td>
                    <td align="center"><font face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular" size="10" color="#FFFFff"><strong>Ortsverein Kr&auml;henwinkel</strong></font></td>
                    <td id="date"><font color="#FFFFFF">Datum der letzten Aktualisierung:<br /><?php echo($date); ?></font></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr id="menue">
        <td>
            <table width="100%">
                <colgroup>
                    <col width="1*" />
                    <col width="1000px" />
                    <col width="1*" />
                </colgroup>
                <td><img src="pics/unbenannt.jpg" height="1" width="1" alt="" /></td>
                <td>
                    <ul id="nav_main">
                    <?php
                    
                    echo('<a href="?page=start">');
                    if($page=="start") {echo('<li class="start_b">Startseite</li>');}
                    else {echo('<li class="start">Startseite</li>');}
                    echo('</a>');

                    echo('<li class="zwnav"><p></p></li>');

                    if(strpos($page, "fotos") !== false) {echo('<li class="fotos_b">Fotos');}
                    else {echo('<li class="fotos">Fotos');}
                    echo('<ul class="dropdown_main">');
                    if(($page=="fotos_2010")){echo('<a href="?page=fotos_2010"><li class="bold">2010</li></a>');}
                    else {echo('<a href="?page=fotos_2010"><li>2010</li></a>');}
                    if(($page=="fotos_2011")){echo('<a href="?page=fotos_2011"><li class="bold">2011</li></a>');}
                    else {echo('<a href="?page=fotos_2011"><li>2011</li></a>');}
                    if(($page=="fotos_2012")){echo('<a href="?page=fotos_2012"><li class="bold">2012</li></a>');}
                    else {echo('<a href="?page=fotos_2012"><li>2012</li></a>');}
                    if(($page=="fotos_2013")){echo('<a href="?page=fotos_2013"><li class="bold">2013</li></a>');}
                    else {echo('<a href="?page=fotos_2013"><li>2013</li></a>');}
                    if(($page=="fotos_2014")){echo('<a href="?page=fotos_2014"><li class="bold">2014</li></a>');}
                    else {echo('<a href="?page=fotos_2014"><li>2014</li></a>');}
                    if(($page=="fotos_2015")){echo('<a href="?page=fotos_2015"><li class="bold">2015</li></a>');}
                    else {echo('<a href="?page=fotos_2015"><li>2015</li></a>');}
                    if(($page=="fotos_2016")){echo('<a href="?page=fotos_2016"><li class="bold">2016</li></a>');}
                    else {echo('<a href="?page=fotos_2016"><li>2016</li></a>');}
                    if(($page=="fotos_2017")){echo('<a href="?page=fotos_2017"><li class="bold">2017</li></a>');}
                    else {echo('<a href="?page=fotos_2017"><li>2017</li></a>');}
                    echo('</ul>');
                    echo('</li>');

                    echo('<li class="zwnav"><p></p></li>');

                    if(strpos($page, "wir") !== false) {echo('<li class="wir_b"><a href=?page=wir>Wir &uuml;ber uns');}
                    else {echo('<li class="wir"><a href=?page=wir>Wir &uuml;ber uns');}
                    echo('<ul class="dropdown_main">');
                    if($page=="wir_geschichte"){echo('<a href="?page=wir_geschichte"><li class="bold">Geschichte</li></a>');}
                    else {echo('<a href="?page=wir_geschichte"><li>Geschichte</li></a>');}
                    if(($page=="wir_stunden")){echo('<a href="?page=wir_stunden"><li class="bold">Gruppenstunden</li></a>');}
                    else {echo('<a href="?page=wir_stunden"><li>Gruppenstunden</li></a>');}
                    if(($page=="wir_leitung")){echo('<a href="?page=wir_leitung"><li class="bold">Gruppenleitungen</li></a>');}
                    else {echo('<a href="?page=wir_leitung"><li>Gruppenleitungen</li></a>');}
                    echo('</ul>');
                    echo('</a></li>');

                    echo('<li class="zwnav"><p></p></li>');

                    echo('<a href="?page=aktuelles_2017">');
                    if($page=="aktuelles_2017") {echo('<li class="aktuelles_b">Aktuelles</li>');}
                    else {echo('<li class="aktuelles">Aktuelles</li>');}
                    echo('</a>');

                    echo('<li class="zwnav"><p></p></li>');

                    echo('<a href="?page=links">');
                    if($page=="links") {echo('<li class="links_b">Links</li>');}
                    else {echo('<li class="links">Links</li>');}
                    echo('</a>');
                    ?>
                    </ul>
                </td>
                <td>
                    <ul id="nav_left">
                    <?php
                        echo('<a href="?page=impressum">');
                        if($page=="impressum") {echo('<li class="impressum_b">Impressum</li>');}
                        else {echo('<li class="impressum">Impressum</li>');}
                        echo('</a>');
                        
                        echo('<li class="zwnav"><p></p></li>');
                        
                        echo('<a href="?page=inc_form">');
                        if($page=="inc_form") {echo('<li class="impressum_b">Kontakt</li>');}
                        else {echo('<li class="impressum">Kontakt</li>');}
                        echo('</a>'); 
                     ?>
                    </ul>
                </td>
            </table>
        </td>
    </tr>
</table>
