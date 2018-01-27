<html>
    <head>
        <?php
            global $form, $mails, $mail, $content, $subject;
            if(isset($_GET['form'])){$form=$_GET['form'];}
            elseif(isset($_POST['form'])){$form=$_POST['form'];}
            else{$form=NULL;}

            if(isset($_GET['content'])){$content=$_GET['content'];}
            elseif(isset($_POST['content'])){$content=$_POST['content'];}
            else{$content=NULL;}

            if(isset($_GET['subject'])){$subject=$_GET['subject'];}
            elseif(isset($_POST['subject'])){$subject=$_POST['subject'];}
            else{$subject=NULL;}
            
            $mails = array();
            $mails['petra']="petra.hunger@jrk-kraehenwinkel.de";
            $mails['dominik']="dominik.hunger@jrk-kraehenwinkel.de";
            $mails['webmaster']="webmaster@jrk-kraehenwinkel.de";
            
            $names = array();
            $names['petra']='Petra Hunger';
            $names['dominik']='Dominik Hunger';
            $names['webmaster']='Webmaster';
            
            if(isset($form)){$mail=$mails[$form];}
             
         ?>
    </head>
    
    <body>
        <form method="post" action="?page=inc_form" id="contact">
            <?php  
                if(!isset($form) and !isset($_POST['send'])){
                    echo('Empf&auml;nger:');
                    echo('<table><tr><td></td></tr></table>');
                    echo('<input type="radio" name="form" value="petra" />Petra Hunger</td><td>');
                    echo('<input type="radio" name="form" value="dominik" />Dominik Hunger</td><td>');
                    echo('<input type="radio" name="form" value="webmaster" checked="checked" />Webmaster</td><td>');
                    echo('</td></tr></table>');
                    echo('<input type="submit" class="preSend" value="Email verfassen" />');    
                } elseif(isset($_POST['send']) and $_POST['send']==1){
                    global $msg;

                    if(isset($_POST['reply']) and $_POST['reply'] != ""){$msg=$_POST['content'] . "\n\n\nAntwort an: " . $_POST['reply'];}
                    else{$msg=$_POST['content'];}

                    $headers = 'Content-Type: text/plain; charset=UTF-8' . "\r\n" . 'From: <kontaktformular@jrk-kraehenwinkel.de>' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                    /*$msg = str_replace("ä", "\U+00e4", str_replace("ö", "&ouml;", str_replace("ü", "&uuml;", str_replace("Ä", "&Auml;", str_replace("Ö", "&Ouml;", str_replace("Ü", "&Uuml;", str_replace("ß", "&szlig;", $msg)))))));*/

                    try{
                        if(@mail($mails[$_POST['to']],$_POST['subject'],$msg,$headers)){
                            global $sent;
                            $sent = 1;
                            include("start.php");
                        } else {
                            $err_info = error_get_last()["message"];
                            $err_code = "mail_send_error";
                            $err_page = "inc_form&form=" . $_POST['to'];
                            include("inc/error.php");
                        }
                    } catch(Exception $e){
                        $err_info = error_get_last()["message"];
                        $err_code = "mail_send_error";
                        $err_page = "inc_form&form=" . $_POST['to'];
                        include("inc/error.php");
                    }
//                    print_r(mail($mails[$_POST['to']],$_POST['subject'],$msg));
                } else{
                    echo('<table>');
                    echo('<tr><td>Empf&auml;nger:</td><td>' . $names[$form] . /*' (' . $mails[$form] . ')*/'</td></tr>');
                    if (isset($subject)){
                        echo('<tr><td>Betreff:</td><td><input type="text" name="subject" value="' . $subject . '" /></td></tr>');
                    } else {
                        echo('<tr><td>Betreff:</td><td><input type="text" name="subject" /></td></tr>');
                    }
                    
                    if (isset($content)){
                        echo('<tr><td>Inhalt:</td><td><textarea name="content" rows="20" cols="100" >' . $content . '</textarea></td></tr>');
                    } else {
                        echo('<tr><td>Inhalt:</td><td><textarea name="content" rows="20" cols="100" ></textarea></td></tr>');
                    }
                    echo('<tr><td>Antwortadresse (optional):</td><td><input type="email" name="reply" />');
                    echo('</table>');
                    echo('<input type="submit" class="send" value="Abschicken" /><span id="zwnav">&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="reset" class="reset" value="Zur&uuml;cksetzen"/><input type="hidden" name="send" value="1" /><input type="hidden" name="to" value="' . $form .'" />');
                }    
            ?>
            <br />
        </form>
    </body>
</html>