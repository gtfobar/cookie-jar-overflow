<?php
    $domains = ["cookies.gtfo.bar:1234", "good.cookies.gtfo.bar:1234"];
    $path = "";
    foreach($domains as $domain) {
        foreach($_COOKIE as $name => $value) {
            setcookie($name, $value, time()-3600, $path, $domain);
        }
    }
?>

<html>
    <script>
        location = "http://evil.cookies.gtfo.bar:1234/clear_cookies.php";
    </script>
    <br>
    <a href="http://cookies.gtfo.bar:1234">Root</a>
<html>
