<?php
    $domains = ["evil.cookies.gtfo.bar:1234"];
    $path = "";
    foreach($domains as $domain) {
        foreach($_COOKIE as $name => $value) {
            setcookie($name, $value, time()-3600, $path, $domain);
        }
    }
?>

<html>
    <div id="cookies">You cookie jar has been cleared</div>
    <br>
    <a href="http://cookies.gtfo.bar:1234">Root</a>
<html>
