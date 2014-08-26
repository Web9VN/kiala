<?php
//ini_set("SMTP", "smtp.strellibeta.com");
//ini_set("sendmail_from", "postmaster@strellibeta.com");

$headers ='From: postmaster@my_domain.com'."\n";
$headers .='Reply-To: postmaster@my_domain.com'."\n";
$headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
$headers .='Content-Transfer-Encoding: 8bit';



try {
    if (mail('le.buu.liem@gmail.com', 'test mail', 'Message of the mail', $headers)){
        echo 'ok';
    } else {
        echo 'erreur';
    }
    echo "Check your email now....<br/>";
} catch (Exception $e) {
    echo $e->getMessage();
}
